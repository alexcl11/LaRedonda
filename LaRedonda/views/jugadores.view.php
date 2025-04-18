<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Jugadores Destacados</h4>
            </div>
            <div class="col">
                <h4>Buscar jugadores</h4>
                <form action="" method="POST" class="form-inline my-2 container">
                    <div class="row">
                        <div class="col">
                           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</main>

<?php
    require_once 'views/partials/footer.php';
?>