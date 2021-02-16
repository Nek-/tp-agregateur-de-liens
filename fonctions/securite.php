<?php declare(strict_types=1);

function securite(): void
{
    session_start();
    if (!isset($_SESSION['mot_de_passe']) || $_SESSION['mot_de_passe'] !== MOT_DE_PASSE) {
        header('Location: /login');
        exit;
    }
}