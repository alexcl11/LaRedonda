<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main class="container py-5">
    <h2 class="mb-3 text-center text-danger">Temporada <?=$_GET['s']?></h2>
    <h4 class="text-center mb-4">Ligas Domésticas</h4>
    <div class="row justify-content-center ligas g-4 text-center">
        <div class="row justify-content-center ligas g-4 text-center py-4 rounded shadow-sm">
            <?php
                $paises = [
                ['nombre' => 'England', 'img' => 'reino-unido.png', 'alt' => 'UK'],
                ['nombre' => 'Spain',   'img' => 'espana.png', 'alt' => 'ES'],
                ['nombre' => 'Italy',   'img' => 'italia.png', 'alt' => 'IT'],
                ['nombre' => 'Germany', 'img' => 'alemania.png', 'alt' => 'DE'],
                ['nombre' => 'France',  'img' => 'francia.png', 'alt' => 'FR'],
                ['nombre' => 'Belgium', 'img' => 'belgica.png', 'alt' => 'BE'],
                ['nombre' => 'Portugal','img' => 'portugal.png', 'alt' => 'PT'],
                ['nombre' => 'Mexico',  'img' => 'mexico.png', 'alt' => 'MX']
                ];

                foreach ($paises as $pais) {
                echo '
                <div class="col-auto">
                    <a href="' . BASE_PATH . '/ligas_pais?p=' . $pais['nombre'] . '&s=' . $_GET['s'] . '" class="flag-link d-inline-block">
                    <img src="views/img/banderas/' . $pais['img'] . '" width="50" class="rounded-circle flag-img" alt="' . $pais['alt'] . '">
                    </a>
                </div>';
                }
            ?>
        </div>

    </div>

</main>



<?php require_once 'views/partials/footer.php'; ?>