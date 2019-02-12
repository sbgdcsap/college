<?php
$my=mysqli_connect("localhost","root","","sbg");
$f=$_POST['name'];
$c=$_POST['Course'];


$q="select * from $c where fname='$f'";
$rv=mysqli_query($my,$q);
$row = mysqli_fetch_array($rv);
$l=$row[1];
$d=$row[2];
$m=$row[3];
$y=$row[4];
$e=$row[5];
$mb=$row[6];
$g=$row[7];
$add=$row[8];
$city=$row[9];
$pin=$row[10];
$state=$row[11];
$country=$row[12];
$xb=$row[13];
$xp=$row[14];
$xy=$row[15];
$ib=$row[16];
$ip=$row[17];
$iy=$row[18];
$gb=$row[19];
$gp=$row[20];
$gy=$row[21];
$cou=$row[22];
$rtf=$row[23];
$mtf=$row[24];
$fee=$row[25];

if($row)
{
echo "<html>
<head>
<title>Student Registration Form</title>

</head>
 
<body>
 <form>
<center><h3>STUDENT REGISTRATION FORM</h3></center>


<table align='center' cellpadding ='10'>
 
<tr>
<td>STUDENT NAME</td>
<td><h4 style='border:solid red; color:green'>".$row[0]."</td>
</tr>
<tr>
<td>FATHER NAME</td>
<td><h4 style='border:solid red; color:green'>".$row[1]."</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
 <td><h4 style='border:solid red; color:green'>".$row[2]."</td>
<td><h4 style='border:solid red; color:green'>".$row[3]."</td>
<td><h4 style='border:solid red; color:green'>".$row[4]."</td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><h4 style='border:solid red; color:green'>".$row[5]."</td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td>
<h4 style='border:solid red; color:green'>".$row[6]."
</td>
</tr>
<tr>
<td>GENDER</td>
<td>
Male <input type='radio' name='gender'  value=".$row[7].">
Female <input type='radio' name='gender'  value=".$row[7].">
</td>
</tr>
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><h4 style='border:solid red; color:green'>".$row[8]."</td>
</tr>
<tr>
<td>CITY</td>
<td><h4 style='border:solid red; color:green'>".$row[9]."  

</td>
</tr>
<tr>
<td>PIN CODE</td>
<td><h4 style='border:solid red; color:green'>".$row[10]." 
</td>
</tr>
<tr>
<td>STATE</td>
<td><h4 style='border:solid red; color:green'>".$row[11]."
</td>
</tr>
<tr>
<td>COUNTRY</td>
<td><h4 style='border:solid red; color:green'>".$row[12]."  </td>
</tr>

<tr>
<td rowspan='4' >QUALIFICATION 
<td ><b>Sl.No.</b></td>
<td ><b>Examination</b></td>
<td ><b>Board</b></td>
<td ><b>Percentage</b></td>
<td ><b>Year of Passing</b></td>
</tr>
<tr>
<td>1</td>
<td>Class X</td>
<td><h4 style='border:solid red; color:green'>".$row[13]."</td>
<td><h4 style='border:solid red; color:green'>".$row[14]."</td>
<td><h4 style='border:solid red; color:green'>".$row[15]."</td>
</tr>
<tr>
<td>2</td>
<td>Class XII</td>
<td><h4 style='border:solid red; color:green'>".$row[16]."</td>
<td><h4 style='border:solid red; color:green'>".$row[17]."</td>
<td><h4 style='border:solid red; color:green'>".$row[18]."</td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><h4 style='border:solid red; color:green'>".$row[19]."</td>
<td><h4 style='border:solid red; color:green'>".$row[20]."</td>
<td><h4 style='border:solid red; color:green'>".$row[21]."</td>
</tr>
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
B.Com
<input type='radio' name='Course' value='bcom'>
<td>
B.Sc
<input type='radio' name='Course' value='bsc'>
<td>
B.Z.C
<input type='radio' name='Course' value='bzc'>
<td>
M.B.C
<input type='radio' name='Course' value='mbc'>

</tr>
<tr>
<td>FEE<br />DETAILS</td>
<td>

RTF
<h4 style='border:solid red; color:green'>".$row[23]."
<td>
MTF
<h4 style='border:solid red; color:green'>".$row[24]."
<td>
FEE
<h4 style='border:solid red; color:green'>".$row[25]."

</td>
</tr>
<tr>
<td> <button onclick='myFunction()'><h4 style='border:solid red; color:green'>PRINT</button></tr>

<script>
function myFunction() {
  window.print();
}
</script>

</table>
</form></body></html>";

}
?>