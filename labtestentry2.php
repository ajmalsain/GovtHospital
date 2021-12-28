<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1281" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="61" height="29">&nbsp;</td>
    <td width="731">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="231">&nbsp;</td>
  </tr>
  <tr>
    <td height="340">&nbsp;</td>
    <td valign="top"><p><strong>Select Test</strong></p>
    <p>
      <?php
	  $s1=$_POST["t1"];
	  
	include ("connection.php");
	$s=mysql_query("select * from labtest");
	
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>(Select)Test ID</th>
	  <th>Test Name</th>
	  <th>Rate</th>
	  
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td><form action='labtestentry2.php' method='POST'><input type='submit' value='$row[0]'><input type='hidden' name='t1' value='$row[0]'></form></td>
	   <td>$row[1]</td>
	   <td>$row[3]</td>
	   </tr>";
	   }
	  echo "</table>";
	  $s="insert into temp values('$s1')";
	  mysql_query($s);
	?> 
    </p></td>
    <td>&nbsp;</td>
    <td valign="top"><p>Selected Lab Test </p>
    <p><?php
	$s=mysql_query("select * from temp");
	echo "<table border='0'>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr><td>$row[0]</td><td><form action='labtestentry22.php' method='post'><input type='submit' value='Remove'><input type='hidden' name='t1' value='$row[0]'></form></td></tr></tr>";
	}
	echo"</table>";
	
	
	
	?>&nbsp;</p>
    <form name="form1" method="post" action="labtestentry3.php">
      <input type="submit" name="Submit" value="Submit Lab Test">
    </form>    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
