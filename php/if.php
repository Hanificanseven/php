<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    



<?php

/*if koşulu
///////////////////////
==  'eşit ise demek
=== ' Aynısı demek
<   ' küçükse demek
>     ' büyükse
<=    'küçük ve eşitse
>=     'büyük ve eşitse
////////////////////////////////
elseif sürekli tekrar eden sorgudur
////////////////////////////////////
else ise if koşulunu sağlamıyorsa else koşulunu söyler

*/
$say=rand(0,100);
if ($say<30) {
    echo "Kaldın.";
} elseif ($say<60) {
    echo "Geçtin.";
} else {
echo "Kayıtlı Değilsin";
}


echo "<br><hr>";

// Kısa if kullanımı $deger== 'koşul' ? 'Yazdırılacak ya da uygulanacak şey' : 'else de yazılacak veya yapılacak şey' 

echo $say=='800' ? 'Doğru' : 'Yanlış';



echo "<br>";



/* burdan aşşağıda ki örnek mesela datada armutu seçen bir adama
önüne daha önce seçtiği seçenek gelince direk datada ki seçili olan
seçeneğinin seçili olarak gelme örneğidir buda kısa if ile yapıluyıor

*/
$deger="Armut";
?>


<select>

<option <?php echo $deger=='Armut' ? 'selected=' : ''        ?>> Armut</option>
<option <?php echo $deger=='Elma' ? 'selected=' : ''        ?>>Elma</option>
<option>  </option>
</select>














































</body>
</html>