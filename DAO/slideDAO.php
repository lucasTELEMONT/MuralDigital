<?php 
require_once 'conexao/ConexaoBD.php';

class slideDAO {
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }

    public function getAllInformacaoSlide() {
        try {
            $sql = "SELECT * FROM slide";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $informacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $informacoes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
     public function getslideById($idslide) {
        try {
            $sql = "SELECT * FROM slide WHERE idslide = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idslide);
            $stmt->execute();
            $slide = $stmt->fetch(PDO::FETCH_ASSOC);
            return $slide;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function SalvarInformacaoSlide(slideDTO $slideDTO) {
        try {
           $sql = "INSERT INTO slide(slide)
                   VALUES(?)";
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $slideDTO->getSlide());
           
  
           return $stmt->execute(); 
           
        } catch (PDOException $exc) {
          echo $exc->getMessage();
          }       
    }
 
 public function getBycurso($idcurso, $idprofessor){
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

    public function excluirSlide($idslide) {
        try {
            $sql = "DELETE FROM slide
                   WHERE idslide = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idslide);
            $stmt->execute();           
        } catch (PDOException $exc){
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
         
    public function AltualizarSlideByID(slideDTO $slideDTO) {
        try {
            $sql = "UPDATE slide SET 
                slide=?
                WHERE idslide= ?";
          
            $stmt = $this->pdo->prepare($sql);           
            $stmt->bindValue(1, $slideDTO->getSlide());                      
            $stmt->bindValue(2, $slideDTO->getIdslide());            
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