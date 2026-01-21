<?php
require_once __DIR__.'/config.php';

session_start();
define('_ROOTPATH_', __DIR__);
define('_TEMPLATEPATH_', __DIR__.'/templates');

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use App\Controller\Controller;
// Nous avons besoin de cette classe pour verifier si l'utilisateur est connecté
use App\Entity\User;


$controller = new Controller();
$controller->route();


?>