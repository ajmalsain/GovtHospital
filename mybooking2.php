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
<?php include("p3.php"); ?>
<table width="1321" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="47" height="124">&nbsp;</td>
    <td width="151">&nbsp;</td>
    <td width="749" valign="top"><div align="center">
      <p><strong>My Booking Details </strong></p>
      <form name="form1" method="post" action="mybooking2.php"><?php
	  $s1=$_POST["d1"];
	  
	  ?>
        <table width="452" border="0">
          <tr>
            <td width="88" height="45">Select Date </td>
            <td width="82"><input type="date" name="d1"  value="<?php echo $s1;  ?>"></td>
            <td width="74"><input type="submit" name="Submit" value="View"></td>
          </tr>
        </table>
      </form>
      </div></td>
    <td width="176">&nbsp;</td>
    <td width="198">&nbsp;</td>
  </tr>
  <tr>
    <td height="230">&nbsp;</td>
    <td colspan="3" valign="top"><p align="center"><strong>Details</strong></p>
    <p><span class="style1">
      <?php
	include ("connection.php");
	$today=date('Y-m-d');
	$s=mysql_query("select * from booking where staffID='$staffid' and bdate='$s1'");
	if(mysql_num_rows($s)==0)
	{
	 echo "<center><b><br> No Booking for Consultation ";
	 }
	 else
	 {
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>B.NO</th>
	  <th>Token No</th>
	  <th>Patient ID</th>
	  <th>Cdate</th>
	  <th>Name</th>
	  <th>Phone</th>
	  <th>Gender</th>
	  
	  <th>Date Of Birth</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	  
	  $ss=mysql_query("select * from patients where pid='$row[1]'");
	  if($row1=mysql_fetch_array($ss))
	  {
	  $name=$row1[1];
	  $phone=$row1[8];
	  $gender=$row1[9];
	  $dob=$row1[10];

	  }
	  
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[7]</td>
	   <td>$row[1]</td>
	   <td>$row[5]</td>
	   <td>$name</td>
	   <td>$phone</td>
	   <td>$gender</td>
	   <td>$dob</td>
	   </tr>";
	   }
	  echo "</table>";
	  }
	?>
    </span></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
