<?php
class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=laredonda;charset=utf8mb4";
        $user = "root";
        $password = "";
        $this->connection = new PDO($dsn, $user, $password);
    }
    private function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    
    
    public static function getUser($email)
    {
        $instance = new self();
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $params = ['email' => $email];
        return $instance->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }


    public static function getUsers()
    {
        $instance = new self();
        $query = "SELECT * FROM usuarios";
        return $instance->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function createUser($email, $name, $password)
    {
        $instance = new self();
        $query = "INSERT INTO usuarios(email, name, password) VALUES (:email, :name, :password)";
        $params = [
            'email' => $email,
            'name' => $name,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $instance->query($query, $params);
    }

    public static function updateUserEmail($id, $email){
        $instance = new self();
        $query = "UPDATE `usuarios` SET `email` = :email WHERE `usuarios`.`id` = :id";
        $params = [
            'email' => $email,
            'id' => $id
        ];
        $instance->query($query, $params);
    }
    public static function updateUserName($id, $name){
        $instance = new self();
        $query = "UPDATE `usuarios` SET `name` = :name WHERE `usuarios`.`id` = :id";
        $params = [
            'name' => $name,
            'id' => $id
        ];
        $instance->query($query, $params);
    }

    public static function deleteUser($email){    
        $instance = new self();
        $query = "DELETE FROM `usuarios` WHERE `usuarios`.`email` = :email";
        $params = [
            'email' => $email
        ];
        $instance->query($query, $params);    
    } 

    public static function getUserFavourites($id_user){
        $instance = new self();
        $query = "SELECT * FROM `usuario_favoritos` WHERE `id_usuario` = :id";
        $params = ['id' => $id_user];
        $stmt = $instance->query($query, $params); 
        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene los datos correctamente
        } else {
            return []; // Devuelve un array vacío en caso de error
        }
    }

    public static function insertFavourite($id_favourite, $nombre_favorito, $tipo_favorito, $img_favorito, $id_user){        
        $instance = new self();
        $query = "INSERT INTO `usuario_favoritos`(id_favorito, nombre_favorito, tipo_favorito, img_favorito, id_usuario) 
            VALUES (:id_favourite, :name_favourite, :tipo_favorito, :img_favorito, :id_user)";
        $params = [
            "id_favourite" => $id_favourite, 
            "name_favourite" => $nombre_favorito,
            "tipo_favorito" => $tipo_favorito,
            "img_favorito" => $img_favorito,
            "id_user" => $id_user
        ];
        $instance -> query($query, $params);
    }

    public static function deleteUserFavourite($id_user, $id_favourite){
        $instance = new self();
        $query = "DELETE FROM `usuario_favoritos` WHERE `id_usuario` = :id_user AND `id_favorito` = :id_favourite";
        $params = [
            "id_user" => $id_user,
            "id_favourite" => $id_favourite
        ];
        $instance -> query($query, $params);
    }
    
}