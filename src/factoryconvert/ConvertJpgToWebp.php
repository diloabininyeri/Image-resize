<?php
/**
 * Date: 08.06.2018
 * Time: 15:00
 */

namespace Image\factoryconvert;

/**
 * Class ConvertJpgToWebp
 * @package Image\factoryconvert
 *
 *
 */
class ConvertJpgToWebp  implements FactoryConvertInterface
{

    /**
     * @var
     *
     *
     */
    private $content;

    /**
     * @param $filename
     * @return $this|mixed
     *
     */
    public function convert($filename)
    {

        $file=$filename;
        $image=  imagecreatefromjpeg($file);
        ob_start();
        imagejpeg($image,NULL,100);
        $cont=  ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $this->content =  imagecreatefromstring($cont);

        return $this;
    }

    /**
     * @param $filename
     * @param $quality
     * @return bool|mixed
     *
     *
     */
    public function save($filename,$quality)
    {


        imagewebp($this->content,$filename,$quality);
          return  imagedestroy($this->content);
    }

}