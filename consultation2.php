<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {font-size: 24px}
-->
</style>
</head>

<body>
<?php
include("p3.php");
?>

<table width="1388" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="331" rowspan="3" valign="top"><div align="center">
        <p class="style3">Patients Details </p>
        <p class="style3">
	    
	  <?php
	  include("connection.php");
	  $pid=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s=mysql_query("select * from patients where pid='$pid'");
	  
	  $row=mysql_fetch_array($s);
	  $name=$row[1];
	  $hname=$row[2];
	  $place=$row[3];
	  $district=$row[5];
	  $village=$row[7];
	  $ph=$row[8];
	  $gender=$row[9];
	  $dob=$row[10];
	  
	  ?>
	    <table width="221" border="1">
          <tr>
            <td width="91">Name</td>
            <td width="114"> <?php echo "$name" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>House Name </td>
            <td> <?php echo "$hname" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Place</td>
            <td> <?php echo "$place" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>District</td>
            <td> <?php echo "$district" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Village</td>
            <td> <?php echo "$village" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td> <?php echo "$ph" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td> <?php echo "$gender" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Date of Birth </td>
            <td> <?php echo "$dob" ?> &nbsp;</td>
          </tr>
          
      </table>
	    
      
	    
	   </p>
      <p><span class="style3">Present</span></p>
      <p>
	   <form name="form1" method="post" action="consultation3.php">
          <table width="222" border="1">
            <tr>
              <td width="212"><div align="center">Problem</div></td>
            </tr>
            <tr>
              <td><textarea name="t3" cols="30" id="ta1"></textarea></td>
            </tr>
            <tr>
              <td><div align="center">Symptoms</div></td>
            </tr>
            <tr>
              <td><textarea name="t4" cols="30" id="ta2"></textarea></td>
            </tr>
            <tr>
              <td><div align="center">Dr. Comment </div></td>
            </tr>
            <tr>
              <td><textarea name="t5" cols="30" id="ta3"></textarea></td>
            </tr>
            <tr>
              <td><div align="center">Prescriptionn</div></td>
            </tr>
            <tr>
              <td><textarea name="t6" cols="30" id="ta4"></textarea></td>
            </tr>
            <tr>
              <td><div align="center">
                  <input type="submit" name="Submit" value="Submit">
              </div></td>
            </tr>
          </table>
	      <?php
		echo "<input type='hidden' name='t1' value='$pid'><input type='hidden' name='t2' value='$s2'>";
		?>
        </form>
	    
	  
	   </p>
      <p>&nbsp;</p>
    </div></td>
    <td width="25" height="206">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center">
        <p class="style3">Previous Details </p>
        <p class="style3">
	    
	   <?php
	$s=mysql_query("select * from consultation where Pid='$pid'");
	if(mysql_num_rows($s)==0)
	{
	 echo "<b> No Previous Details Available ";
	 }
	 else
	 {
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>P.NO</th>
	  <th>Problem</th>
	  <th>Symptoms</th>
	  <th>Dr.comment</th>
	  <th>Prescription</th>
	  <th>Dr.ID</th>
	  <th>Date</th>
	  <th>Time</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>$row[4]</td>
	   <td>$row[5]</td>
	   <td>$row[6]</td>
	   <td>$row[7]</td>
	   <td>$row[8]</td>
	   </tr>";
	  
	   }
	  echo "</table>";
	  }
	?>
	    
	  
	  &nbsp;</p>
    </div></td>
    <td width="2"></td>
    <td width="54"></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"></div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="697">&nbsp;</td>
    <td width="140" rowspan="2" valign="top"><p><strong>Lab Test </strong></p>
    <p><?php
	$s=mysql_query("select * from labtestentry where cno in (select cno from consultation where pid='$pid')");
	if(mysql_num_rows($s)==0)
	 echo"<b>No Lab test prescribed";
	 else
	 {
	 
	 echo "<table border='0'><tr><th>Test ID</th><th>Dr. ID</th><th>Date</th></tr>";
	 while($row=mysql_fetch_array($s))
	 {
	 $cno=$row[0];
	 $ss=mysql_query("select * from consultation where cno=$cno ");
	 if($row1=mysql_fetch_array($ss))
	 {
	 $staffid1=$row1[6];
	 $cdate1=$row1[7];
	 
	 
	 }
	 echo "<tr><td>$row[1]</td><td>$staffid1</th><th>$cdate1</td></tr>";
	 
	 }
	 echo "</table>";
	 
	 }
	
	
	
	?>&nbsp;</p></td>
    <td colspan="2" rowspan="2" valign="top"><p><strong>Lab Test Results</strong></p>
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
    </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td></td>
    <td width="836"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
