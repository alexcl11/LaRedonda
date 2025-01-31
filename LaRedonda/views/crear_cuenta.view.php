<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="container mt-5 mb-5">
        <h1 class="text-center">Crear cuenta</h1>
        <div class="row justify-content-center">
            <div class="col-10 col-md-4">
                <form action="<?= BASE_PATH . '/registro'; ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <i class="bi bi-check-lg d-none" id="name-check"></i>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Apellido</label>
                        <i class="bi bi-check-lg d-none" id="last-name-check"></i>
                        <input type="text" class="form-control" id="last-name" name="last-name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <i class="bi bi-check-lg d-none" id="email-check"></i>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <i class="bi bi-check-lg d-none" id="password-check"></i>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Al menos ocho caracteres">
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirma la contraseña</label>
                        <i class="bi bi-check-lg d-none" id="password-confirm-check"></i>
                        <input type="password" class="form-control" id="password-confirm">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-danger" id="signin" type="submit" disabled>Registrarse</button>
                    </div>
                </form>
                <h6 class="text-center mt-5">¿Ya tienes cuenta?</h6>
                <div class="d-grid">
                    <a href="<?= BASE_PATH . '/inicio_sesion'; ?>" class="btn btn-outline-danger">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>