<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("p2.php");
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="55" height="314">&nbsp;</td>
    <td width="1239" valign="top"><div align="center">
        <p>Lab Test Details </p>
        <p>
	    
	  <?php
	include ("connection.php");
	$s=mysql_query("select * from attendlab  where cno in (select cno from consultation where pid='$pid')");
	if(mysql_num_rows($s)==0)
	echo"<b>No Test entry Found";
	else
	{
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Consultation No.</th>
	  <th>Test ID</th>
	  <th>Test Date</th>
	  <th>Test Time</th>
	  <th>Hosp ID</th>
	  <th>Result Date</th>
	  <th>Result Time</th>
	  <th>Result</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	  $rfname=$row[6];
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>$row[4]</td>
	   <td>$row[7]</td>
	   <td>$row[8]</td>
	   <td>
	   <form action='down.php' method='POST'>" ;
	   if($rfname =="")
	     echo "Wait";
		 else
	     echo "<input type='submit' value='Download'>";
	   
	   echo "<input type='hidden' name='t1' value='$row[6]'></form>
		   </td></tr>";
	   }
	  echo "</table>";
	  
	  }
	?>
	    
	  &nbsp;</p>
    </div></td>
    <td width="38">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
