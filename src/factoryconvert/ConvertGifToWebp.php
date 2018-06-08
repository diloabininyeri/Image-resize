<?php
/**
 * Date: 08.06.2018
 * Time: 15:00
 */

namespace Image\factoryconvert;


/**
 * Class ConvertGifToWebp
 * @package Image\factoryconvert
 *
 */

class ConvertGifToWebp implements FactoryConvertInterface
{
    /**
     * @var
     *
     */
    private $content;

    /**
     * @param $file
     * @return mixed|void
     *
     *
     */
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

    /**
     * @param $newfilename
     * @return bool|mixed
     *
     *
     */

    public function  save($filename,$quality)
    {
        imagewebp($this->content,$filename,$quality);
        return imagedestroy($this->content);


    }
}