<?php
$my=mysqli_connect("localhost","root","","sbg");
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$dn=$_POST['date'];
$mn=$_POST['month'];
$yn=$_POST['year'];

$ofn=$_POST['ofn'];
$oln=$_POST['oln'];
$old=$_POST['old'];
$olm=$_POST['olm'];
$oly=$_POST['oly'];

$q="update applicationform set fname='$fn' where fname='$ofn'";
$rv=mysqli_query($my,$q);
$q="update applicationform set lname='$ln' where lname='$oln'";
$rv=mysqli_query($my,$q);
$q="update applicationform set day='$dn' where day='$old'";
$rv=mysqli_query($my,$q);
$q="update applicationform set month='$mn' where month='$olm'";
$rv=mysqli_query($my,$q);
$q="update applicationform set year='$yn' where year='$oly'";
$rv=mysqli_query($my,$q);

if($rv)
{
echo "Updated Successfully";
 }
else
{
echo "RECORD NOT FOUND <a href='res.html' > CLICK HERE</A>";
}

?>