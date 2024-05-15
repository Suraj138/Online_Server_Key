<?php
// Sesion
include '../app/info.php';
include '../app/DB.php';
session_start();
// Verificacion
if(!isset($_SESSION["$sessao"])):
  header('Location: ../index');
endif;
$id = $_SESSION['id_usuario'];
$coleta = "SELECT * FROM $tabela2 WHERE id = $id";
$resultadocoleta = mysqli_query($conn, $coleta);
$dados = mysqli_fetch_array($resultadocoleta);
$dadosvendedor = $dados['login'];
$datee = date("d/m/Y h:i");
if ($dadosvendedor == "" || $dadosvendedor == null) {
	header('Location: ../index');
?>
<script> window.location.href='../app/logout'; </script> 
<?php
} else {
	$pegar_ip = $_SERVER["REMOTE_ADDR"];
	$texto = "Reg: " . "- ".$datee. " ". $dadosvendedor." - ".$pegar_ip."\n";
	$name = '../app/ips.txt';$file = fopen($name, 'a');
	fwrite($file, $texto);
	fclose($file);
?>
<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-b3337c5f-9426-4407-b634-0a9866d4da68@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-585b24ac-9ea1-441c-bc9b-fe04b7d5122a@mhtml.blink" />
    
	<link rel="shortcut icon" type="image/x-icon" href="https://evotionteam.com/assets/images/icons/icon.ico">
    <title>Dashboard - CREATOR VIGNESH</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<meta name="msapplication-tap-highlight" content="no">
	<link href="https://evotionteam.com/css/main.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" crossorigin="anonymous" rel="stylesheet">
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<div class="app-header header-shadow bg-slick-carbon header-text-light">
			<div class="app-header__logo">
				<div class="logo-src">
					<center>
						<h6 style="color:white;text-transform:uppercase">
							<b>VIGNESH</b>
						</h6>
					</center>
				</div>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
            	<div>
            		<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            			<span class="hamburger-box">
            				<span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
            	<span>
            		<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            			<span class="btn-icon-wrapper">
            				<i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
			<div class="app-header__content">
				<div class="app-header-left">
					<div class="search-wrapper">
						<div class="input-holder">
							<input type="text" class="search-input" placeholder="Type to search">
							<button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
				<div><b style="color:white">ID:</b> <b style="color:red"><?php echo $id;?></b></div>	
				<div class="app-header-right">
					<div class="header-btn-lg pr-0">
						<div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                    	<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    		<img width="42"  src="../assets/images/avatars/BM.png" alt="">
                                    		<i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        	<button type="button" onclick="window.location.href='../app/logout'" tabindex="0" class="dropdown-item">
                                        		<i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout
                                        	</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                	<div class="widget-heading">
                                		<span style="text-transform:capitalize"><?php echo $dadosvendedor;?></span>
                                	</div>
                                	<div class="widget-subheading text-center">
                                		<i style="color:lightgreen">Admin</i>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="app-main">
			<div class="app-sidebar sidebar-shadow bg-slick-carbon sidebar-text-light">
				<div class="app-header__logo">
					<div class="logo-src"></div>
					<div class="header__pane ml-auto">
						<div>
							<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="app-header__mobile-menu">
					<div>
						<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
				<div class="app-header__menu">
					<span>
						<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
				</div>
<div class="scrollbar-sidebar">
					<div class="app-sidebar__inner">
						<ul class="vertical-nav-menu">
							<li class="app-sidebar__heading">MAIN MENU</li>
							<li  class="mm-active">
								<a href="dashboard.php" id="index.php">
									<i class="metismenu-icon fas fa-tv"></i>
SEREVER DASHBOARD 
								</a>
							</li>
							<li class="app-sidebar__heading">MANAGEMENT</li>
							<li>
								<a href="javascript: void(0);">
									<i class="metismenu-icon fas fa-user"></i>
									USER'S INFORMATION
									<i class="metismenu-state-icon fas fa-caret-down caret-left"></i>
								</a>
								<ul expanded="false">
								 	<li>
										<a href="../app/trial.php">
											SERVER CONNECTION
										</a>
									<li>
									<li>
										<a href="adicionar-usuario.php">
											ADD USER'S
										</a>
									</li>
									<li>
										<a href="adicionar-dias.php">
										ADD DAYS
										</a>
									</li>
									<li>
										<a href="gerenciar-usarios.php">
										MANAGE KEYS
										</a>
									</li>
								
		        </li>
								</ul>
								          	<li>
							<li class="app-sidebar__heading">LIB ONLINE</li>
							<li>
								<a href="javascript: void(0);">
									<i class="metismenu-icon fas fa-file"></i>
									LIB CONFIG
									<i class="metismenu-state-icon fas fa-caret-down caret-left"></i>
								</a>
								<ul expanded="false">
									<li>
										<a href="lib.php">
										UPLOAD LIB
										</a>
									</li>
									<li >
										<a href="status-lib.php">
										STATUS LIB
										</a>
									</li>
								</ul>
													          	<li>
							<li class="app-sidebar__heading">SERVER SETTINGS</li>
							<li>
								<a href="javascript: void(0);">
									<i class="metismenu-icon fas fa-sign-out-alt"></i>
									SETTINGS
									<i class="metismenu-state-icon fas fa-caret-down caret-left"></i>
								</a>
								<ul expanded="false">
									<li>
										<a href="../app/logout.php">
											LOGOUT SERVER
										</a>
									</li>
								</ul>			
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
			$fetchqry = "SELECT * FROM `$tabela` WHERE Vendedor = '$dadosvendedor'";
			$result=mysqli_query($conn,$fetchqry);
			$num=mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
			<?php } 
			    }
			?>
			<script>
				function myFunction($lol) {
					<?php
					$delete = "SELECT * FROM `clientes`";
					?>
				}
			</script>