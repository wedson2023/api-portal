<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function UploadImage($file, $diretorio, $largura) { 
        $nome = md5(time() . $file['name']) . '.jpg';
        
        $img = imagecreatefromjpeg($file['tmp_name']);
        $x = imagesx($img);
        $y = imagesy($img);
        $altura = ($largura * $y) / $x;		

        $grande = imagecreatetruecolor($largura, $altura);
        imagecopyresampled($grande, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
        if(imagejpeg($grande, $diretorio . $nome)):
                return $nome;
        endif;	

        imagedestroy($img);
        imagedestroy($grande);
    }
}
