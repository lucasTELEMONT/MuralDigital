<?php
require_once '../DAO/CursoDAO.php';

$idcurso = $_GET["idcurso"];
$cursoDAO = new CursoDAO();
$sucesso = $cursoDAO->excluirCursoByid($idcurso);


echo "<script>";
echo "alert('Curso excluída com sucesso');";
echo "window.location.href = '../View/ListAllCursos.php';";
echo "</script> ";

?>