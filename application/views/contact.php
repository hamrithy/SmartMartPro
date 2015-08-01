<?php $this->load->view('layouts/_include'); ?>
<!-- BEGIN CUSTOMIZATION STYLE -->

<!-- END CUSTOMIZATION STYLE -->
</head>
<!-- END HEAD TAG -->

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- BEGIN HEADER -->
        <?php $this->load->view('layouts/_header');?>
        <!-- END HEADER -->
        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Contact</h1>
                <span>Get in Touch with Us</span>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('')?>">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Google Map
        ============================================= -->
        <section id="google-map" class="gmap slider-parallax"></section>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url('public/style_front/js/jquery.gmap.js');?>"></script>

        <script type="text/javascript">

            $('#google-map').gMap({

                address: 'Phnom Penh, Cambodia',
                maptype: 'ROADMAP',
                zoom: 14,
                markers: [
                    {
                        address: "Phnom Penh, Cambodia",
                        html: '',
                        icon: {
                            image: "<?php echo base_url('public/style_front/images/icons/map-icon-red.png')?>",
                            iconsize: [32, 39],
                            iconanchor: [32,39]
                        }
                    }
                ],
                doubleclickzoom: false,
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }

            });

        </script><!-- Google Map End -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Send us an Email</h3>

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="contact_form" name="contact_form" action="<?php echo base_url('contact/sendemail')?>" method="post">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="txtName" name="txtName" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="txtEmail" name="txtEmail" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="txtPhone" name="txtPhone" value="" class="required sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="txtSubject" name="txtSubject" value="" class="required sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="txtMessage" name="txtMessage" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                        </form>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar col_last nobottommargin">

                        <address>
                            <strong>Headquarters:</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                        <div class="widget noborder notoppadding">

                            <div class="fslider testimonial twitter-scroll" data-animation="slide" data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Join us in watching some of the wonderful moments we've shared with our amazing Community^ Carmen <a href="http://t.co/zpH1khNemV" target="_blank">http://t.co/zpH1khNemV</a></p>
                                                <div class="testi-meta">
                                                    <span><a href="#">32 minutes ago</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>@<a href="http://twitter.com/amazonastyle" target="_blank">amazonastyle</a> Yay! Glad to help in any way we can :D ^TK</p>
                                                <div class="testi-meta">
                                                    <span>4 hours ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                                <div class="testi-meta">
                                                    <span>5 days ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widget noborder notoppadding">

                            <a href="#" class="social-icon si-small si-dark si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-dribbble">
                                <i class="icon-dribbble"></i>
                                <i class="icon-dribbble"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-forrst">
                                <i class="icon-forrst"></i>
                                <i class="icon-forrst"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                        </div>

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->

        <!-- BEGGIN FOOTER SECTION -->
        <?php $this->load->view('layouts/_footer'); ?>
        <!-- END FOOTER SECTION -->

<script type="text/javascript">
    $(function(){
        $("#contact_form").validate({
            submitHandler: function(form) {
                $('.form-process').fadeIn();
                $.ajax({
                    type: "POST",
                    url: $("#contact_form").attr("action"),
                    dataType: 'json',
                    data: {
                        name: $("#txtName").val(),
                        email: $("#txtEmail").val(), 
                        phone: $("#txtPhone").val(),
                        message: $("#txtMessage").val(),
                    },
                    success: function(data){
                        $('.form-process').fadeOut();
                        if(data.ERROR==false){
                            $('#contact_form').find('.sm-form-control').val('');
                            SEMICOLON.widget.notifications($('#contact-form-result'));
                        }else{
                            $('#contact-form-result').attr('data-notify-msg','<i class=icon-error-sign></i> Message has not been sent!');
                            $('#contact-form-result').attr('data-notify-type','error');
                            SEMICOLON.widget.notifications($('#contact-form-result'));
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>