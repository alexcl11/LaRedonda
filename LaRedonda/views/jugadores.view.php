<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Jugadores Destacados</h4>
                <?php foreach($featuredPlayers as $player):?>
                    <a href="<?=BASE_PATH?>/jugador" style="text-decoration: none;"><div class="featured-card">
                        <img class="featured-img" src="<?= $player['strCutout'] ?: 'https://via.placeholder.com/50' ?>" alt="Foto de <?= $player['strPlayer'] ?>">
                        <div class="featured-name"><?= $player['strPlayer'] ?></div>
                    </div></a>
                <?php endforeach;?>
            </div>
            <div class="col">
                <h4>Buscar jugadores</h4>
                <form action="" method="POST" class="form-inline my-2 container">
                    <div class="row">
                        <div class="col">
                            <input class="form-control mr-sm-2" type="search" <?=isset($name) ? 'placeholder="" value='.$name : 'placeholder="Buscar jugador"'?>
                                aria-label="Search" name="name">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="player-container">
                    <?php if(isset($data)): ?>
                        <?php foreach($data['player'] as $player): ?>
                        <?php if($player['strSport']=='Soccer'):?>
                            <div class="player-card">
                                <img src="<?= $player['strCutout'] ?: '/views/img/placeholder.png' ?>"
                                    alt="Imagen de <?= $player['strPlayer'] ?>">
                                <div class="player-name"><?= $player['strPlayer'] ?></div>
                            </div>
                        <?php endif;?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

</main>

<?php
    require_once 'views/partials/footer.php';
?>