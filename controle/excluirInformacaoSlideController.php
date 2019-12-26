<?php
require_once '../DAO/slideDAO.php';

$idslide = $_GET["idslide"];
$slideDAO = new slideDAO;
$sucesso = $slideDAO->excluirSlide($idslide);

    echo "<script>";   
    echo "alert('Imagem excluída do slide com sucesso!');";
    echo "window.location.href='../View/ListAllInformacaoSlide.php';";
    echo "</script> ";

?>
