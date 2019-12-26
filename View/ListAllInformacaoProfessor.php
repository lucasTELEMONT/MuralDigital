<!DOCTYPE html>
<html>   
   <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <tr>
        <td>Informação dos Cursos</td>
        <td><td><button type="button" class="btn btn-dark"><a href="PaginaVoltar.php">Voltar</a></button></td></td>
    </tr>
    <body>
<?php
require_once '../DAO/InformacaoDAO.php';
   session_start();
          if(isset($_SESSION["idusuario"])){
              $idusuario = $_SESSION["idusuario"];
              
              $informacaoDAO = new InformacaoDAO();
              $informacoes = $informacaoDAO->getInformacaoByUsuario($idusuario);
              foreach ($informacoes as $informacao){
                  echo"<p>{$informacao["nome"]}:{$informacao["informacao"]} </p>";               
             echo "<th><a href='./formAtualizarInformacaoCurso.php?idinformacao={$informacao["idinformacao"]}'"
            . "class='glyphicon glyphicon-edit'title='Atualizar Informação do curso'onclick=\"return confirm('Você deseja atualizar o Professor ?'); return false;\">Atualizar"
            . "</a></th>";
              echo "<th><a href='../controle/excluirInformacaoProfessorController.php?idinformacao={$informacao["idinformacao"]}' "
            . "class='glyphicon glyphicon-trash'title='Excluir Informação do curso'onclick=\"return confirm('Tem certeza que deseja Excluir essa Informacao?'); return false;\">Excluir"
            . "</a></th>";           
                  }
               
              
          }else{ 
            echo "<script>";
            $msg = "Usuário não logado!";
            echo "window.location.href = '../index.php?msg={$msg}';";
            echo "</script> ";              
        }
                                        
                                 

?>








</body>
</html>













                                    