<div class="section section-nav">
            <div class="container">
                <div class="row relative">
                    

                    <div class="col-md-2 ">
                        <div class="logo aligncenter">
                            <div class="identity">
                                <a href="<?php echo site_url()?>/" title="home" rel="home">
                                    <img src="<?php echo base_url()?>public/style_front/images/downtown-logo.png" alt="Downtown theme logo">
                                </a>
                            </div>
                        </div>
                        <div class="menu-button alignleft"></div>
                    </div>
                    

                    <div class="col-md-5 nav-wrap"><!-- .mega-menu helper class ued as switcher --> <!-- .to-right, to-left, .center-me helper class-->

                        <?php 
                            echo $this->menus->generateMenu($page); 
                        ?>
                        <!-- <nav class="main-nav to-right responsive-nav"> 
                            <ul class="clean-list clearfix"> 
                               <li class="<?php if($page=="Home") echo 'current-menu-item' ?>">
                                    <a href="<?php echo site_url()?>/">Home</a>
                                </li>
                                <li class="menu-item-has-children <?php if($page=="Menu") echo ' current-menu-item' ?>">
                                    <a href="<?php echo site_url()?>/menu">Menu</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo site_url()?>/recipe">Recipe</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php if($page=="Booking") echo 'current-menu-item' ?>">
                                    <a href="<?php echo site_url()?>/booking">Reservation</a>
                                </li>
                                <li class="<?php if($page=="Blog") echo 'current-menu-item' ?>">
                                    <a href="<?php echo site_url()?>/blog">Blog</a>
                                </li>
                                <li class="<?php if($page=="ContactUs") echo 'current-menu-item' ?>">
                                    <a href="<?php echo site_url()?>/contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav>-->
                        <!-- /.main-nav -->
                    </div>
                </div>
            </div>
        </div>