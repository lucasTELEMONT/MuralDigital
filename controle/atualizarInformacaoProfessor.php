<?php
require_once '../DAO/InformacaoDAO.php';
require_once '../DTO/InformacaoDTO.php';
require_once '../DAO/CursoDAO.php';
require_once '../DTO/CursoDTO.php';
session_start();

$idinformacao = $_POST["idinformacao"];
$informacao = $_POST["informacao"];
$tipo = $_POST["tipo"];
$usuario = $_SESSION["idusuario"];
$curso = $_POST["idcurso"];

$informacaoDTO = new informacaoDTO();
$informacaoDTO->setIdinformacao($idinformacao);
$informacaoDTO->setInformacao($informacao);
$informacaoDTO->setTipo($tipo);
$informacaoDTO->setUsuario($usuario);
$informacaoDTO->setCurso($curso);

$informacaoDAO = new InformacaoDAO();
$sucesso = $informacaoDAO->AtualizarInformacaoByProfessor($informacaoDTO);


   echo "<script>";  
    echo "alert('Informação do Curso atualizada com Sucesso!');";
    echo "window.location.href = '../View/ListAllInformacaoProfessor.php';";
    echo "</script> ";

?>