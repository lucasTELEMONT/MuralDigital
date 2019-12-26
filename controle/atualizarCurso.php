<?php
require_once '../DAO/CursoDAO.php';
require_once '../DTO/CursoDTO.php';

$nome = $_POST["nome"];
$disciplina = $_POST["disciplina"];
$idcurso = $_POST["idcurso"];
$idusuario = $_POST["idusuario"];

$cursoDTO = new CursoDTO();
$cursoDTO->setIdcurso($idcurso);
$cursoDTO->setNome($nome);
$cursoDTO->setDisciplina($disciplina);
$cursoDTO->setUsuario($idusuario);

$cursoDAO = new CursoDAO();
$sucesso = $cursoDAO->AtualizarCursoById($cursoDTO);

echo "<script>";
echo "alert('Curso $nome, atualizado com suscesso!');";
echo "window.location.href = '../View/ListAllCursos.php';";
echo "</script> ";

?>