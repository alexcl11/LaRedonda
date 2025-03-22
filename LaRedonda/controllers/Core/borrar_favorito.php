<?php
header("Content-Type: application/json"); // ⚡ Forzar respuesta JSON


require_once '../../models/Database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_user = $_POST['id_user'] ?? null;
    $id_favourite = $_POST['id_favourite'] ?? null;

    if (!$id_user || !$id_favourite) {
        echo json_encode(["error" => "Datos incompletos"]);
        exit;
    }

    $result = Database::deleteUserFavourite($id_user, $id_favourite);
    
    if ($result) {
        echo json_encode(["message" => "Favorito eliminado"]);
    } else {
        echo json_encode(["error" => "Error al eliminar favorito"]);
    }
    exit;
}

echo json_encode(["error" => "Método no permitido"]);
exit;
