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
    <td width="320" height="15"></td>
    <td width="469"></td>
    <td width="543"></td>
  </tr>
  <tr>
    <td height="374"></td>
    <td valign="top"><div align="center"><strong>Set Your Info
    </strong>      
        <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s3=$_POST["t3"];
	  $s4=$_POST["t4"];
	  ?>
        <table width="331" border="0">
          <tr>
            <td width="170">Pet Name </td>
            <td width="145"><input name="t1" type="text"  id="t1" value="<?php echo $s1; ?>">              </td>
          </tr>
          <tr>
            <td>First School </td>
            <td><input name="t2" type="text"  id="t2" value="<?php echo $s2; ?>"></td>
          </tr>
          <tr>
            <td>Best Friend </td>
            <td><input name="t3" type="text" id="t3" value="<?php echo $s3; ?>"></td>
          </tr>
          <tr>
            <td>Date of Brith </td>
            <td><input name="t4" type="date" id="t4" value="<?php echo $s4; ?>"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php
			include ("connection.php");
			$s=mysql_query("select * from info");
		     if(mysql_num_rows($s)>0)
			 {
			    $s="update info set petname='$s1',fschool='$s2',bfriend='$s3',dob='$s4'";
				mysql_query($s);
				echo "<b> information changed";
				}
				else
				{
				$s="insert into info values ('admin','$s1','$s2','$s3','$s4')";
				mysql_query($s);
				echo "<b> Successfully inserted </b>";
				}
				?>
            </div></td>
            </tr>
        </table>
      </form> 
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
