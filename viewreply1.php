<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
include("p3.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="187" height="87">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center">
      <p class="style1">&nbsp;</p>
      <p class="style1">Feedback Replay </p>
    </div></td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td height="302">&nbsp;</td>
    <td colspan="2" valign="top">
	
	<?php
	include ("connection.php");
	$s=mysql_query("select * from feedback where staffID='$staffid'");
	if(mysql_num_rows($s)==0)
	{
	 echo "<b> No Feedback ";
	 }
	 else
	 {
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>fid</th>
	  <th>Fdate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[2]</td>
	   <td><form action='viewreply2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'>
		   </form>
         </td>
	   </tr>";
	   }
	  echo "</table>";
	  }
	?>
	
	
	&nbsp;</td>
    <td width="478">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="377"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>

