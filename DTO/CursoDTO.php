<?php
class CursoDTO {
    private $idcurso ;
    private $nome;
    private $disciplina;
    private $usuario;
    
    function getIdcurso() {
        return $this->idcurso;
    }

    function getNome() {
        return $this->nome;
    }

    function getDisciplina() {
        return $this->disciplina;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

      

            //put your code here
}
