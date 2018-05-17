<?php
/**
 * Date: 16.05.2018
 * Time: 16:17
 */

namespace Image;


class Load
{


    /**
     * @param $image
     * @return mixed
     * @throws \Exception
     *
     *
     */
    public function loadImage($image)
    {

        if(file_exists($image)):
            return $image;
        else:

            throw new \Exception("cant find image path $image");
        endif;
    }

}