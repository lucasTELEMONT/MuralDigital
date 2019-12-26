<?php
require_once '../DAO/CaixaSugestaoDAO.php';

$idcaixasugestao = $_GET["idcaixasugestao"];
$caixasugestaoDAO = new CaixaSugestaoDAO();

$sucesso = $caixasugestaoDAO->deleteCaixasugestaoById($idcaixasugestao);

echo "<script>";
echo "alert('Resposta e Mensagem excluída com sucesso');";
echo "window.location.href = '../View/ListAllCaixaSugestaoCoordenador.php';";
echo "</script> ";

?>