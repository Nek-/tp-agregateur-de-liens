<?php declare(strict_types=1);


function getLiens(): array
{
    if (!file_exists(FICHIER_LIENS)) {
        return [];
    }

    $liens = file_get_contents(FICHIER_LIENS);
    if (empty($liens)) {
        return [];
    }

    return json_decode($liens, true, 512, JSON_THROW_ON_ERROR);
}

function enregistrerNouveauLien(array $lien): void
{
    $liens = getLiens();
    $liens[] = $lien;
    file_put_contents(FICHIER_LIENS, json_encode($liens, JSON_THROW_ON_ERROR));
}

function enregistrerLienExistant(int $indice, array $lien): void
{
    $liens = getLiens();
    $liens[$indice] = $lien;
    file_put_contents(FICHIER_LIENS, json_encode($liens, JSON_THROW_ON_ERROR));
}

function supprimerLien(int $indice): void
{
    $liens = getLiens();
    unset($liens[$indice]);
    file_put_contents(FICHIER_LIENS, json_encode($liens, JSON_THROW_ON_ERROR));
}