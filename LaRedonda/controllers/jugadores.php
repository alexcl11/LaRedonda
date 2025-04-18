<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Database.php';

if(!isset($_SESSION['currentUser'])){
    header('Location: /inicio_sesion');
    exit();
}

require_once 'views/jugadores.view.php';