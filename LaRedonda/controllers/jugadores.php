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

$players = ['Leo Messi', 'Cristiano Ronaldo', 'Raphinha', 'Lewandowski', 'Vinicius Júnior', 'Mbappe', 'Antoine Griezmann'];
$featuredPlayers = featuredPlayers($players);

if(isset($_POST['name'])){
   $name = $_POST['name'];
   $data = searchPlayers($name);
}

require_once 'views/jugadores.view.php';