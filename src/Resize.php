<?php
/**
 * User: muzlu
 * Date: 16.05.2018
 * Time: 16:31
 */

namespace Image;

use Image\factory\JpegResize;
use Image\factory\PngResize;
use Image\factory\GifResize;

class Resize
{

    private $resize;

    /**
     * @param $width
     * @param $height
     * @param $mimetype
     * @param $image
     * @return $this
     *
     */
    public function resize($width, $height, $mimetype, $image)
    {


        $extension = explode("/", $mimetype)[1];


        if ($extension == "jpg" || $extension == "jpeg") {


            $this->resize = (new JpegResize())->resize($width, $height, $image);


        } else if ($extension == "png" or $extension == "PNG") {


            $this->resize = (new PngResize())->resize($width, $height, $image);


        } else {

            $this->resize = (new GifResize())->resize($width, $height, $image);

        }


        return $this;


    }

    /**
     * @param $savePath
     * @param $quality
     * @return mixed
     *
     *
     */
    public function save($savePath,$quality)
    {


        return $this->resize->save($savePath,$quality);

    }
}