<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<script language="javascript">
function abc()
{

if(document.form1.t1.value==""|| document.form1.t2.value==""|| document.form1.t3.value=="")
{
  alert ("Enter all password");
  return(false);
}
  if(document.form1.t2.value!=document.form1.t3.value)
 {
 alert("New password and Retype password are not same");
 return(false);
 } 
}
</script>
<?php
include("p3.php");
?>

<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="233" height="18"></td>
    <td width="820"></td>
    <td width="279"></td>
  </tr>
  <tr>
    <td height="321"></td>
    <td valign="top"><div align="center">
      <p>Change Password 
  </p>
      <form name="form1" method="post" onSubmit="return abc()" action="staffpaschange2.php">
        <table width="328" border="0">
          <tr>
            <td width="170">Existing Password </td>
            <td width="142"><input name="t1" type="password" id="t1" ></td>
          </tr>
          <tr>
            <td>New Password </td>
            <td><input name="t2" type="password" id="t2" >              </td>
          </tr>
          <tr>
            <td>Retype Password </td>
            <td><input name="t3" type="password" id="t3" ></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
            </div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp;    </p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="50"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>

</body>
</html>
