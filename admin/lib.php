<?php include('../config/menu.php'); ?>

			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="app-page-title app-page-title-simple">
						<div class="page-title-wrapper">
							<div class="page-title-heading">
								<div>
									<div class="page-title-head center-elem">
										<span class="d-inline-block pr-2">
											<i class="fas fa-users-cog opacity-6"></i>
										</span>
										<span class="d-inline-block">Upload Lib</span>
									</div>
									<div class="page-title-subheading opacity-10">
										<nav class="" aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="dashboard.php?act=account">Dasboard</a></li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php include('../app/config-lib.php'); ?>
					<div class="row">
						<div class="col-md-6">
							<div class="main-card mb-3 card">
								<div class="card-body"><h5 class="card-title">Lib Online</h5>
									<form action="lib.php" method="post" enctype="multipart/form-data">
                                        <div class="position-relative form-group">
                                        	<label for="exampleFile" class="">Please Select to lib.so</label>
                                        	<input type="file" name="myfile" class="form-control-file">
                                        </div>
                                        <button class="mt-1 btn btn-primary" type="submit" name="save">
                                        	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											   <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
											   <polyline points="7 9 12 4 17 9"></polyline>
											   <line x1="12" y1="4" x2="12" y2="16"></line>
											</svg> Upload To Server
										</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('../config/footer.php'); ?>