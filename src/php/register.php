<?php
header('content-type:text/html;charset=utf-8;');

$uname = $_POST['username'];
$uword = $_POST['password'];
$link = mysqli_connect('localhost','root','root','date');
$sql = "INSERT INTO `users` VALUES (null,'$uname','$uword')";
$res = mysqli_query($link,$sql);
var_dump($res);
mysqli_close($link);
if ($res){
    echo '注册成功!';
}else{
    echo '注册失败!';
}
?>