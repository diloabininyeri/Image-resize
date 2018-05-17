# Image-resize


 use Image\Image;



        $image = new Image();

        $image->load("in.jpg")
            ->resize(100, 100)
            ->save("out.jpg", 15);

<br>

save($output,$quality)

load($imagepath)

resize($width,$height)
