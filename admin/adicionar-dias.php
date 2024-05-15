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
										<span class="d-inline-block">Add Extra Days</span>
									</div>
									<div class="page-title-subheading opacity-10">
										<nav class="" aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="dashboard.php?act=account">Dashboard</a></li>
												<li class="breadcrumb-item active"><a>Add Days</a></li>
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
								<div class="card-header">Add User</div>
								<div class="card-body">
									<form method="post" id="quickForm">
										<input type="hidden" name="newuser_form" />
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" placeholder="Usuario" name='nome' id='firstname' data-required="true" data-error-message="Digite o nome!" required>
											</div>
										</div>
										<div class="position-relative row form-group">
											<label for="exampleEmail" class="col-sm-2 col-form-label">Enter Days</label>
											<div class="col-sm-10">
												<input type="text" class="form-control"placeholder="Numero de Dias"  name='dias' data-required="true" data-type="email" data-error-message="Digite os dias!" required>
											</div>
										</div>
										<div class="d-block text-right card-footer">
											<button type="submit" value="Adicionar dias" name="adicionardias" class="btn btn-dark btn-lg">Add Days</button>
										</div>
									</form>
									<?php 
									require('../public/Controllers/date.php'); 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include('../config/footer.php'); ?>