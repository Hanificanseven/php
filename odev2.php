<form action="" method="post">
    Sayı giriniz <input type="text" name="tire" id=""><br>
    <button type="submit">Gönder</button>
</form>
<?php
//klavyeden girilen sayıya kadar her satırda 1 arttırarak - oluşturan program
$tire = @$_POST["tire"];
for ($i=1; $i <=$tire ; $i++) { 
    for ($k=0; $k < $i; $k++) { 
        echo "-";
    }
    echo "<br>";
}
?>
<?php 
//rastgele 10 öğrencinin geçme notunu hesaplayıp $notlar dizisinin içersine yazdırınız
echo "----------------------------------------";
$vize =0;
$final=0;
$notlar=array();
for ($i=0; $i <10 ; $i++) { 
    $vize = random_int(0,100);
    $final = random_int(0,100);
    $notlar[$i] = $vize*0.4+$final*0.6; 
}
echo "<br>Notlar:<br><pre>";
print_r($notlar);
echo "</pre>";
?>
<form action="" method="post">
    Sayı Giriniz <input type="text" name="sayi" id=""><br>
    <button type="submit">Gönder</button>
</form>
<?php 
//klavyeden girilen sayıya kadar olan tek sayıların ve çift sayıların karelerini iki ayrı diziye kaydediniz
echo "----------------------------------------";
$sayi = @$_POST["sayi"];
$tekSayilar= array();
$ciftSayilar= array();
for ($i=1; $i <=$sayi ; $i++) { 
    if ($i%2==0) {
       array_push($ciftSayilar,$i*$i);
    }
    else if ($i%2==1) {
        array_push($tekSayilar,$i*$i);
     }
}
echo "<br>Çift sayıların Karesi:<br><pre>";
print_r($ciftSayilar);
echo "</pre>";
echo "<br>Tek Sayıların Karesi:<br><pre>";
print_r($tekSayilar);
echo "</pre>";
?>


<?php
//form üzerinden gelen dersler dizisinin value değerlerini bir dizi içersine kaydediniz multiple Selection
echo "----------------------------------------";
?>
<form action="" method="post">
<label for="dersler">Dersler</label>
<select name="dersler[]" id="dersler" multiple>
  <option value="0">İletişim</option>
  <option value="1">Girişimcilik</option>
  <option value="2">Veritabanı II</option>
  <option value="3">Kritik ve Analitik Düşünce</option>
</select>
<button type="submit">Gönder</button>
</form>
<?php 
if (isset($_POST["dersler"])) {
    $values = @$_POST["dersler"];
    foreach ($values as $value) {
        echo "$value <br>";
    }
}
echo "----------------------------------------";
?>