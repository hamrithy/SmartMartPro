<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Vuthea Chheang">
		<title>Add Post</title>
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
			
			<!-- DELETE -->
			
			<!-- BEGIN SIDEBAR LEFT -->
			<?php $this->load->view('admin-kh4it/_sidebar') ?>
			<!-- END SIDEBAR LEFT -->
			
	
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					
				<br/>				
					
					
					
					<form role="form" name="frmAddProduct" id="frmAddProduct" action="<?php echo site_url('admin/product/addproductpro')?>" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
						
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
															<label>Description</label>
															<textarea class="form-control" name="txtendescription" id="txtendescription">
																	
															</textarea>
														</div>
														
														
														
														
														
														
													</div>
													<div id="panel-profile-2" class="tab-pane fade  active in">
														
														<!-- Put Control Khmer here -->
														<div class="form-group">
															<label>ចំណងជើង<span class="required">*</span></label>
															<input type="text" class="form-control" name="txtkhtitle" id="txtkhtitle" required />
														</div>
														
														<div class="form-group">
															<label>លំអិត</label>
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
										<label>Category</label>
										<select class="form-control" name="category" id="listCategory">
											
										</select>
										
										<input type="hidden" class="form-control" name="txtproductid" id="txtproductid"/>
																		
									</div>
									
									<div class="form-group">
										<label>Price<span class="required">*</span></label>
										<input type="text" class="form-control" name="txtprice" id="txtprice"  required="required"/>
									</div>
									
								
										
									
									<div class="form-group">
										<label>SEO Title<span class="required">*</span></label>
										<input type="text" class="form-control" name="txtseotitle" id="txtseotitle" value="" required="required"/>
									</div>
									
									<div class="form-group">
										<label>SEO Description<span class="required">*</span></label>
										<textarea class="form-control" name="txtseodescription" id="txtseodescription"></textarea>
									</div>
									
									<div class="form-group">
										<label class="">
											 <input type="checkbox"  name="recommend" id="recommend" value="">
											 Recommend Product
									    </label>
									</div>
									
									
									<script>
											var first = true;
											var count = 0;
											function myimagechange(){
												//$("#myimagedemo").attr("src", $("#txtfile").val());
												$('tbody').append('<tr>'+
																	'<td>'+
																		'<div class="form-group">'+
												    						'<img src="'+$("#txtfile").val()+'" class="img-responsive" id="myimagedemo"​​ style="width:30%;"/>'+
																		'</div>'+
																	'</td>'+
																	'<td>'+
																		'<div class="form-group">'+
												    						'<a type="button" class="btn btn-danger btn-file" href="javascript:;" id="btnRemove">Remove</a>'+	
																		'</div>'+
																	'</td>'+
																'</tr>');
											}
											$(document).on('click','#btnRemove',function(){
												$(this).parents("tr").remove();

											});
										</script>
									
									<div class="form-group">
										<div style="height: 10px"></div>
										<div class="form-group">
											<div class="input-group">
												<input type="hidden" readonly="readonly"   class="form-control" id="txtfile" name="txtfile" onchange="myimagechange()">
												
												<span class="input-group-btn"> 
													<a type="button" class="btn btn-default btn-file" data-target="#myModal" href="javascript:;" data-toggle="modal">Add Image </a>	
												</span>
												
											</div>
											<!-- /.input-group -->
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" id="btSave" class="btn btn-success">Save</button>
										<button class="btn btn-danger">Cancel</button>
									</div>
									
									<table class="table">
										<thead>
											<tr>
												<th><label>Image</label></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
									
									
									
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
							      <iframe width="900" height="400" src="<?php echo base_url(); ?>/public/responsivefilemanager/filemanager/dialog.php?type=2&field_id=txtfile'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
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

	<script type="text/javascript">
	 var action = "inserted";
	$(function(){
		 $("form#frmAddProduct").submit(function(e){
			e.preventDefault();
			var images = ""; 
			$("tbody tr").each(function(){
				images +=$(this).find("img").attr("src")+";";
			});
		 	if($("tbody tr").length>0){
		 		images = images.slice(0,-1);
		 	}
		 	recommend = 0;
		 	if($('#recommend').is(':checked')) {
		 		recommend = 1;
		 	} 
			$.ajax({
				type: "POST",
				url: $("form#frmAddProduct").attr("action"),
				dataType: 'json',
				data: {
					txtproductid : $("#txtproductid").val(),
					CategoryID: $("#listCategory").val(),
					SEOTitle: $.trim($("#txtseotitle").val()),
					SEODescription: $.trim($("#txtseodescription").val()),  
					Thumbnailurl: $.trim(images),
					price     : $.trim($("#txtprice").val()),
					recommend    : recommend,
					ProductDetails:[
						{
								"languageid": "1",
								"title": $.trim($("#txtkhtitle").val()),  
								"description": CKEDITOR.instances.txtkhdescription.getData()
						},
						{
								"languageid":"2",
								"title": $.trim($("#txtentitle").val()),  
								"description": CKEDITOR.instances.txtendescription.getData()
						}
					]
				},success: function(data){
					if(data==true){
						alert("You have been "+action+" successfully.");
						location.href= "<?php echo site_url('admin/product')?>";
					}else{
						alert("You have not been  "+action+" successfully.");
					}
					console.log("SUCCESSDATA:",data);
				},
				error: function(data){
					console.log("SUCCESSDATA:",data);
				}
			});
		

		});

	});
	</script>
	
	
	<script type="text/javascript">
	$(function(){
		 $.ajax({
             type: "POST",
             url: '<?php  echo site_url()?>/admin/category/lstCategorypro',
             dataType: 'json',
             success: function(data){ 
                 $("#listCategory").empty();
                 $("#tmplCategory").tmpl(data.lstCategory).appendTo("#listCategory");
                 console.log("DATA:",data); 
             },
             error: function(data){
                 console.log("ERROR...");
                 console.log(data);
             }
         });
	});
	</script>
	
	
	
	
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script type="text/x-jquery-tmpl" id="tmplCategory">
			<option value="{{= categoryid }}">{{= title}}</option>			
	</script>
    
    <script type="text/javascript">
			$(function(){
					 <?php 
					 	if($proid){  ?>
								$.post("<?php  echo site_url()?>admin/product/getproduct/<?php echo $proid ?>",function(data){
									console.log(data);
									if(data.length>0){
										 $("#listCategory").val(data[0].categoryid);
										 $("#txtseotitle").val(data[0].seotitle);
										 $("#txtseodescription").val(data[0].seodescription);
										 $("#txtfile").val(data[0].thumbnailurl);
										 $("#txtprice").val(data[0].price);
					
										 $("#txtkhtitle").val(data[0].title);
										 CKEDITOR.instances.txtkhdescription.setData(data[0].description);
										 $("#txtentitle").val(data[1].title);
										 CKEDITOR.instances.txtendescription.setData(data[1].description);

										 if(data[0].recommend == 1){
											$("#recommend").prop('checked', true);
										 }
			
										 $("#txtproductid").val(data[0].productid);

										 /*$("#myimagedemo").fadeIn("fast").attr('src',data[0].thumbnailurl);*/
										 var images = (data[0].thumbnailurl).split(";");
										 if(images!="" && images.length>0){
											 for(var i=0;i<images.length;i++){
												$('tbody').append('<tr>'+
													'<td>'+
														'<div class="form-group">'+
								    						'<img src="'+images[i]+'" class="img-responsive" id="myimagedemo" style="width:30%;"/>'+
														'</div>'+
													'</td>'+
													'<td>'+
														'<div class="form-group">'+
								    						'<a type="button" class="btn btn-danger btn-file" href="javascript:;" id="btnRemove">Remove</a>'+	
														'</div>'+
													'</td>'+
												'</tr>');
											 }
										 }
										 document.frmAddProduct.action="<?php echo site_url('admin/product/updateproductpro')?>";
										 document.title = "Update Product";
										 action="updated";
										 first = true;
									}
								});
					<?php } ?>
			});
			</script>
    
	
	
	
	</body>
</html>