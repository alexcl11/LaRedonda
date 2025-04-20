<?php
header("Content-Type: application/json"); // ⚡ Forzar respuesta JSON

require_once '../../models/Favoritos.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_user = $_POST['id_user'];
    $id_favourite = $_POST['id_favourite'];
    $nombre_favorito = $_POST['nombre_favorito'];
    $tipo_favorito = $_POST['tipo_favorito'];
    $img_favorito = $_POST['img_favorito'];

    $userFavourite = new Favoritos();
    $result = $userFavourite->insertFavourite($id_favourite, $nombre_favorito, $tipo_favorito, $img_favorito, $id_user);

    if ($result) {
        echo json_encode(["message" => "Favorito agregado con éxito"]);
    } else {
        echo json_encode(["message" => "Error al agregar favorito"]);
    }
    exit;
}
echo json_encode(["error" => "Método no permitido"]);
exit;
