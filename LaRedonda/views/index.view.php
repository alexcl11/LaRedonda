<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<?php require_once 'views/partials/footer.php'; ?>
<main>
    <div class="container-fluid d-flex flex-column">
        <div class="row">
            <div class="col-7  m-1">
                <div class="row ">
                    <div class="col ">
                        <h2>Resultados de la última jornada</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" id="resultadosPL">
                    <div class="row">
                        <img src="img/logoPremier.png" alt="Premier League Logo" style="width: 200px; 
                        height: auto; margin: 10px 0;">
                    </div>
                </div>
                <div class="row d-flex justify-content-center" id="resultadosLL">
                    <img src="img/logoLaLiga.png" alt="Premier League Logo" style="width: 200px; 
                        height: auto; margin: 10px 0;">
                </div>
                <div class="row d-flex justify-content-center" id="resultadosSA">
                    <div class="w-100">
                        <img src="img/logoSerieA.png" alt="Premier League Logo" style="width: 100px; 
                                                height: auto; margin: 10px 0;">
                    </div>
                    
                </div>
                <div class="row d-flex justify-content-center" id="resultadosBL">
                    <img src="img/logoBundes.png" alt="Premier League Logo" style="width: 150px; 
                        height: auto; margin: 10px 0;">
                </div>
            </div>
            <div class="col-4 " id="noticias">
                <h1>Últimas noticias</h1>
            </div>
        </div>
    </div>
</main>