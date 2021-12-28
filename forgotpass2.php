<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1321" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="239" height="25">&nbsp;</td>
    <td width="602" rowspan="3" valign="top"><div align="center">
      <p>Forget Password </p>
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s3=$_POST["t3"];
	  $s4=$_POST["t4"];
	  $s5=$_POST["t5"];
	  $s6=$_POST["t6"];
	  $s7=$_POST["t7"];
	  ?>
	  
        <table width="334" border="1">
          <tr>
            <td width="174">User id </td>
            <td width="144"><input name="t1" type="text" id="t1" value="<?php echo $s1; ?>"></td>
          </tr>
          <tr>
            <td>pet Name </td>
            <td><input name="t2" type="text" id="t2" value="<?php echo $s2; ?>"></td>
          </tr>
          <tr>
            <td>First School </td>
            <td><input name="t3" type="text" id="t3" value="<?php echo $s3; ?>"></td>
          </tr>
          <tr>
            <td>Best Friend </td>
            <td><input name="t4" type="text" id="t4" value="<?php echo $s4; ?>"></td>
          </tr>
          <tr>
            <td>Date of Birth </td>
            <td><input name="t5" type="text" id="t5" value="<?php echo $s5; ?>"></td>
          </tr>
          <tr>
            <td>New Password </td>
            <td><input name="t6" type="password" id="t6" value="<?php echo $s6; ?>"></td>
          </tr>
          <tr>
            <td>Retype Password </td>
            <td><input name="t7" type="password" id="t7" value="<?php echo $s7; ?>"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php
			include ("connection.php");
	  $s=mysql_query("select * from info where userid='$s1' and petname='$s2' and fschool='$s3' and bfriend='$s4' and dob='$s5'");
	  if(mysql_num_rows($s)==0)
	  {
	    echo "<b> <p style='color:red'> Invalid Entries </p> </b>";
		}
		else
		{
		$s="update login set password='$s6' where userid='admin'";
		mysql_query($s);
		echo "<b> <p style='color:red'> Your new password is set </p> </b>";
		}
		?>
            </div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="334">&nbsp;</td>
    <td width="119">&nbsp;</td>
    <td width="27">&nbsp;</td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><a href="adminprocess.php">Go to Home </a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="335">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
