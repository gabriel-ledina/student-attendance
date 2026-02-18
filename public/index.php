<?php
// chemin absolu de la racine du dossier dans le dossier public
const PUBLIC_PATH = __DIR__;
const APP_PATH = PUBLIC_PATH . '/..';
const VIEWS_PATH = APP_PATH . '/views';
include '../db/queries.php';

$title = '';


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        $title = 'Page d’accueil';
        include VIEWS_PATH.'/home.php';
        break;
    case '/presences':
        $title = 'Prendre les présences';
        include VIEWS_PATH.'/views/attendances/index.php';
        break;
    case '/etudiants':
        $title = 'Tous les étudiants';
        include VIEWS_PATH.'/views/students/index.php';
        break;
    default:
        $title = '404';
        include VIEWS_PATH.'/views/404.php';
}
