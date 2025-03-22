<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



require_once 'models/Database.php';

if(isset($_SESSION['currentUser'])){
    $favsUser = Database::getUserFavourites($_SESSION['currentUser']['id']);

// Inicializar el valor de $favoritosButton como "bi-heart" por defecto
$favoritosButton = 'bi-heart text-danger';

// Verificar si el usuario tiene favoritos
if ($favsUser) {
    foreach ($favsUser as $user) {
        // Comprobar si la competicion actual está en los favoritos del usuario
        if ($_GET['id'] == $user['id_favorito']) {
            $competicion = $user;
            $favoritosButton = 'bi-heart-fill text-danger'; // Si la competicion está en los favoritos, asignar el corazón relleno
            break; // Salir del ciclo una vez encontrado
        }
    }
}
}

require_once 'views/pagina_liga.view.php' 
?>