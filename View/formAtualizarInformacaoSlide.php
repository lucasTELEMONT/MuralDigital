<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table  class="table table-hover">   
            <form action="../controle/atualizarInformacaoSlideController.php" method="post" enctype="multipart/form-data">  
              <?php
                require_once '../DTO/Upload.php';
                require_once '../DAO/slideDAO.php';
                $idslide = $_GET["idslide"];
                $slideDAO = new slideDAO();
                $slide = $slideDAO->getslideById($idslide);
                ?>      
            <tr>
            <input type="hidden" name="idslide" value="<?php echo $slide["idslide"]?>"/>  
            <input type="file" name="imagem" value="<?php echo "<img src='../upload/" . $slide['slide'] . "' style='width: 100px'>"?>" required>
            </tr>
              <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover">
                        <button type="submit" class="btn btn-dark">Inserir</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-dark"><a href="ListAllInformacaoSlide.php">Voltar</a></button>
                    </td>
                </tr>     
     </table>
        <?php        
        ?>
    </body>
</html>
