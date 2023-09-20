<?php
class sekolah{
protected $nama,$alamat,$kontak;
public function __construct($nama,$alamat,$kontak){
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->kontak = $kontak;
}
    public function namaSekolah(){
        return "nama sekolah".$this->nama."alamat".$this->alamat."kontak".$this->kontak;
    }
}
?>