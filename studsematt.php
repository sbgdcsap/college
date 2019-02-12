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
$my=mysqli_connect("localhost","root","","$db");
$q="select stno,stname,branch,year from attendance where branch='$branch' and year='$year' and stno='$htnum'";
$rv=mysqli_query($my,$q);
if(is_bool($rv))
{
echo "No Records Found With Your Given Criteria";
echo "<a href='branchsematt.html'>Go Back</a>";
}
else
{
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<form action='branchsematt.php' method='post'><table  border=2>
  <tr>
   <td >Student Number</td>
    <td >Student Name </td>
    <td >Branch</td>
    <td>Year</td>
    <td>Sem</td>
    <td>Classes Held</td>
    <td>Classes Attended</td>
  </tr>";
 if($sem==="1")
{
$q1="select 06atten,06held,07atten,07held,08atten,08held,09atten,09held,10atten,10held,11atten,11held from attendance where stno='$row[0]'";
$rv1=mysqli_query($my,$q1);
$row1 = mysqli_fetch_array($rv1);
$totatt=$row1[0]+$row1[2]+$row1[4]+$row1[6]+$row1[8]+$row1[10];
$totheld=$row1[1]+$row1[3]+$row1[5]+$row1[7]+$row1[9]+$row1[11];
}
if($sem==="2")
{
$q1="select 12atten,12held,01atten,01held,02atten,02held,03atten,03held,04atten,04held,05atten,05held from attendance where stno='$row[0]'";
$rv1=mysqli_query($my,$q1);
$row1 = mysqli_fetch_array($rv1);
$totatt=$row1[0]+$row1[2]+$row1[4]+$row1[6]+$row1[8]+$row1[10];
$totheld=$row1[1]+$row1[3]+$row1[5]+$row1[7]+$row1[9]+$row1[11];
}
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$sem."</td>";
  echo "<td>".$totheld."</td>";
  echo "<td>".$totatt."</td>";
  echo "</tr>";
echo "<tr><center><td colspan='3'><input type=button value='Print me!' onClick='javascript:window.print()'></center>";
echo "<a href='attendance_view_options.html'>Click Here To go to Attendance Posting Form</a>";
echo "</table></form>";
}
}
?>

