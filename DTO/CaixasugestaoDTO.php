<?php
class CaixaSugestaoDTO {
    
    private $idcaixasugestao;
    private $comentario;
    private $situacao;
    
    function getIdcaixasugestao() {
        return $this->idcaixasugestao;
    }

    function getComentario() {
        return $this->comentario;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setIdcaixasugestao($idcaixasugestao) {
        $this->idcaixasugestao = $idcaixasugestao;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }


    }
