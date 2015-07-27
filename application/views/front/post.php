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

    <script src="<?php echo base_url()?>public/style_front/js/jquery.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>

</head>
<body>
    <div class="page-content show-content">
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="wood-background post-content">
            <div class="container ">
                <div class="margin-top padding-top">
                    <div class="row no-margin">
                        <div class="col-md-9 no-padding">
                            
                           
                            
                            <div class="margin-right-6">
                            
                             <?php foreach ($postDetail as $v){?>
                                <div class="post background-white padding">
                                        <header>
                                            <figure>
                                                <img src="<?php echo $v->thumbnailurl ?>" alt="Featured Image" />
                                            </figure>

                                            <div class="header-meta row no-margin">
                                                <div class="col-md-2 col-sm-2 col-xs-2">
                                                    <span class="date center-me pre-line aligncenter margin-half-top">
                                                         <?php echo date("d", strtotime($v->postdate))."<br/>".date("M", strtotime($v->postdate));?> 
                                                    </span>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-10">
                                                    <h2 class="entry-title"><?php echo $v->title ?></h2>
                                                    <ul class="clean-list post-meta-list border-top row">
                                                        <li class="no-padding">
                                                            <a href="#" class="meta-link comments">1 comment</a> /
                                                            <a class="text-red hover-text-dark-red author" href="#"><?php echo $v->username ?></a> / 
                                                            <div class="tag-list inline">
                                                                <a href="#" rel="tag">food</a>, <a href="#" rel="tag">chicken</a>
                                                            </div>

                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </header>
                                        <div class="entry-content border padding" style="width: auto;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                           
                                           <?php echo $v->longdescription ?>

                                            <div class="clean-list share-links padding-top share-socials clearfix border-top margin-double-top">
                                                <!-- <ul class="clean-list socials ovh no-margin inline">
                                                    <li>
                                                        <a href="#">
                                                            <span class="st_facebook_large">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="st_twitter_large">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="st_pinterest_large">
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul> -->
                                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5291b47f21c49656" async="async"></script>
                                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                <div class="addthis_sharing_toolbox"></div>
                                            </div>
                                        </div>
                                </div>

							 <?php } ?>
							 
							 
                                <div class="comments-wrap background-white">
                                    <div class="comments-area comments-block">
                                        <div id="disqus_thread" style="padding: 10px;"></div>
                                            <script type="text/javascript">
                                                /* * * CONFIGURATION VARIABLES * * */
                                                var disqus_shortname = 'cafechateau';
                                                
                                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                                (function() {
                                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                                })();
                                            </script>
                                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                            
                            
                            
                        </div>
                        <div class="col-md-3 no-padding">
                            <!-- RightSideBar -->
                            <?php include_once '_rightside.php';?>
                            <!-- End RightSideBar -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
    </div>

</body>
</html>