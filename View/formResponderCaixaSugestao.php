<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caixa de Sugestão</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script>
function validaCampo() {
    if (document.respondercaixasugestao.resposta.value === "")
    {
        alert("Campos não prenchidos!");
        return false;
    } else
        return true;
}
        </script>
    </head>
    <body>
        <?php
                require_once '../DAO/CaixaSugestaoDAO.php';
                $idcaixasugestao = $_GET["idcaixasugestao"];
                $caixasugestaoDAO = new CaixaSugestaoDAO();
                $mensagem = $caixasugestaoDAO->getCaixasugestaoByIdResposta($idcaixasugestao);
                    echo "<table id='dataTable' class='table table-hover'>";
                        echo "  <thead>";
                        echo "  <tr>";
                        echo "     <th>", $mensagem["situacao"],"</th>";
                        echo "  </tr>";
                        echo "  </thead>";
                        echo "  <tbody>";
                            echo "  <tr>";
                            echo "    <td>", $mensagem["comentario"], "</td>";
                               echo "  </tr>";
                            echo "</tbody>";
        
        ?>


        <table  class="table table-hover">              
            <form action="../controle/responderCaixaSugestaoController.php" method="post" name="respondercaixasugestao"onsubmit="return validaCampo();">
                <?php
                 require_once '../DAO/CaixaSugestaoDAO.php';
                $idcaixasugestao = $_GET["idcaixasugestao"];
                $caixasugestaoDAO = new CaixaSugestaoDAO();
                $textos = $caixasugestaoDAO->getCaixasugestaoById($idcaixasugestao);
                ?>
                <input type="hidden" name="idcaixa" value="<?php echo $textos["idcaixasugestao"] ?>"/>
                </label>
               
                <tr>
                <div id="container"style="width: 600px;">
                <label for="comment" name="resposta"></label>
                <textarea class="form-control" rows="5" cols="2"name="resposta" id="comment" placeholder="Digite sua resposta aqui!"></textarea> 
                
                <tr>                  
                <td class="table-hover"></td>                                           
                <td class="table-hover"><a href="ListAllCaixaSugestaoCoordenador.php">
                <button type="submit" class="btn btn-dark">Responder</button></a>                
                <button type="reset" class="btn btn-dark">Limpar</button>
                <td><button type="button" class="btn btn-dark"><a href="ListAllCaixaSugestaoCoordenador.php">Voltar</a></button></td></td>
                </div>
                </tr>
      
          </form>        
  </table>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
        
    </body>
</html>

    </body>
</html>
