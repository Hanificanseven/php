<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


<?php
// date time zone kodu
date_default_timezone_set('Europe/Istanbul');
// date time zone kodu


$dizi=array("Emrah","Yüksel",10,20,30,70);

print_r($dizi);
echo "<br>";
echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";
echo $dizi[5]; echo "<br>";


echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "<br>";

$dizi1= array(10,9,8,7,6,12,5,4,3,2,1,);
//sort küçükten büyüğe sıralar 
echo "<pre>";
sort($dizi1);
print_r($dizi1);
echo "</pre>";
// rsort büyükten küçüğe sıralar
echo "<pre>";
rsort($dizi1);
print_r($dizi1);
echo "</pre>";
/* in_array dizi içerisinde aradığımız değer varmı 
diye aratır varsa 1 yazar*/
echo "<br>";

$dizi3= array("ad","ad","c","d");
echo $sonuc=in_array("a",$dizi3);

if ($sonuc) {
    echo "Var";
}
else {
    echo "Yok";
}
echo "<br><hr>";

//implode dizi değerlerini birleştirmeye yarar
echo "<h1>------Hediyelerim-------</h1><hr>";
$dizi= array(10,5,4,3);
rsort($dizi);
echo $sonuc=implode(" Gold<hr>",$dizi);
echo "<br>";

if ($sonuc) {
    echo "Gönderilen hediyeleriniz Yukarıdadır.<br>";
}
else {
    echo "Hediye Gönderilmemiştir";
}

echo "<hr><br>";
// explode değişkeni parçalayarak diziye çevirme
$zaman= date("d-m-y h:i:s");

$sonuc=explode(" ",$zaman);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<b>Tarih:</b> ".$sonuc[0];
echo "<br>";
echo "<b>Saat:</b> ".$sonuc[1];
echo "<br><hr>";

// Date Time Zone ayarları yukarıya taşındı saat ayarı explode ile parçalayıp oto yazdırdım
$zaman= array();


for ($i=0; $i <10 ; $i++) { 
   array_push($zaman,rand(0,10));
}
echo "<pre>";
rsort($zaman);
print_r($zaman);
echo "</pre>";

 date("d-m-y h:i:s");


echo "<br><hr>";









// POST VE GET METHODLARI//



























echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";










?>

<form action="" method="POST">

Ad <input type="text" name="ad" placeholder="Adınızı Giriniz">
Soyad <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">


</form>



</head>
<body>
    
</body>
</html>