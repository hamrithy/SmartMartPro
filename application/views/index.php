<?php $this->load->view('layouts/_include'); ?>
<!-- BEGIN CUSTOMIZATION STYLE -->

<!-- END CUSTOMIZATION STYLE -->
</head>
<!-- END HEAD TAG -->
<body class="stretched">
    <?php //echo $this->input->cookie('LANGUAGE'); ?>

    <div id="wrapper" class="clearfix">

        <!-- BEGIN HEADER -->
        <?php $this->load->view('layouts/_header');?>
        <!-- END HEADER -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <?php $this->load->view('layouts/_slide'); ?>

                <div class="promo parallax promo-full bottommargin-lg" style="background-image: url('<?php echo base_url('public/style_front/images/parallax/3.jpg')?>)';" data-stellar-background-ratio="0.4">
                    <div class="container clearfix">
                        <h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
                        <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
                        <a href="javascript:;" class="button button-xlarge button-rounded">Start Shopping</a>
                    </div>
                </div>

                <div class="container clearfix">


                    <?php $this->load->view('layouts/_feature.php');?>

                    <div class="clear"></div>

                    <div class="col_one_third nobottommargin">

                        <div class="fancy-title title-border">
                            <h4>Recently Arrived</h4>
                        </div>

                        <div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/1.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Blue Round-Neck Tshirt</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$29.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/6.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Checked Short Dress</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$23.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/7.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Light Blue Denim Dress</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$19.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/9.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Slim Fit Chinos</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$24.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third nobottommargin">

                        <div class="fancy-title title-border">
                            <h4>Popular Products</h4>
                        </div>

                        <div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/3.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Round-Neck Tshirt</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$15</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/10.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Green Trousers</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$19</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/11.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Silver Chrome Watch</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$34.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/4.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Black Polo Tshirt</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$17.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third nobottommargin col_last">

                        <div class="fancy-title title-border">
                            <h4>Recommended for You</h4>
                        </div>

                        <div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="<?php echo site_url('product/1')?>"><img src="<?php echo base_url('public/style_front/images/shop/small/8.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Pink Printed Dress</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$21</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/5.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Blue Round-Neck Tshirt</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$19.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/12.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Men Aviator Sunglasses</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$14.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/shop/small/2.jpg')?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="javascript:;">Unisex Sunglasses</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color">$17.99</li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div id="oc-clients-full" class="owl-carousel image-carousel">
                        <?php 
                            $slidersPartner = $this->sliders->getSlidesByType("partner");
                            foreach($slidersPartner as $slider){
                                echo '<div class="oc-item" style="margin-right: 30px;">
                                        <a href="javascript:;">
                                            <img src="'.$slider->imageurl.'" alt="Clients">
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
        <?php $this->load->view('layouts/_footer'); ?>
        <!-- END FOOTER SECTION -->
       
</body>
</html>