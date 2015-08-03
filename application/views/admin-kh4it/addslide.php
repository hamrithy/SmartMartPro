
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Slide</title>
 
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
			/*$(document).ready(function() {

						<?php
						$getPost = $getPost;
						if($getPost != null ){
							foreach($getPost as $v){
							?>
							document.title= "Edit Post";
							$("#formtitle").text("Form Edit Post");
							$("#txtpostid").val("<?php echo $v->postid?>");
							$("#txttitle").val("<?php echo $v->title?>");
							$("#txtshortdescription").val("<?php echo $v->shortdescription ?>");
							$("#txtseodescription").val("<?php echo $v->seodescription ?>");
							$("#txtseotitle").val("<?php echo $v->seotitle ?>");
							$("#txtfile").val("<?php echo $v->thumbnailurl?>");
							$("#myimagedemo").fadeIn("fast").attr('src', '<?php echo $v->thumbnailurl ?>'  );
							document.frmpost.action="<?php echo site_url();?>/admin/post/updatepost";
							<?php
							 }
						}
						 ?>
			});*/
		  	</script>
			
			<!-- BEGIN SIDEBAR LEFT -->
			<?php $this->load->view('admin-kh4it/_sidebar') ?>
			<!-- END SIDEBAR LEFT -->
			
	
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					
				<br/>				
					
					
					
					<form role="form" id="frmSlide" method="post" accept-charset="UTF-8">
						
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
															<label>Title<span class="required">*</span></label>
															<input type="text" class="form-control" name="entitle" id="entitle" required />
														</div>
														<div class="form-group">
															<label>Caption<span class="required">*</span></label>
															<textarea class="form-control" name="encaption" id="encaption"></textarea>
														</div>
														<div class="form-group">
															<label>Description<span class="required">*</span></label>
															<textarea class="form-control" name="endescription" id="endescription">
															</textarea>
														</div>
																<script>
														function myimageenchange(){
															$("#myimagedemo").attr("src", $("#enfile").val() );
														}
													</script>
													
													<div class="form-group">
														<div style="height: 10px"></div>
														<div class="form-group">
															<div class="input-group">
																<input type="text" readonly="readonly"   class="form-control" id="enfile" name="enfile" onchange="myimageenchange()">
																
																<span class="input-group-btn"> 
																	<a type="button" class="btn btn-default btn-file" data-target="#myModal1" href="javascript:;" data-toggle="modal">Browse...</a>	
																</span>
																
															</div>
															<!-- /.input-group -->
														</div>
													</div>
													<div class="form-group">
													<label>Image</label>
												   		 <img src="<?php echo base_url(); ?>/public/upload/slider-background.jpg" class="img-responsive" id="myimagedemo"/>
													</div>
													</div>

													<div id="panel-profile-2" class="tab-pane fade  active in">
														
														<!-- Put Control Khmer here -->
														<div class="form-group">
															<label>ចំណងជើង<span class="required">*</span></label>
															<input type="text" class="form-control" name="khtitle" id="khtitle" required />
														</div>
															<div class="form-group">
															<label>ចំណងជើង<span class="required">*</span></label>
															<textarea class="form-control" name="khcaption" id="khcaption"></textarea>
														</div>
														<div class="form-group">
															<label>លំអិត<span class="required">*</span></label>
															<textarea class="form-control" name="khdescription" id="khdescription">
															</textarea>
														</div>
													<script>
														function myimagechange(){
															$("#myimagedemo1").attr("src", $("#khfile").val() );
														}
													</script>
													
													<div class="form-group">
														<div style="height: 10px"></div>
														<div class="form-group">
															<div class="input-group">
																<input type="text" readonly="readonly"   class="form-control" id="khfile" name="khfile" onchange="myimagechange()">
																
																<span class="input-group-btn"> 
																	<a type="button" class="btn btn-default btn-file" data-target="#myModal" href="javascript:;" data-toggle="modal">រុករក...</a>	
																</span>
																
															</div>
															<!-- /.input-group -->
														</div>
													</div>
													<div class="form-group">
													<label>រូបភាព</label>
												   		 <img src="<?php echo base_url(); ?>/public/upload/slider-background.jpg" class="img-responsive" id="myimagedemo1"/>
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
										<label>Type</label>
										<select class="form-control" name="type" id="type">
											<option value="slide">Slide</option>
											<option value="subslide">Sub Slide</option>
											<option value="partner">Partner</option>
											<option value="feature">Feature</option>
											
										</select>								
									</div>
									
									<div class="form-group">
										<label>Odering<span class="required">*</span></label>
										<input type="text" class="form-control" name="ordering" id="ordering" value="" required="required"/>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-success" onclick="addSlide()">Save</button>
										<button class="btn btn-danger">Cancel</button>
									</div>	
									
								</div><!-- /.col-sm-4 -->
								<!-- /left -->
						
					
							
						</form>
					
					
					
						<!-- code for popup file manager -->		
						<div class="modal fade" id="myModal">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							      <h4 class="modal-title">File Manager</h4>
							    </div>
							    <div class="modal-body">
							      <iframe width="900" height="400" src="<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&field_id=khfile'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
							    </div>
							  </div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->	
						<!-- code for popup file manager -->		
						<div class="modal fade" id="myModal1">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							      <h4 class="modal-title">File Manager</h4>
							    </div>
							    <div class="modal-body">
							      <iframe width="900" height="400" src="<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&field_id=enfile'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
							    </div>
							  </div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->	
						
				
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
		CKEDITOR.replace( 'endescription' ,
			{ filebrowserBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserUploadUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); 
	</script>
	
	<script> 
		CKEDITOR.replace( 'khdescription' ,
			{ filebrowserBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserUploadUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); 
	</script>
	<script>
		function addSlide(){
			$("#frmSlide").submit(function(e){
				e.preventDefault();
				
				alert("ok");

				$.ajax({
					type: "POST",
					url: '<?php  echo site_url()?>admin/slide/actionaddslide',
					dataType: 'json',
					data: {
						type: $("#type").val(),
						ordering: $("#ordering").val(),
						SliderDetail:[
							{
									"languageid": "2",
									"title": $("#entitle").val(),
									"caption": $("#encaption").val(),
									"description": CKEDITOR.instances.endescription.getData(),
									"imageurl": $("#enfile").val()
							},
							{
									"languageid":"1",
									"title": $("#khtitle").val(),
									"caption": $("#caption").val(),
									"description": CKEDITOR.instances.khdescription.getData(),
									"imageurl": $("#khfile").val()
							}
						]
					},
					success: function(data){
						window.location.href="<?php echo site_url("admin/slide");?>";
						console.log("DATA:",data);
					}
				});
			});
		}
		</script>
	</body>
</html>