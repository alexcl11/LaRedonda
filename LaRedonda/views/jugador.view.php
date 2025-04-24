<?php
    require_once 'views/partials/head.php';
    require_once 'views/partials/nav.php';
?>

<main>
  <style>
    

    .player-page {
      max-width: 900px;
      margin: auto;
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .player-header {
      display: flex;
      gap: 2rem;
      align-items: center;
      margin-bottom: 2rem;
    }

    .player-header img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #ddd;
    }

    .player-details h1 {
      margin: 0;
      font-size: 2rem;
      color: #222;
    }

    .player-details p {
      margin: 0.3rem 0;
      font-size: 1rem;
      color: #555;
    }

    .field-container {
      margin-top: 2rem;
      text-align: center;
    }

    .football-field {
      width: 100%;
      max-width: 600px;
      height: 400px;
      background: linear-gradient(to bottom, #4CAF50 0%, #2E7D32 100%);
      border: 5px solid white;
      border-radius: 20px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .player-position {
      position: absolute;
      background: rgba(255, 255, 255, 0.9);
      color: #000;
      padding: 0.5rem 1rem;
      border-radius: 10px;
      font-weight: bold;
      font-size: 0.9rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Posiciones comunes (ajustables) */
    .Centre-Back { top: 65%; left: 45%; }
    .Defender { top: 70%; left: 35%; }
    .Defensive-Midfield { top: 50%; left: 45%; }
    .Midfielder { top: 40%; left: 50%; }
    .Attacking-Midfield { top: 30%; left: 55%; }
    .Forward { top: 20%; left: 50%; }

    @media (max-width: 768px) {
      .player-header {
        flex-direction: column;
        align-items: center;
      }

      .player-header img {
        width: 120px;
        height: 120px;
      }

      .player-details h1 {
        font-size: 1.5rem;
      }
    }
  </style>


  <div class="player-page">
    <div class="player-header">
      <img src="<?= $player['strThumb'] ?: 'https://via.placeholder.com/150' ?>" alt="<?= $player['strPlayer'] ?>">
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