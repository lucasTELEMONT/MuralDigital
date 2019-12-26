<?php
require_once '../DAO/CaixaSugestaoDAO.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Caixa de Sugestão</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/jquery-3.2.1.min.js"type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../Js/index_js.js"></script>
        <script language="javascript">

            function validaCampo() {
                if (document.inserircaixasugestao.situacao.value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                if (document.inserircaixasugestao.comentario.value === "")
                {
                    alert("Campos não prenchidos!");
                    return false;
                } else
                    return true;
            }



        </script>
    </head>
    <body>
        <br>
        <br>
        <br>

    <center>
        <table class="table table-hover">
            <tr>
                <td>
                    <label class='glyphicon glyphicon-ok-circle' style="font-weight: bold;font-size: 16px;">&nbspCaixa de Sugestões</label> 
                </td>
                <td>
                                                   
                    <button type="button" class="btn btn-dark"><a href="../index.php">Voltar</a></button>
            </div> 
                </td>
            </tr>
        </table>
        <table  class="table table-hover">
            <tr>
                <td>
                    <div class="container">     
                        <form action="../controle/inserirCaixaSugestaoController.php" method="post" name="inserircaixasugestao" onsubmit="return validaCampo();"/>
                        <table class="table table-hover">

                            <label for="comment" name="comentario">
                                
              </label><textarea class="form-control" rows="5" name="comentario" id="comment"></textarea> 
              <label class="radio-inline"><input type="radio" name="situacao" value="Sugestão">Sugestão</label>
              <label class="radio-inline"><input type="radio" name="situacao" value="Reclamação">Reclamação</label>
              <label class="radio-inline"><input type="radio" name="situacao" value="Elogio">Elogio</label>                      
                           
                </td>
             <tr>
                <td>&nbsp;</td>
                <td ><input type="submit" class="btn btn-dark" value="Inserir"/>
                    <input type="reset"  class="btn btn-dark" value="Limpar"> 
                </td>
            </tr>
             <tr>
                                <td colspan="2" class="default">
                                    <?php
                                    if (!empty($_GET["c"])) {
                                        echo "<span class='erro'>", $_GET["c"], "</span>";
                                    }
                                    ?>
                                 
                                </td>
                            </tr>
        </table>
                        <?php
                        require_once '../DAO/CaixaSugestaoDAO.php';
                        $caixasugestaoDAO = new CaixaSugestaoDAO();
                        $textos = $caixasugestaoDAO->getAllCaixasugestao();

                        echo "<table id='dataTable' class='table table-hover'>";
                        echo "  <thead>";
                        echo "  <tr>";
                        echo "     <th>Caixa de Sugestões</th>";
                        echo "  </tr>";
                        echo "  </thead>";
                        echo "  <tbody>";
                        $cont = 0;
                        foreach ($textos as $caixasugestao) {
                            $cont++;
                            echo "  <tr>";
                            echo "<td><label>",$caixasugestao["situacao"],"</label>";
                            echo"<br>", $caixasugestao["comentario"], "</td>";
                            foreach ($caixasugestao["respostas"] as $resposta) {
                                echo "<tr>"
                                . "<td><label>Resposta: </label><br>"
                                        ."{$resposta["resposta"]}</td>"
                                        . "</tr>";
                            }
                            }
             
                            echo "  </tr>";
                            echo "<tr>";
                        

//                            
//                        }
//                        $ouvidoriaDAO = new OuvidoriaDAO();
//                        $ouvidorias = $ouvidoriaDAO->getAllOuvidoria();
//                            echo "<table id='dataTable' class='table table-hover'>";
//                            echo "  <thead>";
//                            echo "  <tr>";
//                            echo "     <th>Ouvidorias</th>";
//                            echo "  </tr>";
//                            echo "  </thead>";
//                            echo "  <tbody>";
//
//                            $cont = 0;
//                            foreach ($ouvidorias as $ouvidoria) {
//
//                                $cont++;
//                                echo "  <tr>";
//                                echo "    <td><label>", $ouvidoria["situacao"], "<label>";
//                                echo "     <td>", $ouvidoria["comentario"], "</td>";
//                                echo "  </tr>";
//                                echo "<tr>";
//                            }
//                           
//                            echo "</tbody>";
//                            echo "</table>";
//                                             
                        ?>
       
        <br>
                       
                    </li>
                </ul>
            </nav>           
       </div>
    </body>
</html>
