<?php
spl_autoload_register(function($className) {
    require_once('models/'.$className.'.php');
});

$dbc = new Database();

if(!empty($_GET['action'])): 
    switch($_GET['action']): 
        case 'homepage':
            include ('controllers/homepageController.php');
            break;
        case 'auth':
            include ('controllers/authController.php');
            break;
        default:
            include ('controllers/homepageController.php');
            break;
    endswitch;
endif;