<?php
$fetchqry = "SELECT * FROM `$tabela`";
$result=mysqli_query($conn,$fetchqry);
$num=mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    
    if ($dadosvendedor == "" || $dadosvendedor == null) {
?> 

<script> window.location.href='../app/logout.php'; </script> 

<?php
}
?>
<tr>
    <td><?php echo $row['Username'];?></td>
    <td><?php echo $row['Password'];?></td>
    <td><?php if ($row['UID'] == NULL) {
        echo "0/1";
    } else {
        echo "1/1";
    } 
    ?>
    </td>
    <td><?php echo $date1 = $row['StartDate'];?></td>
    <td><?php echo $date2 = $row['EndDate'];?></td>
    <td><?php if(strtotime(date("Y/m/d")) < strtotime($date2)) echo "Ativo"; else { echo "Expirado";} ?></td>

    <?php
    {
        echo "<td> <a href='../app/action2.php?no=".$row['Username']."'><button type='button' class='btn btn-primary mr-2'>Resetar</button></a> </td>";
    }
    ?>

    <?php
    {
        echo "<td class='column6'> <a href='../app/action1.php?no=".$row['Username']."'><button type='button' class='btn btn-danger'>Delete</button></a> </td>";
    }
    ?>

    <?php 
    $database = date_create($date2);
    $datadehoje = date_create();
    $resultado = date_diff($database, $datadehoje);
    echo "<td>";
    echo date_interval_format($resultado, '%a');
    echo "</td>";
    ?>

    <?php

    if(isset($_POST['adicionardiass'])){
        $dias = $_POST['dias'];
        $mod_date = strtotime($date2."+ 1 days");
        $adicionardias = date("Y/m/d h:m",$mod_date);
        $nome = $row['Username'];
        echo $nome;
        //$adicionardias = date('Y/m/d h:m', strtotime('+$dias days', strtotime($date2)));;
    }
    }
    ?>

    <?php 
    ?>
    <script>
        function myFunction($lol) {
            <?php
            $delete = "SELECT * FROM `tokens1`";
            ?>
        }
    </script>