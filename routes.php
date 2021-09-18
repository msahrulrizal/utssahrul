<?php

include('csrf.php');

//Fungsi Siswa
include '../controllers/controller_siswa.php';
$db = new controller_siswa();
$function = $_GET['function'];

if($function == "create_siswa"){
    if(validation()==true){
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../views/siswa_view.php");
}
elseif($function == 'update_siswa'){
    if(validation()==true){
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../views/siswa_view.php");
}
elseif($function == "delete_siswa"){
    $db->DELETEData($_GET['nisn']);
    header("location:../views/siswa_view.php");
}


//Fungsi SPP
include '../controllers/controller_spp.php';
$db = new controller_spp();

if($function == "create_spp"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../views/spp_view.php");
}
elseif($function == "update_spp"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../views/spp_view.php");
}
elseif($function == "delete_spp"){
    $db->DELETEData($_GET['id_spp']);
    header("location:../views/spp_view.php");
}


//Fungsi Kelas
include '../controllers/controller_kelas.php';
$db = new controller_kelas();

if($function == "create_kelas"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../views/kelas_view.php");
}
elseif($function == "update_kelas"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../views/kelas_view.php");
}
elseif($function == "delete_kelas"){
    $db->DELETEData($_GET['id_kelas']);
    header("location:../views/kelas_view.php");
}
?>