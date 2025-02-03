<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <?= $userExists ?
                "<h3 class='text-center'>Ya existe un usuario con ese correo</h3>" :
                "<h3 class='text-center'>¡Te damos la bienvenida, {$name}! <br> Aquí comienza tu viaje por el pasado y el presente del cine</h3>"; ?>
            <div class="col-10 col-md-4">
                <div class="d-grid">
                    <a href="<?= BASE_PATH . '/inicio_sesion'; ?>" class="btn btn-outline-primary">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'views/partials/footer.php'; ?>