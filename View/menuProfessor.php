<?php
    require_once '../DAO/conexao/ConexaoBD.php';;
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página do professor</title>
        <link rel="icon" type="image/png" href="../imagens/imagem1.png" />
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" >
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <style type="text/css">.marginBottom-0 {margin-bottom:0;}
            #cabecalho{
                background-size: cover;
                height: 299px;
                background: url(../imagens/imagem2.png);
                /*background-repeat: no-repeat;*/ 
                background-size: cover;

            }
            #container{
                display: block;
                position: absolute;        
                left: 400px;                
                top: 0px;
            }
            table{
                display: block;
                position: relative;
                top: 0px;
            }
        </style>
        <script src="../css/estilos.css"></script>
    </head>
    <body>

        <p id="ptd1">
            <a id="ahover" href="#" onclick="document.getElementById('pop').style.display = 'block';">

            </a>

        </p>


        <div id="cabecalho">
            <a href="principal.php">
                <img src="../imagens/imagem1.png"width="400"height="250">                            
            </a>

        </div><br>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../View/principal.php"><i class="glyphicon glyphicon-home">Home</i></a></li> 
>
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informação<span class="caret"></span> </a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="formInserirInformacaoCurso.php" target="centropag">Inserir</a></li> 
                        <li><a href="ListAllInformacaoProfessor.php" target="centropag">Listar</a></li>  
                    </ul> 
                </li>              
            </ul> 


            <ul class="nav navbar-nav navbar-right">                
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"href="#"> 
                        <span class="caret"></span><?php echo $_SESSION["nome"]; ?></a>
                    <ul class="dropdown-menu"> 
                        <li><a href="#"> <?php echo "Matrícula: ", $_SESSION["usuario"]; ?></a></li>                                               
                        <li><a href="#"><?php echo "Perfil: ", $_SESSION["perfil"]; ?></a></li>                        
                        <li><a href="../controle/logoutController.php">Sair</a></li>                        
                    </ul> 
                </li>
            </ul> 

        </nav>

                <center>       
                <iframe src="" name="centropag" width="100%" height="500px" frameborder="100"></iframe>
                </center>
        

          <footer id="bottom" class="" style="background-color: darkgray;">
            <div class="container">
                <aside id="aside-bottom" class="clear">
                    <ul class="horizontal">
                        <li id="text-2" class="widget large widget_text widget-text" style="display: block;"><img src="../imagens/imagem1.png">& &nbsp;&nbsp;<label>ETC-Escola Técnica de Ceilândia</label>		
                            <div class="textwidget"><p>EQNN 14 Área Especial S/ Nº- Ceilândia Sul - DF - CEP: 72220-140<br/>
                                    Telefone: (61) 3901 7545 / (61) 3901 6927 | E-mail etc@se.df.gov.br</p>
                            </div>                                
                        </li>

                    </ul>
                </aside>
                <section id="footer" class="clear"><div  class="container">
                        <p class="alpha">Copyright © 2018 Mural Digital."Mural Digital informação que você percebe"</p></div>
                    <p class="beta"></p>
                </section>
            </div>    
        </footer>

        <?php
        // put your code here
        ?>
    </body>
</html>
