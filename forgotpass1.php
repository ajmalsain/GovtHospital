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
  if(document.form1.t6.value!=document.form1.t7.value)
 {
 alert("New password and Retype password are not same");
 return(false);
 } 
}
</script>
<table width="1321" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="239" height="389">&nbsp;</td>
    <td width="602" valign="top"><div align="center">
      <p>Forget Password </p>
      <form name="form1" method="post" onSubmit="return abc()" action="forgotpass2.php">
        <table width="334" border="1">
          <tr>
            <td width="174">User id </td>
            <td width="144"><input name="t1" type="text" id="t1"></td>
          </tr>
          <tr>
            <td>pet Name </td>
            <td><input name="t2" type="text" id="t2"></td>
          </tr>
          <tr>
            <td>First School </td>
            <td><input name="t3" type="text" id="t3"></td>
          </tr>
          <tr>
            <td>Best Friend </td>
            <td><input name="t4" type="text" id="t4"></td>
          </tr>
          <tr>
            <td>Date of Birth </td>
            <td><input name="t5" type="date" id="t5"></td>
          </tr>
          <tr>
            <td>New Password </td>
            <td><input name="t6" type="password" id="t6"></td>
          </tr>
          <tr>
            <td>Retype Password </td>
            <td><input name="t7" type="password" id="t7"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
            </div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="480">&nbsp;</td>
  </tr>
</table>
</body>
</html>
