<?php   // this code is use to insert the form details and register and expiration date
include '../app/DB.php';
include '../app/Global.php';
include '../app/info.php';

$hora = date("h/m/s");
if(isset($_POST['adicionardias'])){
    $Username = $_POST['nome'];
    $dias  = $_POST['dias'];
    $sql = "SELECT * FROM $tabela WHERE Username = '$Username'";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);
    $date2 = $dados['EndDate'];
    $mod_date = strtotime($date2."+ $dias days");
    $adicionardias = date("Y/m/d h:m",$mod_date);
    //echo $adicionardias;
    $conn->query("UPDATE $tabela SET EndDate='$adicionardias' WHERE `Username` = '$Username'");   
   //echo "UPDATE tokens SET EndDate='$adicionardias' WHERE `Username` = '$Username'";       
?>

<script type="text/javascript">
    alert("Adicionado com Sucesso!");
    window.location.href='../admin/adicionar-usuario';
</script>

<?php
}
?>