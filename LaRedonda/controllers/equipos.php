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
        // Comprobar si el equipo actual está en los favoritos del usuario
        if ($_GET['t'] === $user['nombre_favorito']) {
            $equipo = $user;
            $favoritosButton = 'bi-heart-fill text-danger'; // Si el equipo está en los favoritos, asignar el corazón relleno
            break; // Salir del ciclo una vez encontrado
        }
    }
}
}

require_once 'views/equipo.view.php';
?>


// if (session_status() === PHP_SESSION_NONE) {
// session_start();
// }

// require_once 'models/Database.php';

// $favsUser = Database::getUserFavourites($_SESSION['currentUser']['id']);

// if($favsUser){
// foreach($favsUser as $user){
// if($_GET['t']===$user['nombre_favorito']){
// $favoritosButton = 'bi-heart-fill';
// break;
// } else
// $favoritosButton = 'bi-heart';
// }
// }
// echo $_SESSION['currentUser']['id'];
// echo ' ';
// echo var_dump($favsUser);


// require_once 'views/equipo.view.php';