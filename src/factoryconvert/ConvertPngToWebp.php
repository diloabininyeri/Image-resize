<?php
/**
 * Date: 08.06.2018
 * Time: 15:00
 */

namespace Image\factoryconvert;

/**
 * Class ConvertPngToWebp
 * @package Image\factoryconvert
 *
 *
 */
class ConvertPngToWebp implements FactoryConvertInterface
{

    /**
     * @var
     *
     */
    private $content;

    /**
     * @param $file
     * @return $this|mixed
     *
     *
     */
    public function convert($file)
    {

        $file = $file;
        $image = imagecreatefrompng($file);
        ob_start();
        imagepng($image, NULL, 100);
        $cont = ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $this->content = imagecreatefromstring($cont);


        return $this;
    }

    /**
     * @param $filename
     * @return bool|mixed
     *
     *
     *
     */
    public function save($filename, $quality)
    {

        imagewebp($this->content, $filename, $quality);
        return imagedestroy($this->content);
    }
}