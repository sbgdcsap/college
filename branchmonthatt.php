<?php
$arrstno=array();
$arrstname=array();
$arratt=array();
if($_POST['check'])
{
$db=$_POST['ay'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$month=$_POST['month'];
$my=mysqli_connect("localhost","root","","$db");
$held=$month."held";
$att=$month."atten";
$q="select stno,stname,branch,year,$held,$att from attendance where branch='$branch' and year='$year'";
$rv=mysqli_query($my,$q);

if(is_bool($rv))
{
echo "No Records Found With Your Given Criteria";
echo "<a href='branchmonthatt.html'>Go Back</a>";
}
else
{
$row = mysqli_fetch_array($rv);
if(!$row)
{
echo "No Records Found";
echo "<a href='attendance_view_options.html'>Click Here To go to Attendance Actions Form</a>";
}

if($row)
{
 echo "<form action='branchmonthatt.php' method='post'><table  border=2>
  <tr>
   <td >Student Number</td>
    <td >Student Name </td>
    <td >Branch</td>
    <td>Year</td>
    <td>Month</td>
    <td>Classes Held</td>
    <td>Classes Attended</td>
  </tr>";
 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$month."</td>";
  echo "<td>".$row[4]."</td>";
  echo "<td>".$row[5]."</td>";
  echo "</tr>";
}while($row = mysqli_fetch_array($rv));

echo "<tr><center><td colspan='3'><button type='submit' name='submit'>SAVE</button></center>
</table></form>";
}
}
}
?>

