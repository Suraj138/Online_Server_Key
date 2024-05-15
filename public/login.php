<?php

// Conexion
require_once 'app/DB.php';
include 'app/info.php';

// Session
session_start();

// Enviar datos "post"
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    if(isset($_POST['lembrar-senha'])):

        setcookie('login', $login, time()+3600);
        setcookie('senha', md5($senha), time()+3600);
    endif;

    if(empty($login) or empty($senha)):
        $erros['alert'] = "No register";
else:
// 105 OR 1=1 
// 1; DROP TABLE teste

    $sql = "SELECT login FROM $tabela2 WHERE login = '$login'";
    $resultado = mysqli_query($conn, $sql);     

    if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);       
        $sql = "SELECT * FROM $tabela2 WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($conn);
            $_SESSION["$sessao"] = true;
            $_SESSION['id_usuario'] = $dados['id'];

            header('Location: admin/dashboard.php');

        else:
            $erros['alert'] = "<center><li>Incorrect Details</li></center>";
        endif;

    else:
        $erros['alert'] = "<center><li>User Not Existence</li></center>";
    endif;

endif;

endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="assets/images/icons/icon.ico" type="image/x-icon">
    <title>Login - CREATORVIGNESH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url" content="login" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="CREATORVIGNESH - Administrator Panel" />
	<meta property="og:image:width" content="1080" />
	<meta property="og:image:height" content="1080" />
	<meta property="og:image:alt" content="CREATORVIGNESH - Administrator Panel" /> 
	<script type='text/javascript'>
	var t="3c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f626f6f7473747261702e6d696e2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f666f6e742d617765736f6d652e6d696e2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f69636f6e2d666f6e742e6d696e2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f616e696d6174652e637373223e090d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f68616d627572676572732e6d696e2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f616e696d736974696f6e2e6d696e2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f73656c656374322e6d696e2e637373223e090d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f6461746572616e67657069636b65722e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f7574696c2e637373223e0d0a093c6c696e6b2072656c3d227374796c6573686565742220747970653d22746578742f6373732220687265663d222e2f6173736574732f6d782d6c6f672f6373732f6d61696e2e637373223e0d0a202020203c736372697074207372633d222f2f63646e2e6a7364656c6976722e6e65742f6e706d2f7377656574616c65727432403131223e3c2f7363726970743e";for(i=0;i<t.length;i+=2){document.write(String.fromCharCode(parseInt(t.substr(i,2),16)));}
	</script>
</head>
<body>	
    <div class="limiter">
    	<div class="container-login100">
    		<div class="wrap-login100 p-t-50 p-b-90">
    			<?php if (!empty($erros['alert'])) { ?>
    				<div class="alert alert-danger" role="alert">
    					<p class="mb-0">
    					<?php echo $erros['alert'];
    					unset($erros['alert']);?>
                        </p>
                    </div>
                <?php } ?>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login100-form validate-form flex-sb flex-w">
                	<span class="login100-form-title p-b-51">
                		<small><h2><b>CREATOR</b>VIGNESH</h2></small>
                		<span><h5>Server Login</h5></span>
                		<hr>
                	</span>
                	<input type="hidden" name="login_form" />
                	<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                		<input class="input100" type="text" id="login" name="login" placeholder="Enter Your Username" value="">
                		<span class="focus-input100"></span>
                	</div>
                	<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                		<input class="input100" type="password" id="password" name="senha" value="" placeholder="Enter Your Password">
                		<span class="focus-input100"></span>
                	</div>
                	<!--
                	<div class="flex-sb-m w-full p-t-3 p-b-24">
                		<div class="contact100-form-checkbox">
                			<div class="g-recaptcha" data-sitekey="6Le_tlUdAAAAAGfY0ITKdFVsImwSdSJM5xvbmhG-"></div>
                		</div>
                	</div>
                    -->
                	<div class="container-login100-form-btn m-t-17">
                		<button type="submit" name="btn-entrar" class="login100-form-btn">
                			Enter Server
                		</button>
                	</div>
                </form>
            </div>
		</div>
	</div>
	</script>
	</body>
</html>