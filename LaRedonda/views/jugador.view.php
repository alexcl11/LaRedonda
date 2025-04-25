<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
  
  <div class="player-page">
    <div class="player-header">
      <img src="<?= $player['strCutout'] ?: 'https://via.placeholder.com/150' ?>" alt="<?= $player['strPlayer'] ?>">
      <div class="player-details">
        <h1><?= $player['strPlayer'] ?></h1>
        <p><strong>Fecha de nacimiento:</strong> <?= $player['dateBorn'] ?></p>
        <p><strong>Nacionalidad:</strong> <?= $player['strNationality'] ?></p>
        <p><strong>Equipo:</strong> <?= $player['strTeam'] ?></p>
        <p><strong>Posición:</strong> <?= $player['strPosition'] ?></p>
        <p><strong>Estado:</strong> <?= $player['strStatus'] ?></p>
      </div>
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