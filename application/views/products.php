<?php $this->load->view('_include'); ?>
<!-- BEGIN CUSTOMIZATION STYLE -->

<!-- END CUSTOMIZATION STYLE -->
</head>
<!-- END HEAD TAG -->

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- BEGIN HEADER -->
        <?php $this->load->view('_header');?>
        <!-- END HEADER -->

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Products</h1>
                <span>Start Buying your Favourite Products</span>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('')?>">Home</a></li>
                    <li class="active">Products</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin col_last">

                        <!-- Shop
                        ============================================= -->
                        <div id="shop" class="product-3 clearfix">

	
							<?php foreach ($lstProduct as $v){?>
							
							<div class="product clearfix">
                                <div class="product-image">
								    <?php 
								    $thumnailurl = explode(";", $v->thumbnailurl);
								    //  for($i=0; $i<count($thumnailurl); $i++){
								    // 	echo  '<a href="#"><img src="'.$thumnailurl[$i].'" alt="'.$v->title.'"></a>';
								    //   }
								    	if($thumnailurl[0] != null) {
								     		echo  '<a href="'.site_url().'product/detail/'.$v->productid.'"><img src="'.$thumnailurl[0].'" alt="'.$v->title.'"></a>';
								    	} 
										if($thumnailurl[1] != null) {
								     		echo  '<a href="'.site_url().'product/detail/'.$v->productid.'"><img src="'.$thumnailurl[1].'" alt="'.$v->title.'"></a>';
								    	}
								    ?>

<!--                                 <div class="sale-flash">50% Off*</div> -->
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="<?php echo site_url()?>product/detail/<?php echo $v->productid?>"><?php echo $v->title?></a></h3></div>
                                    <div class="product-price"><!--<del>$24.99</del>  --> <ins>$<?php echo $v->price?></ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>	
							
							
							<?php } ?>
						

						

                        </div><!-- #shop end -->

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget_links clearfix">

                                <h4>Shop Categories</h4>
                                <ul id="lstCategory">
<!--                                     <li><a href="#">Shirts</a></li> -->
<!--                                     <li><a href="#">Pants</a></li> -->
<!--                                     <li><a href="#">Tshirts</a></li> -->
<!--                                     <li><a href="#">Sunglasses</a></li> -->
<!--                                     <li><a href="#">Shoes</a></li> -->
<!--                                     <li><a href="#">Bags</a></li> -->
<!--                                     <li><a href="#">Watches</a></li> -->
                                </ul>

                            </div>

                            <div class="widget clearfix">

                                <h4>Recent Items</h4>
                                <div id="post-list-footer" class="lstRecentProducts">






                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Last Viewed Items</h4>
                                <div class="widget-last-view">
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="<?php echo base_url('public/style_front/images/shop/small/3.jpg')?>" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Round-Neck Tshirt</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$15</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="<?php echo base_url('public/style_front/images/shop/small/10.jpg')?>" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Green Trousers</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$19</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="<?php echo base_url('public/style_front/images/shop/small/11.jpg')?>" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Silver Chrome Watch</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$34.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Popular Items</h4>
                                <div id="Popular-item" class="lstPopProduct">
                                    
                                    
                                    
                                    
                                    
                                </div>

                            </div>

                            <div class="widget clearfix">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                            </div>

                            <div class="widget subscribe-widget clearfix">

                                <h4>Subscribe For Latest Offers</h4>
                                <h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                                <form action="#" role="form" class="notopmargin nobottommargin">
                                    <div class="input-group divcenter">
                                        <input type="text" class="form-control" placeholder="Enter your Email" required="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <div class="widget clearfix">

                                <div id="oc-clients-full" class="owl-carousel image-carousel">

                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/1.png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/2..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/3..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/4..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/5..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/6..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/7..png')?>" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="<?php echo base_url('public/style_front/images/clients/8..png')?>" alt="Clients"></a></div>

                                </div>

                                <script type="text/javascript">

                                    jQuery(document).ready(function($) {

                                        var ocClients = $("#oc-clients-full");

                                        ocClients.owlCarousel({
                                            items: 1,
                                            margin: 10,
                                            loop: true,
                                            nav: false,
                                            autoplay: true,
                                            dots: false,
                                            autoplayHoverPause: true
                                        });

                                    });

                                </script>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('_footer'); ?>
        <!-- END FOOTER SECTION -->
       
       
        	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
                            
                           
                       <script type="text/javascript">
                           $(function(){ 
	                            $.ajax({
					                type: "POST",
					                url: '<?php  echo site_url()?>/category/lstCategory',
					                dataType: 'json',
					                success: function(data){ 
					                    $("#lstCategory").empty();
					                    $("#tmplCategory").tmpl(data.lstCategory).appendTo("#lstCategory");
					                     console.log("DATA:",data); 
					                },
					                error: function(data){
					                    console.log("ERROR...");
					                    console.log(data);
					                }
					            });

	                            $.ajax({
					                type: "POST",
					                url: '<?php  echo site_url()?>product/recentProduct',
					                dataType: 'json',
					                success: function(data){ 
					                    $(".lstRecentProducts").empty();
					                    $("#tmplRecentProducts").tmpl(data.recentProducts).appendTo(".lstRecentProducts");
					                     console.log("DATA:",data); 
					                },
					                error: function(data){
					                    console.log("ERROR...");
					                    console.log(data);
					                }
					            });

	                            $.ajax({
					                type: "POST",
					                url: '<?php  echo site_url()?>product/lstPopProduct',
					                dataType: 'json',
					                success: function(data){ 
					                    $(".lstPopProduct").empty();
					                    $("#tmplLstPopProduct").tmpl(data.lstPopProduct).appendTo(".lstPopProduct");
					                     console.log("DATA:",data); 
					                },
					                error: function(data){
					                    console.log("ERROR...");
					                    console.log(data);
					                }
					            });
				            });
                        </script>
                        
                        
                       	<script type="text/x-jquery-tmpl" id="tmplCategory">
							 <li><a href="#">{{= title }}</a></li>
						</script> 
						
						<script type="text/x-jquery-tmpl" id="tmplRecentProducts">
							 <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{= thumnailurl }}" alt="{{= title }}"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">{{= title }}</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$ {{= price }}</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                            </ul>
                                        </div>
                            </div>
						</script> 
						
						<script type="text/x-jquery-tmpl" id="tmplLstPopProduct">
								alert({{= thumnailurl }});
								<div class="spost clearfix"> 
                                        <div class="entry-image">
                                            <a href="<?php echo site_url()?>product/detail/{{= productid }}"><img src="{{= thumnailurl }}" alt="{{= title }}"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo site_url()?>product/detail/{{= productid }}">{{= title }}</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$ {{= price }}</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                          		</div>	
                         </script> 
                                  
</body>
</html>