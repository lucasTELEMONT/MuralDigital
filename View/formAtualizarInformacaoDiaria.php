<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <table  class="table table-hover">   
            <form action="../controle/atualizarInformacaoDiariaController.php"method="post">
                <?php
                require_once '../DAO/InformacaoDAO.php';
                $idinformacao = $_GET["id"];
                $informacaoDAO = new InformacaoDAO();
                $informacao = $informacaoDAO->getInformacaoById($idinformacao);
                ?>        
                <input type="hidden" name="idinformacao" value="<?php echo $informacao["idinformacao"] ?>" value=""/>
                <tr> 
                    <td class="table-hover"></td>                                      
<!--                    <td class="pull-l"><label class='glyphicon glyphicon-list-alt' style="font-weight: bold;font-size: 20px;color: RoyalBlue;">&Downarrow;Atualizar Informacao Diária</label>                                           -->
                    </td>
                </tr>
                <tr>  
                    <td><textarea class="form-control" name="informacao" rows="3" value="<?php echo $informacao["informacao"] ?>" placeholder="Digite a nova informacao Diária"></textarea></td>
                </tr>
                <tr>
                <input type="hidden" name="tipo" value="<?php echo $informacao["tipo"] ?> "/>
                </tr>

                <tr>
                    <td class="table-hover"></td>                                           
                    <td class="table-hover"><button type="submit" class="btn btn-dark">Atualizar</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-dark"><a href="ListAllInformacaoDiaria.php">Voltar</a></button>
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
