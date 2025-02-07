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
        $_SESSION['currentUser']['existNewEmail'] = true;
    } else {
        $_SESSION['currentUser']['existNewEmail'] = false;
        $_SESSION['currentUser']['invalidEmail'] = $newEmail;
    }
    
}
if(isset($_POST['newName'])){
    $newName = $_POST['newName'];
    $update = Database::updateUserName($_SESSION['currentUser']['id'], $newName);
    $_SESSION['currentUser']['name'] = $newName;
}
header("Location: /perfil");
