<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<footer class="text-center text-lg-start bg-danger text-muted mt-5">

  <section class="d-flex justify-content-center justify-content-lg-start p-4 border-bottom">

    <div class="me-5 text-white d-none d-lg-block">
      <span>Accede a nuestras redes sociales:</span>
    </div>



    <div>
      <a href="" class="me-4 text-white">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-white">
        <i class="bi bi-twitter-x"></i>
      </a>
      <a href="" class="me-4 text-white">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-white">
        <i class="bi bi-github"></i>
      </a>
    </div>

  </section>


  <section class="">
    <div class="container text-center text-md-start mt-5">

      <div class="row mt-3">
  
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
    
          <img class="img-fluid" src="../img/logo.png" alt="La Redonda">
          </p>
        </div>
 

   
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      
          <h6 class="text-uppercase text-white fw-bold mb-4">
            Clasificaciones
          </h6>
          <p>
            <a href="<?= BASE_PATH .'/liga?id=4328'?>" class="text-white">Premier League</a>
          </p>
          <p>
            <a href="<?= BASE_PATH .'/liga?id=4335'?>" class="text-white">La Liga</a>
          </p>
          <p>
            <a href="<?= BASE_PATH .'/liga?id=4332'?>" class="text-white">Serie A</a>
          </p>
          <p>
            <a href="<?= BASE_PATH .'/liga?id=4331'?>" class="text-white">Bundesliga</a>
          </p>
        </div>
       

       
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
 
          <h6 class="text-uppercase text-white fw-bold mb-4">
            Páginas de interés
          </h6>
          <p>
            <a href="<?= BASE_PATH; ?>" class="text-white">Inicio</a>
          </p>
          <p>
            <a href="<?= BASE_PATH . '/temporada_actual'; ?>" class="text-white">Temporada 24/25</a>
          </p>
          <p>
            <a href="<?= BASE_PATH ?>" class="text-white <?=(isset($_SESSION['currentUser'])) ? '' : 'disabled'?>">Otras temporadas</a>
          </p>
          <p>
          <a href="<?= BASE_PATH ?> " class="text-white <?=(isset($_SESSION['currentUser'])) ? '' : 'disabled'?>">Favoritos🤍</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      
          <h6 class="text-uppercase fw-bold mb-4 text-white">Contacto</h6>
          <p class="text-white"><i class="bi bi-geo-alt-fill text-white"></i> Madrid, España</p>
          <p class="text-white"><i class="bi bi-envelope-fill text-white"></i> laredonda@gmail.com</p>
          <p class="text-white"><i class="bi bi-telephone-fill text-white"></i> +34 645663721</p>
        </div>
        
      </div>

    </div>
  </section>


 
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color: black;">
    © 2025 Copyright:
    <a class="text-white fw-bold" href="<?= BASE_PATH; ?>">LaRedonda.com</a>
  </div>

</footer>

<script type="module" src="views/js/script.js"></script>
<script src="views/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>