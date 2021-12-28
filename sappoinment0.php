<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<script>
function abc()
{
if(document.form1.t0.value=="")
{
alert("Please Enter the Patient ID");
return(false);

}

}

</script>
<body>
<?php
include("p3.php");
?>
<table width="1400" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="173" height="140">&nbsp;</td>
    <td width="891" valign="top"><div align="center">
      <p class="style1">Online Appoinment</p>
      <form name="form1" onSubmit="return abc()" method="post" action="sappoinment00.php">
        <table width="424" border="0">
          <tr>
            <td width="148">Enter Patient ID </td>
            <td width="144"><input name="t0" type="text" id="t0"></td>
            <td width="110"><div align="center">
              <input type="submit" name="Submit" value="view">
            </div></td>
          </tr>
        </table>
      </form>
      <p class="style1">&nbsp;</p>
    </div></td>
    <td width="336">&nbsp;</td>
  </tr>
  <tr>
    <td height="295">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
