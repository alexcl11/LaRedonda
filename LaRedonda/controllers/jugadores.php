<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Database.php';
require_once 'controllers/Core/buscarJugador.php';

if(!isset($_SESSION['currentUser'])){
    header('Location: /inicio_sesion');
    exit();
}

$players = ['Julian Alvarez','Leo Messi', 'Cristiano Ronaldo', 'Raphinha'];
$featuredPlayers = featuredPlayers($players);

if(isset($_POST['name'])){
   $name = $_POST['name'];
   $data = searchPlayersByName($name);
}

require_once 'views/jugadores.view.php';