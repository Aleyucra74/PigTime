<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f0f5a4c16a.js"></script>
    <link rel="stylesheet" href="./css/menuMobile.css">
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <link rel="stylesheet" href="./css/headerr.css">
    <title>Teste Includes e Bootstrap</title>
</head>
<body>
    <!-- Incluindo header -->
    <?php
      include ('./layouts/header.php');
    ?>
    <!-- Incluindo menuMobile -->
    <?php
      include ('./layouts/menuMobile.php');
    ?>
    <!-- Incluindo MenuLaterl -->
    <?php
      include ('./layouts/menuLateral.php');
    ?>
    <!-- Incluindo Footer -->
    <?php
      include ('./layouts/footer.php');
    ?>


    