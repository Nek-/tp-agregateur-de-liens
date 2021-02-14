<?php declare(strict_types=1);

const FICHIER_LIENS = __DIR__ . '/liens.json';
const MOT_DE_PASSE = 'superpass';

function afficher(string $nomDuTemplate, array $variables)
{
    extract($variables);
    ob_start();
    require_once __DIR__ . '/templates/' . $nomDuTemplate . '.php';
    $contenu = ob_get_contents();
    ob_end_clean();

    require_once __DIR__ . '/templates/layout.php';
}

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

function securite(): void
{
    session_start();
    if (!isset($_SESSION['mot_de_passe']) || $_SESSION['mot_de_passe'] !== MOT_DE_PASSE) {
        header('Location: /login');
        exit;
    }
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require_once 'controllers/page_accueil.php';
        break;
    case '/admin':
        require_once 'controllers/admin_liste.php';
        break;
    case '/login':
        require_once 'controllers/login.php';
        break;
    case '/admin/nouveau-lien':
        require_once 'controllers/nouveau.php';
        break;
    case '/admin/supprimer-lien':
        require_once 'controllers/supprimer.php';
        break;
    case '/admin/modifier-lien':
        require_once 'controllers/modifier.php';
        break;
    case '/logout':
        session_start();
        unset($_SESSION['mot_de_passe']);
        header('Location: /');
        break;
    default:
        http_response_code(404);
        echo "Erreur 404: la page n'existe pas";
}