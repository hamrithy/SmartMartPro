
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>List Food Category</title>
 
	<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
	<link href="<?php echo base_url(); ?>/public/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- PLUGINS CSS -->
	<link href="<?php echo base_url(); ?>public/assets/plugins/weather-icon/css/weather-icons.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/prettify/prettify.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/magnific-popup/magnific-popup.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/owl-carousel/owl.carousel.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/owl-carousel/owl.theme.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/owl-carousel/owl.transitions.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/chosen/chosen.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/icheck/skins/all.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/datepicker/datepicker.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/timepicker/bootstrap-timepicker.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/validator/bootstrapValidator.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/summernote/summernote.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/markdown/bootstrap-markdown.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/datatable/css/bootstrap.datatable.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/plugins/slider/slider.min.css" rel="stylesheet">

	<!-- MAIN CSS (REQUIRED ALL PAGE)-->
	<link href="<?php echo base_url(); ?>/public/assets/plugins/font-awesome/css/font-awesome.min.css"
		rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/css/style-responsive.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!--  CSS (REQUIRED ALL PAGE)-->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	</head>
 
	<body class="tooltips">
	
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<?php $this->load->view('admin-kh4it/_header') ?>
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<?php $this->load->view('admin-kh4it/_sidebar') ?>
			<!-- END SIDEBAR LEFT -->
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">

				<br>
				<!-- BEGIN EXAMPLE ALERT -->
				<div class="alert alert-success alert-bold-border fade in alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<p>
						<strong>Welcome!</strong>
					</p>
					<p class="text-muted">
						Khmer Academy is the first website that provides you the e-learning in Khmer language. Khmer Academy will help you to have many advantages with our learning contents such as saving your time and your money. 
					</p>
				</div>
				<!-- END EXAMPLE ALERT -->




				<div class="col-lg-4">

					<!-- BEGIN SOCIAL TILES -->
					<div class="row">
						<div class="col-xs-6">
							<div class="tiles facebook-tile text-center">
								<i class="fa fa-user icon-lg-size"></i>
								<h4>
									<a href="#">3364 Users</a>
								</h4>
							</div>
							<!-- /.tiles .facebook-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles twitter-tile text-center">
								<i class="fa fa-toggle-right icon-lg-size"></i>
								<h4>
									<a href="#">54 Playlists</a>
								</h4>
							</div>
							<!-- /.tiles .twitter-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles dribbble-tile text-center">
								<i class="fa fa-comments icon-lg-size"></i>
								<h4>
									<a href="#">88 Questions</a>
								</h4>
							</div>
							<!-- /.tiles .dribbble-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles linkedin-tile text-center">
								<i class="fa fa-film icon-lg-size"></i>
								<h4>
									<a href="#">554 Videos</a>
								</h4>
							</div>
							<!-- /.tiles .dribbble-tile -->
						</div>
						<!-- /.col-xs-6 -->
					</div>
					<!-- /.row -->
					<!-- END SOCIAL TILES -->


					<h4 class="small-title">
						<strong><i class="fa fa-users"></i>New users</strong>
					</h4>

				

					<!-- BEGIN USER CARD LONG -->
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="../uploads/user/avatar.jpg" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Admin</h4>
								<p class="text-success">admin@gmail.com</p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" href="user.act" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<!-- /.the-box .no-border -->
					<!-- BEGIN USER CARD LONG -->

				

					<!-- BEGIN USER CARD LONG -->
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="../uploads/user/1230.png" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Menghok</h4>
								<p class="text-success">menghok.heak@gmail.com</p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" href="user.act" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<!-- /.the-box .no-border -->
					<!-- BEGIN USER CARD LONG -->

				

					<!-- BEGIN USER CARD LONG -->
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="../uploads/user/avatar.jpg" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Ponreay</h4>
								<p class="text-success">ponreay@gmail.com</p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" href="user.act" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<!-- /.the-box .no-border -->
					<!-- BEGIN USER CARD LONG -->

				

					<!-- BEGIN USER CARD LONG -->
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="../uploads/user/avatar.jpg" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Rady</h4>
								<p class="text-success">sonnsorady@gmail.com</p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" href="user.act" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<!-- /.the-box .no-border -->
					<!-- BEGIN USER CARD LONG -->

				

					<!-- BEGIN USER CARD LONG -->
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="../uploads/user/1480.jpg" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading">sonita</h4>
								<p class="text-success">saksonita@gmail.com</p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" href="user.act" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<!-- /.the-box .no-border -->
					<!-- BEGIN USER CARD LONG -->

					
					
					
					
					
					
				</div>



				<div class="col-lg-8">

					<div id="list_videos_in_category">
						
						
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="../elearning/play.act?v=11" class="pull-left"><img style="width: 196px; height: 110px" src="https://i.ytimg.com/vi/g1dNbTBvEHc/mqdefault.jpg" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a href="../elearning/play.act?v=11"><strong class="text-black">Introduction, Syntax, Selectors &amp; How to Apply</strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li><a class="text-muted small" href="#">by
												Admin</a></li>
										<li class="text-muted small">2015-01-13 - 1831 views</li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						
						
						
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="../elearning/play.act?v=12" class="pull-left"><img style="width: 196px; height: 110px" src="https://i.ytimg.com/vi/SRyrY2XgvZw/mqdefault.jpg" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a href="../elearning/play.act?v=12"><strong class="text-black">Backgrounds, Texts &amp; Fonts</strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li><a class="text-muted small" href="#">by
												Admin</a></li>
										<li class="text-muted small">2015-01-13 - 605 views</li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						
						
						
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="../elearning/play.act?v=13" class="pull-left"><img style="width: 196px; height: 110px" src="https://i.ytimg.com/vi/_BZcx7OWqB4/mqdefault.jpg" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a href="../elearning/play.act?v=13"><strong class="text-black">Links, List, Tables &amp; Box Model</strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li><a class="text-muted small" href="#">by
												Admin</a></li>
										<li class="text-muted small">2015-01-13 - 591 views</li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						
						
						
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="../elearning/play.act?v=14" class="pull-left"><img style="width: 196px; height: 110px" src="https://i.ytimg.com/vi/P3FkjYaUwmk/mqdefault.jpg" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a href="../elearning/play.act?v=14"><strong class="text-black">Borders, Outline, Margin &amp; Padding</strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li><a class="text-muted small" href="#">by
												Admin</a></li>
										<li class="text-muted small">2015-04-01 - 523 views</li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						
						
						
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="../elearning/play.act?v=15" class="pull-left"><img style="width: 196px; height: 110px" src="https://i.ytimg.com/vi/al5q5kl3I-Y/mqdefault.jpg" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a href="../elearning/play.act?v=15"><strong class="text-black">Dimension, Display, Positioning, Floating Align &amp; Combinators</strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li><a class="text-muted small" href="#">by
												Admin</a></li>
										<li class="text-muted small">2015-01-13 - 585 views</li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						
						
						
					</div>

				</div>





			</div>
				
				
				
				<!-- BEGIN FOOTER -->
				<?php $this->load->view('admin-kh4it/_footer') ?>
				
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
	<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
	<script src="<?php echo base_url(); ?>/public/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/retina/retina.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/nicescroll/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/backstretch/jquery.backstretch.min.js"></script>

	<!-- PLUGINS -->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/skycons/skycons.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/prettify/prettify.js"></script>
	<script
		src="<?php echo base_url(); ?>/public/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/chosen/chosen.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/icheck/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/mask/jquery.mask.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/validator/bootstrapValidator.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/datatable/js/bootstrap.datatable.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/summernote/summernote.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/markdown/markdown.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/markdown/to-markdown.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/markdown/bootstrap-markdown.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/slider/bootstrap-slider.js"></script>

	<!-- EASY PIE CHART JS -->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/easypie-chart/easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>

	<!-- KNOB JS -->
	<!--[if IE]>
		<script type="text/javascript" src="<?php echo base_url(); ?>/public/assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/jquery-knob/jquery.knob.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/jquery-knob/knob.js"></script>

	<!-- FLOT CHART JS -->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/flot-chart/jquery.flot.time.js"></script>

	<!-- MORRIS JS -->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/morris-chart/raphael.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/morris-chart/morris.min.js"></script>

	<!-- C3 JS -->
	<script src="<?php echo base_url(); ?>/public/assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/c3-chart/c3.min.js"></script>

	<!-- MAIN APPS JS -->
	<script src="<?php echo base_url(); ?>/public/assets/js/apps.js"></script>

	</body>
</html>