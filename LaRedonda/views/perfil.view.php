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
                <p><b>email:</b> <?= $_SESSION['currentUser']['email']?><i id="cambiarEmail"
                        class="bi bi-pencil-fill ms-1" style="cursor:pointer"></i></p>
                <small id="existEmail"
                    class="d-none text-danger"><?=isset($_SESSION['currentUser']['existNewEmail'])&& $_SESSION['currentUser']['existNewEmail'] ? 'Ya existe un usuario ' . $_SESSION['currentUser']['invalidEmail']:''?></small>
                <small id="incorrectEmail" class="d-none ">El formato del email debe ser:  ejemplo@gmail.com</small>
                <form action="<?= BASE_PATH . '/updateDatos'; ?>" method="POST" id="formEmail"
                    class="form d-none flex-column">
                    <input id="newEmail" class="" type="text" value="<?= $_SESSION['currentUser']['email']?>"
                        name="newEmail">
                    <button id="submitCambiarEmail" class=" w-md-25 m-1 btn btn-danger" type="submit" >Cambiar</button>
                </form>
                <p><b>Nombre:</b> <?= $_SESSION['currentUser']['name']?><i id="cambiarNombre"
                        class="bi bi-pencil-fill ms-1" style="cursor:pointer"></i></p>
                <form id="formNombre" class="d-none form flex-column" action="<?= BASE_PATH . '/updateDatos'; ?>"
                    method="POST">
                    <input id="newName" class="" type="text" value="<?= $_SESSION['currentUser']['name']?>"
                        name="newName">
                    <button id="submitCambiarNombre" class="w-md-25 m-1 btn btn-danger" type="submit">Cambiar</button>
                </form>
                <a href="<?= BASE_PATH . '/cerrar_sesion'?>" class="btn btn-outline-danger">Cerrar sesión</a>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/footer.php' ?>