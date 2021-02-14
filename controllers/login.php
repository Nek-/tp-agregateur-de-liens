<?php declare(strict_types=1);

$erreur = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] === MOT_DE_PASSE) {
        session_start();
        $_SESSION['mot_de_passe'] = MOT_DE_PASSE;
        header('Location: /admin');
        exit;
    }

    $erreur = 'Mauvais mot de passe';
}

afficher('login', ['erreur' => $erreur]);