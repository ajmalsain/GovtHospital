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

<body>
<?php  include("p2.php");?>
<div align="center"></div>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="262" height="78">&nbsp;</td>
    <td width="712" valign="top"><div align="center" class="style1">Online Appoinment </div></td>
    <td width="358">&nbsp;</td>
  </tr>
  <tr>
    <td height="81">&nbsp;</td>
    <td valign="top"><div align="center">
      <form name="form1" method="post" action="onappoinment2.php">
        <table width="601" border="0">
          <tr>
            <td width="96">Select District </td>
            <td width="140"><div align="right">
              <select name="c1">
			  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
		            <option value="Kollam">Kollam</option>
		            <option value="Alappuzha">Alappuzha</option>
		            <option value="Pathanamthitta">Pathanamthitta</option>
		            <option value="Kottayam">Kottayam</option>
		            <option value="Idukki">Idukki</option>
		            <option value="Ernakulam">Ernakulam</option>
		            <option value="Thrissur">Thrissur</option>
		            <option value="Palakkad">Palakkad</option>
		            <option value="Malappuram">Malappuram</option>
		            <option value="Kozhikode">Kozhikode</option>
		            <option value="Wayanad">Wayanad</option>
		            <option value="Kannur">Kannur</option>
		            <option value="Kasaragod">Kasaragod</option>
              </select>
            </div></td>
            <td width="133">Select Specialization </td>
            <td width="126"><div align="right">
			 <select name="c2" id="c2">
				<option value="General Medicine">General Medicine</option>
				<option value="Cardiology">Cardiology</option>
			    <option value="Dermatology">Dermatology</option>
			    <option value="ENT">ENT</option>
			    <option value="General Surgery">General Surgery</option>
				<option value="Pediatrics">Pediatrics</option>
                </select>
            </div></td>
            <td width="72"><div align="center">
              <input type="submit" name="Submit" value="view">
            </div></td>
          </tr>
        </table>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="230">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
