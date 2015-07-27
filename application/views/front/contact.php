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

        <section class="contact-us">
            <div class="container ">
                <header class="entry-header aligncenter section-header section-contact-header margin-top padding-top">
                    <h2 class="entry-title">
                        Contacts
                    </h2>
                    <h3 class="entry-title-desc">
                        Contact Us
                    </h3>   
                </header>

                <div class="contact-form-wrap padding">
                    <h3 class="entry-title">Drop Us a Line</h3><hr />
                    <!-- Form -->
                     <form class="tt-form contact-form margin-top padding-top" id="contact_form" action="<?php  echo site_url('contact/sendemail')?>" method="POST" novalidate>
         
                        <div class="row form-row"><!-- Start Row -->
                                <div class="col-md-4 column"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <input type="text" class="contact-form-line" value="" placeholder="Name" name="name" id="NAME">
                                    </div>
                                </div><!-- End Column -->
                             
                                <div class="col-md-4 column"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <input type="text" class="contact-form-line" value="" placeholder="E-Mail" name="e-mail" id="EMAIL">
                                    </div>
                                </div><!-- End Column -->
                             
                                <div class="col-md-4 column"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <input type="text" class="contact-form-line" value="" placeholder="Website" name="website" id="WEBSITE">
                                    </div>
                                </div><!-- End Column -->
                        </div><!-- End Row -->
                     
                        <div class="row form-row"><!-- Start Row -->
                            <div class="col-md-12 column"><!-- Start Column -->
                                <div class="input-cover input-cover-text">
                                    <input type="text" placeholder="Message" name="message" id="MESSAGE" style="height: 200px;"/>
                                    
                                </div>                              <!-- End Element -->
                            </div><!-- End Column -->
                        </div><!-- End Row -->
                     
                        <div class="row form-row"><!-- Start Row -->
                            <div class="col-md-12 column"><!-- Start Column -->
                                <input type="submit" id="btnSubmit" class="form-send margin-top" value="Write a Message">
                            </div><!-- End Column -->
                        </div><!-- End Row -->
                        <input type="hidden" value="contact" name="id">
                    </form>
                    <!-- Form -->
                    <div class="border-top margin-top-60 contact-info-block contact-info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="email">
                                    <a href="#">info@tsdsolution.com</a>
                                    <span>(gates.manith@gmail.com)</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="phone">
                                    <span>(855) 10 818 289</span>
                                    <span>(855) 69 858 787</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="address"><span class="">Phnom Penh, Cambodia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- Google Map --> 
        <div class="section section-map">
            <div class="gmap-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0735697958407!2d104.90781285!3d11.54658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511db3ecf735%3A0x5cf67bd86b8a5463!2sAmerican+International+School!5e0!3m2!1sen!2s!4v1433996719629" height="480" style="border:0"></iframe>
            </div>
        </div>

        
        
        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
    </div>
    
    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#btnSubmit').click(function(){
                alert($("#contact_form").attr("action"));
                $.ajax({
                    type: "POST",
                    url: $("#contact_form").attr("action"),
                    dataType: 'json',
                    data: {
                        name: $("#NAME").val(),
                        email: $("#EMAIL").val(), 
                        website: $("#WEBSITE").val(),
                        message: $("#MESSAGE").val(),
                    },
                    success: function(data){
                        console.log("DATA:",data);
                        alert("Your email has been sent.");
                    }
                });
            });
        });
    </script>
</body>
</html>
