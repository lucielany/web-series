
<div class="container_main">
<!-- Banner -->
<img src="./img/series1.png" class="d-block w-100 fondo_main" alt="series">

<div class="container_buscador_series d-flex p-2 m-5">

<!-- Inicio buscador -->
<div class="container h-100">
    <div class="d-flex justify-content-center h-100 buscador">
        <div class="searchbar">
        <input class="search_input" type="text" name="filtro" placeholder="Buscar..."  onkeyup="filtrar()"  id='filtro'>
        <a href='#' class="search_icon"><i class="bi-search"></i></a>
        </div>
    </div>
</div>
<!-- Fin buscador -->

 <?php include("seriesCards.php");?>
 
</div>
