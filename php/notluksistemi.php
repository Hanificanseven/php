<!DOCTYPE html>
<html>
<head>

</head>
<body>
    



<?php




$notlar= rand(1,5);

$ogrencino=("1");







if (@$_POST['ogrenci_no']==$ogrencino) {
    echo $notlar;
}else {
    echo "Kayıtlı Değilsiniz.";
}


?>



<form action=""method="POST">

        Öğrenci Numarası<input name="ogrenci_no" type="text"placeholder="Öğrenci Numaranızı Giriniz.">

<input type="submit" name="" id="">


</form>









</body>
</html>