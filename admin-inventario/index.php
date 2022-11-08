<?php require "./inc/sesionStart.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include "./inc/headsidebar.php" ?>

  <title>Administrador de inventario</title>
</head>

<body>
  <?php


  if (!isset($_GET['vista']) || $_GET['vista'] == "") {
    $_GET['vista'] = "login";
  }

  if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
    #include "./inc/navbar.php";
    include "./inc/sidebar.php";
    
    include "./vistas/" . $_GET['vista'] . ".php";
    #include "./inc/script.php";
  } else {

    if ($_GET['vista'] == "login") {
      include "./vistas/login.php";
    } else {
      include "./vistas/404.php";
    }
  }

  ?>
</body>

</html>