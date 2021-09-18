<?php

class model_kelas{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;


    var $id_kelas;
    var $nama_kelas;
    var $kompetensi_keahlian;

    function __construct()
    {
    include_once '../config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($id_kelas,$nama_kelas,$kompetensi_keahlian){
        mysqli_query($this->con,"insert into kelas values(
            '".$id_kelas."',
            '".$nama_kelas."',
            '".$kompetensi_keahlian."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from kelas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($id_kelas){
        $this->query=mysqli_query($this->con,"select * from kelas where id_kelas='$id_kelas'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($id_kelas,$nama_kelas,$kompetensi_keahlian){
        mysqli_query($this->con,"update kelas set
        id_kelas='".$id_kelas."',
        nama_kelas='".$nama_kelas."',
        kompetensi_keahlian='".$kompetensi_keahlian."'
        where id_kelas='".$id_kelas."'");
    }
    
    function DELETE ($id_kelas){

        // perintah DELETE data
        mysqli_query($this->con,"delete from kelas where id_kelas='$id_kelas'");

    }
}
?>