<?php
$link = mysqli_connect('localhost','root','root','date');
$sql = "SELECT * FROM `cart`";
$res = mysqli_query($link,$sql);
$date = mysqli_fetch_all($res,MYSQLI_ASSOC);
mysqli_close($link);

print_r(json_encode($date));
?>