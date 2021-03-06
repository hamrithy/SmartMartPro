
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Update User</title>
 
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
					
				<br/>				
					<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title" id="formtitle">Form Update User </h3>
							  </div>
							  <div class="panel-body">
					
					
					<div class="row">
					
					<div class="col-sm-12">
					
					<div>
						<form id="frmadduser" id="frmadduser" method="post" action="<?php echo site_url("admin/user/adduserpro")?>" class="form-horizontal">
							<div id="MESSAGE" style="margin:0 auto;"></div>
							<fieldset>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Username<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="username" id="USERNAME" value="<?php echo $result->username;?>"/>
									</div>
								</div>

<!-- 							<div class="form-group">
									<label class="col-lg-3 control-label">Email<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="email" />
									</div>
								</div> -->
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Password<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="password" class="form-control" name="password" id="PASSWORD"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Confirm Password<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="password" class="form-control" name="confirmpassword" id="CONFIRM_PASSWORD"/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">User Type<span class="required">*</span></label>
									<div class="col-lg-5">
										<select class="form-control" name="usertype" id="USERTYPE">
											<?php 
												if($result->usertype=="Admin"){?>
													<option value="1" selected>Admin</option>
													<option value="2">User</option>		
												<?php
												}else if($result->usertype=="User"){?>
													<option value="1">Admin</option>
													<option value="2" selected>User</option>
												<?php
												 }
											?>
										</select>
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Status<span class="required">*</span></label>
									<div class="col-lg-5">
										<select class="form-control" name="status" id="STATUS">
											<?php 
												if($result->active=="1"){?>
													<option value="1" selected>Active</option>
													<option value="0">Inactive</option>		
												<?php
												}else if($result->active=="0"){?>
													<option value="1">Active</option>
													<option value="0" selected>Inactive</option>
												<?php
												 }
											?>
											
										</select>
									</div>
								</div>
							
							</fieldset>

							<div class="form-group">
								<div class="col-lg-9 col-lg-offset-3">
									<input type="button" class="btn btn-success" id="btnSave" value="Save"/>
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
	<script src="<?php echo base_url(); ?>/public/assets/libs/spin.js/spin.min.js"></script>

	<!-- MAIN APPS JS -->
	<script src="<?php echo base_url(); ?>/public/assets/js/apps.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#btnSave").click(function(){
				if (confirm("Are you sure you want to update?") == false) {
					return;
				}
				if($("#PASSWORD").val()!=$("#CONFIRM_PASSWORD").val()){
					$("#MESSAGE").html('<div class="alert alert-warning alert-bold-border fade in alert-dismissable">Your password are mismatch. Please enter again.</div>');
					$("#MESSAGE").fadeIn(500);
					$("#MESSAGE").fadeOut(2000);
					return;
				}else{
			        var opts = {
				          lines: 13 // The number of lines to draw
				        , length: 28 // The length of each line
				        , width: 3 // The line thickness
				        , radius: 10 // The radius of the inner circle
				        , scale: 1 // Scales overall size of the spinner
				        , corners: 1 // Corner roundness (0..1)
				        , color: '#000' // #rgb or #rrggbb or array of colors
				        , opacity: 0.25 // Opacity of the lines
				        , rotate: 0 // The rotation offset
				        , direction: 1 // 1: clockwise, -1: counterclockwise
				        , speed: 1 // Rounds per second
				        , trail: 60 // Afterglow percentage
				        , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
				        , zIndex: 2e9 // The z-index (defaults to 2000000000)
				        , className: 'spinner' // The CSS class to assign to the spinner
				        , top: '50%' // Top position relative to parent
				        , left: '50%' // Left position relative to parent
				        , shadow: false // Whether to render a shadow
				        , hwaccel: false // Whether to use hardware acceleration
				        , position: 'absolute' // Element positioning
			        }
			        var target = document.getElementById('frmadduser');
// 			        var spinner = new Spinner(opts).spin(target);
			        $("#frmWaiting").modal('show');
					$.ajax({
						type: "POST",
						url: '<?php  echo site_url()?>/admin/user/updateuserpro',
						dataType: 'json',
						data: {
							userid: '<?php echo $result->userid;?>',
							username: $("#USERNAME").val(), 
							password: $("#PASSWORD").val(),
							confirm_password: $("#CONFIRM_PASSWORD").val(),
							usertype: $("#USERTYPE").val(),
							status: $("#STATUS").val()
						},
						success: function(data){
							console.log("DATA:",data);
							if(data["ERROR"]==true){
								$("#MESSAGE").html('<div style="color:red" class="alert alert-warning alert-bold-border fade in alert-dismissable">'+data["ERR_MSG"]+'</div>');
								$("#MESSAGE").fadeIn(500);
								$("#MESSAGE").fadeOut(2000);
								$("#frmWaiting").modal('hide');
							}else{
								$("#getTxt").html("<h5>You have been updated successfully.</h5>");
								setTimeout(function(){ 
									location.href= "<?php  echo site_url('admin/user')?>";
		 							$("#frmWaiting").modal('hide');
								}, 1000);
							}
							spinner.stop();
						},
						error: function(data){
							$("#MESSAGE").html('<div class="alert alert-warning alert-bold-border fade in alert-dismissable">'+data.statusText+'</div>');
							$("#MESSAGE").fadeIn(500);
							$("#MESSAGE").fadeOut(2000);
							spinner.stop();
						}
					});
				}
			});
		});		

	</script>

	</body>
</html>