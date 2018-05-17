<?php
/**
 *
 */

namespace Image\factory;


class PngResize implements ImagesInterfaceResize
{

    private $hedef;


    /**
     * @param $width
     * @param $height
     * @param $image
     * @return $this
     *
     *
     */
    public function resize($width, $height, $image)
    {

        //header('Content-type: image/png');
        $dosya = $image;

        $yukseklik = $height;
        $genislik = $width;

        list($mevcutGenislik, $mevcutYukseklik) = getimagesize($dosya);
        $this->hedef = imagecreatetruecolor($genislik, $yukseklik);
        $kaynak = imagecreatefrompng($dosya);
        imagecopyresampled($this->hedef, $kaynak, 0, 0, 0, 0, $genislik, $yukseklik, $mevcutGenislik, $mevcutYukseklik);


        return $this;
    }

    /**
     * @param $savepath
     * @param int $quality
     *
     *
     */
    public function save($savepath, $quality)
    {

        imagepng($this->hedef, $savepath, $quality*0.1);
        imagedestroy($this->hedef);

    }
}