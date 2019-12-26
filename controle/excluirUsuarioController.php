<?php

require_once '../DAO/UsuarioDAO.php';
$idusuario = $_GET["idusuario"];
$UsuarioDAO = new UsuarioDAO();

$sucesso = $UsuarioDAO->deleteUsuarioById($idusuario);

echo "<script>";
echo "alert('Usuário excluido com Sucesso!');";
echo "window.location.href='../View/ListAllCoordenadores.php';";
echo "</script>";



?>