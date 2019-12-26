<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<center>
    <table  class="table table-hover">   
        <form action="../controle/atualizarInformacaoProfessor.php"method="post">
             <?php 
            require_once '../DAO/InformacaoDAO.php';
            $idinformacao = $_GET["idinformacao"];
            $informacaoDAO = new InformacaoDAO();
            $informacao = $informacaoDAO->getInformacaoById($idinformacao);
                    ?>   
             <input type="hidden" name="idinformacao" value="<?php echo $informacao["idinformacao"] ?>" value=""/>
            <tr>  
                <td style="width: 600px"><textarea class="form-control" name="informacao" value="<?php $informacao["informacao"]?>" accesskey="5" rows="4" placeholder="Digite a informação Diárias"></textarea></td>
            </tr>
            <tr>
                    <input type="hidden" name="tipo" value="2">
            </tr>
            <tr>
                    
            
                    <td class='form-group'>                                           
                        <label for='disabledSelect'>Cursos</label>
                               <?php
                        require_once '../DAO/CursoDAO.php';
                        session_start();                     
                        $cursoDAO = new CursoDAO();
                        $cursos = $cursoDAO->getAllCursoByProfessor($_SESSION["idusuario"]);  
                            foreach ($cursos as $curso)
                                {
                                echo"<input type='checkbox' name='idcurso' value='{$curso["idcurso"]}'>{$curso["nome"]}</input>";      
                                 }
                            echo "</select>";
                            echo "<br>";      
                        ?>
                    </td>
                </tr>
              <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover">
                        <button type="submit" class="btn btn-dark">Atualizar</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-dark"><a href="ListAllInformacaoProfessor.php">Voltar</a></button>
                        
                    </td>
                </tr>     
     </table>
</center>  
        
