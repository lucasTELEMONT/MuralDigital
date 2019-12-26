<?php
require_once '../DAO/UsuarioDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Coordenadores</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script> 
        <script src="../Js/index_js.js"></script>
        <style>
            th{color: forestgreen;font-weight: bolder;} 
            td { color: brown;font-weight: bolder;}
        </style>
    </head>
    <table class="table table-hover">
        <td>Lista de Coordenadores</td>
        <td><button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button></td>
    </table>
        <?php
        
            $UsuarioDAO = new UsuarioDAO();
                $usuarios = $UsuarioDAO->getUsuarioByCoordenador(1);
           
        $cont = 0;
         foreach ($usuarios as $usuario){
        $cont++;   
         echo "<table  class='table table-hover' style='width:600px'>";       
        echo "<tr>";
        echo " <td>Coordenador</td>";
        echo "<td class'pull-1>";
        echo "<th>{$usuario["nome"]}</th>";
        echo "<td>Matrícula</td>";
        echo"<th>{$usuario["matricula"]}</th>";
        echo"<td>Sexo</td>";
        echo"<th>{$usuario["sexo"]}</th>";
        echo "<th><a href='./formAtualizarCoordenador.php?idusuario={$usuario["idusuario"]}'"
            . "class='glyphicon glyphicon-edit'title='Atualizar coordenado'onclick=\"return confirm('Você deseja atualizar o Coordenador ?'); return false;\">Atualizar"
            . "</a></th>";
        echo "<th><a href='../controle/excluirUsuarioController.php?idusuario={$usuario["idusuario"]}' "
            . "class='glyphicon glyphicon-trash'title='Excluir Coordenador'onclick=\"return confirm('Tem certeza que deseja Excluir esse Coordenador?'); return false;\">Excluir"
            . "</a></th>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        
        
        
}        
        ?>
    </body>
</html>
