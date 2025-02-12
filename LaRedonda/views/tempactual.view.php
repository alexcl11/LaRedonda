<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <div id="ligasDomesticas" class="row">
            <h4>Ligas domésticas</h4>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=England'; ?>"><img class="" src="img/banderas/reino-unido.png" alt="Bandera Reino Unido" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=Spain'; ?>"><img class="" src="img/banderas/espana.png" alt="Bandera España" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=Italy'; ?>"><img class="" src="img/banderas/italia.png" alt="Bandera Italia" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=Germany'; ?>"><img class="" src="img/banderas/alemania .png" alt="Bandera Alemania" width="30"></a></div>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=France'; ?>"><img class="" src="img/banderas/francia.png" alt="Bandera Francia" width="30"></a></div>
            
        </div>
    </div>
</main>


<?php require_once 'views/partials/footer.php'; ?>