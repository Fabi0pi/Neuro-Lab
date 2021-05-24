<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neuro Lab Theme</title>    
    
    <!-- Leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!-- Leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>  

    <?php wp_head(); ?>
</head>

<?php 
    //we want this specific class for our home page
    if (is_front_page()):
        $neurolab_classes = array ('neurolab-class', 'my-class');
    else:
        $neurolab_classes = array ('no-neurolab-class');
    endif;

?>

<body <?php body_class( $neurolab_classes ); ?>>    <!--php body_class to assign a class to every page. We use an array's name to insert our custom classes-->
   
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <img src="https://www.freebigmoney.com/wordpress/wp-content/uploads/2021/05/logoN.png" alt="" width="100" height="50">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <?php 
                            wp_nav_menu(array(                                     // <!--to Call our menu in our pages -->
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'navbar-nav ms-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            )); 
                        ?> 
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    


 