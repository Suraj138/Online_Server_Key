<?php
include 'DB.php';
include 'Global.php';
include 'info.php';
if($maintenance == false){
	$conn->query("UPDATE $tabela SET UID=NULL WHERE `Username` = '".$_GET['no']."'");
}
?>

<script type="text/javascript">
	alert("Usuario Reiniciado");
	window.location.href='../admin/gerenciar-usarios';
</script>