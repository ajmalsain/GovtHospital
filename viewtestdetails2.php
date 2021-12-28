<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("p301.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="434" height="314" valign="top"><div align="center">
        <p>Lab Test Details </p>
        <p>
	    
	  <?php
	  $s1=$_POST["t1"];
	include ("connection.php");
	$s=mysql_query("select * from labtest");
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Test ID</th>
	  <th>Test Name</th>
	  <th>Rate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[3]</td>
	   <td>
	   <form action='viewtestdetails2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'></td></tr>";
	   }
	  echo "</table>";
	  
	?>
	    
	  &nbsp;</p>
    </div></td>
    <td width="404" valign="top"><div align="center">
      <p>Details</p>
      <p>
        <?php
	  $s=mysql_query("select * from labtest where Tid='$s1'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s2=$row[0];
		 $s3=$row[1];
		 $s4=$row[2];
		 $s5=$row[3];
		 $s6=$row[4];
		 $s7=$row[5];
		 $s8=$row[6];
		}
		mysql_query($s);
		?>
        </div>
      <table width="218" border="0" align="center">
        <tr>
          <td width="102">Test ID </td>
          <td width="100"><?php echo "$s2" ?> </td>
        </tr>
        <tr>
          <td>Test Name</td>
          <td> <?php echo "$s3" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Requirement</td>
          <td> <?php echo "$s4" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Rate</td>
          <td> <?php echo "$s5" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Test Condition </td>
          <td> <?php echo "$s6" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Test Duration</td>
          <td> <?php echo "$s7" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Result Duration</td>
          <td> <?php echo "$s8" ?> &nbsp;</td>
        </tr>
      </table></td>
    <td width="368" valign="top"><div align="center">
      <p>Availability</p>
      <p>
	  
	  <div align="center"><p>Hospitals Details </p>
      <p>
	 
	  <?php
	  include("connection.php");
	  $s=mysql_query("select * from testavailability where Tid='$s1'");
	  if(mysql_num_rows($s)==0)
	  {
	  echo "<b> No Hospitals";
	  }
	  else
	  {
	    echo "<table border='0' width='100%'>
	  <tr>
	  <th>Hospital ID</th>
	  <th>Hosp. Name</th>
	  <th>Hosp.Type</th>
	  <th>Place</th>
	  <th>District</th>
	  <th>Phone</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   $hospid=$row[1];
	   $ss=mysql_query("select * from hospitals where hospid='$hospid'");
	   if($rows=mysql_fetch_array($ss))
	   {
	    $hospid=$rows[0];
		$hospname=$rows[1];
		$hosptype=$rows[7];
		$place=$rows[2];
	    $district=$rows[5];
		$phone=$rows[4];
	   }
	   
	   echo "<tr>
	   <td>$hospid</td>
	   <td>$hospname</td>
	   <td>$hosptype</td>
	   <td>$place</td>
	   <td>$district</td>
	   <td>$phone</td>
	   </tr>";
		}
		}
		echo "</table>";
		?>
		
	  </p>
    </div></td>
    <td width="126">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
