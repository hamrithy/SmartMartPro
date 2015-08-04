<?php $this->load->view('_include'); ?>
<!-- BEGIN CUSTOMIZATION STYLE -->

<!-- END CUSTOMIZATION STYLE -->
</head>
<!-- END HEAD TAG -->

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">

                <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #ecf0f1;"></div>

                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container vertical-middle divcenter clearfix">

                        <div class="row center">
                            <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/logo.png')?>" alt="AIS Logo"></a>
                        </div>

                        <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                            <div class="panel-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="nobottommargin" action="<?php echo site_url('admin/auth/authenticate')?>" method="post">
                                    <h3>Login to your Account</h3>

                                    <div class="col_full">
                                        <label for="login-form-username">Username:</label>
                                        <input type="text" id="username" name="username" value="" class="form-control not-dark" />
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="password" name="password" value="" class="form-control not-dark" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        <!-- <a href="#" class="fright">Forgot Password?</a> -->
                                    </div>
                                </form>
                                <div class="line line-sm"></div>

                                <div class="center">
                                    <strong style="color: red; font-weight: bold;">
                                        <?php 
                                            echo validation_errors();
                                        ?>
                                        </strong>
                                    <!-- <h4 style="margin-bottom: 15px;">or Login with:</h4>
                                    <a href="javascript:;" class="button button-rounded si-facebook si-colored">Facebook</a>
                                    <span class="hidden-xs">or</span>
                                    <a href="javascript:;" class="button button-rounded si-twitter si-colored">Twitter</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="row center dark"><small>Copyrights &copy; All Rights Reserved by AIS.</small></div>

                    </div>
                </div>

            </div>

        </section><!-- #content end -->

    </div><!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo base_url('public/style_front/js/functions.js');?>"></script>

</body>
</html>