<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        .imgSize{
            min-height: 133.25px;
        }
    </style>

</head>
<body>
    <div class="page-content show-content">
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <!-- Slideshow -->
        <?php include_once '_slideshow.php'; ?>
        <!-- End Slideshow -->

        <!-- Service -->

        <?php include_once '_service.php'; ?>
        <!-- End Service -->

        <!-- Best Offer -->

        <?php include_once '_bestoffer.php';?>
        <!-- End Best Offer -->

        <section class="section section-dishes">
            <div class="container">
                <div class="section-block dishes-block">
                    <div class="row">
                        <!-- Best Hot -->    
                        <?php include_once '_besthot.php'; ?>
                        <!-- End Best Hot -->
                            <div class="col-md-7" id="FOODS">
                                <div class="content-sliders background-white padding" id="content_sliders">
                                    <?php 
                                        $count=0;
                                        foreach($categories as $category){
                                            $count++;
                                            if($category->TOTL==0){
                                                continue;
                                            }
                                    ?>
                                    <div class="relative <?php if($count>1) echo 'margin-top padding-top border-top';?>">
                                        <h2 class="entry-title no-margin"><?php echo $category->title?></h2>
                                        <div class='slider <?php echo str_replace(" ","",strtolower($category->title))?>-slider' id='<?php echo str_replace(" ","",strtolower($category->title))?>'>
                                            <ul class="slidesContainer clean-list row">
                                               <?php foreach($foods as $food){ 
                                                        if($food->foodtypeid == $category->foodtypeid){
                                                ?>
                                               <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo $food->thumbnailurl ?>" class="zoom-image"><img src="<?php echo $food->thumbnailurl ?>" class="imgSize" alt="<?php echo $food->food_title ?>"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon"><?php echo $food->food_title ?></a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span><?php echo $food->price ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php   } 
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
  <!--                               <div class="content-sliders background-white padding" id="content_sliders">
                                    <div class="relative">
                                        <h2 class="entry-title no-margin">Snack</h2>
                                        <div class="slider breakfast-slider" id="breakfast">
                                            <ul class="slidesContainer clean-list row">
                                               <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Mascarpone mousse with nuts & basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$14.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>                                                

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Mascarpone mousse with nuts & basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$14.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative margin-top padding-top border-top">
                                        <h2 class="entry-title no-margin">Hot</h2>
                                        <div class="slider lunch-slider" id="lunch">
                                            <ul class="slidesContainer clean-list row">
                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Spain Hot Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Hot Choccalate</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot3.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot3.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Hazelnut latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$04.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot4.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot4.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Cappuccino</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Hot Choccalate</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Spain Hot Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative margin-top padding-top border-top">
                                        <h2 class="entry-title no-margin">Cold</h2>
                                        <div class="slider lunch-slider" id="dinner">
                                            <ul class="slidesContainer clean-list row">

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Iced Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Coffee Frappe</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold3.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold3.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Mocha Coffee</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold4.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold4.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Iced Caramel Macchiato</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold5.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold5.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Ice Condensed Milk Coffee</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$03.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div> -->


                                </div>
                            </div>
                         </div>
                    </div>
                </div>
        </section>
        
        <!-- Visit us -->
        <?php include_once '_visitus.php' ; ?>


        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>

    <!-- Scripts -->
   
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script type="text/javascript">
        $(function(){

            pageSliders = function() {
              "use strict";
              jQuery(document).ready(function() {

                var slider_breakfast = jQuery('#FOODS .slider').sudoSlider({
                  numeric: false,
                  responsive: true,
                  vertical: false,
                  autoHeight: true,
                  moveCount: 4,
                  prevhtml: ' <a href="#" class="prev-nav"></a> ',
                  nexthtml: ' <a href="#" class="next-nav"></a> ',
                  controlsattr: 'id="breakfast_controls" class="controls"',
                  numericattr: 'class="slider-nav"',
                  slideCount: 4,
                  continuous: false,
                  animationZIndex: 10
                });

                if (jQuery('#breakfast').length) {
                  if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
                    slider_breakfast.setOption('slideCount', 3);
                    slider_breakfast.setOption('moveCount', 3);
                  } else if (jQuery(window).width() < 468) {
                    slider_breakfast.setOption('slideCount', 2);
                    slider_breakfast.setOption('moveCount', 2);
                  } else {
                    slider_breakfast.setOption('slideCount', 4);
                    slider_breakfast.setOption('moveCount', 4);
                  }

                  jQuery(window).resize(function() {
                    if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
                      slider_breakfast.setOption('slideCount', 3);
                      slider_breakfast.setOption('moveCount', 3);
                    } else if (jQuery(window).width() < 468) {
                      slider_breakfast.setOption('slideCount', 2);
                      slider_breakfast.setOption('moveCount', 2);
                    } else {
                      slider_breakfast.setOption('slideCount', 4);
                      slider_breakfast.setOption('moveCount', 4);
                    }
                  });
                }

              });
            }
            pageSliders();
        });

    </script>
</body>
</html>
