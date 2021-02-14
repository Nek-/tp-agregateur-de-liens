<?php declare(strict_types=1);

$erreur = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['lien']) && isset($_POST['description']) && isset($_POST['titre'])) {
        $url = parse_url($_POST['lien']);
        if ($url !== false) {
            enregistrerNouveauLien([
                'titre' => $_POST['titre'],
                'lien' => $_POST['lien'],
                'description' => $_POST['description'],
            ]);
            header('Location: /admin');
            exit;
        }
        $erreur = 'Le lien n\'est pas valide';
    } else {
        $erreur = 'Tous les champs sont obligatoires !';
    }
}

afficher('formulaire', ['erreur' => $erreur]);