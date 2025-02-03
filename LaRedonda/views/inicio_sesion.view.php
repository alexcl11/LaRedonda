<?php
    require_once 'partials/head.php';
    require_once 'partials/nav.php';
?>

<main >
    <div class="container mt-5">
    <h1 class="text-center">Iniciar sesión</h1>
    <?= $errorMessage ?? ''?>    
    <div class="row justify-content-center"> 
      <div class="col-10 col-md-4">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="d-grid">
            <button class="btn btn-danger" type="submit">Continuar</button>
          </div>
        </form>
        <h6 class="text-center mt-5">¿No te has registrado?</h6>
        <div class="d-grid">
          <a href="<?= BASE_PATH . '/crear_cuenta'; ?>" class="btn btn-outline-danger">Crea tu cuenta</a>
        </div>
      </div>
    </div>
    </div>
<main>


<?php require_once 'partials/footer.php' ?>