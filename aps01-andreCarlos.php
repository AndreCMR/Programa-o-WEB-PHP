<?php
session_start();

$Nome = "André Carlos";
$SobreNome = "Martins Ruiz";
$Endereco = "Rua Jardins";
$NumeroCasa = "16";
$Bairro = "bairro novo";
$Cidade = "Porto Velho";
$Estado =  "Rondônia";
$Email = "andrecmrb@gmail.com";
$Telefone =  "9999999";
$NomePais =  "pai e mae";
$DataNascimento = "17/10/2001";
$DataHoje = "19/03/2021";
$IdadeAtual = "19";
$CadastroAtivo = "Sim";
$EstadoCivil = "Solteirasso";

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
        <h4 class=" TituloAtividade text-uppercase">Atividade prática supervisionada - 01</h4>
    </div>


    <div class="container">
        <form method="POST" action="Index.php">
            <div class="row divisao">

                <div class="col ">
                <p class="text-uppercase mb-3"><strong>nome</strong></p>
                    <td><?php echo $Nome ?></td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>SobreNome</strong></p>
                        <?php echo $SobreNome?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Endereço</strong></p>
                        <?php echo $Endereco?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Numero da Casa</strong></p>
                        <?php echo $NumeroCasa?>
                    </td>
                </div>

            </div>

            <div class="row divisao">

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Bairro</strong></p>
                        <?php echo $Bairro?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Cidade</strong></p>
                        <?php echo $Cidade?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Estado   </strong></p>
                        <?php echo $Estado?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Email</strong></p>
                        <?php echo $Email?>
                    </td>
                </div>

            </div>

            <div class="row divisao">

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Telefone</strong></p>
                        <?php echo $Telefone?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Nome dos Pais</strong></p>
                        <?php echo $NomePais?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Data de Nascimento</strong></p>
                        <?php echo $DataNascimento?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Data de Hoje</strong></p>
                        <?php echo $DataHoje?>
                    </td>
                </div>
            </div>

            <div class="row divisao">
                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Idate Atual</strong></p>
                        <?php echo $IdadeAtual?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Cadastro Ativo</strong></p>
                        <?php echo $CadastroAtivo?>
                    </td>
                </div>

                <div class="col">
                    <td>
                    <p class="text-uppercase mb-3"><strong>Estado Civil</strong></p>
                        <?php echo $EstadoCivil?>
                    </td>
                </div>

                <div class="col">
                   <p></p>
                </div>
            </div>

        </form>
    </div>
    </div>




</body>

</html>

<script>
function abrir(tela) {
    window.location.href = tela;
}
</script>