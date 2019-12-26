<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caixa de Sugestão</title>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
            <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
            <script src="../bootstrap/js/jquery-3.2.1.min.js"type="text/javascript"></script>
            <script src="../bootstrap/js/bootstrap.min.js"></script>
            
        </head>
        <body>
            <?php
            require_once '../DAO/CaixaSugestaoDAO.php';
            $caixasugestaoDAO = new CaixaSugestaoDAO();
            $textos = $caixasugestaoDAO->getAllCaixasugestao();

            echo "<table id='dataTable' class='table table-hover'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Caixa de Sugestões <td><button type='button' class='btn btn-dark'><a href='./PaginaVoltar.php'>Voltar</a></button></td></th>";          
            echo "  </tr>";
            echo "  </thead>";
            echo "  <tbody>";
            $cont = 0;
            foreach ($textos as $texto) {
                $cont++;
                echo "  <tr>";
                  echo "<td><label>",$texto["situacao"],"</label>";
                echo "<br>", $texto["comentario"], "</td>"
                        . "</tr>";
                foreach ($texto["respostas"] as $resposta) {
                    echo "<tr>"
                    . "<td><label>Resposta: </label><br>"
                            . "{$resposta["resposta"]}</td>"
                    . "</tr>";
                }
                echo "  </tr>";                
                echo "<tr>";              
                echo "<th><a href='./formResponderCaixaSugestao.php?idcaixasugestao={$texto["idcaixasugestao"]}'"
                . "class='glyphicon glyphicon-answer'title='Responder CaixaSugestao'onclick=\"return confirm('Você deseja responder essa Mensagem?'); return false;\">Responder"
                . "</a></th>";
                echo "     <td align='center'> <a href='../controle/excluirCaixaSugestaoController.php?idcaixasugestao={$texto["idcaixasugestao"]}'"
                . "class='glyphicon glyphicon-remove' title='Excluir Caixa Sugestão'onclick=\"return confirm('Tem certeza que deseja Excluir essa Mensagem?'); return false;\">Excluir</a></td>";
                echo "  </tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
            <br>
          
            <br>

    



    </body>
</html>
