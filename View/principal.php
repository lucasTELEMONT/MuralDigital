<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/oie_transparent.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Principal - Mural Digital</title>
    </head>
    <body>
        <?php
        session_start();
        include './validaLogin.php';
        ?>              
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            include './menuCoordenador.php';
                            break;
                        case "Professor":
                            include './menuProfessor.php';
                            break;
                    }
                    ?>
                    <br>
                </td>
            </tr>
        </table>
       
 
    </body>
</html>
