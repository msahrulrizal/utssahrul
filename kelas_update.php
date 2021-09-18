<?php
include('../config/csrf.php');
include '../controllers/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_Where($_GET['id_kelas']);
?>
<?php
    foreach($GetKelas as $Get){
?>

<h1>Update Form Kelas</h1>
<form action="../config/routes.php?function=update_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    <tr>
        <td>Kelas</td>
        <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>"></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>