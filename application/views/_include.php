<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<!-- BEGIN HEAD TAG -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SmartMart" />

    <!-- BEGIN EXTERNAL STYLESHEET -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/bootstrap.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/style.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/dark.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/font-icons.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/animate.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/magnific-popup.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public/style_front/css/responsive.css') ?>" type="text/css" />
    <!-- END EXTERNAL STYTLESHEET -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

    <!-- BEGIN EXTERNAL JQUERY.js AND PLUGINS.js
    ============================================= -->
    <script type="text/javascript" src="<?php echo base_url('public/style_front/js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/style_front/js/plugins.js') ?>"></script>
    <!-- END EXTERNAL JQUERY.js AND PLUGINS.js -->

    <!-- BEGIN WEBSITE INFORMATION AND SEO INFORMATION -->
    <title>SmartMart | TSD Template</title>
    <meta name="description" content="SmartMart Home | TSD Template">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- END INFORMATION AND SEO INFORMATION -->

    <script>
        var language = '<?php echo $this->input->cookie('LANGUAGE'); ?>';
        language = (language==null || language == '') ? 'english' : language;
    </script>
    <style>
        .iproduct .product-image, .iproduct .product-image a, .iproduct .product-image img {
            height: 350px;
        }
    </style>