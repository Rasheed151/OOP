<?php
class visibility{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
    function cetakProperti(){
        echo "cetak dari dalam class<br>";
        echo "public : ".$this->public."<br>";
        echo "protected :". $this->protected."<br>";
        echo "private : ".$this->private."<br>";
    }
    public function cetak($lain){
        return $this->protected=$lain;
    }
    public function cetakLagi($lain){
        return $this->private=$lain;
    }
}
$obj = new visibility();
$obj->cetakProperti();
echo"<br>Pengaksesan Dari Luar Class<br>";
echo "public : ".$obj->public."<br>";
echo "Protected : ".$obj->cetak('Password <b>Tidak</b> Dapat Di Akses')."<br>";
echo "Private : ".$obj->cetakLagi('Live')."<br>";
?>