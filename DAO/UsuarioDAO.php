<?php
require_once __DIR__.'/conexao/ConexaoBD.php';

class UsuarioDAO {
    
     public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }

    public function getAllUsuario() {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
 
    public function salvarUsuario(UsuarioDTO $usuarioDTO){
        try {
            $sql = "INSERT INTO usuario(nome,sexo,imagem,senha,matricula,perfil_idperfil)
                    VALUES (?,?,?,?,?,?)";                
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSexo());
            $stmt->bindValue(3, $usuarioDTO->getImagem());
            $stmt->bindValue(4, $usuarioDTO->getSenha());
            $stmt->bindValue(5, $usuarioDTO->getMatricula());
            $stmt->bindValue(6, $usuarioDTO->getPerfil());
            $stmt->execute();
           return $this->pdo->lastInsertId();         
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } 
    }
    
     public function deleteUsuarioById($idusuario) {
        try {
            $sql = "DELETE FROM usuario
                   WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
      public function getUsuarioById($idusuario) {
        try {
            $sql = "SELECT * FROM usuario WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
      public function getUsuarioByProfessor() {
        try {
            $sql = "SELECT * FROM usuario WHERE perfil_idperfil=2";
            $stmt = $this->pdo->prepare($sql);
          
            $stmt->execute();
            $usuario = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
      public function getUsuarioByCoordenador($perfil) {
        try {
            $sql = "SELECT * FROM usuario WHERE perfil_idperfil = 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $perfil);
            $stmt->execute();
            $usuario = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
     public function AlterarUsuario(UsuarioDTO $usuarioDTO) {
        try {
            
            if(empty($usuarioDTO->getSenha())){
                 $sql = "UPDATE usuario SET 
                    nome=?,                  
                    sexo=?,
                    imagem=?,           
                    matricula=?,
                    perfil_idperfil=?
                    WHERE idusuario =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSexo());
            $stmt->bindValue(3, $usuarioDTO->getImagem());           
            $stmt->bindValue(4, $usuarioDTO->getMatricula());
            $stmt->bindValue(5, $usuarioDTO->getPerfil());
            $stmt->bindValue(6, $usuarioDTO->getIdusuario());
            $stmt->execute();
                
            } else {
                    $sql = "UPDATE usuario SET 
                    nome=?,                  
                    sexo=?,
                    imagem=?,                   
                    senha=?,
                    matricula=?,
                    perfil_idperfil=?
                    WHERE idusuario =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSexo());
            $stmt->bindValue(3, $usuarioDTO->getImagem());              
            $stmt->bindValue(4, $usuarioDTO->getSenha());
            $stmt->bindValue(5, $usuarioDTO->getMatricula());
            $stmt->bindValue(6, $usuarioDTO->getPerfil());
            $stmt->bindValue(7, $usuarioDTO->getIdusuario());
            $stmt->execute();
            }
            
           
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    
}