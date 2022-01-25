<?php
include 'ayar.php';


if(isset($_POST['register'])){
$kullanici_psw=htmlspecialchars(trim($_POST['psw']));
$kullanici_psw2=htmlspecialchars(trim($_POST['psw2']));
$email=($_POST['email']);
$firstname=($_POST['firstname']);
$lastname=($_POST['lastname']);


if ($kullanici_psw!=$kullanici_psw2){

    header("Location:index.php?durum=farklisifre");


}

else if (strlen($kullanici_psw)>16){

    header("Location:index.php?durum=eksiksifre");
}else{

    $kullanici_kaydet=$db->prepare("insert into user(firstName,lastName,email,password) values('{$firstname}','{$lastname}','{$email}','{$kullanici_psw}')");

    $insert=$kullanici_kaydet->execute();
    
    if ($insert) {
    
    header("Location:index.php?#Giriş");
    
    }
}

}
if (isset($_POST['kullanicigiris'])) {

  $email=($_POST['email']);
  $kullanici_psw=($_POST['psw']);
$kullanicisor=$db->prepare("select * from user where email='{$email}' and password='{$kullanici_psw}'" );

$kullanicisor->execute();

$say=$kullanicisor->rowCount();

if ($say==1) {

$_SESSION['email']=$email;

header("location:index.php?login=true");

}else{
    header("location:index.php?login=false");

}

}






















?>