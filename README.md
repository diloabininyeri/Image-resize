**php image resize and save library**


    composer require zeus/image

![](https://pilsniak.com/wp-content/uploads/2017/02/logo-composer-transparent.png)



Guide using


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
    

- save method have two parameter save($outputname,$quality)
- load method have one parameter load image load($imagepath)
- resize method have two parameter   resize($width,$height)

**example use on laravel**



[![](https://image.ibb.co/iFnbdy/Screenshot_from_2018_05_17_14_41_00.png)](https://image.ibb.co/iFnbdy/Screenshot_from_2018_05_17_14_41_00.png)

