                        <?php 
                            $slidersFeature = $this->sliders->getSlidesByType("feature");
                            foreach($slidersFeature as $fslider){
                                echo '<div class="col_one_third bottommargin-lg" style="margin-right:2%;">
                                        <div class="feature-box center media-box fbox-bg">
                                            <div class="fbox-media">
                                                <img src="'.$fslider->imageurl.'" alt="Image">
                                            </div>
                                            <div class="fbox-desc">
                                                <h3>'.$fslider->title.'<span class="subtitle">'.$fslider->caption.'</span></h3>
                                                 <!-- <p><a href="javascript:;" class="btn btn-default">Shop Now</a></p> -->
                                           </div>
                                        </div>
                                    </div>

                                    ';
                            }
                        ?>
                    

                 <!--    <div class="col_one_third bottommargin-lg">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="<?php echo base_url('public/style_front/images/shop/banners/11.jpg')?>" alt="Image">
                            </div>
                            <div class="fbox-desc">
                                <h3>Latest Product Arrivals<span class="subtitle">New Dress Designs Available</span></h3>
                                <p><a href="javascript:;" class="btn btn-default">Check New Arrivals</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third bottommargin-lg col_last">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="<?php echo base_url('public/style_front/images/shop/banners/12.jpg')?>" alt="Image">
                            </div>
                            <div class="fbox-desc">
                                <h3>The Style Blog<span class="subtitle">Fashion Tips from Experts</span></h3>
                                <p><a href="javascript:;" class="btn btn-default">Browse Videos</a></p>
                            </div>
                        </div>
                    </div>  -->