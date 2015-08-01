
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Menu</title>
 
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
								<h3 class="panel-title" id="formtitle">Form Add Menu </h3>
							  </div>
							  <div class="panel-body">
					
					
					<div class="row">
					
					<div class="col-sm-12">
					
					<div>
						<form role="form" id="frmAddMenu" action="<?php echo site_url('admin/menu/addmenupro')?>" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
						
						<!-- Tab -->
						<div class="col-sm-8">
							<div class="panel with-nav-tabs panel-info">
							  	<div class="panel-heading">
									<ul class="nav nav-tabs">
										<li class=""><a href="#panel-home-2" data-toggle="tab"><img src="<?php echo base_url()?>/public/assets/img/eng.png"> English</a></li>
										<li class="active"><a href="#panel-profile-2" data-toggle="tab"><img src="<?php echo base_url()?>/public/assets/img/kh.png"> Khmer</a></li>
									</ul>
								</div>
								<div class="collapse in" id="panel-collapse-2">
										 <div class="panel-body">
												<div class="tab-content">
													<div id="panel-home-2" class="tab-pane fade">
														
														<!-- Put Control Englist here -->
														<div class="form-group">
															<input type="hidden" id="languageid" value="2" />
															<label>Title<span class="required">*</span></label>
															<input type="text" class="form-control" name="txtentitle" id="txtTitle" required />
														</div>
														
														<div class="form-group">
															<label>Description<span class="required">*</span></label>
															<textarea class="form-control" name="txtendescription" id="txtDescription">
																	
															</textarea>
														</div>
														
		
													</div>
													<div id="panel-profile-2" class="tab-pane fade  active in">
														
														<!-- Put Control Khmer here -->
														<div class="form-group">
															<input type="hidden" id="languageid" value="1" />
															<label>ចំណងជើង<span class="required">*</span></label>
															<input type="text" class="form-control" name="txtkhtitle" id="txtTitle" required />
														</div>
														
														<div class="form-group">
															<label>លំអិត<span class="required">*</span></label>
															<textarea class="form-control" name="txtkhdescription" id="txtDescription">
																	
															</textarea>
														</div>
													
													
														
														
													</div><!-- /.tab-pane fade -->
												</div><!-- /.tab-content -->
										  </div><!-- /.panel-body -->
									<div class="panel-footer">SmartMart</div>
								</div><!-- /.collapse in -->
							</div><!-- /.panel .panel-info -->
						</div>
						<!-- /Tab -->
						
						<!-- left -->
						<div class="col-sm-4">
									<div class="form-group">
										<label>Subof</label>
										<select class="form-control" name="subof" id="subof">
											<?php 
												if(count($topMenu)>0){
													echo '<option value="">-------</option>';
												}
												foreach($topMenu as $menu) {
													echo '<option value="'.$menu->menuid.'">'.$menu->title.'</option>';
												}	
											?>
										</select>								
									</div>
									
									<div class="form-group">
										<label>Ordering<span class="required">*</span></label>
										<input type="text" class="form-control" name="txtorder" id="txtOrder" value="1" required="required"/>
									</div>									
									<div class="form-group">
										<button type="submit" class="btn btn-success">Save</button>
										<button class="btn btn-danger">Cancel</button>
									</div>		
								</div><!-- /.col-sm-4 -->
								<!-- /left -->
						
					
							
						</form>
						<!-- <form id="frmmenu" name="frmmenu" method="post" action="addmenupro" class="form-horizontal">
							<fieldset>
								<input type="hidden" name="txtMenuid" id="txtMenuid" />
								<div class="form-group">
									<label class="col-lg-3 control-label">Title<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="txtTitle" id="txtTitle" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">Link To<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="txtLinkto" id="txtLinkto" />
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Ordering<span class="required">*</span></label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="txtOrdering" id="txtOrdering" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Sub Of<span class="required">*</span></label>
									<div class="col-lg-5">
										<select class="form-control" id="txtSubof" name="txtSubof">
												<option value="">--</option>
											<?php foreach($topMenu as $v){ ?>
												<option value="<?php echo $v->menuid ?>"><?php echo $v->title ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							
							</fieldset>

							<div class="form-group">
								<div class="col-lg-9 col-lg-offset-3">
									<button type="submit" class="btn btn-success">Save</button>
								</div>
							</div>
							
						</form> -->
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
	<script type="text/javascript">

		$(function(){
			$("form#frmAddMenu").submit(function(e){
				e.preventDefault();
				var data = [];
				$('.tab-content .tab-pane').each(function(index, value){
					data.push({
						"languageid" : $(this).find("#languageid").val(),
						"title" 	 : $(this).find("#txtTitle").val(),
						"description": $(this).find("#txtDescription").val()
					});
				});
				console.log(data);
				$.ajax({
					type: "POST",
					url: $("form#frmAddMenu").attr("action"),
					dataType: 'json',
					data: {
						ordering: 	$("#txtOrder").val(),
						subof: 		$("#subof").val(),
						linkto: 	"/contact",
						menuDetails: data
					},
					success: function(data){
						if(data==true){
							alert("You have been inserted successfully.");
							location.href= "<?php echo site_url('admin/menu')?>";
						}else{
							alert("You have not been inserted successfully.");
						}
						console.log("DATA:",data);
					},
					error: function(data){
						console.log("DATA:",data);
					}
				});
			});
		});
	</script>
	</body>
</html>