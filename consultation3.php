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
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="304" rowspan="2" valign="top"><div align="center">
      <p class="style3">Patients Details</p>
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
      </p>
      <p class="style3">
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
	  
	  <form name="form1" method="post" action="">
	    <?php
	   $pid=$_POST["t1"];
	  $bno=$_POST["t2"];
	  $s1=$_POST["t3"];
	  $s2=$_POST["t4"];
	  $s3=$_POST["t5"];
	   $s4=$_POST["t6"];
	  ?>
          <table width="222" border="1">
            <tr>
              <td width="212"><div align="center">Problem</div></td>
            </tr>
            <tr>
              <td><?php echo "$s1" ?> </td>
            </tr>
            <tr>
              <td><div align="center">Symptoms</div></td>
            </tr>
            <tr>
              <td><?php echo "$s2" ?></td>
            </tr>
            <tr>
              <td><div align="center">Dr. Comment </div></td>
            </tr>
            <tr>
              <td><?php echo "$s3" ?></td>
            </tr>
            <tr>
              <td><div align="center">Prescriptionn</div></td>
            </tr>
            <tr>
              <td><?php echo "$s4" ?></td>
            </tr>
            <tr>
              <td><div align="center">
              
			<?php
			date_default_timezone_set('Asia/Kolkata');
		$ctime=date('h:i:sA',time());
		 $cdate=date('Y-m-d');
		 $cno=0;
			  $s=mysql_query("select * from consultation order by cno desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $cno=$row[0];
		      }
			  $cno++;
			  $s="insert into consultation values($cno,'$pid','$s1','$s2','$s3','$s4','$staffid','$cdate','$ctime','$bno')";
			  mysql_query($s);
			  echo"<b> Prescription Completed</b>";
			  $_SESSION["cno"]=$cno;
          ?>
              </div></td>
            </tr>
            <tr>
              <td><a href="labtestentry1.php">Any Lab Test </a></td>
            </tr>
          </table>
        </form>
	  
	  </p>
      <p>&nbsp;</p>
    </div></td>
    <td height="107" valign="top"><div align="center">
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
    <td width="204">&nbsp;</td>
  </tr>
  <tr>
    <td width="824" height="620">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="128">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
