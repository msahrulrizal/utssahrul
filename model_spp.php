<?php

class model_spp{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_spp;
    var $tahun;
    var $nominal;

    function __construct()
    {
    include_once '../config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"insert into spp values(
            '".$id_spp."',
            '".$tahun."',
            '".$nominal."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from spp");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($id_spp){
        $this->query=mysqli_query($this->con,"select * from spp where id_spp='$id_spp'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"update spp set
        tahun='".$tahun."',
        nominal='".$nominal."'
        where id_spp='".$id_spp."'");
    }
    
    function DELETE ($id_spp){

        // perintah DELETE data
        mysqli_query($this->con,"delete from spp where id_spp='$id_spp'");

    }
}
?>