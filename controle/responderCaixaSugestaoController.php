<?php
require_once '../DAO/CaixaSugestaoDAO.php';
require_once '../DTO/RespostaDTO.php';

session_start();

$caixa = $_POST["idcaixa"];
$resposta = $_POST["resposta"];
$usuario = $_SESSION["idusuario"];

$respostaDTO = new Resposta();
$respostaDTO->setResposta($resposta);
$respostaDTO->setCaixa($caixa);
$respostaDTO->setUsuario($usuario);

$caixasugestaoDAO = new CaixaSugestaoDAO();
$sucesso = $caixasugestaoDAO->responderCaixasugestao($respostaDTO);

if ($sucesso){
   echo "<script>";
    echo "alert('Mensagem respondida com Sucesso!');";
    echo "window.location.href = '../View/ListAllCaixaSugestaoCoordenador.php';";
    echo "</script> ";
}
