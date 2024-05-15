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
											<i class="fas fa-building opacity-6"></i>
										</span>
										<span class="d-inline-block">Status Lib</span>
									</div>
									<div class="page-title-subheading opacity-10">
										<nav class="" aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item active"><a>Dashboard</a></li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="main-card mb-3 card">
								<div class="card-header"> Lib Information</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table">
											<thead align="center" class="thead-dark ">
												<tr>
													<th>Name</th>
													<th>Status</th>
									                <th>Delete</th>
									                <th>Lib</th>
									            </tr>
									        </thead>
									        <tbody align="center">
									        	<tr>
									        		<?php 
									        		$files = scandir("../lib.so");
									        		for ($a = 2; $a < count($files); $a++)
									        		{
									        		?>
									        		<td><?php echo $files[$a]; ?></td>
									        		<td>
									        			<a href="apk/<?php echo $files[$a]; ?>" class="badge badge-pill badge-success" download="<?php echo $files[$a]; ?>">Online</a>
									        		</div>
									        		</td>
                                                    <td>
                                                    	<a class="btn btn-dark" href="../app/delete-lib.php?name=../lib.so/<?php echo $files[$a]; ?>">
                                                    		Delete
                                                    	</a>
                                                    </td>
                                                    <?php
                                                    }
                                                    ?> 
									        		<td>
														<?php $ffs = scandir("../lib.so");
														if (isset($ffs) && count($ffs) > 0) {
															foreach ($ffs as $key => $value) {
																if ($value != "." && $value != "..") {?>
																	<left>
																		<a href="<?php echo "../lib.so/".$value; ?>" class="btn btn-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-server" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																			   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
																			   <rect x="3" y="4" width="18" height="8" rx="3"></rect>
																			   <rect x="3" y="12" width="18" height="8" rx="3"></rect>
																			   <line x1="7" y1="8" x2="7" y2="8.01"></line>
																			   <line x1="7" y1="16" x2="7" y2="16.01"></line>
																			</svg>
																			<?php echo $value; ?>
																		</a>
																	</left>
														<?php   }
															         }}
													    ?>
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
