<?php



use Image\Image;


class imageUnitTest extends \PHPUnit\Framework\TestCase
{
    public function testResize()
    {


        $image = new Image();

        $path=(string) __DIR__."/ay.jpg";

        $image->load($path)
            ->convertWebp()
            ->save(getcwd()."/test/sonbir.webp",80);

        $this->assertFileExists(getcwd()."/test/sonbir.webp",true);





    }

}





