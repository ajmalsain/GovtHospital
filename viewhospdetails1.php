<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {font-size: 24px}
-->
</style>
</head>

<body>
<?php
include("p301.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="121" height="323">&nbsp;</td>
    <td width="1084" valign="top"><div align="center">
      <p class="style3">Hospitals Details </p>
      
	     <?php
	include ("connection.php");
	$s=mysql_query("select * from hospitals");
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Hospital ID</th>
	  <th>Hospital Name</th>
	  <th>Place</th>
	  <th>District</th>
	  <th>Phone</th>
	  <th>Hospital Type</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[5]</td>
	   <td>$row[4]</td>
	   <td>$row[7]</td>
	   <td>
	   <form action='viewhospdetails2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'></form>
		   </td></tr>";
	   }
	  echo "</table>";
	  
	?>
	  
    </div>
      <div align="left"></div></td>
    <td width="127">&nbsp;</td>
  </tr>
  <tr>
    <td height="66">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
