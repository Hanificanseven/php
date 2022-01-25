<?php 
$id = $_GET['id'];
setcookie($id, "", time()-3600);
header("location:cart.php");
