<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: 24px}
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
<table width="1318" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="391" height="17"></td>
    <td width="488"></td>
    <td width="439"></td>
  </tr>
  <tr>
    <td height="275"></td>
    <td valign="top"><div align="center"><span class="style2">Staff Login </span>
      <form name="form1" method="post" onSubmit="return abc()" action="stafflogin2.php">
        <table width="200" border="0">
          <tr>
            <td>User ID </td>
            <td><input name="t1" type="text" id="t1"></td>
          </tr>
          <tr>
            <td>password</td>
            <td><input name="t2" type="password" id="t2"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="Submit" value="Sign In">
            </div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><a href="forgotpass1.php">Forget Password </a>
            </div></td>
            </tr>
        </table>
      </form> 
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="130"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>

</body>
</html>
