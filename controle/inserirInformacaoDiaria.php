<?php
require_once '../DAO/InformacaoDAO.php';
require_once '../DTO/InformacaoDTO.php';


$informacao = $_POST["informacao"];
$tipo = $_POST["tipo"];
$informacaoDTO = new informacaoDTO();
$informacaoDTO->setInformacao($informacao);
$informacaoDTO->setTipo($tipo);

$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->SalvarInformacao($informacaoDTO);

if ($sucesso){
   echo "<script>";
    echo "alert('Informação Diária inserida com Sucesso!');";
    echo "window.location.href = '../View/formInserirInformacaoDiarias.php'";
    echo "</script> ";
}
?>