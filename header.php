<?php session_start();?>

<!-- FUNCIONES -->
<?php include("funciones.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <link rel = "stylesheet" href = "./css/estilos.css">

</head>
<header class="row navbar fixed-top" >
    <div class="col-1">
        <img class="logo" src="./img/logo.png" alt="logo" title="logo">
    </div>
    <div class="col-9">
        <ul class="menu_superior">
            <li class="menu_sup_item">
                <a href="index.php">Inicio</a>
            </li>
            <li class="menu_sup_item">
                <a href="#cards_series">Series</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Opiniones</a>
            </li>

        </ul>
    </div>
    <div class="col-2 sesion">
        <?php
        if (isset($_SESSION["usuario"])) {
            echo "<b>Hola, " . $_SESSION["usuario"] . "</b><br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
        ?>
            <!-- Button trigger modal -->
            <a href="login.php" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button type="button" class="btn btn-outline-warning">Iniciar Sesión
            </button></a>
        <?php }
        ?>
            
    </div>

</header>

<?php include("login.php"); ?>