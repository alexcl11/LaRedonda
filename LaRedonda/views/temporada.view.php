<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main>
    <div class="container p-5">
        <div id="ligasDomesticas" class="row">
            <h2>Temporada <?=$_GET['s']?></h2>
            <h4>Ligas domésticas</h4>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=England&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/reino-unido.png" alt="Bandera Reino Unido" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Spain&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/espana.png" alt="Bandera España" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Italy&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/italia.png" alt="Bandera Italia" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Germany&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/alemania.png" alt="Bandera Alemania" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=France&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/francia.png" alt="Bandera Francia" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Belgium&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/belgica.png" alt="Bandera Francia" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Portugal&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/portugal.png" alt="Bandera Francia" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . "/ligas_pais?p=Mexico&s={$_GET['s']}"; ?>"><img class="" src="views/img/banderas/mexico.png" alt="Bandera Francia" width="30"></a></div>
        </div>
    </div>
</main>


<?php require_once 'views/partials/footer.php'; ?>