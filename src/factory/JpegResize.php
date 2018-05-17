<?php
/**
 * User: muzlu
 * Date: 16.05.2018
 * Time: 16:56
 */

namespace Image\factory;

class JpegResize implements ImagesInterfaceResize
{

    private $hedef;

    /**
     * @param $width
     * @param $height
     * @param $image
     * @return $this
     *
     */
    public function resize($width, $height, $image)
    {

        $dosya = $image;

        $yukseklik = $height;
        $genislik = $width;

        list($mevcutGenislik, $mevcutYukseklik) = getimagesize($dosya);

        $this->hedef = imagecreatetruecolor($genislik, $yukseklik);
        $kaynak = imagecreatefromjpeg($dosya);

        imagecopyresampled($this->hedef, $kaynak, 0, 0, 0, 0, $genislik, $yukseklik, $mevcutGenislik, $mevcutYukseklik);

        return $this;
    }

    /**
     * @param $savepath
     * @param int $quality
     * @return bool
     *
     *
     */
    public function save($savepath, $quality)
    {
        imagejpeg($this->hedef, $savepath, $quality);

        return imagedestroy($this->hedef);
    }

}