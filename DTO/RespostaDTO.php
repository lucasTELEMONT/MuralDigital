<?php
class Resposta{
    private $idresposta;
    private $resposta;
    private $caixa;
    private $usuario;
    
    function getIdresposta() {
        return $this->idresposta;
    }

    function getResposta() {
        return $this->resposta;
    }

    function getCaixa() {
        return $this->caixa;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setIdresposta($idresposta) {
        $this->idresposta = $idresposta;
    }

    function setResposta($resposta) {
        $this->resposta = $resposta;
    }

    function setCaixa($caixa) {
        $this->caixa = $caixa;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }



}
?>