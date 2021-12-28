<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("p301.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="243" height="314">&nbsp;</td>
    <td width="833" valign="top"><div align="center">
      <p>Lab Test Details </p>
      <p>
	  
	  <?php
	include ("connection.php");
	$s=mysql_query("select * from labtest");
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Test ID</th>
	  <th>Test Name</th>
	  <th>Rate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[3]</td>
	   <td>
	   <form action='viewtestdetails2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'></form>
		   </td></tr>";
	   }
	  echo "</table>";
	  
	?>
	  
	  &nbsp;</p>
    </div></td>
    <td width="256">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
