<?php

include_once "../vendor/autoload.php";

use Image\Image;


class test
{
    public function testResize()
    {


        $image = new Image();

        $image->load((string) "ay.jpg")
            ->convertWebp()
            ->save("sonbir.webp", 80);


    }

}


(new test())->testResize();


