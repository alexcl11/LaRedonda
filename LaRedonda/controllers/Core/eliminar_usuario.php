<?php
require_once '../../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    $usuario = new Usuario();
    $deleteUser = $usuario->deleteUser($email);
} else {
    echo "Solicitud no válida.";
}
