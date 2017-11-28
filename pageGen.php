<?php
// Start the buffering //
ob_start();
?>
<!--This file is what generates a 360 image background using Aframe. The page is then loaded into the 360.php page-->
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/aframe.min.js"></script>
    </head>

    <body>
        <a-assets>
            <img id="myImage" src="../uploads/<?php echo $newfilename?>">

        </a-assets>
        <a-scene>
            <a-sky src="#myImage">
                <a-animation attribute="rotation" to="0 360 0" dur="250000" easing="linear" fill="forwards" repeat="indefinite"></a-animation>
            </a-sky>

        </a-scene>

    </body>

    </html>
    <?php

// Get the content that is in the buffer and put it in your file //
file_put_contents("pages/" . $newfilename2.'.html', ob_get_contents());
?>