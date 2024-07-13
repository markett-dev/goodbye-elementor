<!-- ///////////////////////////////////////////////
///////////////////////////////////////////////////
//////////////////////////////////////////////////


- GOODBYE ELEMENTOR
<?php echo $version = "0.7"; ?>


////////////////////////////////////////////////
///////////////////////////////////////////////
////////////////////////////////////////////// -->


<!doctype html>
<html lang="en">
    <head>
        <title>Goodbye Elementor </title>

        <!-- CONFIG -->
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <meta name="theme-color" content="#000" />
        <link rel="icon" type="image/svg+xml" href="media/favicon.webp" />

        <!-- SEO -->
        <meta name="description" content="Insert here a concise and relevant description of the page. This description will appear in search results." />
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3" />
        <meta name="author" content="Author's Name or Company Name" />
        <meta name="robots" content="index, follow" />
        <meta name="referrer" content="no-referrer-when-downgrade" />

        <!-- SOCIAL -->
        <meta property="og:title" content="Page Title" />
        <meta property="og:description" content="Page description to be displayed on social networks." />
        <meta property="og:image" content="Image URL to be displayed when sharing" />
        <meta property="og:url" content="Page URL" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@your_twitter_username" />

        <!-- ENGINE -->
        <link rel="stylesheet" href="design-system.css" />
        <link rel="stylesheet" href="design/engine/vov.min.css">
        <link rel="stylesheet" href="design/engine/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script src="design/engine/jquery.min.js"></script>
        <script src="design/engine/swiper-bundle.min.js"></script>
        <script src="design/engine/engine.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    </head>
    <body>

        <!-- UI UX -->
        <?php

        include "design/logo.php";
        include "design/video-filter.php";
        include "design/video-1-1.php";
        include "design/image-gallery.php";
        include "design/video-youtube.php";
        include "design/video-1-1.php";
        include "design/company.php";
        include "design/discount.php";
        include "design/video-1-1.php";
        include "design/faq.php";
        include "design/modal.php";

        ?>
        
        <!-- WIDGETS -->
        <?php
        
        include "design/widget-cookies.php";
        include "design/widget-whatsapp.php";
        
        ?>

        <!-- CUSTOM SCRIPTS -->
        <script>
            Fancybox.bind('[data-fancybox="gallery"]', {
                //
            }); 

            init();
        </script>
    </body>
</html>