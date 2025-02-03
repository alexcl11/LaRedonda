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
}
