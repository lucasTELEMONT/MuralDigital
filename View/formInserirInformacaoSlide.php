<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="../bootstrap/js/jquery-3.2.1.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
    </head>
    <body>
      <center>
    <table  class="table table-hover">   
        <form action="../controle/inserirImagemSlide.php" method="post" enctype="multipart/form-data">  
            <center>
            <tr>    
                   <td class="table-hover">
                        <input type="file" name="imagem" required>                                            
                        <button type="submit" class="btn btn-dark">Inserir</button>&nbsp;&nbsp;&nbsp;       
                        <button type="reset" class="btn btn-dark">Limpar</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-dark"><a href="opcaoInformacaoInserir.php">Voltar</a></button>
                    </td>
                </tr>  
            </center>
     </table>
</center>  
    </body>
</html>
