<?php 
class nilaiSiswa{
    private $harian;
    private $ATS;
    private $AAS;
    private $ATSG;
    private $AASG;
    public function setHarian($harian1){
        $this->harian=$harian1;
    }
    public function getHarian(){
        return $this->harian;
    }
    public function setATS($ATS1){
        $this->ATS=$ATS1;
    }
    public function getATS(){
        return $this->ATS;
    }
    public function setAAS($AAS1){
        $this->AAS=$AAS1;
    }
    public function getAAS(){
        return $this->AAS;
    }
    public function setATSG($ATSG1){
        $this->ATSG=$ATSG1;
    }
    public function getATSG(){
        return $this->ATSG;
    }
    public function setAASG($AASG1){
        $this->AASG=$AASG1;
    }
    public function getAASG(){
        return $this->AASG;
    }
    public function rata(){
        $akhir=($this->getHarian()+$this->getATS()+$this->getAAS()+$this->getATSG()+$this->getAASG())/5;
        echo "Nilai Akhir".$akhir."<br>";
        if($akhir>75){
            echo"Status Peserta Didik:Lulus";
        }elseif($akhir<75){
            echo"Status Peserta Didik:Peserta Perlu Pendidikan Lebih";
        }
    }
}
$akmal= new nilaiSiswa;
$zaky= new nilaiSiswa;
$amri= new nilaiSiswa;
$dhiksa= new nilaiSiswa;
$fahad= new nilaiSiswa;
echo "<b>nilai akmal</b><br>";
$akmal->setHarian(100);
echo "nilai harian Akmal:".$akmal->getHarian()."<br>";
$akmal->setATS(100);
echo "nilai ATS Ganjil Akmal:".$akmal->getATS()."<br>";
$akmal->setAAS(100);
echo "nilai AAS Genap Akmal:".$akmal->getAAS()."<br>";
$akmal->setATSG(100);
echo "nilai ATS Genap Akmal:".$akmal->getATSG()."<br>";
$akmal->setAASG(100);
echo "nilai AAS Genap Akmal:".$akmal->getAASG()."<br>";
echo "".$akmal->rata()."";
echo"<hr>";
//niali zaky
$zaky->setHarian(100);
echo "nilai harian Zaky:".$zaky->getHarian()."<br>";
$zaky->setATS(100);
echo "nilai ATS Ganjil Zaky:".$zaky->getATS()."<br>";
$zaky->setAAS(100);
echo "nilai AAS Genap Zaky:".$zaky->getAAS()."<br>";
$zaky->setATSG(100);
echo "nilai ATS Genap Zaky:".$zaky->getATSG()."<br>";
$zaky->setAASG(100);
echo "nilai AAS Genap Zaky:".$zaky->getAASG()."<br>";
echo "".$zaky->rata()."";
echo"<hr>";
//nilai amri
$amri->setHarian(10);
echo "nilai harian Amri:".$amri->getHarian()."<br>";
$amri->setATS(70);
echo "nilai ATS Ganjil Amri:".$amri->getATS()."<br>";
$amri->setAAS(100);
echo "nilai AAS Genap Amri:".$amri->getAAS()."<br>";
$amri->setATSG(60);
echo "nilai ATS Genap Amri:".$amri->getATSG()."<br>";
$amri->setAASG(80);
echo "nilai AAS Genap Amri:".$amri->getAASG()."<br>";
echo "".$amri->rata()."";
echo"<hr>";
//nilai dhiksa
$dhiksa->setHarian(100);
echo "nilai harian Dhiksa:".$dhiksa->getHarian()."<br>";
$dhiksa->setATS(100);
echo "nilai ATS Ganjil Dhiksa:".$dhiksa->getATS()."<br>";
$dhiksa->setAAS(100);
echo "nilai AAS Genap Dhiksa:".$dhiksa->getAAS()."<br>";
$dhiksa->setATSG(100);
echo "nilai ATS Genap Dhiksa:".$dhiksa->getATSG()."<br>";
$dhiksa->setAASG(100);
echo "nilai AAS Genap Dhiksa:".$dhiksa->getAASG()."<br>";
echo "".$dhiksa->rata()."";
echo"<hr>";
//nilai amri
$fahad->setHarian(100);
echo "nilai harian fahad:".$fahad->getHarian()."<br>";
$fahad->setATS(100);
echo "nilai ATS Ganjil fahad:".$fahad->getATS()."<br>";
$fahad->setAAS(100);
echo "nilai AAS Genap fahad:".$fahad->getAAS()."<br>";
$fahad->setATSG(100);
echo "nilai ATS Genap fahad:".$fahad->getATSG()."<br>";
$fahad->setAASG(100);
echo "nilai AAS Genap fahad:".$fahad->getAASG()."<br>";
echo "".$fahad->rata()."";
echo"<hr>";
?>