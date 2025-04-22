<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use App\Repository\ProduitRepository;

class BotController extends AbstractController
{
    private HttpClientInterface $client;
    private string $apiKey;
    private ?LoggerInterface $logger;

    public function __construct(
        HttpClientInterface $client, 
        string $apiKey,         // Notez le $ devant apiKey
        ?LoggerInterface $logger = null
    ) {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->logger = $logger;
    }

    #[Route('/admin/chatbot', name: 'admin_chatbot', methods: ['POST'])]
public function handleChatbotRequest(Request $request, ProduitRepository $produitRepository): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $message = $data['message'] ?? '';

    if (empty($message)) {
        return new JsonResponse(['response' => "Veuillez entrer une question valide."]);
    }

    try {
        // 1. Vérification dans la base de données
        $produits = $produitRepository->createQueryBuilder('p')
            ->where('LOWER(p.nomProduit) LIKE LOWER(:query)')
            ->setParameter('query', '%'.$message.'%')
            ->getQuery()
            ->getResult();

        if (count($produits) > 0) {
            $response = "Produits trouvés:\n";
            foreach ($produits as $produit) {
                $response .= sprintf(
                    "- %s (Catégorie: %s, Prix: %.2f €, Stock: %d)\n",
                    $produit->getNomProduit(),
                    $produit->getCategorie(),
                    $produit->getPrix(),
                    $produit->getStock()
                );
            }
            return new JsonResponse(['response' => $response]);
        }

        // 2. Appel à l'API Hugging Face
        $apiResponse = $this->client->request('POST', 'https://api-inference.huggingface.co/models/mistralai/Mixtral-8x7B-Instruct-v0.1', [
            'headers' => [
                'Authorization' => 'Bearer '.$this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => "Vous êtes un assistant pour une boutique. Répondez à cette question sur nos produits: ".$message,
                'parameters' => [
                    'max_new_tokens' => 200,
                    'temperature' => 0.7
                ]
            ],
            'timeout' => 30
        ]);

        $content = $apiResponse->toArray();
        $responseText = $content[0]['generated_text'] ?? "Je n'ai pas pu obtenir de réponse.";

        return new JsonResponse(['response' => $responseText]);

    } catch (\Exception $e) {
        $this->logger?->error('Chatbot error: '.$e->getMessage());
        return new JsonResponse(
            ['response' => "Désolé, le chatbot est temporairement indisponible."],
            JsonResponse::HTTP_INTERNAL_SERVER_ERROR
        );
    }
}
}