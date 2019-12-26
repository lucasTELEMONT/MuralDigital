<?php

require_once '../DAO/slideDAO.php';
require_once '../DTO/slideDTO.php';

$idslide = $_POST["idslide"];
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
$slideDTO->setIdslide($idslide);
$slideDTO->setSlide($slide);

$slideDAO = new slideDAO();
$sucesso = $slideDAO->AltualizarSlideByID($slideDTO);

   echo "<script>";
    echo "alert('Imagem do slide atualizada  com Sucesso!');";
    echo "window.location.href = '../View/ListAllInformacaoSlide.php';";
    echo "</script> ";