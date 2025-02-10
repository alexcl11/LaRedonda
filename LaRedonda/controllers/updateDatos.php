<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Database.php';
require_once 'controllers/functions.php';

if(isset($_POST['newEmail'])){
    $newEmail = $_POST['newEmail'];
       
    $user = Database::getUser($newEmail);
    if(!$user || $newEmail == $_SESSION['currentUser']['email']){
        $update = Database::updateUserEmail($_SESSION['currentUser']['id'], $newEmail);
        $_SESSION['currentUser']['email'] = $newEmail;
        $_SESSION['currentUser']['existNewEmail'] = false;
    } else {
        $_SESSION['currentUser']['existNewEmail'] = true;
        $_SESSION['currentUser']['invalidEmail'] = $newEmail;
    }
    
}
if(isset($_POST['newName'])){
    $newName = $_POST['newName'];
    $update = Database::updateUserName($_SESSION['currentUser']['id'], $newName);
    $_SESSION['currentUser']['name'] = $newName;
}
header("Location: /perfil");
