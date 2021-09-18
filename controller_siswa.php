<?php

// Class Siswa (CRUD Siswa)
class controller_siswa{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $Msiswa;

     var $nisn;
     var $nis;
     var $nama;
     var $id_kelas;
     var $alamat;
     var $no_telp;
     var $id_spp;
     

    // Method main variabel
    function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_siswa.php';
            $this->Msiswa = new model_siswa();
        }


    // Method untuk memasukan data ke dalam table
    function POSTData ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // perintah POST data
        $this->Msiswa->POST($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);

    }

    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->Msiswa->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($nisn){

        // perintah GET data
        return $this->Msiswa->GET_Where($nisn);
    }


    // Method untuk memasukan data ke dalam table
    function PUTData ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // perintah PUT data
        $this->Msiswa->PUT($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);

    }


    // Method untuk menghapus data dari table
    function DELETEData ($nisn){

        // perintah DELETE data
        $this->Msiswa->DELETE($nisn);
    }
}
?>