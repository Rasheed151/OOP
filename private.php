<?php
class barang{
    private $warna;
   
    function tampil(){
         $this->warna="Putih";
         echo $this->warna;
    }
};

$peci = new barang();
echo $peci->tampil();
?>