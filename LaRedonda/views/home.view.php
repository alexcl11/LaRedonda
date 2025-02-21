<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<main>
    <div class="container-fluid d-flex flex-column">
        <div class="row d-flex justify-content-between p-1">
            <div class="col-md-7" id="resultadosJornadas">
                <div class="row ">
                    <div class="col ">
                        <h2>Resultados por jornada</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col logo" id="desplegarCL">
                        <img class="img-fluid" src="views/img/logoChampions.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarPL">
                        <img class="img-fluid" src="views/img/logoPremier.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarLL">
                        <img class="img-fluid" src="views/img/logoLaliga.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarSA">
                        <img class="img-fluid" src="views/img/logoSerieA.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarBL">
                        <img class="img-fluid" src="views/img/logoBundes.png" alt="" width="100px">
                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosCL">

                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                        <img id="logoChampions" class="logo" src="views/img/logoChampions.png" alt="Champions League Logo"
                            style="width: 200px; 
                        height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornadacL" id="jornadaCL">
                            <script>
                                for (var i = 1; i < 9; i++) {
                                    document.write(`<option value="${i}">Jornada ${i}</option>`);
                                }
                            </script>
                        </select>
                    </div>
                    <div id="contenedorResultadosCL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                </div>
                <div class="row d-none justify-content-center results" id="resultadosPL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoPrem" class="logo" src="views/img/logoPremier.png" alt="Premier League Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornadaPL" id="jornadaPL">
                            <script>
                                for (var i = 1; i < 39; i++) {
                                    document.write(`<option value="${i}">Jornada ${i}</option>`);
                                }
                            </script>
                        </select>

                        <div id="contenedorResultadosPL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosLL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoLaLiga" class="logo" src="views/img/logoLaLiga.png" alt="LaLiga Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornadaLL" id="jornadaLL">
                            <script>
                                for (var i = 1; i < 39; i++) {
                                    document.write(`<option value="${i}">Jornada ${i}</option>`);
                                }
                            </script>
                        </select>

                        <div id="contenedorResultadosLL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosSA">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoSerieA" class="logo img-fluid" src="views/img/logoSerieA.png" alt="Serie A Logo" style="width: 250px; 
                            height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornadaSA" id="jornadaSA">
                            <script>
                                for (var i = 1; i < 39; i++) {
                                    document.write(`<option value="${i}">Jornada ${i}</option>`);
                                }
                            </script>
                        </select>

                        <div id="contenedorResultadosSA" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosBL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoBundes" class="logo img-fluid" src="views/img/logoBundes.png" alt="Bundes Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornadaBL" id="jornadaBL">
                            <script>
                                for (var i = 1; i < 35; i++) {
                                    document.write(`<option value="${i}">Jornada ${i}</option>`);
                                }
                            </script>
                        </select>

                        <div id="contenedorResultadosBL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>

            </div>
            <div class="col-md-4" id="noticias">
                <h2>Últimas noticias</h2>
                <div id="contenedorNoticias"></div> <!-- Aquí se insertarán las noticias dinámicamente -->
            </div>
        </div>
    </div>
</main>

<?php require_once 'views/partials/footer.php'; ?>