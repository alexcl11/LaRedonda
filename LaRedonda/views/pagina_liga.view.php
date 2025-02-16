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
                <h2 id="nombreLiga"></h2>
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
            <div id="seccionResultados" class="d-none">
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