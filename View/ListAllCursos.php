<?php
require_once '../DAO/UsuarioDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="../bootstrap/js/jquery-3.2.1.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <style>
            th{color: forestgreen;font-weight: bolder;} 
            td { color: brown;font-weight: bolder;}
        </style>
    </head>
    <body>
        <table class="table table-hover">
        <td>Cursos</td>
        <td><td><button type='button' class='btn btn-dark'><a href='PaginaVoltar.php'>Voltar</a></button></td></td>
    </table>
        <?php
        require_once '../DAO/CursoDAO.php';
        
        $cursoDAO = new CursoDAO();
        $cursos = $cursoDAO->getAllCurso();
//        $cursoDAO = $cursoDAO->ProfessorByCurso();
        
//        if(isset($curso["idusuario"])){
//            
//        }
       
        foreach ($cursos as $curso) {
        echo "<table  class='table table-hover' style='width:600px'>";       
        echo "<tr>";
        echo " <td>Curso</td>";        
        echo "<td class='pull-l'>";
        echo "<th>{$curso["nome"]}</th>";
        echo "<td>Disciplina:</td>";
        echo "<th>{$curso["disciplina"]}</th>";
        echo "<td>Professor:</td>";
        foreach($curso["usuarios"] as $usuario){
        echo "<th>{$usuario["nome"]}</th>";
        }
        echo "<th><a href='./FormAtualizarCurso.php?idcurso={$curso["idcurso"]}'"
            . "class='glyphicon glyphicon-edit'title='Atualizar CURSO'onclick=\"return confirm('Você deseja Atualizar esse curso?'); return false;\">ATUALIZAR"
            . "</a></th>";
        echo "<th><a href='../controle/excluirCursoController.php?idcurso={$curso["idcurso"]}' "
            . "class='glyphicon glyphicon-trash'title='EXCLUIR'onclick=\"return confirm('Tem certeza que deseja excluir esse curso?'); return false;\">EXCLUIR"
            . "</a></th>";
        echo "</td>";
        echo "</tr>";                       
}
        echo "</table>";
        echo "<br>";
        echo "<br>";
        
        // put your code here
        ?>
    </body>
</html>
