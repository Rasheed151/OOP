<?php
include("binher.php");
class PPLG extends SMK{
	protected $learn = "Coding"; 
	function belajar($learn){
		echo " saya belajar mengenai ".$this->learn."<hr>";
	}
    
    function getBelajar(){
        return $this->learn;
    }

}
class TJKT extends SMK{
    protected $learn = "Arduino";
    function belajar($learn){
        echo " saya belajar mengenai ".$this->learn."<hr>";
    }
}

class PMN extends SMK{
    protected $learn = "Teknik Marketing";
    function belajar($learn){
        echo " saya belajar mengenai ".$this->learn."<hr>";
    }
}
$obj1=new PPLG("PPLG","Pak Istakim","106","25");
echo $obj1->namaSekolah();
echo $obj1->getBelajar();
echo "<hr>";

$obj2=new TJKT("TJKT","Pak Inda","107","30");
echo $obj2->namaSekolah();
echo $obj2->belajar("Arduino");


$obj3=new TJKT("PMN","Pak Bambang","108","/");
echo $obj3->namaSekolah();
echo $obj3->belajar("Teknik Marketing")
?>