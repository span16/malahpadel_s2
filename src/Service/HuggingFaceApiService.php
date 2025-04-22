<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Filesystem\Filesystem;

class HuggingFaceService
{
    private string $apiToken;
    private string $textToImageApiUrl = 'https://api-inference.huggingface.co/models/stabilityai/stable-diffusion-2-1';
    private Filesystem $filesystem;
    private string $imageDir;

    public function __construct(string $imageDir, string $apiToken)
    {
        $this->apiToken = $apiToken;
        $this->filesystem = new Filesystem();
        $this->imageDir = $imageDir;
    }

    public function generateImage(string $prompt, string $productName): ?string
    {
        try {
            $safeFilename = preg_replace('/[^a-z0-9_]/', '_', strtolower($productName));
            $uniqueFilename = sprintf('product_%s_%s.png', $safeFilename, uniqid());
            $outputFile = $this->imageDir . '/' . $uniqueFilename;
    
            $payload = ['inputs' => $prompt];
    
            $client = HttpClient::create();
            $response = $client->request('POST', $this->textToImageApiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken,
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
            ]);
    
            if ($response->getStatusCode() === 200) {
                $this->filesystem->dumpFile($outputFile, $response->getContent());
                return $uniqueFilename;
            } else {
                throw new \Exception('Image generation failed with status code: ' . $response->getStatusCode());
            }
        } catch (\Exception $e) {
            return null;
        }
    }
}