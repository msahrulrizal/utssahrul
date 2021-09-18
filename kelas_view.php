<?php

include '../controllers/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

?>

<h1>DATA KELAS SISWA</h1>
<h3><a href="kelas_insert.php">Tambahkan Kelas</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Kelas</th>
        <th>Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetKelas))
                {
                        $no = 1;
                        foreach($GetKelas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                            <td>
                            <a href="../views/kelas_update.php?id_kelas=<?php echo $Get['id_kelas'] ?>">Update</a>
                            <a href="../config/routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>">Delete</a>
                            </td>
                            
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>