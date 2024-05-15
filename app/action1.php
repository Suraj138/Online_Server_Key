<?php
include 'DB.php';
include 'Global.php';
include 'info.php';

if($maintenance == false){
     $conn->query("DELETE FROM `$tabela` WHERE `Username` = '".$_GET['no']."'");   
}

?>

<script type="text/javascript">
	alert("Usuario Eliminado");
	window.location.href='../admin/gerenciar-usarios';
</script>