
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Category</title>
 
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
					
					
					
					<form role="form" id="frmcategory" method="post" accept-charset="UTF-8">
						
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
															<input type="text" class="form-control" name="txtentitle" id="txtentitle" required />
														</div>
														
														<div class="form-group">
															<label>Description<span class="required">*</span></label>
															<textarea class="form-control" name="txtendescription" id="txtendescription">
															</textarea>
															<div id="mmtext"></div>
														</div>
														
		
													</div>
													<div id="panel-profile-2" class="tab-pane fade  active in">
														
														<!-- Put Control Khmer here -->
														<div class="form-group">
															<label>ចំណងជើង<span class="required">*</span></label>
															<input type="text" class="form-control" name="txtkhtitle" id="txtkhtitle" required />
														</div>
														
														<div class="form-group">
															<label>លំអិត<span class="required">*</span></label>
															<textarea class="form-control" name="txtkhdescription" id="txtkhdescription">
																	
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
										<label>SubOf</label>
										<select class="form-control" name="txtcategory" id="txtcategory">
											<option value="">Root</option>
											
										</select>								
									</div>
									
									<div class="form-group">
										<label>Ordering<span class="required">*</span></label>
										<input type="text" class="form-control" name="txtorder" id="txtorder" value="" required="required"/>
									</div>									
									<div class="form-group">
										<button type="submit" id="btnaddcats" class="btn btn-success" onclick="addcategorypro()">Save</button>
										<button class="btn btn-danger">Cancel</button>
									</div>		
								</div><!-- /.col-sm-4 -->
								<!-- /left -->
						
					
							
						</form>

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
		CKEDITOR.replace( 'txtendescription' ,
			{ filebrowserBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserUploadUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); 
	</script>
	
	<script> 
		CKEDITOR.replace( 'txtkhdescription' ,
			{ filebrowserBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserUploadUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
			filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); 
	</script>
	<script>
	function addcategorypro(){
		$("#frmcategory").submit(function(e){
			e.preventDefault();
			
			$.ajax({
			type: "POST",
			url: '<?php  echo site_url()?>admin/category/addcategorypro',
			dataType: 'json',
			data: {
				txtorder: $("#txtorder").val(),
				txtcategory: $("#txtcategory").val(),
				CategoryDetail:[
					{
							"languageid": "1",
							"title": $("#txtkhtitle").val(),
							"description": CKEDITOR.instances.txtkhdescription.getData()
					},
					{
							"languageid":"2",
							"title": $("#txtentitle").val(),
							"description": CKEDITOR.instances.txtendescription.getData()
					}
				]
			},
			success: function(data){
				window.location.href="<?php echo site_url("admin/category");?>";
				console.log("DATA:",data);
			}
		});
		});
	}
		

		$.post("<?php  echo site_url()?>admin/category/showcategory", function(data){
			for(var i=0; i<data.length; i++){
				$("#txtcategory").append(new Option(""+data[i].title+"", ""+data[i].categoryid+""));
			}	
		});
		
	</script>

	<script>
		<?php if($catid != null){ ?>
			
			$.post("<?php  echo site_url()?>admin/category/getcategory/<?php echo $catid ?>",function(data){
				$("#btnaddcats").attr("onclick","frmcategoryupdate("+data[0].categoryid+")");
				$("#txtorder").val(data[0].ordering);
				$('#txtcategory option[value='+data[0].subof+']').prop('selected', true);
				//setvalue for en
				$("#txtentitle").val(data[1].title);
				CKEDITOR.instances.txtendescription.setData(data[1].description);

				//setvalue for kh
				$("#txtkhtitle").val(data[0].title);
				CKEDITOR.instances.txtkhdescription.setData(data[0].description);
			});

		<?php } ?>
		function frmcategoryupdate(id){
			var cid= id;
			$("#frmcategory").submit(function(e){
				e.preventDefault();
				
				$.ajax({
					type: "POST",
					url: '<?php  echo site_url()?>admin/category/updatecategorypro',
					dataType: 'json',
					data: {
						categoryid : cid,
						txtorder: $("#txtorder").val(),
						txtcategory: $("#txtcategory").val(),
						CategoryDetail:[
							{
									"languageid": "1",
									"title": $("#txtkhtitle").val(),
									"description": CKEDITOR.instances.txtkhdescription.getData()
							},
							{
									"languageid":"2",
									"title": $("#txtentitle").val(),
									"description": CKEDITOR.instances.txtendescription.getData()
							}
						]
					},
					success: function(data){
						window.location.href="<?php echo site_url("admin/category");?>";
						console.log("DATA:",data);
					}
				});

			});
		}
	</script>
		
	</body>
</html>