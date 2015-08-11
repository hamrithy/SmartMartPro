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
       	<!--
        <section id="page-title">

            <div class="container clearfix">
                <h1><?php  foreach ($getProduct as $v) echo $v->title?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('')?>">Home</a></li>
                    <li><a href="<?php echo site_url('product')?>">Product</a></li>
                    <li class="active">Prouct Details</li>
                </ol>
            </div>

        </section>
        -->
        <!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="single-product">

						<?php foreach ($getProduct as $v){?>
                        <script>
                            document.title= "<?php echo $v->title?>";
                             
                        </script>

                        <div class="product">

                            <div class="col_two_fifth">

                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class="product-image">
                                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap" data-lightbox="gallery">
                                                
                                                <?php  
                                                	$thumnailurl = explode(";", $v->thumbnailurl);
												    for($i=0; $i<count($thumnailurl); $i++){
												    	echo '<div class="slide" data-thumb="'.$thumnailurl[$i].'"><a href="'.$thumnailurl[$i].'" title="'.$v->title.'" data-lightbox="gallery-item"><img src="'.$thumnailurl[$i].'" alt="'.$v->title.'"></a></div>';
												    }
								    			?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col_two_fifth product-desc">

                                <!-- Product Single - Price
                                ============================================= -->
                                <div id="product-title" style="float:left">
                               		 <h3><?php echo $v->title ?></h3>
                                </div>
                                <div class="product-price" style="float:right">
                                			<ins>$ <?php echo $v->price ?></ins>
                                </div>
                                
                                <div style="clear:both"></div>
                                
                                

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class="product-rating">
                                    <div class="rw-ui-container"></div>
                                    <!-- <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i> -->
                                </div><!-- Product Single - Rating End -->

                                <div class="clear"></div>
                                <div class="line"></div>

                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                               

                                <!-- Product Single - Short Description
                                ============================================= -->
							
								
								<?php echo $v->description;?>



                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="panel panel-default product-meta">
                                    <div class="panel-body">
                                       
                                        <span class="posted_in">Category: <a href="#" rel="tag"><?php echo $v->categoryname;?></a>.</span>
                                       
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class="si-share noborder clearfix">
                                    <span>Share:</span>
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_sharing_toolbox"></div>
                                    <!-- <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div> -->
                                </div><!-- Product Single - Share End -->

                            </div>

							<?php  } ?>
	                       <div class="col_one_fifth col_last">.
                            
                            			
                            	<div class="widget clearfix">
                                	<div class="recent-process form-process"></div>
                                	<h4>Recent Items</h4>
                                	<div id="post-list-footer" class="lstRecentProducts">






                               		 </div>

                           		 </div>
                            

                            </div>


                        </div>

						
				
                    </div>

                   

                    <div class="col_full nobottommargin">

                        <h4>Related Products</h4>

                        <div id="oc-product" class="owl-carousel product-carousel">


							<?php foreach($lstRelateProduct as $v){ ?>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                    	<?php 
	                                    	$thumnailurl = explode(";", $v->thumbnailurl);
                                            if($thumnailurl!=""){
	                                    	  if(count($thumnailurl)>0) {
	                                    		 echo  '<a href="'.site_url().'product/detail/'.$v->productid.'/'.$v->categoryid.'"><img src="'.$thumnailurl[0].'" alt="'.$v->title.'"></a>';
	                                    	  }
	                                    	  if(count($thumnailurl)>1) {
	                                    		 echo  '<a href="'.site_url().'product/detail/'.$v->productid.'/'.$v->categoryid.'"><img src="'.$thumnailurl[1].'" alt="'.$v->title.'"></a>';
	                                    	  }
                                            }
                                    	?>
                                        <div class="product-overlay">
                                            <a href="<?php echo site_url();?>product/shopitem/<?php echo $v->productid.'/'.$v->categoryid ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="<?php echo site_url()?>product/detail/<?php echo $v->productid.'/'.$v->categoryid?>"><?php echo $v->title ?></a></h3></div>
                                        <div class="product-price"> <ins>$ <?php echo $v->price ?></ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <?php } ?>

                        </div>

                        <script type="text/javascript">

                            jQuery(document).ready(function($) {

                                var ocProduct = $("#oc-product");

                                ocProduct.owlCarousel({
                                    margin: 30,
                                    nav: true,
                                    navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                    autoplayHoverPause: true,
                                    dots: false,
                                    responsive:{
                                        0:{ items:1 },
                                        480:{ items:2 },
                                        768:{ items:3 },
                                        992:{ items:4 }
                                    }
                                });

                            });

                        </script>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('_footer'); ?>
        <!-- END FOOTER SECTION -->
        
       
       					<script type="text/javascript">
		       				  $(function(){ 
		       					function formatData(value){
                                    if(value!="" || value!=null){
                                        var thumbnailurl = value["thumbnailurl"].split(";");
                                        value['thumbnailurl'] = thumbnailurl[0];
                                    }
                                };
		       							 $('.recent-process').fadeIn();
		                                $.ajax({
		                                    type: "POST",
		                                    url: '<?php  echo site_url()?>product/lstRecentProduct',
		                                    dataType: 'json',
		                                    success: function(data){ 
		                                        if(data.recentProducts.length>0){
		                                            for(var i=0;i<data.recentProducts.length;i++){
		                                                formatData(data.recentProducts[i]);
		                                            }
		                                            $(".lstRecentProducts").empty();
		                                            $("#tmplRecentProducts").tmpl(data.recentProducts).appendTo(".lstRecentProducts");
		                                        }
		                                        $('.recent-process').fadeOut();
		                                    },
		                                    error: function(data){
		                                        console.log("ERROR...");
		                                        $('.recent-process').fadeOut();
		                                    }
		                                });
		       				  });
                        </script>
                              
                         <script type="text/x-jquery-tmpl" id="tmplRecentProducts">
                             <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="<?php echo site_url()?>product/detail/{{= productid }}/{{= categoryid }}"><img src="{{= thumbnailurl }}" alt="{{= title }}"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo site_url()?>product/detail/{{= productid }}/{{= categoryid }}">{{= title }}</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$ {{= price }}</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                            </ul>
                                        </div>
                            </div>
                        </script>        
       				 
                            
</body>
</html>