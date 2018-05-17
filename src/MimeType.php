<?php
/**
 * User: muzlu
 * Date: 16.05.2018
 * Time: 16:44
 */

namespace Image;


class MimeType
{
    /**
     * @param $image
     * @return string
     *
     */

    public function getMimeTypeOfImage($image)
    {

        return mime_content_type($image);
    }
}