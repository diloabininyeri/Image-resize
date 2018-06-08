<?php
/**
 * Date: 21.05.2018
 * Time: 11:02
 */

include_once "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;


class ImageResizeTest extends  TestCase
{
    public function testResizeCase()
    {

        $image = new Image();

        $image->load((string) "ay.jpg")
            ->convertWebp()
            ->save("sonbir.webp");

    }

}