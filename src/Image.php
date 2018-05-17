<?php

namespace Image;


/**
 * Class Image
 * @package Image
 *
 *
 */
class Image
{

    private $width,
        $height,
        $imagePath,
        $resize;

    /**
     * @param $width
     * @param $height
     * @return $this
     *
     *
     */
    public function resize($width, $height)
    {

        $this->height = $height;

        $this->width = $width;
        $this->resize = new Resize();
        $mimetype = new MimeType();

        $fileMimeType = $mimetype->getMimeTypeOfImage($this->imagePath);

        $this->resize->resize($width, $height, $fileMimeType, $this->imagePath);

        return $this;
    }

    /**
     * @param $imagePath
     * @return $this
     * @throws \Exception
     *
     *
     */
    public function load($imagePath)
    {

        $this->imagePath = (new Load())->loadImage($imagePath);

        return $this;
    }

    /**
     * @param $savePath
     * @param int $quality
     * @return mixed
     *
     *
     */
    public function save($savePath, $quality=100)
    {

        return $this->resize->save($savePath, $quality);

    }
}