# Image-resize

for install  with composer 

<br>

composer require zeus/image


<br>
 use Image\Image;
 
 <br>



        $image = new Image();

        $image->load("in.jpg")
            ->resize(100, 100)
            ->save("out.jpg", 15);

<br>

save($output,$quality)

load($imagepath)

resize($width,$height)
