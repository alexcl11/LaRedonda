<?php

require_once 'Database.php';


class Usuario {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUser($email)
    {
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $params = ['email' => $email];
        return $this->db->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public function getUsers()
    {
        $query = "SELECT * FROM usuarios";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($email, $name, $password)
    {
        $query = "INSERT INTO usuarios(email, name, password) VALUES (:email, :name, :password)";
        $params = [
            'email' => $email,
            'name' => $name,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $this->db->query($query, $params);
    }

    public function updateUserEmail($id, $email){
        $query = "UPDATE `usuarios` SET `email` = :email WHERE `usuarios`.`id` = :id";
        $params = [
            'email' => $email,
            'id' => $id
        ];
        $this->db->query($query, $params);
    }

    public function updateUserName($id, $name){
        $query = "UPDATE `usuarios` SET `name` = :name WHERE `usuarios`.`id` = :id";
        $params = [
            'name' => $name,
            'id' => $id
        ];
        $this->db->query($query, $params);
    }

    public function deleteUser($email){    
        $query = "DELETE FROM `usuarios` WHERE `usuarios`.`email` = :email";
        $params = [
            'email' => $email
        ];
        $this->db->query($query, $params);    
    } 
}
