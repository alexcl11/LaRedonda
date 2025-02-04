<?php require_once 'views/partials/head.php'; ?>
<?php require_once 'views/partials/nav.php'; ?>

<main>
    <div class="container">
        <h1 id="nombreLiga"></h1>
        <h4>Tabla de clasificación</h4>
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
                    <th>GF</th>
                    <th>GC</th>
                    <th>DG</th>
                    <th>Últimos 5</th>
                </tr>
            </thead>
            <tbody id="tbodyLeague">
            </tbody>
        </table>
    </div>
</main>
<?php require_once 'views/partials/footer.php'; ?>