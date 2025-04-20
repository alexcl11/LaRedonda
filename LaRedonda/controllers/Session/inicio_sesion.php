<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


require 'models/Usuario.php';

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usuarioModel = new Usuario();
    $user = $usuarioModel->getUser($email);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['currentUser'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name']
        ];
        header('Location: /');
        exit();
    } else {
        $errorMessage = '<p class="text-center text-danger">Los datos de inicio de sesión no son correctos</p>';
    }
}

require 'views/Session/inicio_sesion.view.php';
