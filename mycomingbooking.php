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
<?php include("p2.php");  ?>
<table width="1299" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="78" height="28">&nbsp;</td>
    <td width="1131">&nbsp;</td>
    <td width="90">&nbsp;</td>
  </tr>
  <tr>
    <td height="321">&nbsp;</td>
    <td valign="top"><p align="center"><strong>My Coming Dr. Booking</strong></p>
    <p><span class="style1">
      <?php
	include ("connection.php");
	$cdate=date("Y")."-".date("m")."-".date("d");

	
	$s=mysql_query("select * from booking where pID='$pid' and bdate>='$cdate'");
	if(mysql_num_rows($s)==0)
	{
	 echo "<center><b><br> No Booking for Consultation ";
	 }
	 else
	 {
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>B.NO</th>
	  <th>Token No</th>
	  <th>Dr ID</th>
	  <th>Bookeddate</th>
	  <th>Dr.Name</th>
	  <th>Qualification</th>
	  <th>Specialization</th>
	  
	  <th>Date Of Birth</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	  
	  $ss=mysql_query("select * from staff where staffid='$row[2]'");
	  if($row1=mysql_fetch_array($ss))
	  {
	  $name=$row1[1];
	  $qlf=$row1[9];
	  $gender=$row1[6];
	  $spl=$row1[14];

	  }
	  
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[7]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>$name</td>
	   <td>$qlf</td>
	   <td>$gender</td>
	   <td>$spl</td>
	   </tr>";
	   }
	  echo "</table>";
	  }
	?>
    </span> </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
