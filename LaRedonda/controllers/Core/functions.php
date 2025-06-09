<?php

function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false && strlen($email) <= 255;
}

function isValidString($string)
{
    return strlen($string) >= 2 && strlen($string) <= 255;
}
function isValidPassword($string)
{
    return strlen($string) >= 8 && strlen($string) <= 255;
}

function validCredentials($name, $email, $password)
{
    return isValidString($name)
        && isValidEmail($email)
        && isValidString($password);
}

function userExists($email)
{
    $usuarioModel = new Usuario();
    $users = $usuarioModel->getUsers();
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form-create-name'])) {
    require_once 'controllers/Core/functions.php';
    $name = $_POST['form-create-name'] ?? '';
    $email = $_POST['form-create-email'] ?? '';
    $password = $_POST['form-create-password'] ?? '';

    if (!isValidString($name)) {
        $userExists = "Nombre inválido.";
    } elseif (!isValidEmail($email)) {
        $userExists = "Email inválido.";
    } elseif (!isValidPassword($password)) {
        $userExists = "Contraseña inválida.";
    } else {
        // Crear usuario normalmente
    }
}