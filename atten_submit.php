<?php
$db=$_POST['db'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$arrstno=$_POST['arrstno'];
$arrstname=$_POST['arrstname'];
if(!empty($_POST['att']))
{
$arratt=$_POST['att'];
}
$oheld;
$my=mysqli_connect("localhost","root","","$db");
$today = date("m");
$held=$today."held";
$atten=$today."atten";
$len=count($arrstno);
if($len===0)
{
echo "No Students Found For Your Selected Acedemic Data";
echo "<a href='attendance.html'>Click Here To go to Attendance Posting Form</a>";
}
$i=0;
while($i<$len)
{
$no=$arrstno[$i];
$q="select $held from attendance where stno='$no'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
$oheld=$row[0];
$nheld=$oheld+1;
$q="update attendance set $held=$nheld where stno='$no'";
$rv=mysqli_query($my,$q);
$i=$i+1;
}
if(!empty($_POST['att']))
{
foreach($arratt as $val)
{
$no=$arrstno[$val];
$q="select $atten from attendance where stno='$no'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
$natt=$row[0]+1;
 $q="update attendance set $atten=$natt where stno='$no'";
$rv=mysqli_query($my,$q);
 }
}
echo "You Updated".count($arratt)." Records Succesfully.";
}
if(empty($_POST['att']))
{
echo "No Student Attended For Class";
}
echo "<a href='attendance.html'>Click Here To go to Attendance Posting Form</a>";
?>