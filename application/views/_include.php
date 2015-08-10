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
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Title Here" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.example.com/" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:description" content="Description Here" /> 
    <meta property="og:site_name" content="Site Name, i.e. Moz" />
    <meta property="fb:admins" content="Facebook numeric ID" />
    <!-- END INFORMATION AND SEO INFORMATION -->

    <script>
        var language = '<?php echo $this->input->cookie('LANGUAGE'); ?>';
        language = (language==null || language == '') ? 'english' : language;
    </script>
    <style>
        .iproduct .product-image{
            height: 350px;
        }
    </style>