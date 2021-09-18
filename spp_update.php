<?php
include('../config/csrf.php');
include '../controllers/controller_spp.php';
$spp = new controller_spp();
$GetSpp = $spp->GetDataSpp_Where($_GET['id_spp']);
?>
<?php
    foreach($GetSpp as $Get){
?>

<h1>Update Form SPP</h1>
<form action="../config/routes.php?function=update_spp" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun" value="<?php echo $Get['tahun']; ?>"></td>
    </tr>
    <tr>
        <td>Nominal</td>
        <td><input type="text" name="nominal" value="<?php echo $Get['nominal']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>