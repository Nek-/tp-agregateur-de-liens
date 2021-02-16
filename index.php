<?php declare(strict_types=1);

const FICHIER_LIENS = __DIR__ . '/liens.json';
const MOT_DE_PASSE = 'superpass';

require_once "fonctions/template.php";
require_once "fonctions/securite.php";
require_once "fonctions/model.php";


switch ($_SERVER['PATH_INFO']) {
    case '':
        require_once 'controllers/page_accueil.php';
        break;
    case '/admin':
        securite();
        require_once 'controllers/admin_liste.php';
        break;
    case '/login':
        require_once 'controllers/login.php';
        break;
    case '/admin/nouveau-lien':
        securite();
        require_once 'controllers/nouveau.php';
        break;
    case '/admin/supprimer-lien':
        securite();
        require_once 'controllers/supprimer.php';
        break;
    case '/admin/modifier-lien':
        securite();
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