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
        <form name="form1" method="post" action="setinfo2.php">
	  <?php
	  include ("connection.php");
	  $s1="";
	  $s2="";
	  $s3="";
	  $s4="";
	  $s=mysql_query("select * from info");
	  if($row=mysql_fetch_array($s))
	  {
	     $s1=$row[1];
		 $s2=$row[2];
		 $s3=$row[3];
		 $s4=$row[4];
		 }
		 ?>
	  
	  
        <table width="331" border="0">
          <tr>
            <td width="170">Pet Name </td>
            <td width="145"><input name="t1" type="text" id="t1" value="<?php echo $s1; ?>">              </td>
          </tr>
          <tr>
            <td>First School </td>
            <td><input name="t2" type="text" id="t2" value="<?php echo $s2; ?>"></td>
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
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
            </div></td>
            </tr>
        </table>
      </form> 
    </div></td>
    <td></td>
  </tr>
</table>
</body>
</html>
