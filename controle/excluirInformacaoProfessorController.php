<?php
require_once '../DAO/InformacaoDAO.php';

$idinformacao = $_GET["idinformacao"];
$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->excluirInformacao($idinformacao);

    echo "<script>";
    echo "alert('Informação do Curso  excluída com sucesso!');";
    echo "window.location.href='../View/ListAllInformacaoProfessor.php';";
    echo "</script>";

?>