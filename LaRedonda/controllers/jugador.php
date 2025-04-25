<?php
// if(!isset($_SESSION['currentUser'])){
//     header('Location: '.BASE_PATH);
// }
require_once 'controllers/Core/buscarJugador.php';

$id=$_GET['id'];
$player = searchPlayersByID($id)['players'][0];
$positionClass = str_replace(' ', '-', $player['strPosition']); // Ej. "Centre-Back"

require_once 'views/jugador.view.php';