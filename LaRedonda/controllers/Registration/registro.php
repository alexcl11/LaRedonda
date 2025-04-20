<?php
session_start();

require_once 'models/Usuario.php';
require 'controllers/Core/functions.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!validCredentials($name, $email, $password)) {
    header('Location: /crear-cuenta');
    exit();
}

$userExists = userExists($email);

if (!$userExists) {
    $usuarioModel = new Usuario();
    $usuarioModel->createUser($email, $name, $password);
    $user = $usuarioModel->getUser($email);
    $_SESSION['currentUser'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name' => $user['name']
    ];
    header('Location: /');
    exit();
} 

require_once 'views/Registration/registro.view.php';
