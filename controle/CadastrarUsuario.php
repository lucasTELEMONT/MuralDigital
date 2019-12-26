<?php
require_once '../DTO/UsuarioDTO.php';
require_once '../DAO/UsuarioDAO.php';
require_once '../DTO/Uploadimagem.php';


$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$imagem = "";
if (isset($_FILES["imagem"])) {

    $imageFileType = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
    $imagem = "../upload/Usuarios/". $nome.".". $imageFileType;
    UploadImangem::upload($imagem, $_FILES["imagem"]);
    // verifica se foi realizado corretamente o upload
} 
$senha = md5($_POST["senha"]);
$perfil = $_POST["perfil"];
$matricula = $_POST["matricula"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setSexo($sexo);
$usuarioDTO->setImagem($imagem);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil($perfil);
$usuarioDTO->setMatricula($matricula);


$UsuarioDAO = new UsuarioDAO();

if($perfil == "1"){$sucesso = $UsuarioDAO->salvarUsuario($usuarioDTO);
if ($sucesso){
    echo "<script>";
    echo "alert('Coordenador $nome, Cadastrado com Sucesso!');";
    echo "window.location.href = '../View/formCadastrarCoordenador.php';";
    echo "</script> ";
}
}

if($perfil == "2"){$sucesso2 =$UsuarioDAO->salvarUsuario($usuarioDTO);
if($sucesso2){
    echo "<script>";
    echo "alert('Professor $nome, Cadastrado com Sucesso!');";
    echo "window.location.href = '../View/formCadrastrarProfessor.php';";
    echo "</script> ";
}
}

?>
