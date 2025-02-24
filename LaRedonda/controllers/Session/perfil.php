<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'views/Session/perfil.view.php';