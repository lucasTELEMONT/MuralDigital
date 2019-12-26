<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../Js/index_js.js"></script>
    </head>
    <body>
        <?php
        require_once '../DAO/slideDAO.php';
        require_once '../DTO/Uploadimagem.php';
        require_once '../DTO/Upload.php';       
        $slideDAO = new slideDAO();
        $slides = $slideDAO->getAllInformacaoSlide();
        ?>
    <tr>
         <table class="table table-hover">
        <td>Imagens de Slide</td>
        <td> <button type="button" class="btn btn-dark"><a href="opcaoInformacaoListar.php">Voltar</a></button></td>
         </table>
    </tr>    
        <?php
//                    echo '<div class="item active">';
//                    echo "<img src='url() ' style='width: 300px'>";
//                    echo '</div>';
        foreach ($slides as $slide) {
        echo "<table  class='table table-hover' style='width:600px'>";       
        echo "<tr>";
        echo " <td>Imagens</td>";
        echo "<td class='pull-l'>";
        echo "<img src='../upload/" . $slide['slide'] . "' style='width: 100px'>"
        . "</td>";      
           echo "<th><a href='./formAtualizarInformacaoSlide.php?idslide={$slide["idslide"]}'"
            . "class='glyphicon glyphicon-edit'title='Atualizar Professor'onclick=\"return confirm('Você deseja atualizar o Professor ?'); return false;\">Atualizar"
            . "</a></th>";      
        echo "<td><a href='../controle/excluirInformacaoSlideController.php?idslide={$slide["idslide"]}' "
            . "class='glyphicon glyphicon-trash'title='Excluir Slide'onclick=\"return confirm('Tem certeza de que deseja Excluir essa Informacao?'); return false;\">Excluir"
            . "</a></td>";
            echo "</tr>";            
        echo"</table>";
        }


     
        ?>
    </body>
</html>
