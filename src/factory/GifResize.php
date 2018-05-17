<?php
/**
 * Date: 17.05.2018
 * Time: 09:33
 */

namespace Image\factory;


class GifResize implements ImagesInterfaceResize
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


        $dosya = $image;

        $yukseklik = $height;
        $genislik = $width;

        list($mevcutGenislik, $mevcutYukseklik) = getimagesize($dosya);
        $this->hedef = imagecreatetruecolor($genislik, $yukseklik);
        $kaynak = imagecreatefromgif($dosya);
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

        imagegif($this->hedef, $savepath, $quality*0.1);
        imagedestroy($this->hedef);

    }

}