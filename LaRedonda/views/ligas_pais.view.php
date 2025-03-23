<?php
    require_once 'partials/head.php';
    require_once 'partials/nav.php';
?>


<main>
    <div class="container">
        <div class="row p-2" id="filaLigas">
            <h4>Ligas</h4> 
            <?php
                if($_GET['p']=='England'){
                    echo "<div class='col iconoLiga'>
                            <a href=" . BASE_PATH . "/liga?id=4328&s=".$_GET['s']."><img class='img-fluid' src='/views/img/logos_ligas/4328.png' style='width: 150px;'></a>
                            
                          </div>";
                }
            ?>
        </div>
    </div>
</main>



<?php
    require_once 'partials/footer.php';
?>