<?php

require_once 'Database.php';

class Favoritos {

    private $db;


    public function __construct() {
        $this->db = new Database();
    }

    public  function getUserFavourites($id_user){
        
        $query = "SELECT * FROM `usuario_favoritos` WHERE `id_usuario` = :id";
        $params = ['id' => $id_user];
        $stmt = $this->db->query($query, $params); 
        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene los datos correctamente
        } else {
            return []; // Devuelve un array vacío en caso de error
        }
    }

    public  function insertFavourite($id_favourite, $nombre_favorito, $tipo_favorito, $img_favorito, $id_user){        
        
        $query = "INSERT INTO `usuario_favoritos`(id_favorito, nombre_favorito, tipo_favorito, img_favorito, id_usuario) 
            VALUES (:id_favourite, :name_favourite, :tipo_favorito, :img_favorito, :id_user)";
        $params = [
            "id_favourite" => $id_favourite, 
            "name_favourite" => $nombre_favorito,
            "tipo_favorito" => $tipo_favorito,
            "img_favorito" => $img_favorito,
            "id_user" => $id_user
        ];
        return $this->db->query($query, $params);
    }

    public  function deleteUserFavourite($id_user, $id_favourite){
        $query = "DELETE FROM `usuario_favoritos` WHERE `id_usuario` = :id_user AND `id_favorito` = :id_favourite";
        $params = [
            "id_user" => $id_user,
            "id_favourite" => $id_favourite
        ];
        return $this->db->query($query, $params);
    }
}