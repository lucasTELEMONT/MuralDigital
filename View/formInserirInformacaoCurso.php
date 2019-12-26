<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript">

            function validaCampo() {
                if (document.insertInfo.informacao.value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                    return true;
            }



        </script>
    </head>
    <body>
<center>
    <table  class="table table-hover">   
        <form action="../controle/inserirInformacaoCursoController.php"method="post">
            <tr>  
                 
                <td><div id="container"style="width: 600px;">
                   <textarea class="form-control" name="informacao" accesskey="5" rows="4" placeholder="Digite a informação Diárias" onsubmit="return validaCampo();"></textarea>
             <label for='disabledSelect'>Cursos</label>
                               <?php
                        require_once '../DAO/CursoDAO.php';
                        session_start();                     
                        $cursoDAO = new CursoDAO();
                        $cursos = $cursoDAO->getAllCursoByProfessor($_SESSION["idusuario"]);  
                            foreach ($cursos as $curso)
                                {
                                echo"<input type='radio' name='idcurso' value='{$curso["idcurso"]}'>{$curso["nome"]}</input>";      
                                 }
                            echo "</select>";
                            echo "<br>";                          
                        ?>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <button type="submit" class="btn btn-dark">Inserir</button>&nbsp;&nbsp;&nbsp;       
             <button type="reset" class="btn btn-dark">Limpar</button>
             <td><button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button></td>
             </div>
                    </td>
            </tr>
            <tr>
                    <input type="hidden" name="tipo" value="2">
            </tr>
          
              <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover">
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
