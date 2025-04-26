<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
  <div class="player-page">
    <div class="player-header">
      <div class="player-img-fav">
        <img src="<?= $player['strCutout'] ?: 'https://via.placeholder.com/150' ?>" alt="<?= $player['strPlayer'] ?>">
        <div id="favoritos" class="col-1 " data-user-id="<?=$_SESSION['currentUser']['id']?>" data-player-id="<?=$player['idPlayer']?>" data-player-name="<?=$player['strPlayer']?>" data-player-img="<?=$player['strCutout']?>">
          <i id="heartIcon" class="bi <?=$favoritosButton?>" style="font-size: 30px;"></i>
        </div>         
      </div>
      <div class="player-details">
        <h1><?= $player['strPlayer'] ?></h1>
        <p><strong>Nombre alternativo:</strong> <?= $player['strPlayerAlternate'] ?></p>
        <p><strong>Fecha de nacimiento:</strong> <?= $player['dateBorn'] ?></p>
        <p><strong>Lugar de nacimiento:</strong> <?= $player['strBirthLocation'] ?></p>
        <p><strong>Nacionalidad:</strong> <?= $player['strNationality'] ?></p>
        <p><strong>Altura:</strong> <?= $player['strHeight'] ?></p>
        <p><strong>Peso:</strong> <?= $player['strWeight'] ?></p>
        <p><strong>Equipo:</strong> <?= $player['strTeam'] ?></p>
        <p><strong>Número:</strong> <?= $player['strNumber'] ?></p>
        <p><strong>Posición:</strong> <?= $player['strPosition'] ?></p>
        <p><strong>Lado preferido:</strong> <?= $player['strSide'] ?></p>
        <p><strong>Estado:</strong> <?= $player['strStatus'] ?></p>
        <p><strong>Redes sociales:</strong> 
          <?php if ($player['strFacebook']): ?>
            <a href="https://<?= $player['strFacebook'] ?>" target="_blank" class="text-black"><i class="bi bi-facebook"></i></a>
          <?php endif; ?>
          <?php if ($player['strTwitter']): ?>
            | <a href="https://<?= $player['strTwitter'] ?>" target="_blank" class="text-black"><i class="bi bi-twitter-x"></i></a>
          <?php endif; ?>
          <?php if ($player['strInstagram']): ?>
            | <a href="https://<?= $player['strInstagram'] ?>" target="_blank" class="text-black"><i class="bi bi-instagram"></i></a>
          <?php endif; ?>
        </p>
      </div>
      
    </div>

    <div class="player-description">
      <h2>Biografía</h2>
      <p><?= nl2br($player['strDescriptionES']?:$player['strDescriptionEN']) ?></p>
    </div>

    <div class="field-container">
      <h2>Posición en el campo</h2>
      <div class="football-field">
        <div class="player-position <?= $positionClass ?>">
          <?= $player['strPosition'] ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
    require_once 'views/partials/footer.php';
?>