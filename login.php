<?php
$my=mysqli_connect("localhost","root","","sbg");
$l=$_POST['uname'];
$p=$_POST['psw'];
$q="select * from login where login='$l' and password='$p'";
$result=mysqli_query($my,$q);
$rv=mysqli_fetch_array($result);
if($rv)
{
header('location:option.html');
}
else
{
header('location:login.html');
}
?>
