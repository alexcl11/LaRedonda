<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main>

    <div class="col mx-sm-4 border rounded">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a id="clasificacionLink" class="nav-link text-danger active" href="#">Clasificación</a>
            </li>
            <li class="nav-item">
                <a id="resultadosLink" class="nav-link text-danger" href="#">Resultados</a>
            </li>
        </ul>

        <div class="border rounded">
            <div class="container" id="seccionClasificacion">
                <div class="row">
                    <div class="col-1 m-3"><img class="img-fluid" src="" id="logoLiga"></div>
                    <?php if(isset($_SESSION['currentUser'])){
                        echo  '<div id="favoritos" class="col-1 m-1 " data-user-id="'.$_SESSION['currentUser']['id'].'"><i id="heartIcon" class="bi '.$favoritosButton.'
                        " style="font-size: 30px;"></i></div>';
                    
                        } else if(isset($competicion)){
                            echo '<div id="favoritos" class="col-1 m-1 "data-fav-id="'.$competicion['id_favorito'].'" data-name-fav="'.$competicion['nombre_favorito'].'" data-fav-type="competicion"><i id="heartIcon" class="bi '.$favoritosButton.'
                        " style="font-size: 30px;"></i>
                        </div>';
                        } else {
                            echo '';
                        }
                    ?>
                </div>
                
                <h4 id="tablaClasiH4">Tabla de clasificación</h4>
                <table id="leagueTable" class="display table leagueTable ">
                    <thead>
                        <tr>
                            <th>Pos</th>
                            <th>Club</th>
                            <th>PJ</th>
                            <th>Pts</th>
                            <th>V</th>
                            <th>E</th>
                            <th>D</th>
                            <th class="d-none d-md-table-cell">GF</th>
                            <th class="d-none d-md-table-cell">GC</th>
                            <th>DG</th>
                            <th class="d-none d-md-table-cell">Últimos 5</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyLeague">
                    </tbody>
                </table>
            </div>
            <div id="seccionResultados" class="d-none m-4">
                <h2>Seleccione la jornada </h2>
                <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="jornada"
                    id="jornada">
                    <script>
                        for (var i = 1; i < 43; i++) {
                            document.write(`<option value="${i}">Jornada ${i}</option>`);
                        }
                    </script>
                </select>
            </div>
        </div>
    </div>


</main>
<?php require_once 'views/partials/footer.php'; ?>