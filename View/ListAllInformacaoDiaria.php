
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../Js/index_js.js"></script> <style>
            th{color: forestgreen;font-weight: bolder;} 
            td { color: brown;font-weight: bolder;}
        </style>
    </head>
    <body>
        <table class="table table-hover">
        <td>Informacao</td>
        <td><button type="button" class="btn btn-dark"><a href="opcaoInformacaoListar.php">Voltar</a></button></td>
    </table>
        <?php
        require_once '../DAO/InformacaoDAO.php';
        
        $informacaoDAO = new InformacaoDAO();
        $informacoes = $informacaoDAO->getAllInformacaoDiarias();

        foreach ($informacoes as $informacao) {
        echo "<table  class='table table-hover' style='width:600px'>";       
        echo "<tr>";
        echo " <td class='info'>Informacao</td>";
        echo "<td class='pull-l'>";
        echo "<th>{$informacao["informacao"]}</th>";    
        echo "<th><a href='./formAtualizarInformacaoDiaria.php?id={$informacao["idinformacao"]}'"
            . "class='glyphicon glyphicon-edit'title='Atualizar Informacao'onclick=\"return confirm('Você deseja atualizar essa Informação?'); return false;\">Atualizar"
            . "</a></th>";
        echo "<th><a href='../controle/excluirInformacaoDiariaController.php?idinformacao={$informacao["idinformacao"]}' "
            . "class='glyphicon glyphicon-trash'title='Excluir Informação'onclick=\"return confirm('Tem certeza que deseja excluir essa informação?'); return false;\">Excluir"
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
