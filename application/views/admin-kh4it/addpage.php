
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Page</title>
 
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
			
			
			<script type="text/javascript">
			$(document).ready(function() {

						<?php
						$mPage= $getPage;
						if($mPage != null ){
							foreach($mPage as $v){
							?>
							document.title= "Edit Page";
							$("#formtitle").text("Form Edit Page");
							$("#txtpageid").val("<?php echo $v->pageid?>");
							$("#txttitle").val("<?php echo $v->title?>");
							$("#txtseodescription").val("<?php echo $v->seodescription ?>");
							$("#txtseotitle").val("<?php echo $v->seotitle ?>");
							//$("#txtdescription").text('<?php //echo $v->body ?>');
							document.frmpage.action="<?php echo site_url();?>/admin/page/updatepage";
							<?php
							 }
						}
						 ?>
			});
		  	</script>
		  	
			
			<!-- BEGIN SIDEBAR LEFT -->
			<?php $this->load->view('admin-kh4it/_sidebar') ?>
			<!-- END SIDEBAR LEFT -->
			
			
			
	
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					
				<br/>				
					<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title" id="formtitle">Form Add Page </h3>
							  </div>
							  <div class="panel-body">
					
					
					<div class="row">
					
					<div class="col-sm-12">
					
					<div>
						<form action="<?php echo site_url();?>/admin/page/addpagepro" id="frmpage" name="frmpage" method="post" class="form-horizontal" role="form">
						
								<div class="form-group">
									<label class="col-lg-2 control-label">Title<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="txttitle" id="txttitle" value="" />
										<input type="hidden" class="form-control" name="txtpageid" id="txtpageid" value="" />
									</div>
								</div> 	
								<div class="form-group">
									<label class="col-lg-2 control-label">Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control" name="txtdescription" id="txtdescription">
											<?php 
												if($mPage != null ){
													foreach($mPage as $v){
													echo $v->body;
													}
												}
											?>
										</textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-2 control-label">SEO Title<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="txtseotitle" id="txtseotitle" value="" required="required"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-2 control-label">SEO Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control" name="txtseodescription" id="txtseodescription"></textarea>
									</div>
								</div>
								
							

							<div class="form-group">
							
								<div class="col-lg-9 col-lg-offset-3">
									
									<input type="submit" id="btnsave" class="btn btn-info" value="Save"/>
									
								</div>
							</div>
							
						</form>
					</div><!-- /.the-box -->
						
					</div><!-- /.col-sm-8 -->
						
				
					</div><!-- /.row -->
					</div>
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
	<script src="<?php echo base_url(); ?>/public/assets/ckeditor/ckeditor.js"></script>
	
	<script> 

		CKEDITOR.replace( 'txtdescription' ,
			{ filebrowserBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserUploadUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); 
	</script>

	</body>
</html>