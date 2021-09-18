<?php

include '../controllers/controller_siswa.php';
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_All();

?>

<h1>DATA SISWA</h1>
<h3><a href="siswa_insert.php">Add Siswa</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>ID Kelas</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>ID SPP</th>
        <th>Tools</th>
    </tr>

<?php
    // Decision validation variabel
    if(isset($GetSiswa)) {
    $no = 1;
    foreach($GetSiswa as $Get){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $Get['nisn']; ?></td>
    <td><?php echo $Get['nis']; ?></td>
    <td><?php echo $Get['nama']; ?></td>
    <td><?php echo $Get['id_kelas']; ?></td>
    <td><?php echo $Get['alamat']; ?></td>
    <td><?php echo $Get['no_telp']; ?></td>
    <td><?php echo $Get['id_spp']; ?></td>
    <td>
    <a href="../views/siswa_update.php?nisn=<?php echo $Get['nisn'] ?>">Update</a>
    <a href="../config/routes.php?function=delete_siswa&nisn=<?php echo $Get['nisn'] ?>">Delete</a>
    </td>
</tr>
    <?php 
            }
        }
    ?>
    </table>
</table>