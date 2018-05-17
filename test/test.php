<?php

include_once "../vendor/autoload.php";

use Image\Image;


class test
{
    public function testResize()
    {


        $image = new Image();

        $image->load((string) "ay.jpg")
            ->resize(800, 600)
            ->save("sonbir.jpg", 80);


    }

}


(new test())->testResize();
