<?php
class UploadImangem{
    
    public static function  upload($lugar,$imagem){

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($lugar, PATHINFO_EXTENSION));
       
   
        if ($imagem["size"] > 500000) {
            echo "Imagem com até 5 MB!";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Arquivo inválido!";
            $uploadOk = 0;
        }
       
        if ($uploadOk == 0) {
            echo "Não foi possível fazer upload!";
            
        } else {
            if (move_uploaded_file($imagem["tmp_name"], $lugar)) {
                
                echo "Feito upload do arquivo com sucesso!";
            } else {
                echo "Não foi possível fazer upload";
            }
        }
    }
            
}