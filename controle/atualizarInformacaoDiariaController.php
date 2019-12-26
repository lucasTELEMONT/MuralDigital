<?php
require_once '../DAO/InformacaoDAO.php';
require_once '../DTO/InformacaoDTO.php';

$idinformacao = $_POST["idinformacao"];
$informacao = $_POST["informacao"];
$tipo = $_POST["tipo"];

$informacaoDTO = new informacaoDTO();
$informacaoDTO->setIdinformacao($idinformacao);
$informacaoDTO->setInformacao($informacao);
$informacaoDTO->setTipo($tipo);


$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->AltualizarInformacaoById($informacaoDTO);
   echo "<script>";
    echo "alert('Informação Diária atualizada com Sucesso!');";
    echo "window.location.href = '../View/ListAllInformacaoDiaria.php';";
    echo "</script> ";
   
