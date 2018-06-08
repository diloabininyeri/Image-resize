<?php
/**

 * Date: 08.06.2018
 * Time: 15:11
 */

namespace Image\factoryconvert;

/**
 * Interface FactoryConvertInterface
 * @package Image\factoryconvert
 *
 */

interface FactoryConvertInterface
{

    /**
     * @return mixed
     *
     */
    public  function  convert($oldfile);


    /**
     * @param $file
     * @return mixed
     *
     */
    public function save($newfilename, $quality);
}