<?php
require_once "views/partials/head.php";
require_once "views/partials/nav.php";
?>

<main>
    <div class="container d-flex flex-column justify-content-center align-items-center  m-4">
        <h2 class="text-center mx-1">Seleccione la temporada</h2>
        <form action="/temporada" method="GET" class="w-100  d-flex flex-column align-items-center">
            <select class="form-select w-50 selectpicker" data-live-search="true" size="3" name="s" id="temporada">
                <script>
                for (var i = 25; i > 10; i--) {
                    if(i>10)
                    document.write(`<option value="20${i-1}-20${i}">Temporada ${i-1}/${i}</option>`);
                    
                }
                </script>
            </select>
            <button type="submit" class="btn btn-danger w-25 m-4">Ir</button>
        </form>

    </div>
</main>
<?php
require_once "views/partials/footer.php";
?>