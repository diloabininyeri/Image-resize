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
     * @param $filename
     * @return mixed|void
     *
     *
     */
    public function convert($filename)
    {

        $file=$filename;
        $image=  imagecreatefromgif($file);
        ob_start();
        imagegif($image,NULL,100);
        $cont=  ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $this->content =  imagecreatefromstring($cont);


    }


    /**
     * @param $filename
     * @param $quality
     * @return bool|mixed
     *
     *
     */
    public function  save($filename,$quality)
    {
        imagewebp($this->content,$filename);
        return imagedestroy($this->content);


    }
}