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
    /**
     * @param $width
     * @param $height
     * @param $image
     * @return mixed
     *
     */
    public function resize($width, $height, $image);

    /**
     * @param $savepath
     * @param $quality
     * @return mixed
     *
     *
     */
    public function save($savepath, $quality);


}