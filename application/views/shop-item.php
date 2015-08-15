                <div class="single-product shop-quick-view-ajax clearfix">

                    <div class="ajax-modal-title">
                        <h2><?php  foreach ($getProduct as $v) echo $v->title?></h2>
                    </div>

                    <div class="product modal-padding clearfix">

                        <div class="col_half nobottommargin">
                            <div class="product-image">
                                <div class="fslider" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">

                                             <?php  
                                                    $thumnailurl = explode(";", $v->thumbnailurl);
                                                    for($i=0; $i<count($thumnailurl); $i++){
                                                
                                                        echo '<div class="slide"><a href="#" title="'.$v->title.'"><img src="'.$thumnailurl[$i].'" alt="'.$v->title.'"></a></div>';
                                                    }
                                                ?>

                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-flash">Sale!</div>
                            </div>
                        </div>
                        <div class="col_half nobottommargin col_last product-desc">
                            <div class="product-price"><ins>$ <?php echo $v->price ?></ins></div>
                           <!--  <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                                <i class="icon-star-empty"></i>
                            </div> -->
                          
                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                           

                            <div class="clear"></div>
                            <div class="line"></div>
                            <p><?php echo $v->description;?></p>
                           
                            <div class="panel panel-default product-meta nobottommargin">
                                <div class="panel-body">
                                   Category: <a href="<?php echo site_url();?>product/bycate/<?php echo $v->categoryid;?>" rel="tag"><?php echo $v->categoryname;?></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>