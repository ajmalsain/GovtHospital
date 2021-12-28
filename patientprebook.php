<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
include('p2.php');
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="184" height="251">&nbsp;</td>
    <td width="871" valign="top"><p align="center" class="style1">My Comming Booking</p>
    <p align="center"><?php
	include('connection.php');
	$cdate=date('Y')."-".date('m')."-".date('d');
	
	$s=mysql_query("select * from booking where pid='$pid' and bdate <= '$cdate'");
	  if(mysql_num_rows($s)==0)
	  echo "<b>No Coming Booking...</b>";
	  else
	  {
	  echo"<table border='0' width='100%'><tr><th>Booking No</th><th>Dr ID</th><th>Booking Date</th><th>Token No.</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	  echo "<tr align='center'><td>$row[0]</td><td>$row[2]</td><td>$row[3]</td><td>$row[7]</td></tr>";
	  }
	  echo"</table>";
	  
	  }
	
	?>&nbsp;</p></td>
    <td width="277">&nbsp;</td>
  </tr>
  <tr>
    <td height="138">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
