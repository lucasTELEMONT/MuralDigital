<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <?php
    require_once '../DAO/CursoDAO.php';
    ?>
    </head>
    <body>
        <?php
        $cursoDAO = new CursoDAO;
        $idcurso = $_GET["idcurso"];
        $curso = $cursoDAO->getCursoById($idcurso);
        
        echo"<h2>{$curso["nome"]}</h2>";
        echo "<p>Matéria: {$curso["disciplina"]} </p>";
        echo "<p>Professor(s): </p>";
        foreach ($curso["usuario"] as $professor ){
            echo "<p>{$professor["nome"]}</p>";
            }
            echo"<h3>Informações</h3>";
        foreach ($curso["informacao"] as $informacao ){
            echo "<p>{$informacao["informacao"]}</p>";
            echo "<p>Autor: {$informacao["nome"]}</p>";          
            }
        ?>
    </body>
</html>
