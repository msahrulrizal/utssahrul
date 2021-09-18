<?php
include('../config/csrf.php');
?>

<form action="../config/routes.php?function=create_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID Kelas</td>
        <td><input type="text" name="id_kelas"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><input type="text" name="nama_kelas"></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td><input type="text" name="kompetensi_keahlian"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>