			
			<div class="sidebar-left sidebar-nicescroller light-color" style="padding-top: 10px;">
				<div class="col-sm-12">
							<div id="accordion-1" class="panel-group">
								<div class="panel panel-info">
								  <div class="panel-heading">
									<h3 class="panel-title">
									<i class="fa fa-tachometer"></i>
										<a href="<?php echo site_url("admin/");?>"  >
										Dashboard
										
										</a>
									</h3>
								  </div>
									
								</div><!-- /.panel panel-default -->
								<br/>
								<h4 class="small-title">
									<strong><i class="fa fa-tachometer"></i> Website Section</strong>
								</h4>
							
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-6" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse">
										Products
										<span class="right-content">
											<span class="right-icon"><i class="glyphicon glyphicon-plus icon-collapse"></i></span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-6">
									  <div class="panel-body">
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/product");?>">List Products</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/product/addproduct");?>">Add Product</a><br><br>
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->

								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-9" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										Categories
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-9">
									  <div class="panel-body">										
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/category");?>">List Category</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/category/addcategory");?>">Add Cateogry</a><br><br>
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
								
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-12" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										Pages
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-12">
									  <div class="panel-body">
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/page/listpage");?>">List Pages</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/page/addpage");?>">Add Page</a><br><br>
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-11" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										Menu
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-11">
									  <div class="panel-body">
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/menu/listmenu");?>">List Menu</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/menu/addmenu");?>">Add Menu</a><br><br>
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-8" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										Slides
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-8">
									  <div class="panel-body">
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/slide/listslides");?>">List Slides</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/slide/addslide");?>">Add Slide</a><br><br>
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
								
								<?php if($this->session->userdata('usertype')=="1"){ ?>
								<br/>
								<h4 class="small-title">
									<strong><i class="fa fa-user"></i> User Section</strong>
								</h4>
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-7" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										User Management
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-7">
									  <div class="panel-body">
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/user/listusers");?>">List User</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/user/adduser");?>">Add User</a><br><br>
									
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
								<br/>
								<h4 class="small-title">
									<strong><i class="fa fa-cog"></i> Layout Section</strong>
								</h4>	
								<div class="panel panel-default">
								  <div class="panel-heading">
									<h3 class="panel-title">
										<a href="#accordion-1-child-10" data-toggle="collapse" data-parent="#accordion-1" class="block-collapse collapsed">
										Editor
										<span class="right-content">
											<span class="right-icon">
												<i class="glyphicon glyphicon-plus icon-collapse"></i>
											</span>
										</span>
										</a>
									</h3>
								  </div>
									<div class="collapse" id="accordion-1-child-10">
									  <div class="panel-body">
									  <i ></i>&nbsp;<a href="<?php echo site_url("admin/logo/");?>">Logo Settings</a><br><br>
										<i ></i>&nbsp;<a href="<?php echo site_url("admin/theme/");?>">Theme Editor</a><br><br>
										
										
									  </div><!-- /.panel-body -->
									</div><!-- /.collapse in -->
								</div><!-- /.panel panel-default -->
							<?php } ?>				
								
								
							</div><!-- /.panel-group -->

						
							
							
				</div>
			</div>