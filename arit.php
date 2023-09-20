<?php
function tambah($var1 , $var2){
    $hasil=$var1+$var2;
return "$var1+$var2=$hasil";
}
function kurang($var1 , $var2){
    $hasil=$var1-$var2;
    return "$var1-$var2=$hasil";
}
function kali($var1 , $var2){
    $hasil=$var1*$var2;
    return "$var1*$var2=$hasil";
}
function bagi($var1 , $var2){
    if ($var2 == 0){
        return "gak bisa nol";
    }else{
        $hasil=$var1/$var2;
    return "$var1/$var2=$hasil";
    }
    
}
function sisa($var1 , $var2){
    if ($var2 == 0){
        return "gak bisa nol";
    }else{
        $hasil=$var1%$var2;
    return "$var1%$var2=$hasil";
    }
}

echo "".tambah(5,2,)."<br>";
echo "".kurang(5,2)."<br>";
echo "".kali(5,2)."<br>";
echo "".bagi(5,0)."<br>";
echo "".sisa(5,0)."<br>";
?>