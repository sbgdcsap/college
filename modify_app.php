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
 <form action='modify2_app.php' method='post'>
<center><h3>STUDENT REGISTRATION FORM</h3></center>


<table align='center' cellpadding ='10'>
 
<tr>
<td>STUDENT NAME</td>
<td><input type='text' name='fname' maxlength='30' value=".$row[0]."></td>
</tr>
<tr>
<td>FATHER NAME</td>
<td><input type='text' name='lname' maxlength='30' value=".$row[1]."></td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
 <td><input type='text' name='date'  value=".$row[2]."></td>
<td><input type='text' name='month'  value=".$row[3]."></td>
<td><input type='text' name='year'  value=".$row[4]."></td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type='text' name='email' maxlength='100' value=".$row[5]."></td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type='text' name='mobile' maxlength='10' value=".$row[6]." >
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
<td><textarea name='address' value=".$row[8]."></textarea></td>
</tr>
<tr>
<td>CITY</td>
<td><input type='text' name='City' maxlength='30' value=".$row[9]."  >

</td>
</tr>
<tr>
<td>PIN CODE</td>
<td><input type='text' name='Pin_Code' maxlength='6' value=".$row[10]." >
</td>
</tr>
<tr>
<td>STATE</td>
<td><input type='text' name='State' maxlength='30' value=".$row[11].">
</td>
</tr>
<tr>
<td>COUNTRY</td>
<td><input type='text' name='Country'  value=".$row[12]."  ></td>
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
<td><input type='text' name='ClassX_Board' maxlength='30' value=".$row[13]."></td>
<td><input type='text' name='ClassX_Percentage' maxlength='30' value=".$row[14]."></td>
<td><input type='text' name='ClassX_YrOfPassing' maxlength='30' value=".$row[15]."></td>
</tr>
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type='text' name='ClassXII_Board' maxlength='30' value=".$row[16]." ></td>
<td><input type='text' name='ClassXII_Percentage' maxlength='30' value=".$row[17]."></td>
<td><input type='text' name='ClassXII_YrOfPassing' maxlength='30' value=".$row[18]."></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type='text' name='Graduation_Board' maxlength='30' value=".$row[19]."></td>
<td><input type='text' name='Graduation_Percentage' maxlength='30' value=".$row[20]."></td>
<td><input type='text' name='Graduation_YrOfPassing' maxlength='30' value=".$row[21]."></td>
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
<input type='text' name='rtf' value=".$row[23]." >
<td>
MTF
<input type='text' name='mtf' value=".$row[24].">
<td>
FEE
<input type='text' name='fee' value=".$row[25].">

</td>
</tr>
 
<tr><td><button type='submit' value='UPDATE'>UPDATE</button></tr>
<tr><td><input type='hidden' name='ofn' value=".$f."></tr>
<tr><td><input type='hidden' name='oln' value=".$l."></tr>
<tr><td><input type='hidden' name='old' value=".$d."></tr>
<tr><td><input type='hidden' name='olm' value=".$m."></tr>
<tr><td><input type='hidden' name='oly' value=".$y."></tr>
<tr><td><input type='hidden' name='ole' value=".$e."></tr>
<tr><td><input type='hidden' name='olmb' value=".$mb."></tr>
<tr><td><input type='hidden' name='olg' value=".$g."></tr>
<tr><td><input type='hidden' name='oladd' value=".$add."></tr>
<tr><td><input type='hidden' name='olcity' value=".$city."></tr>
<tr><td><input type='hidden' name='olpin' value=".$pin."></tr>
<tr><td><input type='hidden' name='olstate' value=".$state."></tr>
<tr><td><input type='hidden' name='olcountry' value=".$country."></tr>
<tr><td><input type='hidden' name='olxb' value=".$xb."></tr>
<tr><td><input type='hidden' name='olxp' value=".$xp."></tr>
<tr><td><input type='hidden' name='olxy' value=".$xy."></tr>
<tr><td><input type='hidden' name='olib' value=".$ib."></tr>
<tr><td><input type='hidden' name='olip' value=".$ip."></tr>
<tr><td><input type='hidden' name='oliy' value=".$iy."></tr>
<tr><td><input type='hidden' name='olgb' value=".$gb."></tr>
<tr><td><input type='hidden' name='olgp' value=".$gp."></tr>
<tr><td><input type='hidden' name='olgy' value=".$gy."></tr>
<tr><td><input type='hidden' name='olcou' value=".$cou."></tr>
<tr><td><input type='hidden' name='olrtf' value=".$rtf."></tr>
<tr><td><input type='hidden' name='olmtf' value=".$mtf."></tr>
<tr><td><input type='hidden' name='olfee' value=".$fee."></tr>
</table>
</form></body></html>";
}
?>