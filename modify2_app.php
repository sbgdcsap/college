<?php
$my=mysqli_connect("localhost","root","","sbg");
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$dn=$_POST['date'];
$mn=$_POST['month'];
$yn=$_POST['year'];
$em=$_POST['email'];
$mo=$_POST['mobile'];
$g=$_POST['gender'];
$add=$_POST['address'];
$cit=$_POST['City'];
$pin=$_POST['Pin_Code'];
$sta=$_POST['State'];
$con=$_POST['Country'];
$xb=$_POST['ClassX_Board'];
$xp=$_POST['ClassX_Percentage'];
$xy=$_POST['ClassX_YrOfPassing'];
$ib=$_POST['ClassXII_Board'];
$ip=$_POST['ClassXII_Percentage'];
$iy=$_POST['ClassXII_YrOfPassing'];
$gb=$_POST['Graduation_Board'];
$gp=$_POST['Graduation_Percentage'];
$gy=$_POST['Graduation_YrOfPassing'];
$cou=$_POST['Course'];
$rtf=$_POST['rtf'];
$mtf=$_POST['mtf'];
$fee=$_POST['fee'];




$ofn=$_POST['ofn'];
$oln=$_POST['oln'];
$old=$_POST['old'];
$olm=$_POST['olm'];
$oly=$_POST['oly'];
$ole=$_POST['ole'];
$olmb=$_POST['olmb'];
$olg=$_POST['olg'];
$oladd=$_POST['oladd'];
$olcity=$_POST['olcity'];
$olpin=$_POST['olpin'];
$olstate=$_POST['olstate'];
$olcountry=$_POST['olcountry'];
$olxb=$_POST['olxb'];
$olxp=$_POST['olxp'];
$olxy=$_POST['olxy'];
$olib=$_POST['olib'];
$olip=$_POST['olip'];
$oliy=$_POST['oliy'];
$olgb=$_POST['olgb'];
$olgp=$_POST['olgp'];
$olgy=$_POST['olgy'];
$olcou=$_POST['olcou'];
$olrtf=$_POST['olrtf'];
$olmtf=$_POST['olmtf'];
$olfee=$_POST['olfee'];

$q="delete from  $olcou where   fname='$ofn'";
$rv=mysqli_query($my,$q);
$q="insert into $cou values('$fn','$ln','$dn','$mn','$yn','$em','$mo','$g','$add','$cit','$pin','$sta','$con','$xb','$xp','$xy','$ib','$ip','$iy','$gb','$gp','$gy','$cou','$rtf','$mtf','$fee')";
$r=mysqli_query($my,$q);

   if($r)
    {
             echo "Updated Successfully <a href='modify_app.html' > CLICK HERE</A>";
      }
     else
     {
        echo "RECORD NOT FOUND <a href='modify_app.html' > CLICK HERE</A>";
       }

?>