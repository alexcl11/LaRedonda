<?php
// if(!isset($_SESSION['currentUser'])){
//     header('Location: '.BASE_PATH);
// }
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'controllers/Core/buscarJugador.php';

$id=$_GET['id'];
$player = searchPlayersByID($id)['players'][0];
$positionClass = str_replace(' ', '-', $player['strPosition']); 

require_once 'models/Favoritos.php';


$usuarioFavoritos = new Favoritos();
$favsUser = $usuarioFavoritos->getUserFavourites($_SESSION['currentUser']['id']);


$favoritosButton = 'bi-heart text-danger';


if ($favsUser) {
    
    foreach ($favsUser as $user) {
        if ($_GET['id'] == $user['id_favorito']) {
            $favoritosButton = 'bi-heart-fill text-danger'; 
            break; 
        }
    }
}


require_once 'views/jugador.view.php';