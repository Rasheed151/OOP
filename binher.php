<?php
class SMK{
	protected $jurusan,$guru,$ruangan,$jumlah;
	function __construct($jurusan,$guru,$ruangan,$jumlah){
        $this->jurusan=$jurusan;
		$this->guru=$guru;
        $this->ruangan=$ruangan;
        $this->jumlah=$jumlah;
	}
	public function namaSekolah(){
        return "Saya dari jurusan ".$this->jurusan." dengan ".$this->guru." tempat kami di ruangan ".$this->ruangan." dengan jumalah siswa ".$this->jumlah;
    }
    
}
?>