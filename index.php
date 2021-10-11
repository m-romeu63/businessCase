<?php

if(!empty($_GET['action'])): 
    switch($_GET['action']): 
        case 'homepage':
            include ('controllers/homepageController.php');
            break;
    endswitch;
endif;