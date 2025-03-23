<?php require_once 'views/partials/head.php' ?>
<?php require_once 'views/partials/nav.php' ?>
<main>
    <div class="container">
        <h2>Mis Favoritos</h2>
        <div class="row">
            <div class="col-12 col-md-4">
                <h4>Equipos</h4>
               <div class="containter rounded bg-body-secondary p-3 mx-2">
                <div class="row">
                    <?php
                    if(isset($teams)){
                        foreach($teams as $team){
                            echo "<div class='col-2 m-1'><a href='" . BASE_PATH . "/equipo?t=" . $team['name'] . "'><img src=".$team['img']." class='img-fluid' alt='Logo ".$team['name']."'></a></div>";
                                
                        }
                    }
                ?>
                </div>
               </div>
                
                
            </div>
            <div class="col-12 col-md-4">
                <h4>Jugadores</h4>
            </div>
            <div class="col-12 col-md-4">
                <h4>Competiciones</h4>
                <div class="containter rounded bg-body-secondary p-3 mx-2">
                <div class="row">
                    <?php 
                    if(isset($competitions)){
                        foreach($competitions as $competition){
                            echo "<div class='col-2 m-1'><a href='" . BASE_PATH . "/liga?id=".$competition['id']."&s=2024-2025'><img src=".$competition['img']." class='img-fluid' alt='Logo ".$competition['name']."'></a></div>";
                                
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