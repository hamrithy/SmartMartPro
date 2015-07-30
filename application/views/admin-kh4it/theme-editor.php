<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<meta name="author" content="Vuthea Chheang">
		<title>Theme Editor</title>
 
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

		<!-- Code Mirror -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/codemirror/lib/codemirror.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/codemirror/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/codemirror/addon/display/fullscreen.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/codemirror/theme/eclipse.css">
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/lib/codemirror.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/mode/xml/xml.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/display/fullscreen.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/edit/closetag.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/fold/xml-fold.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/mode/javascript/javascript.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/mode/css/css.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/mode/php/php.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/codemirror/addon/dialog/dialog.css">
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/dialog/dialog.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/search/searchcursor.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/search/search.js"></script>
		<script src="<?php echo base_url(); ?>/public/assets/codemirror/addon/edit/matchtags.js"></script>
		
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
					<div id="getContent">
					<br/>
					<div class="panel panel-info">
								  <div class="panel-heading">
									<h1 class="panel-title">
									<i class="fa fa-tasks"></i>
										<a href="index.act"  >
										Theme-Editor
										
										</a>
									</h1>
								  </div>
									
					</div><!-- /.panel panel-default -->
					
					
					<div class="the-box no-border">
						<form role="form" action="<?php  echo site_url()?>/admin/theme/edittheme/<?php echo $filepath; ?>" method="post">
							<div class="row">
								<div class="col-sm-10">
									<div class="form-group">
										<label id="title-editor">File Name : <?php echo $filename; ?></label>
									</div>
									<div class="form-group">
										<textarea id="code" name="code"><?php echo $files; ?></textarea>
    									
									</div>
									<div class="form-group">
										
										<input class="btn btn-success" type="submit" value="Update File"/>
									</div>
								</div><!-- /.col-sm-8 -->
								<div class="col-sm-2">
										<label>FrontEnd Page</label>					
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/layouts/_footer">_footer.php</a></p>														
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/layouts/_header">_header.php</a></p>	
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/_slideshow">_slideshow.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/_service">_service.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/_visitus">_visitus.php</a></p>														
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/index">index.php</a></p>														
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/blog">blog.php</a></p>								
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/buttons">buttons.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/chiefs">chiefs.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/contact">contact.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/menu">menu.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/post">post.php</a></p>
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/recipe">recipe.php</a></p>
										
										<!-- <label>Backend Page</label>	
										<p><a href="<?php  echo site_url()?>/admin/theme/showfilestyle/screen">stylesheet.css</a></p>
										<label>StyleSheet</label>	
										<p><a href="<?php  echo site_url()?>/admin/theme/showfile/_footer.php">StyleSheet.CSS</a></p>
										 -->
								</div><!-- /.col-sm-4 -->
							</div><!-- /.row -->
						</form>
					</div><!-- /.the-box no-border -->
					
					
					
				
			</div>
				
				</div><!-- /.container-fluid -->
				
				
				
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js" ></script>
	<script src="http://malsup.github.com/jquery.form.js" ></script>
	<script src="<?php echo base_url(); ?>/public/js/fileUploadScript.js" ></script>
	
		<script>
		    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		      lineNumbers: true,
		      theme: "eclipse",
		      autoCloseTags: true,
		      matchBrackets: true,
		      mode: "application/x-httpd-php",
		      indentUnit: 4,
		      indentWithTabs: true,
		      matchTags: {bothTags: true},
		      extraKeys: {"Ctrl-J": "toMatchingTag"},
		      extraKeys: {
		        "F11": function(cm) {
		          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
		        },
		        "Esc": function(cm) {
		          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
		        }
		      }
		    });
		  </script>
		
	</body>
</html>