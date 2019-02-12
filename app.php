<?php
$my=mysqli_connect("localhost","root","","sbg");
$f=$_POST['fname'];
$l=$_POST['lname'];
$d=$_POST['bday'];
$m=$_POST['bmonth'];
$y=$_POST['byear'];
$e=$_POST['email'];
$n=$_POST['mobile'];
$g=$_POST['gender'];
$a=$_POST['address'];
$c=$_POST['City'];
$p=$_POST['Pin_Code'];
$s=$_POST['State'];
$co=$_POST['Country'];
$xb=$_POST['ClassX_Board'];
$xp=$_POST['ClassX_Percentage'];
$xy=$_POST['ClassX_YrOfPassing'];
$ib=$_POST['ClassXII_Board'];
$ip=$_POST['ClassXII_Percentage'];
$iy=$_POST['ClassXII_YrOfPassing'];
$gb=$_POST['Graduation_Board'];
$gp=$_POST['Graduation_Percentage'];
$gy=$_POST['Graduation_YrOfPassing'];
    $rv = $_POST['Course'];
$rtf=$_POST['rtf'];
$mtf=$_POST['mtf'];
$fee=$_POST['fee'];

  
$q="insert into $rv values('$f','$l','$d','$m','$y','$e','$n','$g','$a','$c','$p','$s','$co','$xb','$xp','$xy','$ib','$ip','$iy','$gb','$gp','$gy','$rv','$rtf','$mtf','$fee')";
$result=mysqli_query($my,$q);
header('location:app.html');



?>