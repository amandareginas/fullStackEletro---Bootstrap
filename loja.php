<?php
    require ('./sql/conexao.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas Lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .fixarRodape {
            bottom: 0;
            position: fixed;
            width: 90%;
            text-align: center;
        }
    </style>
</head>

<body>
    <!--MENU-->
    <?php
    include ('menu.html');
    ?>
<div class="container">
    <header>
        <h2>Nossas lojas</h2>
    </header>

    <hr>
    <section>
        <div class="lojas">
            <h3 class="estado">Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
        </div>
        <div class="lojas">
            <h3 class="estado">São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div>
        <div class="lojas">
            <h3 class="estado">Santa Catarina</h3>
            <p class="endereco">Rua Major &Aacute;vila, 370</p>
            <p class="endereco">Vila Mariana</p>
            <p class="telefone">(47) 5555-5555</p>
        </div>
    </section>
</div>
    <?php
    include ('rodape.html');
    ?>
</body>

</html>