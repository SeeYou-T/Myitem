<?php

$goodsname = $_POST['goodsname'];
$goodsimg = $_POST['goodsimg'];
$goodsprice = $_POST['goodsprice'];
$times = $_POST['times'];
$goodsnum = $_POST['goodsnum'];

$link = mysqli_connect('localhost','root','root','date');
$sql = "INSERT INTO `cart` VALUES (null,'$times','$goodsname','$goodsimg','$goodsprice','$goodsnum')";

$res = mysqli_query($link,$sql);
var_dump($res);

mysqli_close($link);
if ($res){
    echo '加入购物车成功!';
}else{
    echo '加入购物车失败!';
}
?>