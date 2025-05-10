<?php require_once 'views/partials/head.php' ?>
<?php require_once 'views/partials/nav.php' ?>
<main>
  <div class="container py-5">
    <h2 class="mb-4">Panel de Administrador</h2>

    <?=(isset($userExistsUpdate)) ? '<tr><p class="text-danger">'.$userExistsUpdate.'</p></tr>': ''?>
    <div class="card mb-5">
      <div class="card-header">
        <h5 class="mb-0">Usuarios</h5>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead class="table-light">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col" class="text-end">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user) :?>
              <tr>
                <td><?=$user['name']?></td>
                <td><?=$user['email']?></td>
                <td><?=($user['role']==1)?'Administrador':'Autenticado'?></td>
                <td class="text-end">
                  <button id="modify-button" class="btn btn-sm btn-primary me-md-2" data-id-user="<?=$user['id']?>">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button id="delete-button" class="btn btn-sm btn-danger" data-user-email="<?=$user['email']?>">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr class="d-none" id="modify-button-<?=$user['id']?>">
                <form method="POST" action="">
                  <input type="hidden" name="form-modify-id" value="<?=$user['id']?>" >
                  <td>
                    <input type="text" name="form-modify-name" class="form-control form-control-sm" value="<?=$user['name']?>">
                  </td>
                  <td>
                    <input type="email" name="form-modify-email" class="form-control form-control-sm" value="<?=$user['email']?>" >
                  </td>
                  <td>
                    <select name="form-modify-role" class="form-select form-select-sm">
                      <?php if($user['role']==1):?>
                        <option value="1" >Administrador</option>
                        <option value="0">Autenticado</option>
                      <?php else :?>                        
                        <option value="0" >Autenticado</option>
                        <option value="1">Administrador</option>
                      <?php endif; ?>
                    </select>
                  </td>
                  <td class="text-end">
                    <button type="submit" class="btn btn-sm btn-success me-md-2">
                      <i class="bi bi-check-lg"></i>
                    </button>
                  </td>
                </form>
              </tr>

              <?php endforeach; ?>    
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Añadir Usuario</h5>
      </div>
      <div class="card-body">
        <?=(isset($userExists)) ? '<p class="text-danger">'.$userExists.'</p>': ''?>
        <form action="" method="POST"> 
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="nombreUsuario" name="form-create-name" placeholder="Introduce el nombre">
            </div>
            <div class="col-md-6 mb-3">
              <label for="emailUsuario" class="form-label">Email</label>
              <input type="email" class="form-control" id="emailUsuario" name="form-create-email" placeholder="Introduce el email">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contraseñaUsuario" class="form-label" >Contraseña</label>
              <input type="password" class="form-control" id="contraseñaUsuario" name="form-create-password" placeholder="Introduce la contraseña">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Rol</label>
              <select class="form-select" name="form-create-role">
                <option value="2">Usuario</option>
                <option value="1">Administrador</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-danger">Crear Usuario</button>
        </form>
      </div>
    </div>

  </div>
</main>


<?php require_once 'views/partials/footer.php' ?>