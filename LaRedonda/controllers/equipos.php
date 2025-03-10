<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Database.php';

$favsUser = Database::getUserFavourites($_SESSION['currentUser']['id']);

if($favsUser){
    foreach($favsUser as $user){
        if($_GET['t']===$user['nombre_favorito']){
            $favoritosButton = 'bi-heart-fill';
            break;
        } else 
        $favoritosButton = 'bi-heart';
    }
}



require_once 'views/equipo.view.php';