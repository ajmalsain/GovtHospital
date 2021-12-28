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
<?php
include('p1.php');
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="204" height="372">&nbsp;</td>
    <td width="743" valign="top"><div align="center">
      <p class="style1">Add Vaccination Details</p>
      <blockquote>
        <form name="form1" method="post" action="addvaccination2.php">
            <table width="290" border="1">
              <tr>
                <td width="132">Vaccination Name </td>
                <td width="142"><input name="t1" type="text" id="t1"></td>
              </tr>
              <tr>
                <td>Number of Dose </td>
                <td><input name="t2" type="text" id="t2"></td>
              </tr>
              <tr>
                <td>Precaution</td>
                <td><input name="t3" type="text" id="t3"></td>
              </tr>
              <tr>
                <td>Usage</td>
                <td><input name="t4" type="text" id="t4"></td>
              </tr>
              <tr>
                <td>Side-Effects </td>
                <td><input name="t5" type="text" id="t5"></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                  <input type="submit" name="Submit" value="Submit">
                </div></td>
              </tr>
            </table>
        </form>
      </blockquote>
      <p>&nbsp; </p>
    </div></td>
    <td width="385">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
