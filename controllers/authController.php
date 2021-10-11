<?php
session_start();
$errMsg = '';

if(!empty($_POST['connect'])):
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)):
        $errMsg = 'Les identifiants sont incorrects.';
    endif;

    if(empty($_POST['password'])):
        $errMsg = 'Les identifiants sont incorrects.';
    endif;
endif;

if (empty($errMsg) && !empty($_POST['connect'])):
    $_SESSION['user'] = $_POST['email'];
    header('Location:index.php?action=homepage');
endif;

if (empty($errMsg) && !empty($_POST['cookie'])):
    setcookie('memo', $_POST['email'], time()+360000);
endif;

include('views/auth.php');