<?php
/**
 * Date: 08.06.2018
 * Time: 15:00
 */

namespace Image\factoryconvert;


class ConvertGifToWebp implements FactoryConvertInterface
{

    private $content;

    public function convert($file)
    {

        $file=$file;
        $image=  imagecreatefromgif($file);
        ob_start();
        imagegif($image,NULL,100);
        $cont=  ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $this->content =  imagecreatefromstring($cont);


    }



    public function  save($newfilename)
    {
        imagewebp($this->content,'dd.webp');
        return imagedestroy($this->content);


    }
}