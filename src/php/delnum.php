<?php
$goodsnum = $_POST['goodsnum'];
$times = $_POST['times'];
$link = mysqli_connect('localhost','root','root','date');
$sql = "UPDATE `cart` SET `goodsnum` = '$goodsnum' WHERE `times` = '$times'";
$res = mysqli_query($link,$sql);
mysqli_close($link);

print_r(json_encode($res));
?>