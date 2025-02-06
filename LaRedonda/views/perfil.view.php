<?php

require_once 'partials/head.php';
require_once 'partials/nav.php';
?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 m-3 p-2 d-flex flex-column align-content-center border rounded">
                <h3>Tus datos:</h3>
                <p><b>ID de usuario:</b> <?= $_SESSION['currentUser']['id']?></p>
                <p><b>email:</b> <?= $_SESSION['currentUser']['email']?></p> <button id="cambiarEmail">Cambiar email</button>
                <form action="<?= BASE_PATH . '/updateDatos'; ?>" method="POST">
                    <input id="newEmail" class="d-none" type="text" value="<?= $_SESSION['currentUser']['email']?>" name="newEmail">
                    <small class="text-danger"><?=isset($_SESSION['validEmail']) ? $_SESSION['validEmail'] :''?></small>
                    <button id="submitCambiarEmail" class="d-none" type="submit">Cambiar</button>
                </form>
                <p><b>Nombre:</b> <?= $_SESSION['currentUser']['name']?></p>
                <form action="" method="POST"><input id="newName" class="d-none" type="text" value="<?= $_SESSION['currentUser']['name']?>" name="newName"></form>
                <a href="<?= BASE_PATH . '/cerrar_sesion'?>" class="btn btn-outline-danger">Cerrar sesión</a>
            </div>
        </div>
    </div>
</main>
<script>
    const cambiarEmail = document.getElementById('cambiarEmail');
    cambiarEmail.addEventListener('click', () => {
        document.getElementById('newEmail').classList.remove('d-none');
        document.getElementById('submitCambiarEmail').classList.remove('d-none');
    });
</script>
<?php require_once 'partials/footer.php' ?>
