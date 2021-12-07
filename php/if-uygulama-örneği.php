<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    





<?php

// or veye
// and ve anlamına gelir


/* İKİ KULLANIMI VAR GİRİŞ YAPIN BU1///
$name="canseven";
$sifre="5552306m";
 $kullanici_ad=$_POST['kullanici_adi'];
echo "<br>";
 $kullanici_sifre=$_POST['kullanici_sifre'];

if ($kullanici_ad==$name and $kullanici_sifre==$sifre) {
        echo "<h1>Giriş Başarılı</h1>";
}else {
        echo "Giriş Başarısız";
}
*/
///////////////////////////////////
/*BU DA İKİNCİ KULLANIMI GİRİŞ */
$name="canseven";
$sifre="5552306m";
echo "<br>";
if (@$_POST['kullanici_adi']==$name and $_POST['kullanici_sifre']==$sifre) {
        echo "<h1>Giriş Başarılı</h1>";
}else {
        echo "Giriş Başarısız";
}



?>
<br>
<br>
<br>
<br>
<hr>
<h1>Kullanıcı giriş</h1>
<form action="" method="POST">
        Kullanıcı Adı <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adını Giriniz.">
        Şifre <input type="password" name="kullanici_sifre" placeholder="Şifrenizi Giriniz." >
<button type="submit">Giriş</button>
</form>



































</body>
</html>