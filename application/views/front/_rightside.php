				<div class="main-sidebar sidebar-right">

                                <div class="widget widget-item widget_search">
                                	
                                    <form class="search-form" action="<?php echo site_url()?>/blog" role="search" method="get">
                                        <div class="submit-wrap1" style="content: ''">
                                            <input type="submit" class="search-button search-submit submit" value="">
                                        </div>
                                        <div class="search-wrap ovh">
                                           <input type="text" placeholder="Search" required="required" name="search" class="search-line opacity">
                                        </div>
                                    </form>
                                </div>

                                <div class="widget widget-item widget_recent_entries">      
                                    <h3>Recent Posts</h3>       
                                    <ul id="recentPost" style="width: 260px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    	
                                    </ul>
                                </div>

                                <div class="widget widget-item widget_recent_posts">
                                    <h3 >Recent News</h3>       
                                    <ul class="clean-list ovh" id="recentFood">
                                    	                                     
                                    </ul>
                                </div>


                                <div class="widget widget-item widget_archive">
                                    <h3>Archives</h3>
                                    <ul class="toggle-vertical archive-list clean-list grey-background ovh">
                                        <li>
                                            <input type="checkbox" id="toggle_archive" name="toggle-helper">
                                            <label for="toggle_archive" class="uppercase margin"><i class=""></i>2014</label>

                                            <div class="toggle-content text-dark-blue">
                                                <ul class="clean-list">
                                                    <li><a href="post4635.html?page=single-blog">2013</a></li>
                                                    <li><a href="post4635.html?page=single-blog">2012</a></li>
                                                    <li><a href="post4635.html?page=single-blog">2011</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-item twitter_widget tesla_twitter_widget">
                                    <h3>Twitter</h3>
                                    <div class="tt_twitter">
                                        <ul class="twitter">
                                            <li>Thanks <a href="http://twitter.com/olidale">@olidale</a>, we'll think about creating a <a href="http://twitter.com/search?q=%23WordPress&amp;src=hash">#WordPress</a> plugin, regards!<span class="date">1 day ago</span></li>
                                            <li>How To: HTML5 Background Video <a href="http://t.co/E82ExrpLmI">http://t.co/E82ExrpLmI</a><span class="date">4 days ago</span></li><li class="last">Hi <a href="http://twitter.com/olidale">@olidale</a>, it's a custom one, do you like it?<span class="date">4 days ago</span></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="widget widget-item widget_categories">
                                    <h3>Categories</h3>
                                    <ul id="recentFootType">
                                   		 
                                    </ul>
                                </div>

                                <div class="widget widget-item widget_tag_cloud">
                                    <h3>Tags</h3>
                                    <div class="tagcloud">
                                        <a style="font-size: 22pt;" title="2 topics" class="" >Resaturant</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" href="#">Food</a>
                                        <a style="font-size: 14pt;" title="2 topics" class="" >Chinese foods</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Recept</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Meat</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Chicken</a>
                                    </div>
                                </div>
                            </div>
          
          
          
          
          
              <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
                            
                           
                       <script type="text/javascript">
                           $(function(){ 
	                            $.ajax({
					                type: "POST",
					                url: '<?php  echo site_url()?>/_public/rightSidePro',
					                dataType: 'json',
					                success: function(data){ 
					                    $("#recentPost").empty();
					                    $("#tmplRecentPost").tmpl(data.recentPost).appendTo("#recentPost");
					                    $("#recentFood").empty();
					                    $("#tmplRecentFood").tmpl(data.recentFood).appendTo("#recentFood");
					                    $("#recentFootType").empty();
					                    $("#tmplRecentFoodType").tmpl(data.recentFoodType).appendTo("#recentFootType");
					                    console.log("DATA:",data); 
					                },
					                error: function(data){
					                    console.log("ERROR...");
					                    console.log(data);
					                }
					            });
				            });
                        </script>  
                        
             
             
             
                        
    <script type="text/x-jquery-tmpl" id="tmplRecentPost">
		  <li>
                <a href="<?php echo base_url() ?>blog/detail/{{= postid }}">{{= title}}</a>
          </li>
	</script>
	
	
	<script type="text/x-jquery-tmpl" id="tmplRecentFood">
	
									<li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="<?php echo site_url()?>/menu/food/{{= foodid}}">
                                                        <img src="{{= thumbnailurl}}" alt="Donut with scrambled eggs" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding" style="height: 55px;overflow: HIDDEN;">
                                                <div class="entry-content inline">
                                                    <!--<time class="text-center" datetime="2014-08-18">18.08.2014</time>--><a href="<?php echo site_url()?>/menu/food/{{= foodid}}" class="entry-title">{{= title}}</a>
                                                </div>
                                            </div>
                                        </li>
	</script>
	
	
	<script type="text/x-jquery-tmpl" id="tmplRecentFoodType">
			<li class="cat-item cat-item-19">
					<a title="View all posts filed under Healty Food" href="<?php echo site_url()?>/menu">{{= title}}</a> 
			</li>
	</script>
	
	
	<script type="text/javascript">
	 $(function(){ 
			$("#btSearch").click(function(){
					alert(1);
			});
	 });
	</script>