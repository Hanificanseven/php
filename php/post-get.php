<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    



<?php
// post input ile gönderilen veriyi yakalar VE GİZLİDİR //
/*echo "<b>Ad</b><br><hr>";
echo $_POST['ad'];
echo "<hr>";
echo "<b>Soyad</b><br>";
echo $_POST['soyad'] ;
echo "<br><br>";*/

//get İNPUT İLE GÖNDERİLEN VERİ AÇIK OLUR ADRES SATIRINDA GÖZÜKÜR

// kullanici_id sorun oldu//

$kullanici_id=151;
?>


<form action="islem.php" method="GET">

Ad <input type="text" name="ad" placeholder="Adınızı Giriniz">
Soyad <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
<input type="submit" name="Gönder" value="Gönder">


<button> <a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>" class="btn" >Kullanıcıyı Sil. </a></button>

</form>

<?php









?>






























































































</body>
</html>