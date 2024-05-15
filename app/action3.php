<?php
include 'DB.php';
include 'Global.php';
include 'info.php';

if($maintenance == false){
     $conn->query("DELETE FROM `$tabela3` WHERE `id` = '".$_GET['no']."'");   
}

?>

<script type="text/javascript">
	alert("Vendedor Eliminado");
	window.location.href='index';
</script>