<?php $this->load->view('layouts/_include'); ?>
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
                            <a href="javascript:;"><img src="<?php echo base_url('public/style_front/images/logo.png')?>" alt="Canvas Logo"></a>
                        </div>

                        <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                            <div class="panel-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="nobottommargin" action="javascript:;" method="post">
                                    <h3>Login to your Account</h3>

                                    <div class="col_full">
                                        <label for="login-form-username">Username:</label>
                                        <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" />
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        <!-- <a href="#" class="fright">Forgot Password?</a> -->
                                    </div>
                                </form>

                                <div class="line line-sm"></div>

                                <div class="center">
                                    <h4 style="margin-bottom: 15px;">or Login with:</h4>
                                    <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                                    <span class="hidden-xs">or</span>
                                    <a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
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