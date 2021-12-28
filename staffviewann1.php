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
include('p3.php');
?>
<table width="1124" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="18" height="18"></td>
    <td width="223"></td>
    <td width="255"></td>
    <td width="141"></td>
    <td width="487"></td>
  </tr>
  <tr>
    <td height="59"></td>
    <td></td>
    <td colspan="2" valign="top"><div align="center" class="style1">Announcement</div></td>
    <td></td>
  </tr>
  <tr>
    <td height="312">&nbsp;</td>
    <td colspan="2" valign="top">
	<?php
	include ("connection.php");
	$s=mysql_query("select * from announcement where anmode='A'");
	if(mysql_num_rows($s)==0)
	echo "<b>No Announcement</b>";
	else
	{
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Anno</th>
	  <th>Andate</th>
	  <th>Click</th>
	  </tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[2]</td>
	   <td><form action='staffviewann2.php' method='POST'>
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
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
