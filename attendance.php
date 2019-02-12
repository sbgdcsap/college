<?php
$arrstno=array();
$arrstname=array();
$arratt=array();
if($_POST['check'])
{
$db=$_POST['ay'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$my=mysqli_connect("localhost","root","","$db");
$q="select * from attendance where branch='$branch' and year='$year' and sem='$sem'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if(!$row)
{
echo "No Records Found";
echo "<a href='attendance.html'>Click Here To go to Attendance Posting Form</a>";
}

if($row)
{
 echo "<form action='atten_submit.php' method='POST'><table  border=2>
<tr>
   <td ><select name="hour">
    <option value="1">I Hour</td>
    <td>Branch</td>
    <td>Year</td>
    <td>Sem</td>
    <td >Attended/Absent</td>
  </tr> 
 <tr>
   <td >Student Number</td>
    <td >Student Name </td>
    <td>Branch</td>
    <td>Year</td>
    <td>Sem</td>
    <td >Attended/Absent</td>
  </tr>";
$i=0;
 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";

  echo "<td><input type='checkbox' name='att[]' value='".$i."'></td>";
  echo "</tr>";
$arrstno[$i]=$row[0];
$arrstname[$i]=$row[1];
$i=$i+1;
}while($row = mysqli_fetch_array($rv));



foreach($arrstno as $val)
{
echo "<input type='hidden' name='arrstno[]' value='".$val."'>";
}
foreach($arrstname as $val)
{
echo "<input type='hidden' name='arrstname[]' value='".$val."'>";
}
foreach($_POST as $val)
{
echo "<input type='hidden' name='arrstname[]' value='".$val."'>";
}
echo "<input type='hidden' name='db' value='".$_POST['ay']."'>";
echo "<input type='hidden' name='branch' value='".$branch."'>";
echo "<input type='hidden' name='year' value='".$year."'>";
echo "<input type='hidden' name='check' value='0'>";

echo "<tr><center><td colspan='3'><button type='submit' name='submit'>SAVE</button></center>
</table></form>";
}
}
?>

