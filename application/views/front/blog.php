<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <meta name="description" content="Great theme for creative people">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/style_front/img/favicon/favicon-apple.html" /> <!-- 152x152 -->
    <link rel="icon" href="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->
    
    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
</head>
<body>
    <div class="page-content show-content">
    
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="wood-background post-content blog-content">
            <div class="container ">
                <div class="margin-top padding-top">
                    <div class="row no-margin">
                        <div class="col-md-9 no-padding ">
                            <div class="margin-right-6">
                            		
                   				<span id="top"></span>
                        		<span  style="padding: 170px;display:none" id="loadingimg">
                    				<img  src="<?php echo base_url() ?>public/style_front/images/loading.gif" alt="Featured Image" >
                   				</span>
               			
                                <ul class="clean-list background-white" id="BLOGS">
                                	
                                           
                                </ul>
                                
                                <div class="pagination margin-right-6">
                                    <ul class="page-numbers center-me clean-list ">
                                        <!-- <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">Next</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 no-padding">
                            <?php include_once '_rightside.php';?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>
    
   
    
    <script id="blogTemp" type="text/x-jquery-tmpl">
        <li class="post padding ">
            <header>
                <figure>
                    <a href="<?php echo base_url() ?>blog/detail/{{= postid}}">
                        <img src="{{= thumbnailurl}}" alt="Featured Image">
 						<img id="loadingimg" src="<?php echo base_url() ?>public/style_front/images/loading.gif" alt="Featured Image" style="padding: 170px;display:none">
                    </a>
                </figure>

                <div class="header-meta row no-margin">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <span class="date center-me pre-line aligncenter margin-half-top">
                        <br />
                            {{= postdate}} <br />
                            {{= postdatemonth}}
                        </span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <h2 class="entry-title" style="cursor:pointer" onclick="location.href='<?php echo base_url() ?>blog/detail/{{= postid}}'" >{{= title}}</h2>
                        <ul class="clean-list post-meta-list border-top row">
                            <li class="no-padding">
                                <a href="#" class="meta-link comments">1 comment</a> /
                                <a class="text-red hover-text-dark-red author" href="#">By {{= username}}</a> / 
                                <div class="tag-list inline">
                                    <a href="#" rel="tag">food</a>, <a href="#" rel="tag">chicken</a>
                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
            </header>
            <div class="entry-content border padding">
                <p class="padding">
                    {{= shortdescription}}  
                </p>
            </div>
            <div class="read-more half-padding border ovh">
                <a href="<?php echo base_url() ?>blog/detail/{{= postid}}" class="alignright">Read More</a>
            </div>
        </li>
    </script>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script type="text/javascript">
        var pagination = {
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

        <?php 
				$search = "";
				if (!empty($_GET)) {
					$search = $_GET["search"]; 
				}
		?>

		
       // pagination.init(1,15,300);                 
      	
       $(function(){
            var blog = {};
            fillData = function(pageNo){
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
                        search:'<?php echo $search ?>'
                    },
                    success: function(data){
                        pagination.init(_pageNo,7,data.total);  
                        
                        for(var i=0;i<data.posts.length;i++){
                            data.posts[i]['postdatamonth']='';
                            formatData(data.posts[i]);
                        }
                        $("#blogTemp").tmpl(data.posts).appendTo("#BLOGS");
                        console.log("DATA:",data); 
                        $("#loadingimg").hide();
                    },
                    error: function(data){
                        console.log("ERROR...");
                        console.log(data);
                    }
                });
                 
            }
            formatData = function(val){
                console.log(val);
                var postdate = new Date(val['postdate']);
                val['postdate'] = moment(postdate).format("DD");
                val['postdatemonth'] = moment(postdate).format("MMM");
            }
            fillData();
       });     


       
    </script>
</body>
</html>
			