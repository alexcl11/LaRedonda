<?php

function searchPlayersByName($name){
    $name = urlencode($name); // Asegúrate de codificar el nombre
    $url = "https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=$name";
    $response = file_get_contents($url);
    $data = json_decode($response, true); 
    return $data;    
}

function searchPlayersByID($id){
    $url = "https://www.thesportsdb.com/api/v1/json/3/lookupplayer.php?id=". $id;
    $response = file_get_contents($url);
    $data = json_decode($response, true); 
    return $data;    
}

function searchPlayerFormerClubs($id){
    $url = "https://www.thesportsdb.com/api/v1/json/3/lookupformerteams.php?id=".$id;
    $response = file_get_contents($url);
    $data = json_decode($response);
    return $data;
}

function featuredPlayers($players){
    $featuredPlayers = [];
    foreach($players as $player){
        $url = "https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=" . urlencode($player);
        $response = @file_get_contents($url); // El @ oculta el warning si falla la petición
        $data = $response ? json_decode($response, true) : null;
        if ($data && isset($data['player'][0])) {
            array_push($featuredPlayers, $data['player'][0]);
        }
    }
    return $featuredPlayers;
}