<?php
 include_once("inherit.php");
 class SMP extends sekolah{

 }
 class SMK extends sekolah{
    private $jurusan;
    private $jumlahsiswa;

    function setJurusan($jurusan){
        echo $this->jurusan = $jurusan;
    }

 }
?>