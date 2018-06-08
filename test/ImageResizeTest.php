<?php
/**
 * Date: 21.05.2018
 * Time: 11:02
 */


use PHPUnit\Framework\TestCase;

use Image\Image;

class ImageResizeTest extends  TestCase
{
    public function testResizeCase()
    {

        $image = new Image();

        $path=(string) __DIR__."/ay.jpg";
        $image->load($path)
            ->resize(200,150)
            ->save(getcwd()."/test/sonbir.jpg",75);


        $this->assertFileExists(getcwd()."/test/sonbir.jpg",true);

    }

}