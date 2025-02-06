<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Database.php';

if(isset($_POST['newEmail'])){
    $newEmail = $_POST['newEmail'];
    $user = Database::getUser($newEmail);
    if(!$user){
        $update = Database::updateUserEmail($_SESSION['currentUser']['id'], $newEmail);
        $_SESSION['currentUser']['email'] = $newEmail;
    } else {
        $_SESSION['validEmail'] = 'Este email ya existe';
    }
    header("Location: /perfil");
}
if(isset($_POST['name'])){
    $newName = $_POST['newName'];
}

