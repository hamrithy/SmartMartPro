<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo$PAGE_REC->title?></title>
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

    <script src="<?php echo base_url()?>public/style_front/js/jquery.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>

</head>
<body>
    <div class="page-content show-content">
        
        
         <!-- Header -->
        <?php include_once '_header.php';?>
        <!-- End Header -->

        <!-- CONTENT -->
        <?php echo $PAGE_REC->body; ?>
        <!-- CONTENT -->

        <div class="section section-map">
            <div class="gmap-container"></div>
        </div>

        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        <!--  End Footer -->
        
        
    </div>

</body>
</html>
