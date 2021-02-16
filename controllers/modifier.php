<?php declare(strict_types=1);

$erreur = null;
$indice = $_GET['lien'] ?? null;
$liens = getLiens();
if (!isset($liens[$indice])) {
    afficher('erreur', ['message' => 'Le lien demandé n\'existe pas']);
    exit; // Toujours penser à s'arrêter sinon PHP continue !
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($indice !== null && isset($_POST['lien']) && isset($_POST['description']) && isset($_POST['titre'])) {
        $url = parse_url($_POST['lien']);
        if ($url !== false) {
            enregistrerLienExistant(
                // Je cast l'indice car ce qui vient de $_GET est une chaîne de caractères
                (int) $indice,
                [
                    'titre' => $_POST['titre'],
                    'lien' => $_POST['lien'],
                    'description' => $_POST['description'],
                ]
            );
            header('Location: /admin');
            exit;
        }
        $erreur = 'Le lien n\'est pas valide';
    } else {
        $erreur = 'Tous les champs sont obligatoires !';
    }
}

$lien = $liens[$indice];

afficher('formulaire', [
    'erreur' => $erreur,
    'indice' => $indice,
    'titre' => $lien['titre'],
    'description' => $lien['description'],
    'lien' => $lien['lien'],
]);