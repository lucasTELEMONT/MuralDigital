<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                    

                    </td>
                </tr>
                <tr>   
                                <td></td>                                           
                                <td class="pull-l">Nome:<br>
                                    <input type="text"name="nome" value="<?php echo $usuario["nome"] ?>"placeholder="Digite o nome do professor" size="60" value="" required></td></tr>
                <tr>
                    <td>
                    <td class="pull-l">Imagem:
                     <img src="../DTO/Upload.php<?php echo $usuario['imagem']?>"width="60" height="65" />
                  <input type="file"name="imagem">
                
                    <label class="radio-inline">
                         Sexo:<br>
                         <input type="radio" name="sexo" id="inlineRadio1" value="Masculino" <?php if($usuario["sexo"] === "Masculino"){echo "checked";} ?> >Masculino
                       </label>
                      <label class="radio-inline">
                      <input type="radio" name="sexo" id="inlineRadio2" value="Feminino" <?php  if($usuario["sexo"] === "Feminino"){echo "checked";} ?>>Feminino
                      </label>
                </td>
            
                </tr>
 
                  
                        <tr>   
                                <td></td>                                           
                                <td class="pull-l">Matrícula<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text"name="matricula" value="<?php echo $usuario["matricula"] ?>"placeholder="Crie um nome de usuário" size="20" required>
                        </tr>
             <tr>   
                                <td></td>                                           
                                <td class="pull-l">Senha<div class="input-group"><span class="btn-defaul"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="text"name="senha" placeholder="Deixe em branco para não alterar a senha!" size="40" >
                                        
                                    </div> 
                                        </td>
                                        </tr>
                                           <tr>   
                                <td class="table-hover"></td>                                           
                                <td class="pull-l"><table border="1" align="center">
                                    </tr>
                <tr>
                   <input type="hidden" name="perfil" value="2"></th>
                    <th></th>
                </tr>
                <tr>   
                                                            
                    <td>
                     
                            <button type="submit" class="btn btn-dark">Atualizar</button></a>
                            <button type="button" class="btn btn-dark"><a href="ListAllProfessores.php">Voltar</a></button>
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
