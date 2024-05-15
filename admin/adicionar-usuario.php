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
											<i class="fas fa-user-plus opacity-6"></i>
										</span>
										<span class="d-inline-block">Add User's</span>
									</div>
									<div class="page-title-subheading opacity-10">
										<nav class="" aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="dashboard.php?act=account">Dashboard</a></li>
												<li class="breadcrumb-item active"><a>Add User's</a></li>
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
								<div class="card-header">Add User's</div>
								<div class="card-body">
									<form method="post" id="quickForm">
										<input type="hidden" name="newuser_form" />
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" placeholder="Username" name='firstname' id='firstname' data-required="true" data-error-message="UserNnme is required" required>
											</div>
										</div>
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" placeholder="Password"  name='lastname' data-required="true" data-type="email" data-error-message="Password is required" required>
											</div>
										</div>
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Devices</label>
											<div class="col-sm-10">
												<input type="number" max="1" min="1" name="device" value="1" class="form-control" required>
											</div>
										</div>
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Validity</label>
											<div class="col-sm-10">
												<select class="form-control" name="gender" type="radio">
													<option type="radio" name="gender" <?php if (isset($gender) && $gender=="semanal") echo "checked";?> value="semanal"> 7 Dias</option>
													<option type="radio" name="gender" <?php if (isset($gender) && $gender=="mensal") echo "checked";?> value="mensal"> 30 Dias</option>
												</select>
											</div>
										</div>
										<div class="d-block text-right card-footer">
											<button type="submit" value="Register" name="register" class="btn btn-dark btn-lg">Register User</button>
										</div>
									</form>
									<?php 
									require('../public/Controllers/reg-null.php'); 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include('../config/footer.php'); ?>