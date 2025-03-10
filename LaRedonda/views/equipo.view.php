<?php
require_once 'partials/head.php';
require_once 'partials/nav.php';
?>

<main>
    <div class="container m-2">
        <div class="row ">
            <div id="seccionDatos" class="col-sm-5  border rounded py-2">
                <div class="row justify-content-between mx-1">
                    <div id="logoEquipo" class="col-6 p-2 rounded" style="background: #8e8c8c;border: solid #dc3545;">
                    </div>
                    <div id="favoritos" class="col-1 text-dark"><i  class="bi bi-heart " style="font-size: 30px;"></i></div>

                </div>

                <div id="nomEquipo" class="col-6 py-1 text-center"></div>
                <div id="infoEquipo"></div>
            </div>
            <div class="col-sm-6 mx-sm-4 border rounded">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a id="ultimosResultadosLink" class="nav-link text-danger active" href="#">Últimos
                            resultados</a>
                    </li>
                    <li class="nav-item">
                        <a id="descripcionLink" class="nav-link text-danger" href="#">Descripción</a>
                    </li>
                    <li class="nav-item">
                        <a id="plantillaLink" class="nav-link text-danger" href="#">Plantilla</a>
                    </li>
                </ul>

                <div>
                    <div id="seccionUltimosResultados" class="d-flex justify-content-center "></div>
                    <div id="seccionDescripcion" class="col d-none"></div>
                    <div id="seccionPlantilla" class="col d-none"></div>
                </div>
            </div>



</main>


<?php require_once 'partials/footer.php'; ?>