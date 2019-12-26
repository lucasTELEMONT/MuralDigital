<?php
require_once '../DAO/CursoDAO.php';
require_once '../DTO/CursoDTO.php';

$nome = $_POST["nome"];
$disciplina = $_POST["disciplina"];
$idusuario = $_POST["idusuario"];
$cursoDTO = new CursoDTO();
$cursoDTO->setNome($nome);
$cursoDTO->setDisciplina($disciplina);
$cursoDTO->setUsuario($idusuario);

$cursoDAO = new CursoDAO();
$sucesso = $cursoDAO->SalvarCurso($cursoDTO);

if ($sucesso){
   echo "<script>";
    echo "alert('Curso $nome, Cadastrado com Sucesso!');";
    echo "window.location.href = '../View/FormInserirCurso.php';";
    echo "</script> ";
}
?>