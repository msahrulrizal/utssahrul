<?php
include('../config/csrf.php');
?>

<form action="../config/routes.php?function=create_spp" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun"></td>
    </tr>
    <tr>
        <td>Nominal</td>
        <td><input type="text" name="nominal"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>