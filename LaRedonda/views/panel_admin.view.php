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
              <i class="bi bi-check-lg d-none" id="admin-name-check"></i>
              <input type="text" class="form-control" id="nombreUsuario" name="form-create-name" placeholder="Introduce el nombre">
            </div>
            <div class="col-md-6 mb-3">
              <label for="emailUsuario" class="form-label">Email</label>
              <i class="bi bi-check-lg d-none" id="admin-email-check"></i>
              <input type="email" class="form-control" id="emailUsuario" name="form-create-email" placeholder="Introduce el email">
              <small id="admin-emailHelp" class="form-text text-muted">Ejemplo: ejemplo@gmail.com</small>
            </div>
            <div class="col-md-6 mb-3">
              <label for="contraseñaUsuario" class="form-label" >Contraseña</label>
              <i class="bi bi-check-lg d-none" id="admin-password-check"></i>
              <input type="password" class="form-control" id="contraseñaUsuario" name="form-create-password" placeholder="Introduce la contraseña">
              <small id="admin-passwordHelp" class="form-text text-muted">Debe contener: más de 8 caracteres, al menos una letra mayúscula, una minúscula, un número y un caracter especial.</small>
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


<!-- Modal de confirmación de eliminación -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmModalLabel">Confirmar eliminación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de que quieres eliminar al usuario con email: <span id="modal-user-email"></span>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'views/partials/footer.php' ?>