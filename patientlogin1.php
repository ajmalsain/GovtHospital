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
<script language="javascript">
function abc()
{

if(document.form1.t1.value==""|| document.form1.t2.value=="")
{
  alert ("Enter User ID and Password");
  return(false);
}
  
}
</script>
<body>
<?php
include("p301.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="320" height="13"></td>
    <td width="539"></td>
    <td width="473"></td>
  </tr>
  <tr>
    <td height="356"></td>
    <td valign="top"><div align="center">
      <p class="style1">Patient Login</p>
      <form name="form1" onSubmit="return abc()" method="post" action="patientlogin2.php">
        <table width="262" border="0">
          <tr>
            <td width="102">User ID</td>
            <td width="144"><input name="t1" type="text" id="t1"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="t2" type="password" id="t2"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Sign In">
            </div></td>
            </tr>
          <tr>
            <td colspan="2"><div align="center"><a href="#">Forget Password</a></div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp; </p>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="20"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
