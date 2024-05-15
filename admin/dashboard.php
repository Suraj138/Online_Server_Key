<?php include('../config/menu.php'); ?>

			<!-- Conten -->
			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="app-page-title app-page-title-simple">
						<div class="page-title-wrapper">
							<div class="page-title-heading">
								<div>
									<div class="page-title-head center-elem">
										<span class="d-inline-block pr-2">									
										</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-xl-4">
							<div class="card mb-3 widget-content bg-premium-dark">
								<div class="widget-content-wrapper text-white">
									<div class="widget-content-left">
										<div class="widget-heading">TOTAL</div>
										<div class="widget-subheading">CLIENTS</div>
									</div>
									<div class="widget-content-right">
										<div class="widget-numbers text-warning">
											<span>
												<?php 
												$sql12 = "SELECT COUNT(*) FROM $tabela";
												$resulto = mysqli_query($conn,$sql12);
												$rows1 = mysqli_fetch_row($resulto);
												echo $rows1[0];
												?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4">
							<div class="card mb-3 widget-content bg-premium-dark">
								<div class="widget-content-wrapper text-white">
									<div class="widget-content-left">
										<div class="widget-heading">SERVER</div>
										<div class="widget-subheading">STATUS</div>
									</div>
									<div class="widget-content-right">
										<div class="widget-numbers text-warning"><span>Online</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4">
							<div class="card mb-3 widget-content bg-premium-dark">
								<div class="widget-content-wrapper text-white">
									<div class="widget-content-left">
										<div class="widget-heading">ADMIN</div>
										<div class="widget-subheading">NAME</div>
									</div>
									<div class="widget-content-right">
										<div class="widget-numbers text-warning"><span><?php echo $dadosvendedor;?></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="main-card mb-3 card">
								<div class="card-header"> Mod Information :</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table">
											<thead align="center" class="thead-dark ">
												<tr>
													<th>Updated Hacks</th>
													<th>Version</th>
													<th>Status</th>
									                <th>Mod Type</th>
									                <th>Download</th>
									            </tr>
									        </thead>
									        <tbody align="center">
									        	<tr>
									        		<td>Vignesh GG Injector</td>
									        		<td>V2</td>
									        		<td><div class="badge badge-pill badge-danger">Maintence</div></td>
									        		<td><div class="badge badge-pill badge-primary">Injector</div></td>
									        		<td>
									        			<a class="btn btn-primary" href="telegram.me/creatorvignesh">
									        				<i class="fa fa-download" style="padding-right:10px;"></i>DOWNLOAD 
									        			</a>
									        		</td>
									        	</tr>
												  <tbody align="center">
									        	<tr>
									        		<td>Vignesh GG Mod Menu</td>
									        		<td>V7</td>
									        		<td><div class="badge badge-pill badge-danger">Maintence</div></td>
									        		<td><div class="badge badge-pill badge-primary">GG MOD</div></td>
									        		<td>
									        			<a class="btn btn-primary" href="telegram.me/creatorvignesh">
									        				<i class="fa fa-download" style="padding-right:10px;"></i>DOWNLOAD 
									        			</a>
									        		</td>
									        	</tr>
									        </tbody>
									    </table>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<?php include('../config/footer.php'); ?>
