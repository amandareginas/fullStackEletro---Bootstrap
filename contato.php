<?php
    require ('./sql/conexao.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!--MENU-->
    <?php
    include ('menu.html');
    ?>
<div class="container">
    <header>
        <h2>Contato</h2>
    </header>
    <hr>

    <section>
        <div class="opcao">
            <img src="./imagens/email.png" width="30px">
            contato@fullstackeletro.com
        </div>
        <div class="opcao">
            <img src="./imagens/whatsapp-logo-1-1.png" width="30px">
            (11) 99999-9999
        </div>
    </section>
    <br>
        <!-- Formulário de envio de mensagem -->
    <div>
    <form method="post" action="" class="">
        <div class="form-group">
            Nome:<br>
            <input type="text" name="nome" style="width: 500px"><br>
        </div>
        <div class="form-group">
            Mensagem:<br>
            <input type="text" name="msg" style="width: 500px" class="form control" onclick="caracteres()">
        </div>
        <div id="mostrar"></div><br>
        <input type="submit" name="submit" value="Enviar"><br>
        <script>
            function caracteres(){
            document.getElementById("mostrar").innerHTML="Máximo de 240 caracteres.";
        }
        </script>
    </form>
    </div>    

    <!-- Formulário de envio de mensagem -->
    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
    
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                echo "<hr>"; 
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";           
                }
            } 
            else{
                echo "Nenhum comentário ainda!";
            }
    ?>

    <!-- inserindo os comentários no banco de dados -->
    <?php 
        if(isset($_POST['nome']) && isset($_POST['msg'])){
            $nome = $_POST['nome'];
            $msg = $_POST['msg'];
    
            $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
            $result = $conn->query($sql);
        }
    ?>

</div>
    <?php
    include ('rodape.html');
    ?>
</body>

</html>