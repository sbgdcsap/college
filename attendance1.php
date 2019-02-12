<?php
global $arrstno;
global $arrstname;
global $arratt;
if(isset($_POST['submit'])) {
    show();
}

if($_POST['check'])
{
retrieve();
}
function retrieve()
{
$db=$_POST['ay'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$arrstno=array();
$arrstname=array();
$arratt=array();
$my=mysqli_connect("localhost","root","","$db");
$q="select * from attendance where branch='$branch' and year='$year'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
 ?>
<html><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><table  border=2>
  <tr>
   <td >Student Number</td>
    <td >Student Name </td>
    <td >Attended/Absent</td>
  </tr>
<?php 
$i=0;
 do
  {
 ?>
<tr>
  <td><?php echo $row[0];?></td>
  <td><?php echo $row[1];?></td>
  <td><input type="checkbox" name="att"></td>
  </tr>
<?php
$arrstno[$i]=$row[0];
$arrstname[$i]=$row[1];
if(isset($_POST['att']))
{
$arratt[$i]=1;  //  Displaying Selected Value
}
else
{
$arratt[$i]=0;
}
$i=$i+1;
}while($row = mysqli_fetch_array($rv));}
}
  
?>
<input type="hidden" name="db" value="<?php $_POST['ay'];?>">
<input type="hidden" name="branch" value="<?php echo $branch;?>">
<input type="hidden" name="year" value="<?php echo $year;?>">
<input type="hidden" name="arrstno1[]" value="<?php echo $arrstno;?>">
<input type="hidden" name="arrstname1[]" value="<?php echo $arrstname;?>">
<input type="hidden" name="arratt1[]" value="<?php echo $arratt;?>">
<input type="hidden" name="check" value="0">
<tr><td colspan='3'>
<button type="submit" name="submit" value="Submit">submit</button></tr>
</table></form></html>
<?php
function show()
{
$arrstno=array();
$arrstname=array();
$arratt=array();
$today = date("m");
$held=$today."held";
$atten=$today."atten";
$arrstno=$_POST['arrstno1'];
$arrstname=$_POST['arrstname1'];
$arratt=$_POST['arratt1'];
$db=$_POST['db'];
$my=mysqli_connect("localhost","root","","$db");
      print_r($_POST['arrstno1']); 
  
}
?>
