<?php
include('../config/csrf.php');
?>

<form action="../config/routes.php?function=create_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>ID Kelas</td>
        <td><input type="text" name="id_kelas"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>No. Telfon</td>
        <td><input type="text" name="no_telp"></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>