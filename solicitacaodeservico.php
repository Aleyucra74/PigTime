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
    <link rel="stylesheet" href="./css/headerr.css">
    <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="css/cadastroserv.css">
    <title>Cadastro de serviços</title>
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
    <section class="container">
    <div class="container d-flex justify-content-center mt-4">
        <h1 class="col-sm-10">Cadastro de Serviços</h1>
    </div>
    </section>
    <section class="container d-flex align-items-center justify-content-center mt-4">
        <form id="serviceForm" action="" method="POST">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Digite o serviço">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Digite o local">
            </div>
            <div class="form-group">
                <input class="form-control" id="hourStart" type="time" placeholder="Hora inicial">
            </div>
            <div class="form-group">
                <input class="form-control" id="hourEnd" type="time" placeholder="Hora final">
            </div>
            <div class="form-group">
                <label for="imagemInput" class="btn btn-primary col-12">Enviar imagem</label>
                <input type="file" name="imagem" id="imagemInput" class="d-none">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="" id="formServ" cols="30" rows="10"
                    placeholder="Descrição dos serviços"></textarea>
            </div>
            <div class="form-group" id="submit">
                <label for="aceitartermos">
                    <input class="" type="checkbox" id="aceitartermos"> Aceitar termos </label>
                <button class="btn btn-primary form-control" type="submit">Enviar</button>
            </div>
        </form>

    </section>
    <!-- Incluindo Footer -->
    <?php
      include ('./layouts/footer.php');
    ?>
