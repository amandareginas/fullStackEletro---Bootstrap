<?php
    require ('./sql/conexao.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css" text/css>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!--MENU-->
    <?php
    include ('menu.html');
    ?>
<div class="container">
    <main>
        <h2>Seja bem-vindo(a)!</h2>
        <p>Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</p>
    </main>

    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
</div>
    <?php
    include ('rodape.html');
    ?>
</body>

</html>