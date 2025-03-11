<?php
header("Content-Type: application/json"); // ⚡ Forzar respuesta JSON
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../models/Database.php';

header("Content-Type: application/json"); // Asegura que la respuesta es JSON
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_user = $_POST['id_user'];
    $id_favourite = $_POST['id_favourite'];
    $nombre_favorito = $_POST['nombre_favorito'];
    $tipo_favorito = $_POST['tipo_favorito'];

    if (Database::insertFavourite($id_favourite, $nombre_favorito, $tipo_favorito, $id_user)) {
        echo json_encode(["message" => "Favorito agregado con éxito"]);
    } else {
        echo json_encode(["message" => "Error al agregar favorito"]);
    }
}
?>