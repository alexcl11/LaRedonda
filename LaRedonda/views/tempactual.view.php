<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <div id="ligasDomesticas" class="row">
            <h4>Ligas domésticas</h4>
            <div class="col">Inglaterra</div>
            <div class="col"><a href="<?= BASE_PATH . '/ligas_pais?p=Spain'; ?>"><img class="" src="img/banderas/espana.png" alt="Bandera España" width="30"></a></div>
            <div class="col">Italia</div>
            <div class="col">Alemania</div>
            <div class="col">Francia</div>
        </div>
    </div>
</main>


<?php require_once 'views/partials/footer.php'; ?>