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
                <h1>Category</h1>
                <span>Filter products with category</span>
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
							
							<?php if(sizeof($lstProduct)== 0){?>
							<h1>No product</h1>
							<?php }?>
							
							<?php foreach ($lstProduct as $v){?>
							
							<div class="product clearfix">
                                <div class="product-image">
								    <?php 
								    $thumnailurl = explode(";", $v->thumbnailurl);
								    //  for($i=0; $i<count($thumnailurl); $i++){
								    // 	echo  '<a href="#"><img src="'.$thumnailurl[$i].'" alt="'.$v->title.'"></a>';
								    //   }
								    	if($thumnailurl[0] != null) {
								     		echo  '<a href="'.site_url().'product/detail/'.$v->productid.'/'.$v->categoryid.'"><img src="'.$thumnailurl[0].'" alt="'.$v->title.'"></a>';
								    	} 
										if($thumnailurl[1] != null) {
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
                        <div id="PAGINATION">
                            <?php echo $this->pagination->create_links();?>
                        </div>
                    </div><!-- .postcontent end -->

                    <!-- BEGIN SIDEBAR -->
                    <div class="sidebar nobottommargin">
                        <?php $this->load->view('_sidebar.php'); ?>
                    </div>
                    <!-- END SIDEBAR -->

                </div>

            </div>

        </section><!-- #content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('_footer'); ?>
        <!-- END FOOTER SECTION -->
       
       
        	  
              
                            
                           
                       <script type="text/javascript">
                           $(function(){ 
                                function formatData(value){
                                    console.log("FORMAT DATA=",value);
                                    if(value!="" || value!=null){
                                        var thumbnailurl = value["thumbnailurl"].split(";");
                                        value['thumbnailurl'] = thumbnailurl[0];
                                    }
                                };
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
					                url: '<?php  echo site_url()?>product/lstRecentProduct',
					                dataType: 'json',
					                success: function(data){ 
					                    console.log("DATA:",data); 
                                        if(data.recentProducts.length>0){
                                            for(var i=0;i<data.recentProducts.length;i++){
                                                formatData(data.recentProducts[i]);
                                            }
                                            $(".lstRecentProducts").empty();
                                            $("#tmplRecentProducts").tmpl(data.recentProducts).appendTo(".lstRecentProducts");
                                        }
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
    					                console.log("DATA:",data); 
                                        if(data.lstPopProduct.length>0){
                                            for(var i=0;i<data.lstPopProduct.length;i++){
                                                formatData(data.lstPopProduct[i]);
                                            }
                                            $(".lstPopProduct").empty();
                                            $("#tmplLstPopProduct").tmpl(data.lstPopProduct).appendTo(".lstPopProduct");
                                        }
					                },
					                error: function(data){
					                    console.log("ERROR...");
					                    console.log(data);
					                }
					            });
				            });
                        </script>
                        
                        
                       	<script type="text/x-jquery-tmpl" id="tmplCategory">
							<li><a href="<?php echo site_url() ?>product/bycate/{{= categoryid }}">{{= title }}</a></li>
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
						
						<script type="text/x-jquery-tmpl" id="tmplLstPopProduct">
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
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                          		</div>	
                         </script> 
                                  
</body>
</html>