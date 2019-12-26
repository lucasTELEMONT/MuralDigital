<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../Js/index_js.js"></script>
    </head>
    <body>

             <div class="container">
            <form action="../controle/CadastrarUsuario.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                     <label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;">Cadastro de Professor</label>  
                </div>
          
                <div class="form-group" style="width: 250px;">
                    <label for="usr">Nome:</label>
                    <input type="text" class="form-control" id="usr" name="nome" required>                                        
                </div>
                           
                            Sexo:
                            <label class="radio-inline">
                                <input type="radio" name="sexo" id="inlineRadio1" value="Masculino" checked="">Masculino
                            </label>
                        <label class="radio-inline">
                            <input type="radio" name="sexo" id="inlineRadio2" arial-label="10px" value="Feminino">Feminino
                        </label>
               

                <div class="form-group">
                    <label for="InputFile">Imagem:</label>                       
                    <p class="help-block"><img src="../DTO/Upload.php<?php echo $usuario['imagem'] ?>"width="60" height="65" /></p>
                        <input type="file" id="InputFile" name="imagem">
                 </div>
             


                <tr>   
                    <td></td>                                           
                    <td class="pull-l">Matrícula<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text"name="matricula"placeholder="Crie um nome de usuário" size="20" required>
                            </tr>
                            <tr>   
                                <td ></td>                                           
                                <td class="pull-l">Senha<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="text"name="senha"placeholder="Crie uma 'SENHA'" size="20" required>



                                        <tr>   
                                            <td class="table-hover"></td>                                           
                                            <td class="pull-l"><table border="1" align="center">
                                                    <tr>
                                                    <input type="hidden" name="perfil" value="2"></th>
                                                    <th></th>
                                        </tr>
                                    </table></td></tr>
                            <tr>   
                                <td class="table-hover"></td>                                           
                                <td class="table-hover">
                                    <button type="submit" class="btn btn-dark">Cadrastrar</button>&nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-dark">Limpar Tudo</button>&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button>
                                </td>
                                </form>        
                                </table>

                                <?php
                                if (!empty($_GET["msg"])) {
                                    echo $_GET["msg"];
                                }
                                ?>
                                </body>
                                </html>
