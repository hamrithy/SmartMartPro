<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cafe Chateau</title>
    <meta name="description" content="Great theme for creative people">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/style_front/img/favicon/favicon-apple.html" /> <!-- 152x152 -->
    <link rel="icon" href="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->
    
    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
</head>
<body>
    <div class="page-content show-content">
        
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->
        <section class="wood-background error404-content">
            <div class="container ">
                <div class="error404-block background-white padding-double margin-top-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-7 no-padding">
                            <div class="error404-form-block" >
                                    <h2 class="entry-title">sorry! the page you’re looking for cannot be found</h2>
                                    <div class="search-form-wrap">
                                        <h3 class="entry-title search-title margin-double-top">Search</h3>
                                        <form class="search-form" action="http://localhost/downtown/" role="search" method="get">
                                            <div class="submit-wrap">
                                                <input type="submit" class="search-button search-submit submit" value="">
                                            </div>
                                            <div class="search-wrap ovh">
                                               <input type="text" placeholder="Search" name="s" class="search-line opacity">
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-4 no-padding">
                            <div class="error404-background-image">
                                <h2 class="entry-title text-right">Page<br /> 404<br /> <strong>Error</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
</body>
</html>