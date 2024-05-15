<?php 
include 'DB.php';
include 'info.php';

     $conn->query("UPDATE $tabela SET UID=NULL");   
?>
<script type="text/javascript">
	alert("Reset General");
	window.location.href='../admin/gerenciar-usarios';
</script>