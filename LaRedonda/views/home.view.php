<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>
<?php require_once 'views/partials/footer.php'; ?>
<main>
    <div class="container-fluid d-flex flex-column">
        <div class="row d-flex justify-content-between p-1">
            <div class="col-md-7" id="resultadosJornadas">
                <div class="row ">
                    <div class="col ">
                        <h2>Resultados de la última jornada</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-baseline">
                    <div class="col logo" id="desplegarCL">
                        <img class="img-fluid" src="img/logoChampions.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarPL">
                        <img class="img-fluid" src="img/logoPremier.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarLL">
                        <img class="img-fluid" src="img/logoLaliga.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarSA">
                        <img class="img-fluid" src="img/logoSerieA.png" alt="">
                    </div>
                    <div class="col logo" id="desplegarBL">
                        <img class="img-fluid" src="img/logoBundes.png" alt="" width="100px">
                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosCL">

                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                        <img id="logoChampions" class="logo" src="img/logoChampions.png" alt="Champions League Logo"
                            style="width: 200px; 
                        height: auto; margin: 10px 0;">
                        <select name="jornadaCL" id="jornadaCL">
                            <option value="">Jornada</option>
                            <option value="7">Jornada 7</option>
                            <option value="6">Jornada 6</option>
                            <option value="5">Jornada 5</option>
                        </select>
                    </div>
                    <div id="contenedorResultadosCL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                </div>
                <div class="row d-none justify-content-center results" id="resultadosPL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoPrem" class="logo" src="img/logoPremier.png" alt="Premier League Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select name="jornadaPL" id="jornadaPL">
                            <option value="">Jornada</option>
                            <option value="22">Jornada 22</option>
                            <option value="21">Jornada 21</option>
                            <option value="20">Jornada 20</option>
                        </select>

                        <div id="contenedorResultadosPL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosLL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoLaLiga" class="logo" src="img/logoLaLiga.png" alt="LaLiga Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select name="jornadaLL" id="jornadaLL">
                            <option value="">Jornada</option>
                            <option value="22">Jornada 22</option>
                            <option value="21">Jornada 21</option>
                            <option value="20">Jornada 20</option>
                        </select>

                        <div id="contenedorResultadosLL" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosSA">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoSerieA" class="logo img-fluid" src="img/logoSerieA.png" alt="Serie A Logo" style="width: 250px; 
                            height: auto; margin: 10px 0;">
                        <select class="form-select w-50 selectpicker" data-live-search="true" data-size="3" name="jornadaSA" id="jornadaSA">
                            <option value="">Jornada</option>
                            <option value="22">Jornada 22</option>
                            <option value="21">Jornada 21</option>
                            <option value="20">Jornada 20</option>
                            <option value="19">Jornada 19</option>
                            <option value="18">Jornada 18</option>
                            <option value="17">Jornada 17</option>
                        </select>

                        <div id="contenedorResultadosSA" class="w-100 d-flex flex-column align-items-center mt-4"></div>

                    </div>
                </div>
                <div class="row d-none justify-content-center results" id="resultadosBL">
                    <div class="w-100 d-flex flex-column justify-content-center align-items-center">


                        <img id="logoBundes" class="logo img-fluid" src="img/logoBundes.png" alt="Bundes Logo" style="width: 200px; 
                            height: auto; margin: 10px 0;">
                        <select name="jornadaBL" id="jornadaBL">
                            <option value="">Jornada</option>
                            <option value="22">Jornada 22</option>
                            <option value="21">Jornada 21</option>
                            <option value="20">Jornada 20</option>
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