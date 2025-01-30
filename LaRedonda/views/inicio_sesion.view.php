<?php
    require_once 'partials/head.php';
    require_once 'partials/nav.php';
?>

<main>
    <div class="container">
    <h1 class="text-center">Iniciar sesión</h1>
    <div class="row justify-content-center">
      <div class="col-10 col-md-4">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="d-grid">
            <button class="btn btn-primary" type="button">Continuar</button>
          </div>
        </form>
        <h4 class="text-center mt-5">¿No te has registrado?</h4>
        <div class="d-grid">
          <a href="<?= BASE_PATH . '/crear-cuenta'; ?>" class="btn btn-outline-primary">Crea tu cuenta</a>
        </div>
      </div>
    </div>
    </div>
<main>


<?php require_once 'partials/footer.php' ?>