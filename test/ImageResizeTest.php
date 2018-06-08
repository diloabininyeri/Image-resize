<?php
/**
 * Date: 21.05.2018
 * Time: 11:02
 */


use PHPUnit\Framework\TestCase;





class ImageResizeTest extends  TestCase
{
    public function testResizeCase()
    {

        $image = new Image();

        $image->load((string) "ay.jpg")
            ->resize(200,150)
            ->save("sonbir.jpg",75);

    }

}