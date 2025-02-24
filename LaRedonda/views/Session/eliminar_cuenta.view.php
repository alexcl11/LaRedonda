<?php require_once 'views/partials/head.php' ?>
<?php require_once 'views/partials/nav.php' ?>

<main>
<div class="container">
        <h1 class="text-center">Eliminar cuenta</h1>
        <?= $errorMessage ?? '' ?>
        <div class="row justify-content-center">
            <div class="col-10 col-md-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-danger" id="delete" type="submit">Eliminar cuenta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'views/partials/footer.php' ?>