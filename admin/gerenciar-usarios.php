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
										<span class="d-inline-block">Manage User's</span>
									</div>
									<div class="page-title-subheading opacity-10">
										<nav class="" aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="dashboard.php?act=account">Dashboard</a></li>
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
								<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
									<span class="justify-content-start float-left">
										<form action="">
											<input type="hidden" name="act" value="users" />
											<label>Mostrar</label>
											<select name="rows" class="btn btn-light" onchange="this.form.submit()">
												<option value="10"> 10 </option>
												<option value="25"> 25 </option>
												<option value="50"> 50 </option>
												<option value="100"> 100 </option>
											</select>
											<a href="../app/reset.php" class="btn btn-info">
                <i class="fa fa-asterisk mr-1"></i> Reset All Users
                </a>
                
      									<a href="../app/delete-all.php" class="btn btn-danger">
                <i class="fa fa-asterisk mr-1"></i> Delete All Users
                </a>
										</form>
									</span>
								</div>
								<br>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table">
											<thead align="center" class="thead-dark ">
												<tr>
													<th>User's</th>
                                                    <th>Password</th>
                                                    <th>UID</th>
                                                    <th>Registered Date</th>
                                                    <th>Validity Till</th>
                                                    <th>Status</th>
                                                    <th>Reset</th>
                                                    <th>Delete</th>
                                                    <th>Days</th>
									            </tr>
									        </thead>
									        <tbody align="center">
									        	<?php 
									        	require('../public/Controllers/data-table.php'); 
									        	?>
									        </tbody>
									    </table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			    <?php include('../config/footer.php'); ?>