<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("p3.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="243" height="314">&nbsp;</td>
    <td width="833" valign="top"><div align="center">
      <p><strong>Lab Test Result Entry </strong></p>
      <p>
	  
	  <?php
	  
	include ("connection.php");
	$s=mysql_query("select * from attendlab  where hospid='$hospid' and rfname is null");
	if($row=mysql_num_rows($s)==0)
	echo "<b>No Test waiting for result";
else
{	
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>CNo</th>
	  <th>TID</th>
	  <th>Current Date</th>
	  <th>Current Time</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>
	   <form action='labresultentry2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'><input type='hidden' name='t2' value='$row[1]'></form>
		   </td></tr>";
	   }
	  echo "</table>";
	  }
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
