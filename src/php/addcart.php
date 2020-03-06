<?php

$goodsname = $_POST['goodsname'];
$goodsimg = $_POST['goodsimg'];
$goodsprice = $_POST['goodsprice'];
$times = $_POST['times'];

$link = mysqli_connect('localhost','root','root','data');
$sql = "INSERT INTO `cart` VALUE (null,`$times`,`$goodsname`,`$goodsimg`,`$goodsprice`)";

$res = mysqli_query($link,$sql);
// var_dump($res)

mysqli_colose($link)
if ($res){
    echo '加入购物车成功!';
}else{
    echo '加入购物车失败!';
}
?>