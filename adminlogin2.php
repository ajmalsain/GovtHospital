<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include('p301.php');
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="391" height="17"></td>
    <td width="488"></td>
    <td width="439"></td>
  </tr>
  <tr>
    <td height="275"></td>
    <td valign="top"><div align="center"><strong>Admin Login</strong>      
      <form name="form1" method="post" action="adminlogin2.php">
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
            <td colspan="2">
			<?php
			include("connection.php");
			$s1=$_POST["t1"];
			$s2=$_POST["t2"];
			$s=mysql_query("select * from login where userid='$s1' and password='$s2'");
			if(mysql_num_rows($s)==0)
			echo "<b><p align='center'> Invalid ID or Password</p>";
			else
			header('location:adminprocess.php');
			?>
			&nbsp;</td>
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
