<?php
$arrstno=array();
$arrstname=array();
$arratt=array();
$totheld;
$totatt;
$db=$_POST['ay'];
$branch=$_POST['branch'];
$htnum=$_POST['htnum'];
$sem=$_POST['sem'];
$year=$_POST['year'];
$month=$_POST['month'];
$reqmonatt="0".$month."atten";
$reqmonheld="0".$month."held";
$my=mysqli_connect("localhost","root","","$db");
$q="select stno,stname,branch,year,sem from attendance where branch='$branch' and year='$year' and stno='$htnum'";
$rv=mysqli_query($my,$q);
if(is_bool($rv))
{
echo "No Records Found With Your Given Criteria";
echo "<a href='studmonthatt.html'>Go Back</a>";
}
else
{
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<form action='studmonthatt.php' method='post'><table  border=2>
  <tr>
   <td >Student Number</td>
    <td >Student Name </td>
    <td >Branch</td>
    <td>Year</td>
    <td>Sem</td>
    <td>Month</td>
    <td>Classes Held</td>
    <td>Classes Attended</td>
  </tr>";
$q1="select $reqmonheld,$reqmonatt from attendance where stno='$row[0]'";
$rv1=mysqli_query($my,$q1);
$row1 = mysqli_fetch_array($rv1);
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
  echo "<td>".$month."</td>";
  echo "<td>".$row1[0]."</td>";
  echo "<td>".$row1[1]."</td>";
  echo "</tr>";
echo "<tr><center><td colspan='3'><input type=button value='Print me!' onClick='javascript:window.print()'></center>";
echo "<a href='attendance_view_options.html'>Click Here To go to Attendance Posting Form</a>";
echo "</table></form>";
}
}
?>

