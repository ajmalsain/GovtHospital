<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
include("p1.php");
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
      <p><strong>Change Password 
      </strong></p>
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s3=$_POST["t3"];
	  ?>
        <table width="328" border="0">
          <tr>
            <td width="170">Existing Password </td>
            <td width="142"><input name="t1" type="password" id="t1" value="<?php echo $s1;?>"></td>
          </tr>
          <tr>
            <td>New Password </td>
            <td><input name="t2" type="password" id="t2" value="<?php echo $s3; ?>">              </td>
          </tr>
          <tr>
            <td>Retype Password </td>
            <td><input name="t3" type="password" id="t3" value="<?php echo $s2; ?>"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php
			include("connection.php");
			$s=mysql_query("select * from login where password='$s1'");
			if(mysql_num_rows($s)==0)
			{
			echo "<b> Invalid ID or Password <br>";
			?>
				<?php
				}
				else
				{
				$s="update login set password='$s2'";
				mysql_query($s);
				echo "<b> Updated";
				}
				?>
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
