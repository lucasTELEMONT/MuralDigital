
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>

    </head>
    <body>

        <table  class="table table-hover">  
            <div class="container">
                <form action="../controle/CadastrarUsuario.php" enctype="multipart/form-data" method="post">

                    <tr> 
                        <td class="table-hover"></td>                                      
                        <td class="pull-l"><label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;">Cadastrar  Coordenador</label>                                
                        </td>
                        
                    </tr>
                    <tr>   
                        <td></td>                                           
                        <td class="pull-l">Nome<br>
                            <input type="text"name="nome"placeholder="Digite o nome do Coordenador" size="60" required>
                                                                  
                        </td>
                    </tr>
                    <tr>
                           <td></td>
                         <td class="pull-l"> Sexo:
                    <label class="radio-inline">
                            <input type="radio" name="sexo" id="inlineRadio" value="Masculino" checked> Masculino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="inlineRadio" value="Feminino"> Feminino
                    </label>
                    </td>

                        </tr>
                    <tr>
                        <td ></td>
                        <td class="pull-l">Imagem
                            <img src="../DTO/Upload.class.php<?php echo $usuario['imagem'] ?>"width="60" height="65" /><input type="file"name="imagem">
                        </td>
                    </tr>
                    <tr>   
                        <td ></td>                                           
                        <td class="pull-l">Matricula<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="matricula"placeholder="Digite a matricula" size="20" required>
                                </td></tr>                       
                                <tr>   
                                    <td></td>                                           
                                    <td class="pull-l">Senha<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password"name="senha"placeholder="Digite uma senha!" size="20" required>                                     

                                            <tr>   
                                                <td class="table-hover"></td>                                           
                                                <td class="pull-l"><table border="1" align="center">
                                                        <tr>
                                                        <input type="hidden" name="perfil" value="1"><th></th>
                                            </tr>
                                        </table></td></tr>
                                <tr>   
                                    <td class="table-hover"></td>                                           
                                    <td class="table-hover">
                                        <button type="submit" class="btn btn-dark">Cadastrar</button>&nbsp;&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-dark">Limpar</button>
                                        <button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button>
                                    </td>
                                    </form>  

                                    </table>

                                    <?php
                                    if (!empty($_GET["msg"])) {
                                        echo $_GET["msg"];
                                    }
                                    // put your code here
                                    ?>
                                    </body>
                                    </html>
