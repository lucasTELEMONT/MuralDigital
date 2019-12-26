<?php
require_once '../DAO/CaixaSugestaoDAO.php';
require_once '../DTO/CaixasugestaoDTO.php';

$situacao = $_POST["situacao"];
$comentario = $_POST["comentario"];

$caixasugestaoDTO = new CaixaSugestaoDTO();
$caixasugestaoDTO->setSituacao($situacao);
$caixasugestaoDTO->setComentario($comentario);

$caixasugestaoDAO = new CaixaSugestaoDAO();
$sucesso = $caixasugestaoDAO->salvar($caixasugestaoDTO);

if ($sucesso){
   echo "<script>";
    echo "alert('Mensagem  enviada com Sucesso!');";
    echo "window.location.href ='../View/ListAllCaixaSugestao.php';";   
    echo "</script> ";    
}