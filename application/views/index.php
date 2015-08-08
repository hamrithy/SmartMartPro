<?php $this->load->view('_include'); ?>
<!-- BEGIN CUSTOMIZATION STYLE -->

<!-- END CUSTOMIZATION STYLE -->
</head>
<!-- END HEAD TAG -->
<body class="stretched">
    <?php //echo $this->input->cookie('LANGUAGE'); ?>

    <div id="wrapper" class="clearfix">

        <!-- BEGIN HEADER -->
        <?php $this->load->view('_header');?>
        <!-- END HEADER -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <?php $this->load->view('_slide'); ?>

                <div class="promo parallax promo-full bottommargin-lg" style="background-image: url('<?php echo base_url('public/style_front/images/parallax/3.jpg')?>)';" data-stellar-background-ratio="0.4">
                    <div class="container clearfix">
                        <h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
                        <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
                        <a href="javascript:;" class="button button-xlarge button-rounded">Start Shopping</a>
                    </div>
                </div>

                <div class="container clearfix">

                    <?php $this->load->view('_feature.php');?>                    

                    <div class="clear"></div>

                    <div class="col_one_third nobottommargin">

                        <div class="fancy-title title-border">
                            <h4>Recently Arrived</h4>
                        </div>

                        <div>
                            <?php foreach($arriveds as $product){
                                    $thumnailurl = explode(";", $product->thumbnailurl);
                                    echo '  <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'"><img src="'.$thumnailurl[0].'" alt="Image"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'">'.$product->title.'</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">$ '.$product->price.'</li>
                                                    <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                                </ul>
                                            </div>
                                        </div>';

                            }?>
          
                        </div>

                    </div>

                    <div class="col_one_third nobottommargin">

                        <div class="fancy-title title-border">
                            <h4>Popular Products</h4>
                        </div>

                        <div>
                            <?php foreach($populars as $product){
                                    $thumnailurl = explode(";", $product->thumbnailurl);
                                    echo '  <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'"><img src="'.$thumnailurl[0].'" alt="Image"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'">'.$product->title.'</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">$ '.$product->price.'</li>
                                                    <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                                </ul>
                                            </div>
                                        </div>';

                            }?>

                        </div>

                    </div>

                    <div class="col_one_third nobottommargin col_last">

                        <div class="fancy-title title-border">
                            <h4>Recommended for You</h4>
                        </div>

                        <div>
                            <?php foreach($recommends as $product){
                                    $thumnailurl = explode(";", $product->thumbnailurl);
                                    echo '  <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'"><img src="'.$thumnailurl[0].'" alt="Image"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="'.site_url().'product/detail/'.$product->productid.'/'.$product->categoryid.'">'.$product->title.'</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">$ '.$product->price.'</li>
                                                    <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                                </ul>
                                            </div>
                                        </div>';

                            }?>

                     

                        </div>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div id="oc-clients-full" class="owl-carousel image-carousel">
                        <?php 
                            $slidersPartner = $this->sliders->getSlidesByType("partner");
                            foreach($slidersPartner as $slider){
                                echo '<div class="oc-item" style="margin-right: 30px;">
                                        <a href="'.$slider->linkto.'" title="'.$slider->title.'">
                                            <img src="'.$slider->imageurl.'" alt="Clients" height="100px">
                                        </a>
                                    </div>';
                            }
                        ?>
       
                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocClients = $("#oc-clients-full");

                            ocClients.owlCarousel({
                               
                                nav: false,
                                autoplay: true,
                                dots: false,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:2 },
                                    480:{ items:3 },
                                    768:{ items:4 },
                                    992:{ items:5 },
                                    1200:{ items:7 }
                                }
                            });
                        });

                    </script>

                </div>

                <div class="si-sticky si-sticky-right hidden-sm hidden-xs">
                    <a href="javascript:;" class="social-icon si-colored si-facebook" data-animate="bounceInRight">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="javascript:;" class="social-icon si-colored si-twitter" data-animate="bounceInRight" data-delay="100">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="javascript:;" class="social-icon si-colored si-pinterest" data-animate="bounceInRight" data-delay="200">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>
                    <a href="javascript:;" class="social-icon si-colored si-instagram" data-animate="bounceInRight" data-delay="300">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="javascript:;" class="social-icon si-colored si-gplus" data-animate="bounceInRight" data-delay="600">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>
                    <a href="javascript:;" class="social-icon si-colored si-rss" data-animate="bounceInRight" data-delay="700">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>
                </div>

            </div>

        </section><!-- content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('_footer'); ?>
        <!-- END FOOTER SECTION -->
       
</body>
</html>