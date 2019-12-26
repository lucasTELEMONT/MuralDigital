<?php
class UsuarioDTO {
    private $idusuario;
    private $nome;      
    private $sexo;
    private $imagem;
    private $senha;
    private $perfil;
    private $matricula; 
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
}