<?php
require_once 'conexao/ConexaoBD.php';

class CaixaSugestaoDAO {
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }
 
    public function getAllCaixasugestao() {
        try {
            $sql="SELECT * FROM caixasugestao";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $textos = $stmt->fetchAll(PDO::FETCH_ASSOC);
             for($i = 0; $i < count($textos); $i++){
             $sql = "SELECT r.resposta, r.idresposta from respostacaixasugestao as r
                    INNER JOIN caixasugestao as c on r.caixasugestao_idcaixasugestao = c.idcaixasugestao
                    WHERE c.idcaixasugestao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $textos[$i]["idcaixasugestao"]);
            $stmt->execute();
            $textos[$i]["respostas"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
             }return $textos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function salvar(caixasugestaoDTO $caixasugestaoDTO){
        try {
            $sql = "INSERT INTO caixasugestao(situacao,comentario)
                    VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $caixasugestaoDTO->getSituacao());
            $stmt->bindValue(2, $caixasugestaoDTO->getComentario());                   
            $stmt->execute();
                    
            return $this->pdo->lastInsertId();         
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } 
    }
    
   
     public function deleteCaixasugestaoById($idcaixasugestao) {
        try {
            $sql = "DELETE FROM caixasugestao
                   WHERE idcaixasugestao = ? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcaixasugestao);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
       
    public function getCaixasugestaoByNome($nome) {
        try {
            $sql = "SELECT * FROM caixasugestao WHERE nome LIKE ? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, "%".$nome."%");
            $stmt->execute();
            $texto = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $texto;  
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
      public function getCaixasugestaoById($idcaixasugestao) {
        try {            
            $sql = "SELECT * FROM caixasugestao WHERE idcaixasugestao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcaixasugestao);
            $stmt->execute();
            $texto = $stmt->fetch(PDO::FETCH_ASSOC);
            return $texto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
      public function getCaixasugestaoByIdResposta($idcaixasugestao) {
        try {            
            $sql = "SELECT comentario,situacao FROM caixasugestao WHERE idcaixasugestao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcaixasugestao);
            $stmt->execute();
            $texto = $stmt->fetch(PDO::FETCH_ASSOC);
            return $texto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function responderCaixasugestao(Resposta $respostaDTO){
        try {
            $sql = "INSERT INTO respostacaixasugestao(resposta,caixasugestao_idcaixasugestao, usuario_idusuario)
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $respostaDTO->getResposta());
            $stmt->bindValue(2, $respostaDTO->getCaixa());                   
            $stmt->bindValue(3, $respostaDTO->getUsuario());                                      
            $stmt->execute();
                    
            return $this->pdo->lastInsertId();        
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } 
    }
    


    
}

