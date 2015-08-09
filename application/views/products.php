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
								    	if(count($thumnailurl)>0) {
								     		echo  '<a href="'.site_url().'product/detail/'.$v->productid.'/'.$v->categoryid.'"><img src="'.$thumnailurl[0].'" alt="'.$v->title.'"></a>';
								    	} 
										if(count($thumnailurl)>1) {
								     		echo  '<a href="'.site_url().'product/detail/'.$v->productid.'/'.$v->categoryid.'"><img src="'.$thumnailurl[1].'" alt="'.$v->title.'"></a>';
								    	}
								    ?>
                                    <div class="product-overlay">
                                        <a href="<?php echo site_url();?>product/shopitem/<?php echo $v->productid.'/'.$v->categoryid ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="<?php echo site_url()?>product/detail/<?php echo $v->productid.'/'.$v->categoryid ?>"><?php echo $v->title?></a></h3></div>
                                    <div class="product-price"> <ins>$<?php echo $v->price?></ins></div>
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

                        <!-- BEGIN PAGINATION -->
                        <div id="PAGINATION">
                            <?php echo $this->pagination->create_links();?>
                        </div>
                        <!-- END PAGINATION -->
                    </div><!-- .postcontent end -->
                    <div class="sidebar nobottommargin">
                    <!-- Sidebar
                    ============================================= -->
                    <?php $this->load->view('_sidebar.php'); ?>
                    <!-- End -->
                    </div>

                    
                </div>


            </div>

        </section><!-- #content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('_footer'); ?>
        <!-- END FOOTER SECTION -->
        
    <!-- BEGIN JAVASCRIPT CODE -->
    
    <!-- END JAVASCRIPT CODE -->
</body>
</html>