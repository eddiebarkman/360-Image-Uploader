# 360-Image-Uploader
Upload 360 Images and view them in the browser.

This was a prototype web application I made to easily upload and view 360 images in my browser on both my phone and desktop computer. This was a bit before more services had popped up allowing this kind of thing.

What it would do is you chose your 360 image and uploaded it via my page. The upload.php file would then test it and make sure it was compatible. 

Afterwards it would rename the file and place it into a directory. It would also start the pageGen.php which created a super simple Aframe webpage that used the just uploaded image as the 360 background. It would also at this point be added to the gallery page where all the images are available to view.

After this you would be redirected to the 360.php page with the id of the image just uploaded. You could then view it within the page or click the link to view the full page.


You can view the non-functioning version here http://eddiebarkman.com/VR/upload360/

Or a direct link to one of the images http://eddiebarkman.com/VR/upload360/3600306.html?id=1466017037