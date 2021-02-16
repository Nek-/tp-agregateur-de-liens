<?php declare(strict_types=1);

$indice = $_GET['lien'] ?? null;
supprimerLien((int) $indice);
header('Location: /admin');
exit;