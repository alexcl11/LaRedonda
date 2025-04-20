<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Usuario.php';
require_once 'controllers/Core/functions.php';

if(isset($_POST['newEmail'])){
    $newEmail = $_POST['newEmail'];
    $usuarioModel = new Usuario();
    $user = $usuarioModel->getUser($newEmail);
    if(!$user || $newEmail == $_SESSION['currentUser']['email']){
        $update = $usuarioModel->updateUserEmail($_SESSION['currentUser']['id'], $newEmail);
        $_SESSION['currentUser']['email'] = $newEmail;
        $_SESSION['currentUser']['existNewEmail'] = false;
        $_SESSION['currentUser']['invalidEmail'] = '';
    } else {
        $_SESSION['currentUser']['existNewEmail'] = true;
        $_SESSION['currentUser']['invalidEmail'] = $newEmail;
    }
    
}
if(isset($_POST['newName'])){
    $newName = $_POST['newName'];
    $update = $usuarioModel->updateUserName($_SESSION['currentUser']['id'], $newName);
    $_SESSION['currentUser']['name'] = $newName;
}
header("Location: /perfil");
