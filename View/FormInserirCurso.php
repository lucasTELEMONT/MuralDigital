<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css.map" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../Js/index_js.js"></script>
    </head>
    <body>
        <script>
               function validaCampo() {
                if (document.inserircurso.idusuario[].value === "")
                {
                    alert("Campo não prenchidos!");
                    return false;
                } else
                    return true;
                     }
        </script>
    <center>
        <table  class="table table-hover">   
            <form action="../controle/inserirCurso.php"method="post" name="inserircurso" onsubmit="return validaCampos();">
                <tr> 
                    <td class="table-hover"></td>                                      
                    <td class="pull-l"><label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;">&Downarrow;Inserir curso</label>                                           
                    </td>
                </tr>
                <tr>   
                    <td></td>                                           
                    <td class="pull-l">Nome do curso:<br>
                        <input type="text"name="nome" placeholder="Digite o curso"size="40"required></td>
                </tr>
                <tr>   
                    <td></td>                                           
                    <td class="pull-l">Disciplina:<br>
                        <input type="text"name="disciplina" placeholder="Digite a discplina do curso" size="25"required></td><br><br>
                </tr> 

                <tr>
                    
                    <td>  </td>             
                    <td class='form-group'>                                           
                        <label for='disabledSelect'>Professores</label>
                               <?php
                        require_once '../DAO/UsuarioDAO.php';
                        $usuarioDAO = new UsuarioDAO;
                        $usuarios = $usuarioDAO->getUsuarioByProfessor();
                        
                        
                        
                      
                            
                            foreach ($usuarios as $usuario) {
                                echo"           



                                                 <input type='checkbox' name='idusuario[]' value='{$usuario["idusuario"]}'>{$usuario["nome"]}</input>";
                              
                            }
                            echo "</select>";
                            echo "<br>";
                      
//                        ?>

                    </td>
                </tr>
                <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover">
                        <button type="submit" class="btn btn-dark">Inserir</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar os Campos</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button>
                    </td>
                </tr>     
        </table>
    </center> 
         <?php
                  if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
               ?>
        
    </body>
</html>
