<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../upload/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="../upload/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src='../upload/bootstrap3.3/js/jquery-3.2.1.min.js'></script>
    </head>
    <body>
        
        <form method="post">
            <div class="container">
                <label>CRIE SUA SENHA:</label><br>           
                <input type="text" placeholder="Digite a sua Senha" name="senhamd5">
                <button type="submit"  class="btn btn-success">ENVIAR</button><br>
                <button type="reset" class="btn-warning">LIMPAR</button>
                
        </form></div><br>
        <?php
        $semhamd5 = $_POST['senhamd5'];
        echo "<label>Sua senha no formato normal:</label> $semhamd5 <br>";
        echo "<label title='Copie e cole no BANCO DE DADOS'>Sua senha no formato md5:</label> ".md5($semhamd5)." # ";
        ?>
    </body>
</html>
