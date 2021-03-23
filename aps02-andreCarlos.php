<?php 
       session_start();
?>

<!doctype html>
<html lang="pt/br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <title>Aprimorando Web com PHP</title>
</head>

<body>
    <nav class="navbar  bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="itensNavegacao " href="#page-top">Aprimorando Web com PHP</a>
        </div>
    </nav>

    <div class="principal">
        <div class="centralizarTextoPrincipal ">
            <h1 class="tituloPrincipal text-uppercase mb-0">escolha a atividade </h1>
        </div>

        <div class="divider-custom divider-light ">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row centralizarTextoPrincipal">
            <div class="col-xs-12 col-sm-4 col-md-2 ">
                <a href="aps01-andreCarlos.php" class="itensAtividades text-uppercase">Atividade 01</a>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-2">
                <a href="aps02-andreCarlos.php" class="itensAtividades text-uppercase">Atividade 02</a>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-2">
                <a href="aps03-andreCarlos.php" class="itensAtividades text-uppercase">Atividade 03</a>
            </div>
        </div>
    </div class="col-xs-12 col-sm-4 col-md-2">

    <div class="divisao centralizarTextoPrincipal">
        <h4 class=" TituloAtividade text-uppercase">Atividade prática supervisionada - 02</h4>
    </div>

    <div class="centralizarTextoPrincipal ">
            <h2 class="TituloSecundario text-uppercase mb-0 " >AINDA NÃO EXISTE <i class="fas fa-frown"></i></h2>
    </div>
</body>

</html> 