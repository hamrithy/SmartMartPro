
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Food Item</title>
 
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
								<h3 class="panel-title" id="formtitle">Form Add Food Item </h3>
							  </div>
							  <div class="panel-body">
					
					
					<div class="row">
					
					<div class="col-sm-12">
					
					<div>
						<form id="frmfooditem" name="frmfooditem" method="post" action="<?php echo site_url();?>/admin/fooditem/actionaddfooditem" class="form-horizontal">
							
								
								<div class="form-group">
									<label class="col-lg-2 control-label">Title<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" required name="title" id="title"/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-2 control-label">Price<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" required name="price" id="price"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Promotion<span class="required">*</span></label>
									<div class="col-lg-10">
										<select class="form-control" name="promotiontype" id="promotiontype" required>
											<option value="0">Normal</option>
											<option value="1">Best Offer</option>
											<option value="2">Best Hot</option>
										</select> 
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-2 control-label">Food Category<span class="required">*</span></label>
									<div class="col-lg-10">
										<select class="form-control" name="foodtypeid" id="foodtypeid" required>
											<?php foreach($foodTypes as $food){ ?>
											<option value="<?php echo $food->foodtypeid ?>"><?php echo $food->title; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">SEO Title<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" required name="seotitle" id="seotitle"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">SEO Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control" name="seodescription" id="seodescription"></textarea>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-lg-2 control-label">Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control summernote-lg" name="description" id="description"> </textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-2 control-label">Thumnail Image<span class="required">*</span></label>
									<div class="col-lg-5">
										  <input type="text" value="" required class="form-control" id="thumbnailurl" name="thumbnailurl" onchange="myimagechange()">
									</div>
									<div class="col-lg-1">
										 <a type="button" class="btn btn-primary" data-target="#myModal" href="javascript:;" data-toggle="modal">Select</a>
									</div>
									
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Demo Image</label>
									<div class="col-lg-6">
										<img src="<?php echo base_url(); ?>/public/upload/fooddemo.jpg" class="img-responsive" id="myimagedemo"/>
									</div>
								</div>
								<script>
									function myimagechange(){
										
										$("#myimagedemo").attr("src", $("#thumbnailurl").val() );
									}

								</script>
								<!-- code for popup file manager -->		
								<div class="modal fade" id="myModal">
									<div class="modal-dialog modal-lg">
									  <div class="modal-content">
									    <div class="modal-header">
									      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									      <h4 class="modal-title">File Manager</h4>
									    </div>
									    <div class="modal-body">
									      <iframe width="900" height="400" src="<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&field_id=thumbnailurl'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
									    </div>
									  </div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->	
						

							<div class="form-group">
								<div class="col-lg-9 col-lg-offset-3">
									<button type="submit" class="btn btn-success" id="btnsave">Save</button>
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
		
		
		<script>
				<?php if($foodItem !=null){ ?>
				$(document).ready(function(){
					<?php 
						foreach ($foodItem as $s){
					?>
						document.title = "Edit Food Item";
						$("#formtitle").text("Form Edit Food Item");
						$("#btnsave").text("Edit");
						$("#title").val("<?php echo $s->title ?>");
						$("#price").val("<?php echo $s->price ?>");
						$("#promotiontype").val("<?php echo $s->promotiontype ?>");
						$("#foodtypeid").val("<?php echo $s->foodtypeid ?>");
						$("#description").val("<?php echo $s->description ?>");
						$("#seotitle").val("<?php echo $s->seotitle ?>");
						$("#seodescription").val("<?php echo $s->seodescription ?>");
						$("#thumbnailurl").val("<?php echo $s->thumbnailurl ?>");
						$("#description").val("<?php echo $s->description ?>");
						$("#myimagedemo").attr("src", $("#thumbnailurl").val() );
						document.frmfooditem.action="<?php echo site_url();?>/admin/fooditem/actionupdatefooditem/<?php echo $s->foodid ?>";
					<?php } ?>

				});
				<?php } ?>
		</script>
		
		
		
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