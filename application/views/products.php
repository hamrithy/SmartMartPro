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
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>                          
    <!-- BEGIN JAVASCRIPT CODE -->
    <script type="text/javascript">
    $(function(){
        /*var pagination = {
            id:'.pagination',
            currentPage: 1,
            perPage: 10,
            totalCount: 50,
            init: function(currentPage, perPage, totalCount, callback){
                this.currentPage = currentPage;
                this.perPage = perPage;
                this.totalCount = totalCount;
                this.generate();
                this.handlePageNumber();
            },

            totalPages: function(){
                return Math.ceil(this.totalCount/this.perPage);
            },
            offset: function(){
                return (this.currentPage - 1) * this.perPage;
            },
            previousPage: function(){
                return this.currentPage - 1;
            },
            nextPage: function(){
                return parseInt(this.currentPage) + 1;
            },
            hasPreviousPage: function(){
                return this.previousPage() >=1 ? true : false;
            },
            hasNextPage: function(){
                return this.nextPage() <= this.totalPages() ? true : false;
            },
            generate: function(){
                var pages="";
                if(this.hasPreviousPage()){
                   pages +='<li style="padding-right: 50px;"><a style="width:60px;"href="javascript:;" class="first page-numbers">First</a></li>';
                }
                if(this.hasPreviousPage()){
                   pages +='<li style="padding-right: 85px;"><a style="width:85px;"href="javascript:;" class="prev page-numbers">Previous</a></li>';
                }
                var start = this.currentPage-4;
                var end = parseInt(this.currentPage)+4;
                if(start<=0){
                    end-= start-1;
                    start=1;
                }
                if(end>this.totalPages()){
                    end = this.totalPages();
                }
                for(var i=start;i<=end;i++){

                    if(this.currentPage==i){
                        pages +='<li><a href="#top" class="page-numbers current">'+ i +'</a></li>';
                    }else{
                        pages +='<li><a href="#top" class="page-numbers">'+ i +'</a></li>';
                    }
                }
                if(this.hasNextPage()){
                    pages +='<li><a href="javascript:;" class="next page-numbers">Next</a></li>';
                }
                if(this.hasNextPage()){
                   pages +='<li style="padding-left: 20px;"><a style="width:50px;"href="javascript:;" class="last page-numbers">Last</a></li>';
                }
                $(this.id).html('');
                $(this.id).html('<ul class="page-numbers center-me clean-list ">'+ pages +'</ul>');
            },
            handlePageNumber: function(){
                _this = this;
                $(this.id+' ul li').click(function(){
                    if($(this).find("a").hasClass("prev")){
                        if(_this.hasPreviousPage()){
                            _this.currentPage--;
                        }                        
                    }else if($(this).find("a").hasClass("next")){
                        if(_this.hasNextPage()){
                            _this.currentPage++;
                        }
                    }else if($(this).find("a").hasClass("first")){
                        if(_this.hasPreviousPage()){
                            _this.currentPage = 1;
                        }
                    }else if($(this).find("a").hasClass("last")){
                        if(_this.hasNextPage()){
                            _this.currentPage = _this.totalPages();
                        }
                    }else if($(this).find("a").hasClass("current")){

                    }else{
                        $(this).parents("ul").find("a").removeClass("current");
                        $(this).find("a").addClass("current");   
                        _this.currentPage = $(this).find("a").html();
                    }
                    //_this.init(_this.currentPage,_this.perPage,_this.totalCount);
                    fillData(_this.currentPage);
                });
            }
        };
        
    
        fillData = function(pageNo,searchWord){
            var _pageNo={}
            if(pageNo=="" || pageNo==null || pageNo==undefined){
                _pageNo = 1;
            }else{
                _pageNo=pageNo;
            }
             $("#loadingimg").show();
             $("#BLOGS").empty();
             $.ajax({
                type: "POST",
                url: '<?php  echo site_url()?>/blog/listallposts',
                dataType: 'json',
                data: {
                    perPage: 7,
                    pageNo: _pageNo,
                    search: '<?php echo $search ?>'
                },
                success: function(data){
                    pagination.init(_pageNo,7,data.total);  
                    
                    for(var i=0;i<data.posts.length;i++){
                        data.posts[i]['postdatamonth']='';
                        formatData(data.posts[i]);
                    }
                    $("#blogTemp").tmpl(data.posts).appendTo("#BLOGS");

                    $("#loadingimg").hide();
                    if(data.posts.length == 0){
                        $("#isNotFound").show();    
                    }else{
                        $("#isNotFound").hide();
                    }
                   
                },
                error: function(data){
                    $("#loadingimg").hide();                    }
            });
             
        }
        formatData = function(val){
            var postdate = new Date(val['postdate']);
            val['postdate'] = moment(postdate).format("DD");
            val['postdatemonth'] = moment(postdate).format("MMM");
        }
        fillData();*/
        $(document).on('click','#PAGINATION li', function(){
            if($(this).hasClass("next")){
                alert("NEXT");
            }else if($(this).hasClass("previous")){
                alert("PREVIOUS");
            }
            return;
            $.ajax({
                url  : "",
                type : "POST",
                dataType : "JSON",
                data : {
                    "PAGE_NO" : "1",
                    "PER_PAGE": "10"
                },
                success : function(data){

                },
                error : function(data){

                }
            });
        });
    });
    </script>
    <!-- END JAVASCRIPT CODE -->
</body>
</html>