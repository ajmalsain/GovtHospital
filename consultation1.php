<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body>
<?php  include("p3.php");?>
<table width="1439" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="170" height="405">&nbsp;</td>
    <td width="964" valign="top"><div align="center">
      <p class="style1">Consultation</p>
      <p class="style1">
	  
	   <?php
	include ("connection.php");
	$today=date('Y-m-d');
	$s=mysql_query("select * from booking where staffID='$staffid' and bdate='$today' and bno not in(select bno from consultation)");
	if(mysql_num_rows($s)==0)
	{
	 echo "<b> No Booking for Consultation ";
	 }
	 else
	 {
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>B.NO</th>
	  <th>Token No</th>
	  <th>Patient ID</th>
	  <th>Cdate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[7]</td>
	   <td>$row[1]</td>
	   <td>$row[5]</td>
	   <td>
	   <form action='consultation2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[1]'><input type='hidden' name='t2' value='$row[0]'></td></tr>";
	   }
	  echo "</table>";
	  }
	?>
	  
	  &nbsp;</p>
      <p class="style1">&nbsp;</p>
    </div></td>
    <td width="305">&nbsp;</td>
  </tr>
  <tr>
    <td height="62">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
