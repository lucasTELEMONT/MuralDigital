<?php
class informacaoDTO {
    private $idinformacao;
    private $informacao;
    private $tipo;
    private $usuario;
    private $curso;
    function getIdinformacao() {
        return $this->idinformacao;
    }

    function getInformacao() {
        return $this->informacao;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getCurso() {
        return $this->curso;
    }

    function setIdinformacao($idinformacao) {
        $this->idinformacao = $idinformacao;
    }

    function setInformacao($informacao) {
        $this->informacao = $informacao;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }



    



    
}
?>
