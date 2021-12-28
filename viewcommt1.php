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
<table width="1323" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="15" height="14"></td>
    <td width="417"></td>
    <td width="190"></td>
    <td width="216"></td>
    <td width="485"></td>
  </tr>
  <tr>
    <td height="67"></td>
    <td></td>
    <td colspan="2" valign="top"><div align="center"><strong>View Comments </strong></div></td>
    <td></td>
  </tr>
  <tr>
    <td height="294"></td>
    <td colspan="2" valign="top">
	<?php
	include ("connection.php");
	$s=mysql_query("select * from comment");
	if(mysql_num_rows($s)==0)
	echo "<b>No Comment</b>";
	else
	{
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Commtno</th>
	  <th>Name</th>
	  <th>Commtdate</th>
	  <th>Click</th>
	  </tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[5]</td>
	   <td><form action='viewcommt2.php' method='POST'>
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
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
