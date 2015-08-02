<!-- BEGIN TOP BAR -->
<div id="top-bar">
    <!-- BEGIN TOP BAR CONTAINER -->
    <div class="container clearfix">
        <!-- BEGIN TOP BAR LEFT INFORMATION -->
        <div class="col_half nobottommargin hidden-xs">
            <p class="nobottommargin"><strong>Call:</strong> +855 (0)10 8182 289 | <strong>Email:</strong> info@tsdsolution.com</p>
        </div>
        <!-- BEGIN TOP BAR RIGHT INFORMATION -->
        <div class="col_half col_last fright nobottommargin">

            <!-- BEGIN TOP LINKS -->
            <div class="top-links">
                <ul>
                    <li><a href="#">USD</a>
                        <ul>
                            <li><a href="#">KHR</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><?php echo lang('lang_abbr') ?></a>
                        <ul>
                            <li><a href="<?php echo base_url('language/khmer')?>"><img src="<?php echo base_url('public/style_front/images/icons/flags/khmer.png')?>" alt="Khmer"> KH</a></li>
                            <li><a href="<?php echo base_url('language/english')?>"><img src="<?php echo base_url('public/style_front/images/icons/flags/english.png')?>" alt="English"> EN</a></li>
                        </ul>
                    </li>
                    <li>
                        <?php   if(!$this->session->userdata("logged_in")){ ?>
                                    <a href="<?php echo site_url('admin/auth')?>">Login</a>
                        <?php   }else{ ?>
                                    <a href="<?php echo site_url('admin/dashboard')?>"><strong><?php echo $this->encryption->decrypt($this->session->userdata("username"));?></strong></a>
                        <?php   } ?>
                        <div class="top-link-section">
                            <form id="top-login" role="form">
                                <div class="input-group" id="top-login-username">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="input-group" id="top-login-password">
                                    <span class="input-group-addon"><i class="icon-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <label class="checkbox">
                                  <input type="checkbox" value="remember-me"> Remember me
                              </label>
                              <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                          </form>
                      </div>
                  </li>
              </ul>
          </div>
          <!-- END TOP LINKS -->
      </div>
      <!-- END TOP BAR RIGHT INFORMATION -->
  </div>
  <!-- END TOP BAR CONTAINER -->
</div>
<!-- END TOP BAR -->

<!-- BEGIN HEADER -->
<header id="header" class="sticky-style-2">
    <!-- BEGIN CONTAINER HEADER -->
    <div class="container clearfix">

        <!-- BEGIN LOGO-->
        <div id="logo">
            <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php echo base_url('public/style_front/images/logo.png')?>" alt="Canvas Logo"></a>
            <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php echo base_url('public/style_front/images/logo@2x.png')?>" alt="Canvas Logo"></a>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN EXTRAS INFORMATION -->
        <ul class="header-extras">
            <li>
                <i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>
                <div class="he-text">
                    Trusted Products
                    <span>100% Guaranteed</span>
                </div>
            </li>
            <li>
                <i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>
                <div class="he-text">
                    Special For Students
                    <span>for $5 or more</span>
                </div>
            </li>
            <li>
                <i class="i-medium i-circled i-bordered icon-undo nomargin"></i>
                <div class="he-text">
                    30-Day Returns
                    <span>Completely Free</span>
                </div>
            </li>
        </ul>
        <!-- END EXTRAS INFORMATION -->

    </div>
    <!-- END CONTAINER HEADER -->

    <!-- BEGIN NAVIGATION -->
    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- BEGIN MAIN MENU -->
                <ul id="MAIN_MENU">
                    <script type="text/javascript">
                        var menus = eval('<?php $this->menus->generateMenu()?>');
                        if(menus!=null || menus!=""){
                            var str = '';
                            var strLevel1 = '<div class="mega-menu-content style-2 col-4 clearfix">';
                            var strLevel2 = '';
                            var countLevel1 = 0;
                            var countLevel2 = 0;
                            var menuid;
                            var menuidLevel1;
                            var currentMenuID = "1";
                            $.each(menus,function(key,value){
                                var current = '';
                                if(value.level=="0"){
                                    if(currentMenuID == value.menuid){
                                        current = 'current';
                                    }
                                    str += '<li class="mega-menu sub-menu '+current+'">'+
                                                '<a href="<?php echo site_url()?>'+value.linkto+'">'+
                                                    '<div>'+value.title+'</div>'+
                                                    '<span>'+value.description+'</span>'+
                                                '</a>';
                                    menuid = value.menuid;
                                    $.each(menus,function(key,value){
                                        if((value.level=="1") && (menuid==value.subof)){
                                            menuidLevel1 = value.menuid;
                                            countLevel1++;
                                            strLevel1 +='<ul>'+
                                                            '<li class="mega-menu-title"><a href="'+value.linkto+'"><div>'+value.title+'</div></a>';

                                            $.each(menus,function(key,value){
                                                if((value.level=="2") && (menuidLevel1==value.subof)){
                                                    countLevel2++;
                                                    countLevel2++;
                                                    strLevel2 +='<li>'+
                                                                    '<a href="'+value.linkto+'">'+
                                                                        '<div>'+value.title+'</div>'+
                                                                    '</a>'
                                                                '</li>';
                                                }
                                            });
                                            if(countLevel2>0){
                                                strLevel1 += '<ul>'+ strLevel2 + '</ul>';
                                                strLevel2 ="";
                                            }
                                                    
                                            strLevel1 +='   </li>';
                                            strLevel1 +='</ul>';
                                        }
                                    });
                                    if(countLevel1>0){
                                        strLevel1 +='</div>';
                                        str +=strLevel1;
                                        strLevel1="";
                                    }

                                    str +='</li>'
                                }
                            });
                            $("#MAIN_MENU").html(str);
                        }
                    </script>
                </ul>
                <!-- END MAIN MENU -->

                <!-- Top Cart
                ============================================= -->
                <!--<div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Blue Round-Neck Tshirt</a>
                                    <span class="top-cart-item-price">$19.99</span>
                                    <span class="top-cart-item-quantity">x 2</span>
                                </div>
                            </div>
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Light Blue Denim Dress</a>
                                    <span class="top-cart-item-price">$24.99</span>
                                    <span class="top-cart-item-quantity">x 3</span>
                                </div>
                            </div>
                        </div>
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">$114.95</span>
                            <button class="button button-3d button-small nomargin fright">View Cart</button>
                        </div>
                    </div>
                </div>--><!-- #top-cart end -->

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </div>

        </nav>
        <!-- PRIMARY END MENU -->

    </div>
    <!-- END NAVIGATION AND SEARCH -->

</header>
<!-- END HEADER -->