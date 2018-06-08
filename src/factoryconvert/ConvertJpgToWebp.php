<?php
/**
 * Date: 08.06.2018
 * Time: 15:00
 */

namespace Image\factoryconvert;


class ConvertJpgToWebp  implements FactoryConvertInterface
{


    private $content;

    public function convert($file)
    {

        $file=$file;
        $image=  imagecreatefromjpeg($file);
        ob_start();
        imagejpeg($image,NULL,100);
        $cont=  ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $this->content =  imagecreatefromstring($cont);

        return $this;
    }

    public function save($filename)
    {


        imagewebp($this->content,$filename);
          return  imagedestroy($this->content);
    }

}