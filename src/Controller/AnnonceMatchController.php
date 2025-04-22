<?php
namespace App\Controller;

use App\Entity\AnnonceMatch;
use App\Repository\AnnonceMatchRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/annonce')]
class AnnonceMatchController extends AbstractController
{
    // Index Route (Display all annonces)
    #[Route('/', name: 'app_annonce_match_index', methods: ['GET'])]
    public function index(AnnonceMatchRepository $annonceMatchRepository): Response
    {
        $annonces = $annonceMatchRepository->findAll();
        
        // Debug information
        $debugInfo = [
            'total_annonces' => count($annonces),
            'annonces' => []
        ];
        
        foreach ($annonces as $annonce) {
            $debugInfo['annonces'][] = [
                'id' => $annonce->getAnnonceId(),
                'titre' => $annonce->getTitre(),
                'user_id' => $annonce->getUser() ? $annonce->getUser()->getId() : null,
                'user_email' => $annonce->getUser() ? $annonce->getUser()->getEmail() : null
            ];
        }

        return $this->render('annonce_match/index.html.twig', [
            'annonce_matches' => $annonces,
            'debug_info' => $debugInfo,
            'is_logged_in' => $this->getUser() !== null
        ]);
    }

    // New Annonce Route
    #[Route('/new', name: 'app_annonce_match_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour créer une annonce.');
            return $this->redirectToRoute('app_login');
        }

        $annonceMatch = new AnnonceMatch();
        $annonceMatch->setUser($user);

        $form = $this->createFormBuilder($annonceMatch)
            ->add('titre')
            ->add('dateHeure')
            ->add('lieu')
            ->add('joueursRecherches')
            ->add('niveau')
            ->add('description')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($annonceMatch);
            $entityManager->flush();

            $this->addFlash('success', 'Votre annonce a été créée avec succès.');
            return $this->redirectToRoute('app_annonce_match_index');
        }

        return $this->render('annonce_match/new.html.twig', [
            'annonce_match' => $annonceMatch,
            'form' => $form->createView(),
        ]);
    }

    // Show Annonce Route
    #[Route('/{annonceId}', name: 'app_annonce_match_show', methods: ['GET'])]
    public function show(int $annonceId, EntityManagerInterface $entityManager): Response
    {
        $annonceMatch = $entityManager->getRepository(AnnonceMatch::class)->find($annonceId);
        
        if (!$annonceMatch) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }

        return $this->render('annonce_match/show.html.twig', [
            'annonce_match' => $annonceMatch,
            'is_logged_in' => $this->getUser() !== null
        ]);
    }

    // Edit Annonce Route
    #[Route('/{annonceId}/edit', name: 'app_annonce_match_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $annonceId, EntityManagerInterface $entityManager): Response
    {
        $annonceMatch = $entityManager->getRepository(AnnonceMatch::class)->find($annonceId);
        
        if (!$annonceMatch) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }

        // Check if the current user is the owner of the announcement
        if ($this->getUser() !== $annonceMatch->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette annonce.');
        }

        $form = $this->createFormBuilder($annonceMatch)
            ->add('titre')
            ->add('dateHeure')
            ->add('lieu')
            ->add('joueursRecherches')
            ->add('niveau')
            ->add('description')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Annonce modifiée avec succès.');

            return $this->redirectToRoute('app_annonce_match_show', [
                'annonceId' => $annonceMatch->getAnnonceId()
            ]);
        }

        return $this->render('annonce_match/edit.html.twig', [
            'annonce_match' => $annonceMatch,
            'form' => $form->createView(),
        ]);
    }

    // Delete Annonce Route
    #[Route('/{annonceId}', name: 'app_annonce_match_delete', methods: ['POST'])]
    public function delete(Request $request, int $annonceId, EntityManagerInterface $entityManager): Response
    {
        $annonceMatch = $entityManager->getRepository(AnnonceMatch::class)->find($annonceId);
        
        if (!$annonceMatch) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }

        if ($this->isCsrfTokenValid('delete' . $annonceMatch->getAnnonceId(), $request->request->get('_token'))) {
            $entityManager->remove($annonceMatch);
            $entityManager->flush();
            $this->addFlash('success', 'Annonce supprimée avec succès.');
        }

        return $this->redirectToRoute('app_annonce_match_index');
    }
}
