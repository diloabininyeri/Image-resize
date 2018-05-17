<?php
/**
 * User: muzlu
 * Date: 17.05.2018
 * Time: 15:47
 */

namespace Image\factory;
/**
 * Interface ImagesInterfaceResize
 * @package Image\factory
 *
 */

interface  ImagesInterfaceResize
{

    public function resize($width, $height, $image);


    public function save($savepath, $quality);


}