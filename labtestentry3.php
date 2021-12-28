<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1305" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="127" height="28">&nbsp;</td>
    <td width="339">&nbsp;</td>
    <td width="839">&nbsp;</td>
  </tr>
  <tr>
    <td height="350">&nbsp;</td>
    <td valign="top"><p><strong>Selected Lab Test </strong></p>
      <p>
        <?php
		include("connection.php");
		$cno=$_SESSION["cno"];
	$s=mysql_query("select * from temp");
	echo "<table border='0'>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr><td>$row[0]</td></tr></tr>";
	$ss="insert into labtestentry values($cno,'$row[0]')";
	mysql_query($ss);
	
	}
	echo"</table>";
	
	
	$s="delete from temp";
	mysql_query($s);
	echo "<b>Lab Test Entry Success";
	
	?>
    &nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
