<?php
class barang{
    var $warna;
    var $ukuran;
    var $nilai;

    function coba($warna){
        $this->warna=($warna);
    }
    function __construct(){
        echo"Saya hadir<br>";
    }
    function __destruct()
    {
        echo"Saya hilang<br>";
    }
};

$peci = new barang();
$typec = new barang();
?>