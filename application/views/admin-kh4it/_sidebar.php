
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget_links clearfix">
                                <div class="category-process form-process"></div>
                                <h4>Categories</h4>
                                <ul id="lstCategoryData">
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
                                <div class="recent-process form-process"></div>
                                <h4>Recent Items</h4>
                                <div id="post-list-footer" class="lstRecentProducts">






                                </div>

                            </div>

                            

                            <div class="widget clearfix">
                                <div class="popular-process form-process"></div>
                                <h4>Popular Items</h4>
                                <div id="Popular-item" class="lstPopProduct">
                                    
                                    
                                    
                                    
                                    
                                </div>

                            </div>

                            <div class="widget clearfix">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                            </div>

                            

                            

                        </div>


 <script type="text/javascript">
                           $(function(){ 
                                function formatData(value){
                                    if(value!="" || value!=null){
                                        var thumbnailurl = value["thumbnailurl"].split(";");
                                        value['thumbnailurl'] = thumbnailurl[0];
                                    }
                                };
                                $('.category-process').fadeIn();
                                $.ajax({
                                    type: "POST",
                                    url: '<?php  echo site_url()?>/category/lstCategory',
                                    dataType: 'json',
                                    success: function(data){ 
                                        $("#lstCategoryData").empty();
                                        //$("#tmplCategory").tmpl(data.lstCategory).appendTo("#lstCategory");
                                        var html ='';
                                        if(data.lstCategory.length>0){
                                            for(var i=0;i<data.lstCategory.length;i++){
                                                $("#lstCategoryData").append('<li style="font-weight:bold;"><a href="<?php echo site_url() ?>product/bycate/'+data.lstCategory[i].main.categoryid+'">'+data.lstCategory[i].main.title+'</a></li>');
                                                for(var j=0;j<data.lstCategory[i].subcategory.length;j++){
                                                    $("#lstCategoryData").append('<li class="subcategory" style="padding-left:20px;"><a href="<?php echo site_url() ?>product/bycate/'+data.lstCategory[i].subcategory[j].categoryid+'">'+data.lstCategory[i].subcategory[j].title+'</a></li>');                                                    
                                                }
                                            }

                                        }
                                        $('.category-process').fadeOut();
                                    },
                                    error: function(data){
                                        console.log("ERROR...");
                                        $('.category-process').fadeOut();
                                    }
                                });

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
                                $('.popular-process').fadeIn();
                                $.ajax({
                                    type: "POST",
                                    url: '<?php  echo site_url()?>product/lstPopProduct',
                                    dataType: 'json',
                                    success: function(data){ 
                                        if(data.lstPopProduct.length>0){
                                            for(var i=0;i<data.lstPopProduct.length;i++){
                                                formatData(data.lstPopProduct[i]);
                                            }
                                            $(".lstPopProduct").empty();
                                            $("#tmplLstPopProduct").tmpl(data.lstPopProduct).appendTo(".lstPopProduct");
                                        }
                                        $('.popular-process').fadeOut();
                                    },
                                    error: function(data){
                                        console.log("ERROR...");
                                        $('.popular-process').fadeOut();
                                    }
                                });
                            });
                        </script>
                        
                        
                        <!--<script type="text/x-jquery-tmpl" id="tmplCategory">
                             <li><a href="<?php echo site_url() ?>product/bycate/{{= categoryid }}">{{= title }}</a></li>
                        </script> -->
                        
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