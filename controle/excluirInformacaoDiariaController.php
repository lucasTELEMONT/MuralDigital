<?php
require_once '../DAO/InformacaoDAO.php';

$idinformacao = $_GET["idinformacao"];
$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->excluirInformacao($idinformacao);


    echo "<script>";
    echo "alert('Informação excluída com sucesso');";
echo "window.location.href = '../View/ListAllInformacaoDiaria.php';";
echo "</script> ";

?>