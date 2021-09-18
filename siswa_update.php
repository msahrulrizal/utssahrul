<?php
include('../config/csrf.php');
include '../controllers/controller_siswa.php';
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_Where($_GET['nisn']);
?>
<?php
    foreach($GetSiswa as $Get){
?>

<h1>Update Form Siswa</h1>
<form action="../config/routes.php?function=update_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis" value="<?php echo $Get['nis']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $Get['nama']; ?>"></td>
    </tr>
    <tr>
        <td>ID Kelas</td>
        <td><input type="text" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $Get['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>No Telpon</td>
        <td><input type="text" name="no_telp" value="<?php echo $Get['no_telp']; ?>"></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>