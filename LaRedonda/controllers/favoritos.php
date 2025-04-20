<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'models/Favoritos.php';

if(!isset($_SESSION['currentUser'])){
    header('Location: /inicio_sesion');
    exit();
}
$usuarioFavoritos = new Favoritos();
$userFavs = $usuarioFavoritos->getUserFavourites($_SESSION['currentUser']['id']);

if($userFavs){
    $teams = [];
    $players = [];
    $competitions = [];
    foreach($userFavs as $userFav){
        if($userFav['tipo_favorito']==='equipo'){
            $teams[] = [
                'name' => $userFav['nombre_favorito'],
                'img' => $userFav['img_favorito']
            ];
        }
           
        if($userFav['tipo_favorito']==='jugador'){
            $players[] = [
                'name' => $userFav['nombre_favorito'],
                'img' => $userFav['img_favorito']
            ];
        }
            
        if($userFav['tipo_favorito']==='competicion'){
            $competitions[] = [
                'id' => $userFav['id_favorito'],
                'name' => $userFav['nombre_favorito'],
                'img' => $userFav['img_favorito']
            ];
        }
           
    }
   
    
}

require_once 'views/favoritos.view.php';