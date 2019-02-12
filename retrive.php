<?php
$my=mysqli_connect("localhost","root","","sbg");
$f=$_POST['name'];
$c=$_POST['Course'];
if($c==="B.Com")
{
$q="select * from bcom where fname='$f'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<table  border=2>
  <tr>
    <td >Name </td>
    <td >FathernameName</td>
    <td >Day</td>
<td >MONTH</td>
<td >YEAR</td>
<td >EMAIL</td>
<td >PHNO</td>
<td >GENDER</td>
<td >ADDRESS</td>
<td >CITY</td>
<td >PIN</td>
<td >STATE</td>
<td >COUNTRY</td>
<td >10TH BOARD</td>
<td >10TH PERCENTAGE</td>
<td >10TH YEAR</td>
<td >INTERBOARD </td>
<td >INTERPERCENTAGE </td>
<td >INTER YEAR</td>
<td >DEGREE PERCENTAGE</td>
<td >DEGREE BOARD</td>
<td >DEGREE YEAR</td>
<td >COURSE</td>
<td >RTF</td>
<td >MTF</td>
<td >FEE</td>

  </tr>";

 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[9]."</td>";
 echo "<td>".$row[10]."</td>";
 echo "<td>".$row[11]."</td>";
 echo "<td>".$row[12]."</td>";
 echo "<td>".$row[13]."</td>";
 echo "<td>".$row[14]."</td>";
 echo "<td>".$row[15]."</td>";
 echo "<td>".$row[16]."</td>";
 echo "<td>".$row[17]."</td>";
 echo "<td>".$row[18]."</td>";
 echo "<td>".$row[19]."</td>";
 echo "<td>".$row[20]."</td>";
 echo "<td>".$row[21]."</td>";
 echo "<td>".$row[22]."</td>";
 echo "<td>".$row[23]."</td>";
 echo "<td>".$row[24]."</td>";
 echo "<td>".$row[25]."</td>";
  echo "</tr>";}while($row = mysqli_fetch_array($rv));
  echo "</table>";
 }
else
{
echo "RECORD NOT FOUND <a href='res.html' > CLICK HERE</A>";
}
}
else if($c==="B.Sc")
{
$q="select * from bsc where fname='$f'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<table  border=2>
  <tr>
    <td >Name </td>
    <td >FathernameName</td>
    <td >Day</td>
<td >MONTH</td>
<td >YEAR</td>
<td >EMAIL</td>
<td >PHNO</td>
<td >GENDER</td>
<td >ADDRESS</td>
<td >CITY</td>
<td >PIN</td>
<td >STATE</td>
<td >COUNTRY</td>
<td >10TH BOARD</td>
<td >10TH PERCENTAGE</td>
<td >10TH YEAR</td>
<td >INTERBOARD </td>
<td >INTERPERCENTAGE </td>
<td >INTER YEAR</td>
<td >DEGREE PERCENTAGE</td>
<td >DEGREE BOARD</td>
<td >DEGREE YEAR</td>
<td >COURSE</td>
<td >RTF</td>
<td >MTF</td>
<td >FEE</td>

  </tr>";

 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[9]."</td>";
 echo "<td>".$row[10]."</td>";
 echo "<td>".$row[11]."</td>";
 echo "<td>".$row[12]."</td>";
 echo "<td>".$row[13]."</td>";
 echo "<td>".$row[14]."</td>";
 echo "<td>".$row[15]."</td>";
 echo "<td>".$row[16]."</td>";
 echo "<td>".$row[17]."</td>";
 echo "<td>".$row[18]."</td>";
 echo "<td>".$row[19]."</td>";
 echo "<td>".$row[20]."</td>";
 echo "<td>".$row[21]."</td>";
 echo "<td>".$row[22]."</td>";
 echo "<td>".$row[23]."</td>";
 echo "<td>".$row[24]."</td>";
 echo "<td>".$row[25]."</td>";
  echo "</tr>";}while($row = mysqli_fetch_array($rv));
  echo "</table>";
 }
else
{
echo "RECORD NOT FOUND <a href='res.html' > CLICK HERE</A>";
}
}
if($c==="B.Z.C")
{
$q="select * from bzc where fname='$f'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<table  border=2>
  <tr>
    <td >Name </td>
    <td >FathernameName</td>
    <td >Day</td>
<td >MONTH</td>
<td >YEAR</td>
<td >EMAIL</td>
<td >PHNO</td>
<td >GENDER</td>
<td >ADDRESS</td>
<td >CITY</td>
<td >PIN</td>
<td >STATE</td>
<td >COUNTRY</td>
<td >10TH BOARD</td>
<td >10TH PERCENTAGE</td>
<td >10TH YEAR</td>
<td >INTERBOARD </td>
<td >INTERPERCENTAGE </td>
<td >INTER YEAR</td>
<td >DEGREE PERCENTAGE</td>
<td >DEGREE BOARD</td>
<td >DEGREE YEAR</td>
<td >COURSE</td>
<td >RTF</td>
<td >MTF</td>
<td >FEE</td>

  </tr>";

 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[9]."</td>";
 echo "<td>".$row[10]."</td>";
 echo "<td>".$row[11]."</td>";
 echo "<td>".$row[12]."</td>";
 echo "<td>".$row[13]."</td>";
 echo "<td>".$row[14]."</td>";
 echo "<td>".$row[15]."</td>";
 echo "<td>".$row[16]."</td>";
 echo "<td>".$row[17]."</td>";
 echo "<td>".$row[18]."</td>";
 echo "<td>".$row[19]."</td>";
 echo "<td>".$row[20]."</td>";
 echo "<td>".$row[21]."</td>";
 echo "<td>".$row[22]."</td>";
 echo "<td>".$row[23]."</td>";
 echo "<td>".$row[24]."</td>";
 echo "<td>".$row[25]."</td>";
  echo "</tr>";}while($row = mysqli_fetch_array($rv));
  echo "</table>";
 }
else
{
echo "RECORD NOT FOUND <a href='res.html' > CLICK HERE</A>";
}
}
if($c==="M.B.C")
{
$q="select * from mbc where fname='$f'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
if($row)
{
 echo "<table  border=2>
  <tr>
    <td >Name </td>
    <td >FathernameName</td>
    <td >Day</td>
<td >MONTH</td>
<td >YEAR</td>
<td >EMAIL</td>
<td >PHNO</td>
<td >GENDER</td>
<td >ADDRESS</td>
<td >CITY</td>
<td >PIN</td>
<td >STATE</td>
<td >COUNTRY</td>
<td >10TH BOARD</td>
<td >10TH PERCENTAGE</td>
<td >10TH YEAR</td>
<td >INTERBOARD </td>
<td >INTERPERCENTAGE </td>
<td >INTER YEAR</td>
<td >DEGREE PERCENTAGE</td>
<td >DEGREE BOARD</td>
<td >DEGREE YEAR</td>
<td >COURSE</td>
<td >RTF</td>
<td >MTF</td>
<td >FEE</td>

  </tr>";

 do
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[9]."</td>";
 echo "<td>".$row[10]."</td>";
 echo "<td>".$row[11]."</td>";
 echo "<td>".$row[12]."</td>";
 echo "<td>".$row[13]."</td>";
 echo "<td>".$row[14]."</td>";
 echo "<td>".$row[15]."</td>";
 echo "<td>".$row[16]."</td>";
 echo "<td>".$row[17]."</td>";
 echo "<td>".$row[18]."</td>";
 echo "<td>".$row[19]."</td>";
 echo "<td>".$row[20]."</td>";
 echo "<td>".$row[21]."</td>";
 echo "<td>".$row[22]."</td>";
 echo "<td>".$row[23]."</td>";
 echo "<td>".$row[24]."</td>";
 echo "<td>".$row[25]."</td>";
  echo "</tr>";}while($row = mysqli_fetch_array($rv));
  echo "</table>";
 }
else
{
echo "RECORD NOT FOUND <a href='res.html' > CLICK HERE</A>";
}
}
?>