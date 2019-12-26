<?php
require_once '../DAO/UsuarioDAO.php';
require_once '../DTO/UsuarioDTO.php';
require_once '../DTO/Carrega.class.php';
require_once '../DTO/Upload.class.php';

$imagem = "";
if (isset($_FILES["imagem"])) {
    $dir_dest = "../upload/";
    $upload = new Upload($_FILES['imagem'], $dir_dest);

    if ($upload->processed) {
        $imagem = $upload->file_dst_name;
    }
}
$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$sexo = $_POST["sexo"];
$perfil = $_POST["perfil"];
$senha = null;
if(!empty($_POST["senha"])){
    $senha = md5($_POST["senha"]);
}
$idusuario = $_POST["idusuario"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setIdusuario($idusuario);
$usuarioDTO->setNome($nome);
$usuarioDTO->setSexo($sexo);
$usuarioDTO->setPerfil($perfil);
$usuarioDTO->setMatricula($matricula);
$usuarioDTO->setImagem($imagem);
$usuarioDTO->setSenha($senha);
$UsuarioDAO = new UsuarioDAO();

if($perfil == "1"){$sucesso = $UsuarioDAO->AlterarUsuario($usuarioDTO);
echo "<script>";
echo "alert('Coordenador $nome Atualizado com Sucesso!');";
echo "window.location.href = '../View/ListAllCoordenadores.php';";
echo "</script>";
}
if($perfil == "2"){$sucesso2 = $UsuarioDAO->AlterarUsuario($usuarioDTO);
echo "<script>";
echo "alert('Professor $nome Atualizado com Sucesso!');";
echo "window.location.href = '../View/ListAllProfessores.php';";
echo "</script>";
}

?>