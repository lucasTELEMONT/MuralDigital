<?php
require_once 'conexao/ConexaoBD.php';


class CursoDAO {
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = ConexaoBD::getInstance();
    }

    public function getAllCurso() {
        try {
            $sql = "SELECT * FROM curso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
          for($i = 0; $i < count($cursos); $i++){
            $sql = "SELECT u.nome, u.idusuario  FROM usuario as u 
                    INNER JOIN usuario_curso uc on u.idusuario = uc.usuario_idusuario
                    WHERE uc.curso_idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursos[$i]["idcurso"]);            
            $stmt->execute();
            $cursos[$i]["usuarios"]= $stmt->fetchAll(PDO::FETCH_ASSOC);
          
          }      
            return $cursos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllCursoByProfessor($idprofessor) {
        try {
            $sql = "SELECT c.nome,c.idcurso  FROM curso as c 
                    INNER JOIN usuario_curso uc on c.idcurso = uc.curso_idcurso
                    WHERE uc.usuario_idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idprofessor); 
            $stmt->execute();
            $curso = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $curso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
             
        }
    }
    
    public function SalvarCurso(CursoDTO $cursoDTO) {
        try {
           $sql = "INSERT INTO curso(nome,disciplina)
                   VALUES(?,?)";
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $cursoDTO->getNome());
           $stmt->bindValue(2, $cursoDTO->getDisciplina());
           $stmt->execute(); 
            
            $idcurso = $this->pdo->lastInsertId();
            
            $sql = "INSERT INTO usuario_curso(usuario_idusuario,curso_idcurso)
            VALUES(?,?)";
          $retorno=0;
          $professores = $cursoDTO->getUsuario();
          foreach($professores as $usuario){
              if(!empty($usuario)){
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $usuario);
                $stmt->bindValue(2, $idcurso);
                $retorno=$stmt->execute();
              }
        }
        return $retorno;
        }catch (PDOException $exc) {
          echo $exc->getMessage();
            die();
          }       
    }
    
    public function excluirCursoByid($idcurso) {
        try {
            $sql = "DELETE FROM curso 
                   WHERE idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//    

    public function getCursoById($idcurso) {
        try {
            $sql = "SELECT * FROM curso WHERE idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->execute();
            $curso = $stmt->fetch(PDO::FETCH_ASSOC);
            
           $sql = "SELECT u.nome  FROM usuario as u 
                    INNER JOIN usuario_curso uc on u.idusuario = uc.usuario_idusuario
                    WHERE uc.curso_idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $curso["idcurso"]);            
            $stmt->execute();
            $curso["usuario"]= $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $sql = "SELECT i.informacao, u.nome   FROM informacao as i 
                    INNER JOIN usuario u on i.usuario_idusuario = u.idusuario
                    WHERE i.curso_idcurso =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $curso["idcurso"]);            
            $stmt->execute();
            $curso["informacao"]= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $curso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
     public function AtualizarCursoById(CursoDTO $cursoDTO) {
        try {
            $sql = "UPDATE curso SET 
                nome=?,
                disciplina=?
                WHERE idcurso = ?";
          
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->bindValue(1, $cursoDTO->getNome());
            $stmt->bindValue(2, $cursoDTO->getDisciplina());                     
            $stmt->bindValue(3, $cursoDTO->getIdcurso());            
            $stmt->execute();   
            
            
            $sql = "DELETE FROM usuario_curso  WHERE curso_idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursoDTO->getIdcurso());
            $stmt->execute();
            
            
             $sql = "INSERT INTO usuario_curso(usuario_idusuario,curso_idcurso)
            VALUES(?,?)";
            $retorno=0;
            $professores = $cursoDTO->getUsuario();
            foreach ($professores as $usuario){
              if(!empty($usuario)){
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $usuario);
                $stmt->bindValue(2, $cursoDTO->getIdcurso());
                $stmt->execute();
              }
        }
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
  //put your code here
}
?>