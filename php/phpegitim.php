
<?php

//html ile php bağlantıları ile örneklemelerim.
 $ad="Hanifi Can"; 
 $soyad="Seven"; 
 $no=9;
 echo "<h1> Bilgileriniz  </h1>";
 echo "<hr>";

 echo "<b> Adınız Ve Soyadınız: </b>". $ad." ".$soyad;
 echo "<hr>";
 echo "<b>Numaranız: </b>". $no;
 echo "<hr>";
 echo "<br><br><br>";
 //Matematiksel işlemler.
 $numara=10;
 $numara2=39;
 //echo $numara+$numara2;
 echo "<b>Toplama İşlemi;</b><br>";
 $topla=$numara+$numara2;
 echo "<hr>";
 echo "$numara + $numara2 = $topla ";
echo "<hr>";
echo "<br><br><br>";

echo "<b> Çıkarma İşlemi;</b> ";

echo "<hr>";

$cikarma=$numara2-$numara;
echo "$numara2 - $numara = $cikarma ";



echo "<hr><br><br>";

echo "<b>Bölme İşlemi;</b><br>";
$bolme=$numara2/$numara;
echo "<hr>";
echo "$numara2 / $numara = $bolme";
echo "<hr>";
echo "<br><br>";

echo "<b>Çarpma İşlemi;</b><br>";
$carp=$numara2*$numara;
echo "<hr>";
echo "$numara2 * $numara = $carp";
echo "<hr>";
echo "<br><br>";
//Atama İşlemleri//
echo "<hr>";
echo "<b>Arttırma Eksiltme çarpma falan işlemleri</b>";
echo "<hr>";

$atama=500;
echo $atama;
echo "<hr>";

$atama*=500;
echo  $atama;
echo "<hr>";

$atama/=500;
echo  $atama;
echo "<hr>";

$atama-=400;
echo $atama;
echo "<hr>";

$atama+=600;
echo $atama;
echo "<hr>";

$atama++;
echo $atama;
echo "<hr>";

$atama--;
echo $atama;
echo "<hr>";
echo "<br>";
echo "<br>";


// Hazır Fonksiyonlara Bakış //
echo "<hr>";
echo $sayi=rand(0,6);
echo "<br>";


if ($sayi<3) {
    echo "Kazandın.";
   }   else {
        echo "Kaybettin.";
    }
// ÇİFT TIRNAKTA DEĞİŞKEN OKUNUR TEK TIRNAKTA OKUNMAZ //
/* Örnek */
echo "<br><hr>";
$ad="Hanifi Can";
echo "<br>";
echo "Benim Adım $ad";
echo "<hr>";
echo 'Benim Adım $ad';
echo "<br>";
/* Yok Sayma İşaretleri */
echo "<br><hr><br>";
echo "Ben $ad \"Udemy\" Kursuna Kayıt Oldum";
echo "<hr><br>";

/*Hazır String Fonksiyonları
    strtolower küçük
    strtoupper büyük            */

echo $yazi="BENIM ADIM HANIFI CAN SEVEN";
echo "<br>";
echo strtolower($yazi);
echo "<hr>";
echo $yazi2="benim adim hanifi can seven";
echo "<br>";
echo strtoupper($yazi2);

/* ucwords Metnin ilk harfleri büyük yazma
BLOG BAŞLIKLARINDA BUNU KULLANABİLİRİM
VEYA DİREK STRTOUPPER İLE HEPSİNİ BÜYÜK YAZDIRMA 
FONKSİYONU DA KULLANABİLİRİM.
*/
echo "<hr>";
$yazi3="canini sikanın canini sikiyim.";
echo ucwords($yazi3);

// substr belirtilen derecede yazıyı kısaltır yazar.//
// substr ile devamını oku yazımı//
echo "<br><hr>";
echo substr($yazi3,0,14);
echo "<br>";
$yazi5= "AMOSDOAMSD ASMOPDASD ASODA MSODAS OASD OADO MASOPDM AS
AMSODPASOPDASOMDA SODA SAOSMDAOMPSD AOMD OPMAS OPDMAOSM DAPO DAOPM SDASOD A
AS OMDASPDAMOSDOPASDOPM";
echo "<hr>";
echo "<h1>Sayfa Başlığı</h1>";
echo "<hr>";
echo "<br>".substr($yazi5,0,48);
echo "<br> <a href=\"#\" ><b>Devamını Oku...</b></a>";
echo "<hr>";


























echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";









?>