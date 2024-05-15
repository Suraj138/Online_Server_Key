<?php   // this code is use to insert the form details and register and expiration date
include '../app/DB.php';
include '../app/Global.php';
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
//echo $date_1_hora;
if(isset($_POST['register']) && empty($_POST['firtsname'])){
    if ($dadosvendedor == "" || $dadosvendedor == null) {
?>

<script> window.location.href='../app/logout.php'; </script> 

<?php
}
$gender = "";
$datemensal = date('Y-m-d H:i', strtotime('+30 Days'));
$datesemanal = date('Y-m-d H:i', strtotime('+7 Days'));
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$Username = $_POST['firstname'];
$Password  = $_POST['lastname'];
$Vendedor = $_POST['vendedor'];
$_POST['semanal'] = $datesemanal;
$_POST['mensal'] = $datemensal;
$gender = ($_POST["gender"]);
if ($gender == "semanal"){
    $datesemanal = date('Y-m-d H:i', strtotime('+8 Days'));
    $Expiration = $datesemanal;
    echo $Expiration;
}
else if ($gender == "mensal"){
    $datemensal = date('Y-m-d H:i', strtotime('+31 Days'));
    $Expiration = $datemensal;
    echo $Expiration;
}
$date      = $date_1_hora;
$true      = 2;
$fetch = "INSERT INTO `$tabela`(`Username`, `Password`, `Vendedor`, `StartDate`, `EndDate`, `UID`, `Expiry`) VALUES ('$Username','$Password','
$Vendedor','$date','$Expiration', NULL, '$true')";
$fire = mysqli_query($conn,$fetch);
?>

<script type="text/javascript">
    alert("Registrado com Sucesso!");
    window.location.href='../admin/adicionar-usuario';
</script>

<?php
}
?>