<?php

include_once "../vendor/autoload.php";

use Image\Image;


class test
{
    public function testResize()
    {


        $image = new Image();

        $image->load("in.jpg")
            ->resize(100, 100)
            ->save("sonbir.jpg", 15);


    }

}


(new test())->testResize();
