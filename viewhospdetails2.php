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
<?php include("p301.php"); ?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="99" height="191">&nbsp;</td>
    <td width="350" rowspan="2" valign="top"><p align="center" class="style1">Hospital Details </p>
    <p> 
	
	<?php
	  $s1=$_POST["t1"];
	include ("connection.php");
	$s=mysql_query("select * from hospitals where hospID='$s1'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s2=$row[0];
		 $s3=$row[1];
		 $s4=$row[2];
		 $s5=$row[3];
		 $s6=$row[4];
		 $s7=$row[5];
		 $s8=$row[6];
		 $s9=$row[7];
		}
		mysql_query($s);
		?>
        </div>
      <table width="236" border="1" align="center">
        <tr>
          <td width="120">Hospital ID </td>
          <td width="106"><?php echo "$s2" ?> </td>
        </tr>
        <tr>
          <td>Hospital Name</td>
          <td> <?php echo "$s3" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Place</td>
          <td> <?php echo "$s4" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Pin</td>
          <td> <?php echo "$s5" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <?php echo "$s6" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>District</td>
          <td> <?php echo "$s7" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Email</td>
          <td> <?php echo "$s8" ?> &nbsp;</td>
        </tr>
		<tr>
          <td>Hospital Type</td>
          <td> <?php echo "$s9" ?> &nbsp;</td>
        </tr>
    </table></td>
	
	</p></td>
    <td width="20">&nbsp;</td>
    <td width="826" valign="top"><p align="center" class="style1">Doctor's List </p>
    <p align="center">
	
	<?php
     echo "<table border='1' width='100%' align='center'>";
	 echo "<tr><th>Dr.ID</th><th>Name</th><th>Gender</th><th>Qualification</th></tr>";
	 $s=mysql_query("select * from staff where hospID='$s2'");
	 while($row=mysql_fetch_array($s))
	 {
	  $staffid=$row[0];
	  $ss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
	  $hid="";
	  if($row1=mysql_fetch_array($ss))
	  {
	  $hid=$row1[2];
	  }
	 if($s2==$hid)
	 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[6]</td><td>$row[9]</td>";
	 }
	echo "</table>";
	 ?>
	</p></td>
    <td width="37">&nbsp;</td>
  </tr>
  <tr>
    <td height="158">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
