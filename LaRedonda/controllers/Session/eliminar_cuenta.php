<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


require 'models/Usuario.php';

if (!isset($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$email = $_SESSION['currentUser']['email'];

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $usuarioModel = new Usuario();
    $user = $usuarioModel->getUser($email);

    if (password_verify($password, $user['password'])) {
        session_unset();
        session_destroy();
        $usuarioModel->deleteUser($email);
        header('Location: /');
        exit();
    } else {
        $errorMessage = '<p class="text-center text-danger">La contraseña no es correcta</p>';
    }
}

require_once "views/Session/eliminar_cuenta.view.php";
