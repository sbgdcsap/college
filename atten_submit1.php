<?php
$i=0;
$arratt=$_POST['att'];
$arrstno=$_POST['arrstno'];
$arrstname=$_POST['arrstname'];
if(!empty($_POST['att']))
{
$i=0;
foreach($arratt as $val)
{
echo $arrstno[$val]."<br>".$arrstname[$val]."<br>";
}
}
?>




$len=count($arratt);
$i=0;
while($i<$len)
{
$no=$arrstno[$i];
$q="select $atten from attendance where stno='$no'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
$natt=$row[1]+1;
 $q="update attendance set $atten=$natt where stno='$no'";
$rv=mysqli_query($my,$q);
$i=$i+1;
echo "updated succesfully";
 }
}