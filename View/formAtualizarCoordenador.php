<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" ></script>
        <script>
            //adiciona máscara de  CPF function MascaraCPF(cpf)

        </script>
    </head>
    <body>
        <?php
        require_once '../DAO/UsuarioDAO.php';
        $idusuario = $_GET["idusuario"];
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getUsuarioById($idusuario);
        ?>
       
        <table  class="table table-hover">              
            <form action="../controle/atualizarUsuarioController.php"method="post">
                 <input type="hidden" name="idusuario" value="<?php echo $usuario["idusuario"] ?>"/>
                <tr> 
                    <td class="table-hover"></td>                                      
                    <td class="pull-l"><label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;"><div class="glyphicon glyphicon-pencil"/>Atualizar Cadastro do Professor</label>              
                </tr>
                <tr>   
                                <td class="info"></td>                                           
                                <td class="pull-l">Nome:<br>
                                    <input type="text"name="nome" value="<?php echo $usuario["nome"] ?>"placeholder="Atualize o nome do coordenador" size="60" value="" required></td></tr>
                <tr>
                    <td class="info">
                    <td class="pull-l">Imagem:
                     <img src="../DTO/Upload.php<?php echo $usuario['imagem']?>"width="60" height="65" />
                  <input type="file"name="imagem">
                
                    <label class="radio-inline">
                         Sexo:<br>
                        <input type="radio" name="sexo" id="inlineRadio1" value="Masculino" <?php if($usuario["sexo"] === "Masculino"){echo "checked";} ?>>Masculino
                       </label>
                      <label class="radio-inline">
                      <input type="radio" name="sexo" id="inlineRadio2" value="Feminino"<?php if($usuario["sexo"] === "Feminino"){echo "checked";} ?>>Feminino
                      </label>
                </td>
            
                </tr>
 
                  
                        <tr>   
                                <td class="info"></td>                                           
                                <td class="pull-l">Matrícula<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text"name="matricula" value="<?php echo $usuario["matricula"] ?>"placeholder=" Atualize a matrícula para acessar o site" size="20" required>
                        </tr>
             <tr>   
                                <td class="info"></td>                                           
                                <td class="pull-l">Senha<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="text"name="senha" placeholder="Deixe em branco para não alterar a senha!" size="40" >
                               
                                           <tr>   
                                <td class="table-hover"></td>                                           
                                <td class="pull-l"><table border="1" align="center">
                                    </tr>
                <tr>
                   <input type="hidden" name="perfil" value="1"></th>
                    <th></th>
                </tr>                
                <td class="table-hover"></td>                                           
                <td class="table-hover">
                   <button type="submit" class="btn btn-dark">Atualizar</button></a>
                    <input type="button" class="btn btn-dark" value="Voltar" onClick="history.go(-1)">
                    <button type="reset"class="btn btn-dark">Limpar</button>
                                </td>
            </tr>
        </form>        
  </table>
               <?php
                  if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
               ?>
        
    </body>
</html>
