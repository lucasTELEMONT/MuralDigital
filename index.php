<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mural Digital</title>
        <link rel="icon" type="image/png" href="imagens/imagem1.png" />
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <!-- InstanceBeginEditable name="doctitle" -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style type="text/css">
            body{


            }
            #cabecalho{
                background-size: cover;
                height: 300px;
                background: url(imagens/imagem2.png);
                /*background-repeat: no-repeat;*/ 
                background-size: cover;

            }
            #barra{
                width:340px;  
                height: 0px;
                margin-left:300px;
                display: block;
                position: relative;                
                top: -245px;
                left: 250px;                
            }
            form{
                display: block;
                position: relative;
                margin-left: 45px;           
            }
            .imgcontainer {
                position: relative;
                /*text-align: center;*/
                margin: 24px 0 12px 0;
                left: 45px;
            }
            img.avatar {
                width: 40%;
                border-radius: 50%;
            }
            #login{
                display: block;
                position: absolute;
                left: 1400px;
                top: 0px;
            }

            .navbar{
                font-weight: bolder;
                border: none;
                border-radius: 0px;
            }

            .login{

            }
            html{
                width: 100%;
                margin:auto;
                overflow-x: hidden;
            }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="View/ListAllCaixaSugestao.php"><span class="glyphicon glyphicon-user"></span>Caixa de Sugestão</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <div id="cabecalho">
            <a href="index.php">
                <img src="imagens/imagem1.png"width="400"height="250">                            
            </a>

            <!--*****************************************parte do login*********************************************************************-->
            <div id="login">
                <!-- Modal desaparesser-->
                <div class="modal fade" id="myModal" role="dialog">
                    <!--p\ficar curto-->
                    <div class="modal-dialog modal-sm">
                        <!--fundo branco-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                           
                            </div>
                            <!--aria larga-->
                            <div class="modal-body" style="">
                                <form action="controle/loginController.php"method="post">
                                    <div class="imgcontainer">
                                        <img src="imagens/imagem3.png" alt="Avatar" class="avatar">
                                    </div>
                                    <label for="uname"><b>Usuário</b></label><br>
                                    <i class="glyphicon glyphicon-user"></i>
                                    <input type="text" placeholder="Nome de Usuário"size="20%" name="usuario"><br><br>
                                    <label for="psw"><b>Senha</b></label><br>
                                    <i class="glyphicon glyphicon-lock"></i>
                                    <input type="password"placeholder="Digite sua senha"size="20%" name="senha"><br>
                                    <button type="submit"value="Entrar"style=" background-color: #4CAF50;
                                            color: white;
                                            padding: 5px 8px;
                                            margin: 8px 0;
                                            border-radius: 50px;
                                            cursor: pointer;
                                            width: 90%;">Entrar</button><br>

                                </form> 
                                <!--*****************************************Código da validação do login***********************************************************-->
                                <center>
                                    <?php
                                    if (!empty($_GET["msg"])) {
                                        echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
                                    }
                                    ?>
                                </center>
                                <?php
//                                include './footer.php';
                                ?>
                                <!--*********************************************Fim do código da validação do login***************************************************-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--*********************************************fim do código login****************************************************************-->
        </div>

        <div class="row">
            <aside id="container" class="col-lg-3"> 
                <div class="panel-group" id="accordion"> 

                    <div class="" style="background-color: #aaa;">
                        <div class="panel-heading"> 
                            <h4 class="panel-title"> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MENU DE CURSOS 
                            </h4>
                        </div>                 
                    </div> 
                    <?php
                    require_once './DAO/CursoDAO.php';

                    $cursoDAO = new CursoDAO();
                    $cursos = $cursoDAO->getAllCurso();

                    foreach ($cursos as $curso) {
                        echo "  <div class='panel panel-success'> 
                    <div class='panel-heading'> 
                        <h4 class='panel-title'> 
                            <a  target='centropag' href='./View/ListInformacaoCurso.php?idcurso={$curso["idcurso"]}'>{$curso["nome"]}</a> 
                        </h4> 
                    </div> 
                    <div id='collapse22' class='panel-collapse collapse'>            
                    </div>
                    </div> ";
                    }
                    ?>





            </aside> 



            <!--            ****************************************************fim do código menu vertical*****************************************************-->
            <!--***************************************************SLIDER***************************************************************************-->

            <main class="col-lg-8 ">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <!--                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                        <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                        <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                    </ol>
                    <div class="carousel-inner">

                        <!--                    
                                            <div class="carousel-caption">
                                                <h3>Slider 1</h3>
                                                <p>Ola mundo!</p>
                                            </div>-->


                        <!-- Wrapper for slides -->

                        <div class="item active">
                            <center>
                            <img src='imagens/imagem1.png' style='width:50%; height:200px;'>
                            </center>
                        </div>
                        <?php
                        require_once './DAO/slideDAO.php';
                        require_once './DTO/Upload.php';
                        $slideDAO = new slideDAO();

                        $slides = $slideDAO->getAllInformacaoSlide();
                        ?>
                        <?php
//                    echo '<div class="item active">';
//                    echo "<img src='url() ' style='width: 300px'>";
//                    echo '</div>';

                        foreach ($slides as $slide) {



                            echo "<div class='item'>";
                            echo "<center>";


                            echo "<img src='upload/" . $slide['slide'] . "' alt='' style='width:50%; height:200px;'>";
                            echo "</center>";


                            echo"<div class='carousel-caption'>
                     
                   </div>
                   
                   </div>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                

                <!--                <div class="panel panel-default">
                                    <div class="panel-body">
                
                                    </div>
                                </div>-->
                <!--                <h2 style="text-justify: auto" class="text"><font face="Arial" color="red"> Chinês <br /> 
                                    <meta name="description" content="Chinês ta maluco"></font>
                                </h2>-->

            </main>
            
<!--            <main class="col-lg-8 ">
                <div class="container">
                    <center>
                    <iframe src="" name="centropag"  width="75%"  height="500px" frameborder="0"></iframe>
                    </center>
                </div>
            </main>-->
           
            <!--**************************************************************fim do código slider****************************************************************************-->

        <!--<center>-->
            <main>
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
            
                
            <?php
            require_once './DAO/InformacaoDAO.php';

            $informacaoDAO = new InformacaoDAO();
            $informacoes = $informacaoDAO->getAllInformacaoDiarias();
            foreach ($informacoes as $informacao) {
                echo "<div class='container' style='background-color: white;width: 700px;height: 250px';>";
                echo "<div class='container'>";
                echo "<h3><label>";
                echo "<br/>";
                echo "<p class='bg-info'style='text-align:justify; width: 900px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$informacao["informacao"]}</div>";
                echo "</label></h3></div> ";
                echo "<div class='container'>";
                echo "<br></div>";
                echo "</div>";
                echo "<br>";
//            echo "<table  class='table table-hover'>";       
//        echo "<tr>";
//             echo "<td class='info' style='width:200px;'>{$informacao["informacao"]}<br>";
//             echo "{$informacao["tipo"]}";
//             echo "</tr>";
//             echo "</table>";
            }

//        // put your code here
//        
            ?>
            </main>
        </center>
            <center>
                <iframe src="" name="centropag"  width="50%"  height="500px" frameborder="0"></iframe>
            </center>
        <!--        **********************************************************rodapé***********************************************************************************************-->
        <br>
        <br>

        <footer id="bottom" class="" style="background-color: darkgray;">
            <div class="container">
                <aside id="aside-bottom" class="clear">
                    <ul class="horizontal">
                        <li id="text-2" class="widget large widget_text widget-text" style="display: block;"><img src="imagens/imagem1.png">& &nbsp;&nbsp;<label>ETC-Escola Técnica de Ceilândia</label>		
                            <div class="textwidget"><p>
                                    Telefone: (61) 3901 7545 / (61) 3901 6927 | E-mail etc@se.df.gov.br</p>
                            </div>                                
                        </li>

                    </ul>
                </aside>
                <section id="footer" class="clear">
                    <p class="alpha">Copyright © 2018 Mural Digital."Mural Digital informação que você percebe"</p>
                    <p class="beta"></p>
                </section>
            </div>    
        </footer>

        <?php
// put your code here
        ?>
</body>
</html>
