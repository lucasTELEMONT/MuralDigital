<?php
session_start();
require_once '../DAO/loginDAO.php';

$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION["nome"] = $usuario["nome"];
    $_SESSION["usuario"] = $usuario["matricula"];
    $_SESSION["perfil"] = $usuario["perfil"];
    $_SESSION["idusuario"] = $usuario["idusuario"];
    echo "<script>";
    echo "window.location.href = '../View/principal.php';";
    echo "</script> ";
} else {
    $msg = "Usuário e/ou Senha Inválido, Tente Novamente!";
    echo "<script>";
    echo "alert('Usuário/eou Senha Inválido, Tente Novamente!');";
    echo "window.location.href = '../index.php?msg={$msg}';";
//    echo "window.location.href = '../index.php';";
    echo "</script> ";
}
?>
