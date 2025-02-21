<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<main class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <?= $userExists ?
                    "<h3>Ya existe un usuario con ese correo</h3>" :
                    "<h3>¡Bienvenido a La Redonda, {$name}! <br> Aquí podrás consultar todos los datos sobre fútbol de la actualidad y de cualquier temporada</h3>"; ?>
            </div>
            <div class="col-10 col-md-4 mx-auto mt-3">
                <div class="row">
                    <div class="col"><a href="<?= BASE_PATH . '/inicio_sesion'; ?>" class="btn btn-outline-danger">Ir al inicio de sesión</a></div>
                    <div class="col"><a href="<?= BASE_PATH . '/crear_cuenta';?>" class="btn btn-outline-danger">Volver al registro</a></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'views/partials/footer.php'; ?>