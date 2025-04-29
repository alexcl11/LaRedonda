<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-danger nav-tabs">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="<?= BASE_PATH; ?>">
            <img src="views/img/logo.png" alt="Logo" style="width:80px;height: 56px;"
                class="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="inicio" class="nav-link text-light " aria-current="page" href="<?= BASE_PATH; ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= BASE_PATH . '/temporada?s=2024-2025'; ?>">Temporada 24/25</a>
                </li>
                <li class="nav-item <?= (isset($_SESSION['currentUser'])) ? '' : 'disabled'; ?>">
                    <div class="dropdown ">
                        <a class="nav-link text-light dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Otras temporadas
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="<?= BASE_PATH . '/temporada?s=2023-2024'; ?>">Temporada 23/24</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_PATH . '/temporada?s=2022-2023'; ?>">Temporada 22/23</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_PATH . '/temporadas_anteriores'; ?>">Temporadas anteriores</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" <?= (isset($_SESSION['currentUser'])) ? 'href="'.BASE_PATH .'/jugadores"' : 'href="#" data-bs-toggle="modal" data-bs-target="#modalInicioSesion"'; ?> >Jugadores</a>
                </li>
                <li class="nav-item favoritos">
                    <a class="nav-link text-light " <?= (isset($_SESSION['currentUser'])) ? 'href="'. BASE_PATH . '/favoritos"' : 'href="#" data-bs-toggle="modal" data-bs-target="#modalInicioSesion"'; ?> >Favoritos 🤍</a>
                </li>

            </ul>
            <?php if(isset($_SESSION['currentUser'])):  ?>
                <ul class="nav ms-auto">
                    <?php if(($_SESSION['currentUser']['role']===1)):?>                        
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?=BASE_PATH?>/panel-admin">Panel de Administrador</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item ">
                        <a class="nav-link text-light " href="<?= BASE_PATH . '/perfil'; ?>"><i class="bi bi-person-fill"></i> <?=$_SESSION['currentUser']['name']?></a>
                    </li>
                </ul>
            <?php else: ?>
            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= BASE_PATH . '/inicio_sesion'; ?>">Iniciar sesión</a>
                </li>
            </ul>
            <?php endif; ?>
            
            <div class="modal fade" id="modalInicioSesion" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Acceso restringido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        Para acceder a esta página, primero debes iniciar sesión.
                    </div>
                    <div class="modal-footer">
                        <a href="<?=BASE_PATH?>/inicio_sesion" class="btn btn-primary">Iniciar sesión</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </div>
                </div>
            </div>




        </div>
</nav>