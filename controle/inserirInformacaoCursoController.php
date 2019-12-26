<?php
require_once '../DAO/InformacaoDAO.php';
require_once '../DTO/InformacaoDTO.php';
require_once '../DAO/CursoDAO.php';
session_start();

$informacao = $_POST["informacao"];
$tipo = $_POST["tipo"];
$usuario = $_SESSION["idusuario"];
$curso = $_POST["idcurso"];

$informacaoDTO = new informacaoDTO();
$informacaoDTO->setInformacao($informacao);
$informacaoDTO->setTipo($tipo);
$informacaoDTO->setUsuario($usuario);
$informacaoDTO->setCurso($curso);

$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->SalvarInformacaoByCurso($informacaoDTO);

if ($sucesso){
   echo "<script>";
    echo "alert('Informação de Curso, Cadastrada com Sucesso!');";
    echo "window.location.href = '../View/formInserirInformacaoCurso.php'";
    echo "</script> ";
}


?>