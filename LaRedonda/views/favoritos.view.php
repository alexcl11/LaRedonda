<?php require_once 'views/partials/head.php' ?>
<?php require_once 'views/partials/nav.php' ?>

<main>
    <div class="container">
        <h2>Mis Favoritos</h2>
        <div class="row">
            <div class="col-12 col-md-4">
                <h4>Equipos</h4>
                <div class="favoritos-section">
                    <div class="img-container">
                        <?php
                        if(isset($teams)){
                            foreach($teams as $team){
                                echo "<a href='" . BASE_PATH . "/equipo?t=" . $team['name'] . "'>
                                        <img src='".$team['img']."' class='favoritos-img' alt='Logo ".$team['name']."'>
                                      </a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h4>Jugadores</h4>
                <div class="favoritos-section">
                    <div class="img-container">
                        <?php
                        if(isset($players)){
                            foreach($players as $player){
                                echo "<a href='" . BASE_PATH . "/jugador?id=" . $player['id'] . "'>
                                        <img src='".$player['img']."' class='favoritos-img' alt='".$player['name']."'>
                                      </a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h4>Competiciones</h4>
                <div class="favoritos-section">
                    <div class="img-container">
                        <?php
                        if(isset($competitions)){
                            foreach($competitions as $competition){
                                echo "<a href='" . BASE_PATH . "/liga?id=" . $competition['id'] . "&s=2024-2025'>
                                        <img src=".$competition['img']." class='favoritos-img' alt='".$competition['name']."'>
                                      </a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'views/partials/footer.php' ?>