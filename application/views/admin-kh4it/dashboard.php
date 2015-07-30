
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Dashboard</title>
 
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
						Welcome to Coffee Chateau, we provide the best food and drink to all customers. And the good services to the client. Best environment to disussing.
					</p>
				</div>
				<!-- END EXAMPLE ALERT -->




				<div class="col-lg-4">

					<!-- BEGIN SOCIAL TILES -->
					<div class="row">
						<div class="col-xs-6">
							<div class="tiles facebook-tile text-center">
								<i class="fa fa-cutlery icon-lg-size"></i>
								<h4>
									<a href="#"><?php echo $countFoods; ?> Foods</a>
								</h4>
							</div>
							<!-- /.tiles .facebook-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles twitter-tile text-center">
								<i class="fa fa-dashboard icon-lg-size"></i>
								<h4>
									<a href="<?php echo site_url()?>/admin/foodcategory"><?php echo $countFoodCategories; ?> Categories</a>
								</h4>
							</div>
							<!-- /.tiles .twitter-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles dribbble-tile text-center">
								<i class="fa fa-comments icon-lg-size"></i>
								<h4>
									<a href="<?php echo site_url()?>/admin/post"><?php echo $countPosts; ?> Posts</a>
								</h4>
							</div>
							<!-- /.tiles .dribbble-tile -->
						</div>
						<!-- /.col-xs-6 -->
						<div class="col-xs-6">
							<div class="tiles linkedin-tile text-center">
								<i class="fa fa-credit-card icon-lg-size"></i>
								<h4>
									<a href="<?php echo site_url()?>/admin/page"><?php echo $countPages; ?> Pages</a>
								</h4>
							</div>
							<!-- /.tiles .dribbble-tile -->
						</div>
						<!-- /.col-xs-6 -->
					</div>
					<!-- /.row -->
					<!-- END SOCIAL TILES -->


					<h4 class="small-title">
						<strong><i class="fa  fa-cutlery"></i>Recent Post</strong>
					</h4>

				

					<!-- BEGIN USER CARD LONG -->
					<?php foreach($recentFoods as $row){ ?>
					<div class="the-box bg-success no-border">
						<div class="media user-card-sm">
							<a href="#" class="pull-left"> <img alt="Avatar" src="<?php echo $row->thumbnailurl; ?>" class="media-object img-circle">
							</a>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row->title; ?></h4>
								<p class="text-success">$ <?php echo $row->price; ?></p>
							</div>
							<div class="right-button">
								<a class="btn btn-success active" target="_blank" href="<?php echo base_url(); ?>menu" title="View" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
							</div>
							<!-- /.right-button -->
						</div>
					</div>
					<?php } ?>
					<!-- /.the-box .no-border -->
				
			
					
					
					
					
					
				</div>



				<div class="col-lg-8">

					<div id="list_videos_in_category">
					
						<?php foreach($recentPosts as $row){ ?>	
						<div class="the-box no-border store-list view-category">
							<div class="media">
								<a target="_blank" href="<?php echo site_url()?>/blog/detail/<?php echo $row->postid ?>" class="pull-left"><img style="width: 196px; height: 110px" src="<?php echo $row->thumbnailurl; ?>" class="store-image" alt="image"></a>
								<div class="clearfix visible-xs"></div>
								<div class="media-body">
									<a href="#"></a>
									<h4 style="padding: 0px; margin: 0px" class="media-heading">
										<a target="_blank" href="<?php echo site_url()?>/blog/detail/<?php echo $row->postid ?>"><strong class="text-black"><?php echo $row->title; ?></strong></a>
									</h4>
									<ul style="list-style: none; padding: 0px; margin: 0px;">
										<li class="text-muted small">&nbsp;</li>
										<li class="text-muted small"><?php echo $row->postdate; ?></li>
										<li class="text-muted small"></li>
									</ul>
								</div>
								<!-- /.media-body -->
							</div>
							<!-- /.media -->
						</div>
						<?php } ?>
						
						
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