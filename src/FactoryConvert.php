<?php
/**
 * Created by PhpStorm.
 **/

namespace Image;


use Image\factoryconvert\ConvertJpgToWebp;
use Image\factoryconvert\ConvertPngToWebp;

class FactoryConvert
{

    /**
     * @var
     *
     */
    private $factory;

    /**
     * @param $mimetype
     * @param $file
     * @return $this|mixed
     *
     *
     */
    public function factory($mimetype, $file)
    {

        $extension = explode("/", $mimetype)[1];


        if ($extension == "jpg" || $extension == "jpeg") {


            $this->factory = new ConvertJpgToWebp();
            return $this->factory->convert($file);


        } else if ($extension == "png" or $extension == "PNG") {


            $this->factory = new ConvertPngToWebp();
            return $this->factory->convert($file);


        } else {

            $this->factory = new ConvertJpgToWebp();
            return $this->factory->convert($file);


        }


        return $this;


    }


    /***
     * @param $filename
     * @return mixed
     *
     *
     */

    public function save($filename,$quality)
    {


        return $this->factory->save($filename,$quality);

    }
}