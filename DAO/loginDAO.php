<?php
require_once 'conexao/ConexaoBD.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }

    public function login($usuario,$senha) {
        try {
            $sql = "SELECT u.matricula, p.perfil,u.nome,u.sexo,u.idusuario 
                    FROM usuario u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
                    WHERE matricula=? AND senha=?";
     
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>