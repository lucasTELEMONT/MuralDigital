
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Coordenador</title>
        <link rel="icon" type="image/png" href="imagens/imagem1.png" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
        <!-- InstanceBeginEditable name="doctitle" -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style type="text/css">
            #cabecalho{
                background-size: cover;
                height: 200px;
                background: url(../imagens/imagem2.png);
                /*background-repeat: no-repeat;*/ 
                background-size: cover;
                

            }
            #container{
                display: block;
                position: absolute;        
                left: 0px;                
                top: 233px;
                width: 300px;
            }
            table{
              display: block;
              position: relative;
              
            }
/*            iframe {
                display: block;
                position: absolute;
                right:300px;
                left: 0px;
                top: 220px;     
                border: none;
            }*/
           html{
                width: 100%;
                margin:auto;
                overflow-x: hidden;
            }
        </style>
        <script src="../Js/index_js.js"></script>
    </head>
    <body>
        <?php
    require_once '../DAO/conexao/ConexaoBD.php';;
    ?>

<!--        <p id="ptd1">
            <a id="ahover" href="#" onclick="document.getElementById('pop').style.display = 'block';">

            </a>

        </p>-->


        <div id="cabecalho">
            <a href="principal.php">
                <img src="../imagens/imagem1.png"width="400"height="250">                            
            </a>


        </div><br>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../View/principal.php"><i class="glyphicon glyphicon-home">Home</i></a></li> 

                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Professor<span class="caret"></span> </a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="formCadrastrarProfessor.php" target="centropag">Cadastrar</a></li> 
                        <li><a href="ListAllProfessores.php" target="centropag">Listar</a></li>  
                    </ul> 
                </li> 
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos<span class="caret"></span> </a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="FormInserirCurso.php" target="centropag"> Inserir </a></li> 
                        <li><a href="ListAllCursos.php" target="centropag"> Listar </a></li>                        
                    </ul> 
                </li> 
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Coordenador<span class="caret"></span> </a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="formCadastrarCoordenador.php" target="centropag">Cadastrar </a></li> 
                        <li><a href="ListAllCoordenadores.php" target="centropag"> Listar </a></li>                        
                    </ul> 
                </li> 
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informação<span class="caret"></span> </a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="opcaoInformacaoInserir.php" target="centropag"> Inserir</a></li> 
                        <li><a href="opcaoInformacaoListar.php" target="centropag">Listar </a></li>                        
                    </ul> 
                </li> 
                <li class="link"> 
                    <a href="ListAllCaixaSugestaoCoordenador.php" target="centropag">Caixa de Sugestão<span></span> </a> 
                </li>
            </ul> 

            <?php
//            $loginDAO = new LoginDAO();
//            $usuario = $loginDAO->login($usuario, $senha);
            ?>
            <ul class="nav navbar-nav navbar-right">                
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"href="#"> 
                        <span class="caret"></span><?php echo $_SESSION["nome"]; ?></a>
                    <ul class="dropdown-menu"> 
                        <li><a href="#"> <?php echo "Matrícula:", $_SESSION["usuario"]; ?></a></li> 
                        <li><a href="#"> <?php echo "Perfil: ", $_SESSION["perfil"]; ?> </a></li>                     
                        <li><a href="../controle/logoutController.php">Sair</a></li>                        
                    </ul> 
                </li>
            </ul> 

        </nav>
<center>
        <iframe src="" name="centropag"width="100%" height="400px" frameborder="0"></iframe>
</center>  
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
 

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
    </body>
</html>
