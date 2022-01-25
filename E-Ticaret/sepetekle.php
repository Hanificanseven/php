<?php
$id = $_GET["id"];
setcookie($id . "-" . rand(0, 10000), $id, time() + 3600);
header("location:products.php");
