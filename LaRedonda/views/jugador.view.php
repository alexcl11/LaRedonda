<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
    <div class="player-page">
        <div class="player-header">
            <div class="player-img-fav">
                <img src="<?= $player['strCutout'] ?: 'https://via.placeholder.com/150' ?>"
                    alt="<?= $player['strPlayer'] ?>">
                <div id="favoritos" class="col-1 " data-user-id="<?=$_SESSION['currentUser']['id']?>"
                    data-player-id="<?=$player['idPlayer']?>" data-player-name="<?=$player['strPlayer']?>"
                    data-player-img="<?=$player['strCutout']?>">
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
                    <a href="https://<?= $player['strFacebook'] ?>" target="_blank" class="text-black"><i
                            class="bi bi-facebook"></i></a>
                    <?php endif; ?>
                    <?php if ($player['strTwitter']): ?>
                    | <a href="https://<?= $player['strTwitter'] ?>" target="_blank" class="text-black"><i
                            class="bi bi-twitter-x"></i></a>
                    <?php endif; ?>
                    <?php if ($player['strInstagram']): ?>
                    | <a href="https://<?= $player['strInstagram'] ?>" target="_blank" class="text-black"><i
                            class="bi bi-instagram"></i></a>
                    <?php endif; ?>
                </p>
            </div>

        </div>

        <div class="player-description">
            <h2>Biografía</h2>
            <p><?= nl2br($player['strDescriptionES']?:$player['strDescriptionEN']) ?></p>
        </div>

      <?php
        if (!empty($formerClubs->formerteams)) {
      ?>
      <div class="former-clubs mt-5">
        <h2>Equipos Anteriores</h2>
        <div class="row">
          <?php foreach ($formerClubs->formerteams as $team) { ?>
            <div class="col-6 col-md-4 col-lg-3 mb-4 text-center">
              <a href="<?=BASE_PATH?>/equipo?t=<?=$team->strFormerTeam?>" style="text-decoration:none"><div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                  <img src="<?php echo htmlspecialchars($team->strBadge); ?>" alt="<?php echo htmlspecialchars($team->strFormerTeam); ?>" class="img-fluid mb-2" style="max-height: 80px;">
                  <h5 class="card-title"><?php echo htmlspecialchars($team->strFormerTeam); ?></h5>
                  <p class="card-text">
                    <small><strong><?php echo htmlspecialchars($team->strJoined); ?> - <?php echo htmlspecialchars($team->strDeparted); ?></strong></small><br>
                  </p>
                </div>
              </div></a>
            </div>
          <?php } ?>
        </div>
      </div>
      <?php
        }
      ?>



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