<?php



use Image\Image;


class imageUnitTest extends \PHPUnit\Framework\TestCase
{
    public function testResize()
    {


        $image = new Image();

        $image->load((string) "ay.jpg")
            ->convertWebp()
            ->save("sonbir.webp", 80);





    }

}





