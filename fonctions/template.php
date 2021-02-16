<?php declare(strict_types=1);

function afficher(string $nomDuTemplate, array $variables)
{
    extract($variables);
    ob_start();
    require_once __DIR__ . '/../templates/' . $nomDuTemplate . '.php';
    $contenu = ob_get_contents();
    ob_end_clean();

    require_once __DIR__ . '/../templates/layout.php';
}