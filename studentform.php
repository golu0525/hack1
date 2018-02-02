<?php
require_once 'dbconfig.php';
session_start();


if(isset ($_POST['btnsubmitt']))
{
$firstname=$test -> real_escape_string($_POST['firstname']);
$lastname=$test -> real_escape_string($_POST['lastname']);
$day=$test -> real_escape_string($_POST['day']);
$month=$test -> real_escape_string($_POST['month']);
$year=$test -> real_escape_string($_POST['year']);
$dob=121212;
$email=$test -> real_escape_string($_POST['email']);
$mobile=$test -> real_escape_string($_POST['phone']);
$gender=$test -> real_escape_string($_POST['Gender']);
$stream=$test -> real_escape_string($_POST['stream']);
$address=$test -> real_escape_string($_POST['address']);
$city=$test -> real_escape_string($_POST['city']);
$pin=$test -> real_escape_string($_POST['pin']);
$state=$test -> real_escape_string($_POST['state']);
$country=$test -> real_escape_string($_POST['country']);
$board10=$test -> real_escape_string($_POST['board10']);
$percentage10=$test -> real_escape_string($_POST['percentage10']);
$yop10=$test -> real_escape_string($_POST['yop10']);
$board12=$test -> real_escape_string($_POST['board12']);
$percentage12=$test -> real_escape_string($_POST['percentage12']);
$yop12=$test -> real_escape_string($_POST['yop12']);
$boardgrad=$test -> real_escape_string($_POST['boardgrad']);
$percentagegrad=$test -> real_escape_string($_POST['percentagegrad']);
$yopgrad=$test -> real_escape_string($_POST['yopgrad']);


$quu="INSERT INTO studentdetail VALUES (null,'$firstname','$lastname','$dob','$email','$mobile','$gender','$stream','$address','$city','$pin','$state','$country','$board10','$percentage10','$yop10','$board12','$percentage12','$yop12','$boardgrad','$percentagegrad','$yopgrad')";
$expm1=$test -> query($quu);
if(!$expm1)
{
 echo "error";
#print_r($q1);
}
else{
  header('Location:thank.php');
}

}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>

      <link rel="stylesheet" href="css/style1.css">
</head>

<body>
<h3>STUDENT REGISTRATION FORM</h3>
<div>
  <h5><?php $changname=$_SESSION['user_email']; echo $changname; ?></h5>
</div>
<form class="" action="#" method="post">

<table align="center" cellpadding = "10">

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="firstname" value="" maxlength="30"/>

</td>
</tr>

<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lastname" value="" maxlength="30"/>

</td>
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>

<td>
<select name="day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>

<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>

<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>

<option value="31">31</option>
</select>

<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>

<select name="Birthday_Year" id="Birthday_Year">

<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>

<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>

<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="email" value="" maxlength="100" /></td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="phone" value="" maxlength="10" />

</td>
</tr>

<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
<tr>
<td>Stream<br /></td>
<td>

Computer Science & Engineering
<input type="radio" name="stream" value="cse">
Electronics Engineering
<input type="radio" name="stream" value="ec">
Civil Engineering
<input type="radio" name="stream" value="ce">
Electrical Engineering
<input type="radio" name="stream" value="ee">
Mechanical Engineeering
<input type="radio" name="stream" value="me">
Information Technology
<input type="radio" name="stream" value="it">

</td>
</tr>
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" value="" rows="4" cols="30"></textarea></td>
</tr>

<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" value="" maxlength="30" />

</td>
</tr>

<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pin" value="" maxlength="6" />

</td>
</tr>

<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" value="" maxlength="30" />

</td>
</tr>

<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="country" value="" /></td>
</tr>




<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>

<td>
<table>

<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>

<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" value="" name="board10" maxlength="30" /></td>
<td><input type="text" value="" name="percentage10" maxlength="30" /></td>
<td><input type="text" value="" name="yop10" maxlength="30" /></td>
</tr>

<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" value="" name="board12" maxlength="30" /></td>
<td><input type="text" value="" name="percentage12" maxlength="30" /></td>
<td><input type="text" value="" name="yop12" maxlength="30" /></td>
</tr>

<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" value="" name="boardgrad" maxlength="30" /></td>
<td><input type="text" value="" name="percentagegrad" maxlength="30" /></td>
<td><input type="text" value="" name="yopgrad" maxlength="30" /></td>
</tr>


<tr>
<td></td>
<td></td>

</tr>
</table>

</td>
</tr>

<!----- Course ---------------------------------------------------------->


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="btnsubmitt" value="Submit">
<input type="reset" name="btnreset" value="Reset">
</td>
</tr>
</table>

</form>

</body>
</html>
