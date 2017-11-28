<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="mobile-web-app-capable" content="yes">
    <title>VRWeb.IO 360 Uploads</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/style.css" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,300|PT+Serif:400,700italic' rel='stylesheet' type='text/css'>
    <?php echo $gallery->getColorboxStyles(5); ?>

        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <?php echo $gallery->getColorboxScripts(); ?>

            <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>
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
        <a class="navmenu-brand" href="http://www.vrweb.io">VRWeb.IO</a>
        <ul class="nav navmenu-nav">
            <li><a href="http://www.vrweb.io/upload/">Upload Image</a></li>
            <li class="active"><a href="http://www.vrweb.io/upload/gallery.php">View Gallery</a></li>
            <li><a href="http://www.vrweb.io/About">About VRWeb.IO</a></li>
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
            <!-- Start UberGallery v<?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
            <div class="col-md-12">
                <h1 style="font-family: 'Open Sans', sans-serif; box-shadow:none; text-shadow:none;">360 Gallery</h1>
                <h5>If there is an image here you wish to be removed please send me an email at <a href="mailto:info@vrweb.io">info@vrweb.io</a></h5>
                <a href="http://vrweb.io/upload/" <span class="btn btn-default btn-file">Upload an image</span></a>
                <div class="line"></div>

                <?php if($gallery->getSystemMessages()): ?>
                    <ul id="systemMessages">
                        <?php foreach($gallery->getSystemMessages() as $message): ?>
                            <li class="<?php echo $message['type']; ?>">
                                <?php echo $message['text']; ?>
                            </li>
                            <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                        <div id="galleryListWrapper" class="col-md-12">
                            <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
                                <ul id="galleryList" class="clearfix gallery center-block text-center">
                                    <?php foreach ($galleryArray['images'] as $image): ?>
                                        <li class="center-block text-center"><a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" class="img-responsive"/></a></li>
                                        <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                        </div>

                        <div class="line"></div>
                        <div id="galleryFooter" class="clearfix">

                            <?php if ($galleryArray['stats']['total_pages'] > 1): ?>
                                <ul id="galleryPagination">

                                    <?php foreach ($galleryArray['paginator'] as $item): ?>

                                        <li class="<?php echo $item['class']; ?>">
                                            <?php if (!empty($item['href'])): ?>
                                                <a href="<?php echo $item['href']; ?>">
                                                    <?php echo $item['text']; ?>
                                                </a>
                                                <?php else: ?>
                                                    <?php echo $item['text']; ?>
                                                        <?php endif; ?>
                                        </li>

                                        <?php endforeach; ?>

                                </ul>
                                <?php endif; ?>
                        </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            var a = document.getElementsByTagName("a");
            for (var i = 0; i < a.length; i++) {
                if (!a[i].onclick && a[i].getAttribute("target") != "_blank") {
                    a[i].onclick = function () {
                        window.location = this.getAttribute("href");
                        return false;
                    }
                }
            }
        });
    </script>
</body>

</html>