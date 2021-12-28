<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<script>
function abc()
{
if(document.form1.t1.value==""||document.form1.t2.value==""||document.form1.t3.value==""||document.form1.t4.value==""||document.form1.t5.value==""||document.form1.rb.value==""||document.form1.t6.value==""||document.form1.t7.value==""||document.form1.t8.value==""||document.form1.t9.value=="")
{
alert("Please Enter all fields");
return(false);
}


}
</script>

<body>
<?php
include("p1.php");
?>

<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="216" height="48">&nbsp;</td>
    <td width="530" rowspan="3" valign="top"><div align="center">
        <p class="style1">Staff Registration (Non Doctors) </p>
        <form name="form1" onSubmit="return abc()" method="post" action="staffreg2.php">
          <table width="278" border="0">
            <tr>
              <td width="118">Name</td>
              <td width="144"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
            </tr>
            <tr>
              <td>House Name </td>
              <td><input name="t2" type="text" id="t2"></td>
            </tr>
            <tr>
              <td>Place</td>
              <td><input name="t3" type="text" id="t3" onKeyPress="return alphabets(event)"></td>
            </tr>
            <tr>
              <td>Pin</td>
              <td><input name="t4" type="text" id="t4" onKeyPress="return numbers(event)"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t5" type="text" id="t5" onKeyPress="return numbers(event)"></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>
                <div align="left">
                  <input name="rb" type="radio" value="M">
                   Male 
                  <input name="rb" type="radio" value="F">
                   Female
                </div></td>
            </tr>
            <tr>
              <td>HospID</td>
              <td><div align="right">
			    <select name="hospid">
			      
			      <?php
			  include("connection.php");
			  $s=mysql_query("select * from hospitals");
			  while($row=mysql_fetch_array($s))
			  {
			   echo "<option> $row[0] </option>";
			  }
  
			?>
                </select>
              </div></td>
            </tr>
            <tr>
              <td>Staff Type </td>
              <td><div align="right">
                <select name="Stype">
                  <option>Office Staff</option>
                  <option>Lab Staff</option>
                  <option>Nurse</option>
                  <option>Pharmecist</option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td>Designation</td>
              <td><input name="t9" type="text" id="t9"></td>
            </tr>
            <tr>
              <td>Qualification</td>
              <td><input name="t6" type="text" id="t6"></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">Experience</div></td>
            </tr>
            <tr>
              <td colspan="2"><textarea name="t7" cols="40" id="t7"></textarea></td>
            </tr>
            <tr>
              <td>Date of Birth </td>
              <td><div align="right">
                <input name="t8" type="date" id="t8">
              </div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
              </div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp; </p>
    </div></td>
    <td width="14">&nbsp;</td>
    <td width="443">&nbsp;</td>
    <td width="129">&nbsp;</td>
  </tr>
  <tr>
    <td height="324">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">
      <p>Hospital Details</p>
      <p>
	  <?php
	  $s=mysql_query("select * from hospitals");
	  echo "<table border='1'><tr><th> HospID </th><th> Hospital Name</th><th> Place</th><th>District</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td></tr>";
	  }
	  echo "</table>";
	  
	  ?>
	  
	  &nbsp; </p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="128">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
