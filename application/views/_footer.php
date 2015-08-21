 <!-- BEGIN FOOTER SECTION -->
 <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_half">

                        <div class="widget clearfix">

                            <img src="<?php echo base_url('public/style_front/images/footer-widget-logo.png')?>" alt="" class="footer-logo">

                            <p><?php echo lang('canvas'); ?></p>

                        </div>

                    </div>

                    <div class="col_half col_last">
                        <div class="widget clearfix">
                            <h4><?php echo lang('contact_us'); ?></h4>

                            <div style="background: url('<?php echo base_url('public/style_front/images/world-map.png')?>') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong><?php echo lang('headquarter'); ?>:</strong><br>
                                    <?php echo lang('american_intercon_institute') ?><br>
                                    <?php echo lang('street') ?>., <br>
                                    <?php echo lang('address') ?><br>
                                </address>
                                <abbr title="Phone Number"><strong><?php echo lang('call') ?>:</strong></abbr> (855) 12 345 678<br>
                                <abbr title="Fax"><strong><?php echo lang('fax') ?>:</strong></abbr> (855) 12 345 678<br>
                                <abbr title="Email Address"><strong><?php echo lang('email') ?>:</strong></abbr> info@domain.com
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <!-- <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div> -->

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</h5>
                        <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                        <form id="widget-subscribe-form" action="<?php echo site_url();?>contact/subscribe" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $("#widget-subscribe-form").validate({
                                submitHandler: function(form) {
                                    $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                    $(form).ajaxSubmit({
                                        target: '#widget-subscribe-form-result',
                                        success: function() {
                                            $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                            $('#widget-subscribe-form').find('.form-control').val('');
                                            $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    <?php echo lang('copy_right'); ?><br>
                    <div class="copyright-links"><a href="#"><?php echo lang('term_of_use'); ?></a> / <a href="#"><?php echo lang('privacy_policy'); ?></a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@tsdsolution.com <span class="middot">·</span> <i class="icon-headphones"></i> +855 (0)10 818 289 <span class="middot">·</span> <i class="icon-skype2"></i> Contact TSD On Skype
                </div>

            </div>

        </div>
        <!-- END COPYRIGHT -->

    </footer>
    <!-- END FOOTER SECTION -->

</div>
<!-- END HOME PAGE INFORMATION -->

<!-- BEGIN GO TO TOP BUTTON-->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- END GO TO TOP BUTTON-->

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?php echo base_url('public/style_front/js/jquery.tmpl.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/style_front/js/functions.js');?>"></script>


<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "221456",
            uid: "0c7735d3de292b0250869c1816826be2",
            source: "website",
            options: {
                "size": "medium",
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>


    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5291b47f21c49656" async="async"></script>