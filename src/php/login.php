<?php
header('content-type:text/html;charset=utf-8;');
$uname = $_POST['username'];
$uword = $_POST['password'];
$link = mysqli_connect('localhost','root','root','date');
$sql = "SELECT * FROM `users` WHERE `username`='$uname' AND `password`= '$uword'";
$res = mysqli_query($link,$sql);
$date = mysqli_fetch_assoc($res);
var_dump($date);
mysqli_close($link);
if ($date){
    header('location:./gouwuche.html');
}else{
    echo '用户名或密码错误!';
}
?>