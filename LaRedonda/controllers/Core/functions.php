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
    $users = Database::getUsers();
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return true;
        }
    }
    return false;
}