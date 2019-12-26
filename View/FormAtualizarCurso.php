<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script language="javascript">
             function validaCampo() {
                if (document.atualizarcurso.nome.value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                if (document.atualizarcurso.disciplina.value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                if (document.atualizarcurso.idusuario[].value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                    return true;
        </script>
    </head>
    <body>
       
         <center>
        <table  class="table table-hover">   
            <form action="../controle/atualizarCurso.php" method="post" name="atualizarcurso" onsubmit="return validaCampo();">
                 <?php require_once '../DAO/CursoDAO.php';
                    $idcurso = $_GET["idcurso"];
                    $cursoDAO = new CursoDAO();
                    $curso = $cursoDAO->getCursoById($idcurso);
                    ?>   
                     <input type="hidden" name="idcurso" value="<?php echo $curso["idcurso"]?> "/>
                <tr> 
                    <td class="table-hover"></td>                                      
                    <!--<td class="pull-l"><label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;">&Downarrow;Atualizar curso</label>-->                                           
                    </td>
                </tr>
                <tr>   
                    <td></td>                                           
                    <td class="pull-l">Nome do curso:<br>
                        <input type="text" name="nome" value="<?php echo $curso["nome"];?>" placeholder="Atualize o nome do curso" size="40" required></td>
                </tr>
                <tr>   
                    <td></td>                                           
                    <td class="pull-l">Disciplina:<br>
                        <input type="text"name="disciplina" id="Disciplina" value="<?php echo $curso["disciplina"]?> "placeholder="Atulize o nome do curso" size="25" required></td><br><br>
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
                               $verificado = ""; 
                            foreach ($curso["usuario"] as $professor){
                               if($professor["nome"] === $usuario["nome"]){
                                   $verificado = "checked";
                               };
                            }
                            echo"           



                                                 <input type='checkbox' id='professor' name='idusuario[]' value='{$usuario["idusuario"]}' $verificado>{$usuario["nome"]}</input>";
                              
                            }
                            echo "</select>";
                            echo "<br>";
                        
//                        ?>

                    </td>
                </tr>
                <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover">
                        <button type="submit" class="btn btn-dark" value="inserir">Inserir</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar os Campos</button>
                        <button type="button" class="btn btn-dark"><a href="ListAllCursos.php">Voltar</a></button>
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
