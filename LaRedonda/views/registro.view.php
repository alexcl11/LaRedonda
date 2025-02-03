<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <?= $userExists ?
                "<h3 class='text-center'>Ya existe un usuario con ese correo</h3>" :
                "<h3 class='text-center'>¡Bienvenido a La Redonda, {$name}! <br> Aquí podrás consultar todos los datos sobre fútbol de la actualidad y de cualquier temporada</h3>"; ?>
            <div class="col-10 col-md-4">
                <div class="d-grid">
                    <a href="<?= BASE_PATH . '/inicio_sesion'; ?>" class="btn btn-outline-danger">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'views/partials/footer.php'; ?>