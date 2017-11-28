<?php $id = $_GET['id']; ?>

    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <meta name="mobile-web-app-capable" content="yes">
        <style>

        </style>

        <title>VRWeb.IO 360 Images</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/aframe.min.js"></script>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,300|PT+Serif:400,700italic' rel='stylesheet' type='text/css'>
        <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="icons/manifest.json">
        <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
        <meta name="msapplication-config" content="icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
            <a class="navmenu-brand" href="http://www.eddiebarkman.com/">VRWeb.IO</a>
            <ul class="nav navmenu-nav">
                <li class="active"><a href="http://www.eddiebarkman.com/VR/Upload360/">Upload Image</a></li>
                <li><a href="http://www.eddiebarkman.com/VR/Upload360/gallery.php">View Gallery</a></li>
                <li><a href="http://www.eddiebarkman.com/">About VRWeb.IO</a></li>
            </ul>
        </nav>
        <div class="navbar navbar-default navbar-fixed-top col-md-12">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="VRButtons.png" class="center-block iconTop">
        </div>

        <div class="container-fluid navBarSpace">
            <div class="col-md-12 text-center">

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!--<span class="close">x</span>-->
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <!-- Modal content -->
                    <object class="modal-content" type="text/html" data="http://www.eddiebarkman.com/VR/Upload360/pages/<?php echo $id?>.html">

                    </object>

                </div>

                <div class="thumbnailContainer">
                    <object class="thumbnail360 thumbnail" type="text/html" data="http://www.eddiebarkman.com/VR/Upload360/pages/<?php echo $id?>.html">
                    </object>
                    <!-- Trigger/Open The Modal -->
                    <p>Click and drag the image above to look around. If there are any issues, try the URL below.</p>
                    <p>
                        <noSelect>Direct URL: </noSelect><code>http://www.eddiebarkman.com/VR/Upload360/pages/<?php echo $id?>.html</code>
                        <noSelect> <a href="http://www.eddiebarkman.com/VR/Upload360/pages/<?php echo $id?>.html" target="_blank"><span class="glyphicon glyphicon-share-alt"></span></a></noSelect>
                    </p><br>

                    <span id="myBtn" class="btn btn-default btn-file"> Full Screen </span>
                    <a href="http://www.eddiebarkman.com/VR/Upload360/.php" <span class="btn btn-default btn-file"> View Gallery </span></a>
                    <a href="http://www.eddiebarkman.com/VR/Upload360/" <span class="btn btn-default btn-file"> Upload an Image </span></a>
                    <br><br>

                </div>
            </div>

        </div>


        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal 
            btn.onclick = function () {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jasny-bootstrap.min.js"></script>
<script>


    $( document ).ready(function() {
    var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++) {
    if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
        a[i].onclick=function() {
                window.location=this.getAttribute("href");
                return false; 
        }
    }
}
});
</script>
    </body>

    </html>