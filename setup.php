<?php
$logosDir = __DIR__.'/public/uploads/logos';
$produitsDir = __DIR__.'/public/uploads/produits';

// Création des dossiers s'ils n'existent pas
if (!file_exists($logosDir)) {
    mkdir($logosDir, 0777, true);
}
if (!file_exists($produitsDir)) {
    mkdir($produitsDir, 0777, true);
}

// Donner les permissions (fonctionne sous Windows et Linux)
chmod($logosDir, 0777);
chmod($produitsDir, 0777);

echo "Configuration des dossiers terminée!\n";