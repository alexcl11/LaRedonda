<nav class="navbar navbar-expand-lg bg-danger nav-tabs">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="<?= BASE_PATH; ?>">
            <img src="img/LaRedonda_logo-removebg-preview.png" alt="Logo" style="width:80px;height: 56px;" class="rounded-pill">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="inicio" class="nav-link text-light " aria-current="page" href="<?= BASE_PATH; ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= BASE_PATH . '/temporadaactual'; ?>">Temporada 24/25</a>
                </li>
                <li class="nav-item disabled">
                    <div class="dropdown ">
                        <a class="nav-link text-light dropdown-toggle disabled" data-bs-toggle="dropdown" aria-expanded="false">
                            Otras temporadas
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">Temporada 23/24</a></li>
                            <li><a class="dropdown-item" href="#">Temporada 22/23</a></li>
                            <li><a class="dropdown-item" href="#">Temporadas anteriores</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item favoritos disabled">
                    <a class="nav-link text-light disabled" aria-disabled="true" href="#">Favoritos 🤍</a>
                </li>

            </ul>
            <ul class="nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link text-light " href="#">Iniciar sesión</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light " href="#">Registrarme</a>
                </li>
            </ul>

        </div>
</nav>