<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
       <?php
                            require_once './DAO/CursoDAO.php';
                            $cursoDAO = new CursoDAO();
                            $cursos = $cursoDAO->getAllCurso();       
                  ?>
                <?php
                            require_once './DAO/InformacaoDAO.php';
                            $informacaoDAO = new InformacaoDAO();
                            
                            
                ?>
                    <?php 
                    $cont = 0;
                    foreach ( $cursos as $curso){
//                        echo "<pre>"; print_r($cursos);echo "</pre>";                        die();
                        $informacoes = $informacaoDAO->getInformacaoBycurso();
                    echo "  <div class='panel panel-dark'> 
                            <div class='panel-heading'> 
                            <h4 class='panel-title'> 
                            <a data-toggle='collapse' data-parent='#accordion' href='#collapse22$cont'>{$curso["nome"]}</a>
                            </h4> 
                            </div> 
                            <div id='collapse22$cont' class='panel-collapse collapse'>";?>  
                
                
                            <?php 
                            //foreach ($informacoes as $informacao) {
                            foreach ($curso["usuarios"] as $usuario){
                             echo "<table  class='table table-hover'>       
                                     <tr>
                                       <div class='panel panel-dark'> 
                                            <div class='panel-heading'> 
                                            <h4 class='panel-title'>
                                                <a data-togle='collapse' data-parent='#accordion' href='#collapse22$cont'>{$usuario["nome"]}</a>"
                                         . "</h4>"
                                            . "</div>"
                                           . "<div collapse23$cont' class='panel-collapse collapse'>";
                                            ?>
                               <?php 
                                    foreach ($informacao["usuario"] as $informacao){
                                       echo" <td class='info'></td>
                                           <td class='pull-1'>
                                           {$informacao["informacao"]}";                                        
                                    }
                                    
                                    echo  "</div>"
                                    . "</div"                                 
                                    . "</td>";
                              echo "</tr>" ;
                              echo"</table>";
                            }
            ?>
                        <?php
                        echo"</div>
                         </div>"; 
                   $cont ++;          
              }  
                    ?>
    </body>
</html>
