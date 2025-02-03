<?php
require_once 'models/Database.php';
require 'functions.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!validCredentials($name, $email, $password)) {
    header('Location: /crear-cuenta');
    exit();
}

$userExists = userExists($email);

if (!$userExists) {
    Database::createUser($email, $name, $password);
}

require 'views/registro.view.php';
