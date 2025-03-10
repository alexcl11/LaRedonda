<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['currentUser'])){
    header('Location: /inicio_sesion');
    exit();
}



require_once 'views/favoritos.view.php';