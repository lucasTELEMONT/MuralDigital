<?php 
require_once 'conexao/ConexaoBD.php';

class InformacaoDAO {
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }

    public function getAllInformacaoDiarias() {
        try {
            $sql = "SELECT * FROM informacao where tipo = 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $informacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $informacoes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function SalvarInformacao(informacaoDTO $informacaoDTO) {
        try {
           $sql = "INSERT INTO informacao(informacao,tipo)
                   VALUES(?,?)";
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $informacaoDTO->getInformacao());
           $stmt->bindValue(2, $informacaoDTO->getTipo());
  
           return $stmt->execute(); 
           
        } catch (PDOException $exc) {
          echo $exc->getMessage();
          }       
    }
    
// public function getInformacaoBycurso(){
// try {
//            $sql = "SELECT * FROM informacao WHERE tipo = 2;";
//            $stmt = $this->pdo->prepare($sql);
//            $stmt->execute();
//            $informacao= $stmt->fetchAll(PDO::FETCH_ASSOC);
//            return $informacao;
// } catch (PDOException $exc) {
//            echo $exc->getMessage();
//        }
//   
//    }  
 public function getInformacaoBycurso($idcurso, $idprofessor){
 try {
            $sql = "SELECT * FROM informacao WHERE usuario_idusuario = ? and curso_idcurso = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idprofessor);
            $stmt->bindValue(2, $idcurso);
            $stmt->execute();
            $informacao= $stmt->fetchAll(PDO::FETCH_ASSOC);         
             
            return $informacao;
 } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
   
    }
    
    public function SalvarInformacaoByCurso(informacaoDTO $informacaoDTO) {       
         try {
        $sql = "INSERT INTO informacao(informacao,tipo,usuario_idusuario,curso_idcurso)
                   VALUES(?,?,?,?)";
          ($informacaoDTO);
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $informacaoDTO->getInformacao());
           $stmt->bindValue(2, $informacaoDTO->getTipo());
           $stmt->bindValue(3, $informacaoDTO->getUsuario());
           $stmt->bindValue(4, $informacaoDTO->getCurso());
           return $stmt->execute(); 
         
        } catch (PDOException $exc) {
          echo $exc->getMessage();
          }       
    }

    public function excluirInformacao($idinformacao) {
        try {
            $sql = "DELETE FROM informacao
                   WHERE idinformacao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idinformacao);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

     public function getInformacaoById($idinformacao) {
        try {
            $sql = "SELECT * FROM informacao WHERE idinformacao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idinformacao);
            $stmt->execute();
            $informacao = $stmt->fetch(PDO::FETCH_ASSOC);
            return $informacao;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
         
     public function getInformacaoByUsuario($idusuario) {
        try {
            $sql = "SELECT i.informacao,i.idinformacao,c.nome FROM informacao as i 
                    INNER JOIN curso c on i.curso_idcurso = c.idcurso
                    WHERE i.usuario_idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $informacao = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $informacao;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
         
    public function AtualizarInformacaoByProfessor(informacaoDTO $informacaoDTO) {
        try {
            $sql = "UPDATE informacao SET 
                informacao=?,  
                tipo=?,
                curso_idcurso=?,
                usuario_idusuario=?
                WHERE idinformacao= ?";
          
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->bindValue(1, $informacaoDTO->getInformacao());
            $stmt->bindValue(2, $informacaoDTO->getTipo());
            $stmt->bindValue(3, $informacaoDTO->getCurso());
            $stmt->bindValue(4, $informacaoDTO->getUsuario());
            $stmt->bindValue(5, $informacaoDTO->getIdinformacao());            
            $stmt->execute();            
           
        } catch (PDOException $exc) {
            echo $exc->getMessage();
           
        }
    }
     public function AltualizarInformacaoById(informacaoDTO $informacaoDTO) {
        try {
            $sql = "UPDATE informacao SET 
                informacao=?,  
                tipo=?
                WHERE idinformacao= ?";
          
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->bindValue(1, $informacaoDTO->getInformacao());
            $stmt->bindValue(2, $informacaoDTO->getTipo());                        
            $stmt->bindValue(3, $informacaoDTO->getIdinformacao());            
            $stmt->execute();            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
           
        }
    }
//select * from informacao where usuario_idusuario = ? and curso_idcurso = ?;

//consultarCurso($idcurso,$usuario)
    //put your code here
}
?>