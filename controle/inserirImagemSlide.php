<?php
require_once '../DAO/slideDAO.php';
require_once '../DTO/slideDTO.php';


if(isset($_FILES['imagem'])){
            $extensao = strtolower(substr($_FILES['imagem']['name'],-4));
            $novo_nome = md5(time()).$extensao;
           // echo $novo_nome;
            $diretorio = "../upload/";
           
            
            move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novo_nome);
            
            //die($novo_nome);
        }
$slide = $novo_nome;





$slideDTO = new slideDTO();
$slideDTO->setSlide($slide);


$slideDAO = new slideDAO();
$sucesso = $slideDAO->SalvarInformacaoSlide($slideDTO);

   echo "<script>"; 
   echo "alert('Imagem inserida no slide com suscesso!');";
   echo "window.location.href= '../View/formInserirInformacaoSlide.php';";
   echo "</script> ";

?>
