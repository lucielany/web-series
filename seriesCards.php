
<!-- Inicio de filtro por género -->
<div class="d-flex flex-direction: row">
    <h5 class="justify-content-end">Busca por genero</h5>
    <select class="form-select text-light bg-dark justify-content-end" name="genero" id="genero" onchange="filtrarGenero();">
        <option value="todas">Ver todos</option>
        <option value="drama">Drama</option>
        <option value="comedia">Comedia</option>
        <option value="terror/misterio">Terror/Misterio</option>
        <option value="fantasia">Fantasia</option>
        <option value="ciencia_ficcion">Ciencia Ficción</option>
    </select>
</div>
<!-- Fin de filtro por género -->

</div>

<?php

$conexion = conectar_db();

$consulta = "SELECT * FROM series ORDER BY titulo";

$resultado_consulta = $conexion->query($consulta);

$resultado_consulta->fetch_assoc();


echo '<div id="cards_series" class="container_cards" >';


foreach ($resultado_consulta as $serie) {
    echo '
        
        <a class= "ver_mas" href="serie.php?id_series=' . $serie["id_series"] . '">
        <div class="card text-bg-dark mb-3 card_serie">
          <img src="./Posters/' . $serie["poster"] . '" class="card-img-top img_cards img-responsive" alt="poster de ' . $serie["poster"] . '">
          <div class="card-body d-flex flex-column mb-3">
            <h5 class="card-title p-2"">' . $serie["titulo"] . '</h5>
            <!--<img src="./Estrellas/4.png" width="150px">-->
            <p class="card-text p-2"">' . $serie["descripcion"]  . '</p>
            <button class="btn btn-warning botones_vermas p-2 "><b>VER MAS</b></button>
          </div>
        </div>
        </a>
        ';
}

echo '</div>';


/*
foreach ($resultado_consulta as $serie) {
    echo '
        <a href="serie.php?id_series=' . $serie["id_series"] . '" id="ver_mas" style="color:white;text-decoration:none;">
        <div class="card text-bg-dark mb-3 card_serie">

          <img src="./Posters/' . $serie["poster"] . '" class="card-img-top img_cards img-responsive" alt="poster de ' . $serie["poster"] . '">
          <div class="card-body d-flex flex-column mb-3">
            <h5 class="card-title p-2"">' . $serie["titulo"] . '</h5>
            <!--<img src="./Estrellas/4.png" width="150px">-->
            <p class="card-text p-2"">' . substr($serie["descripcion"], 0, 70)  . '...</p>
            <button class="btn btn-warning botones_vermas p-2"><b>VER MAS</b></button>
          </div>
        </div>
        </a>';
}

echo '</div>';
*/
?>
<div class="d-flex flex-column m-5 align-items-center gap-4">
    <h3 class="">¿No encuentras la serie que buscas?</h3>
    <a href="add_serie.php" class="btn btn-warning botones_vermas p-3 btn-lg"><b>Añádela</b></a>
</div>
<script src="./scripts.js"></script>