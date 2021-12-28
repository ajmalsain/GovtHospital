<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php  include("p1.php");?>
<table width="1315" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="235" height="146">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">
        <p>Fix Doctor's Timing </p>
        <form name="form1" method="post" action="">
	    <?php
	  
	  $s1=$_POST["c1"];
	  $day=$_POST["day"];
	  $fhr=$_POST["fhr"];
	  $fmin=$_POST["fmin"];
	  $fam=$_POST["fam"];
	  $thr=$_POST["thr"];
	  $tmin=$_POST["tmin"];
	  $tam=$_POST["tam"];
	  $pno=$_POST["t2"];
	  
	  $fromtime="$fhr:$fmin:$fam";
	  $totime="$thr:$tmin:$tam";
	 
	  ?>
          <table width="366" border="0">
            <tr>
              <td width="110">Select Dr. ID </td>
              <td width="136"><div align="right">
                <select name="t1" id="t1">
			     
			    <?php
	 
	   include("connection.php");
	  $s=mysql_query("select * from staffwork where designation='DMO'");
	  while($row=mysql_fetch_array($s))
	  {
	    $staffid=$row[0];
		
		echo "<option> $staffid </option>";
	   }
		?>
                </select>
              </div></td>
              <td width="98"><div align="center">
                <input type="submit" name="Submit" value="View">
              </div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="269">&nbsp;</td>
    <td width="75">&nbsp;</td>
  </tr>
  <tr>
    <td height="373" colspan="2" valign="top"><div align="center">
      <p>Doctor Details</p>
      <?php
	  include ("connection.php");
	  $s=mysql_query("select * from staff where staffid='$s1'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s2=$row[1];
		 $s3=$row[2];
		 $s4=$row[3];
		 $s5=$row[4];
		 $s6=$row[5];
		 $s7=$row[6];
		 $s8=$row[7];
		 $s9=$row[8];
		 $s10=$row[9];
		 $s11=$row[11];
		}
		?>
	  <table width="237" border="0">
        <tr>
          <td width="91">Doctor ID </td>
          <td width="130"><?php echo $s1; ?>  &nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $s2; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>H Name </td>
          <td><?php echo $s3; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Place</td>
          <td><?php echo $s4; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Pin</td>
          <td><?php echo $s5; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Phone No. </td>
          <td><?php echo $s6; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo $s7; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Hospital ID </td>
          <td><?php echo $s8; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Staff Type </td>
          <td><?php echo $s9; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Qualification</td>
          <td><?php echo $s10; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Date of Birth </td>
          <td><?php echo $s11; ?> &nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;
	 
	  
	   </p>
    </div></td>
    <td width="416" valign="top"><div align="center">
      <p>New Dr's Timing </p>
      <form name="form2" method="post" action="">
        <table width="285" border="0">
          <tr>
            <td width="109">Select Day </td>
            <td width="160">
              <div align="left">
			  <?php
			  echo $day; ?>
			  </div></td></tr>
          <tr>
            <td>From Time </td>
            <td>
			<?php echo $fromtime; ?>
			&nbsp;</td>
          </tr>
          <tr>
            <td>To Time </td>
            <td>
			<?php echo $totime; ?>
			&nbsp;              </td>
          </tr>
          <tr>
            <td>No. of Patients </td>
            <td><?php echo $pno; ?> &nbsp;</td>
          </tr>
          <tr>
            <td height="41" colspan="2"><div align="center">
			<?php 
			$s=mysql_query("select * from drdtime where staffid='$s1' and dayname='$day'");
			if(mysql_num_rows($s)==0)
			{
			  $s="insert into drdtime values('$s1','$day','$fromtime','$totime',$pno)";
			  mysql_query($s);
			 }
			 else
			 {
			 $s="update drdtime set ftime='$fromtime',totime='$totime',npatient='$pno' where staffID='$s1' and dayname='$day'";
			 mysql_query($s);
			 }
			 echo "<b> Set time Successfully";
			 ?>
			 
              </div></td>
            </tr>
        </table>
		<?php
		echo "<input type='hidden' name='c1' value='$s1'>";
		?>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td colspan="2" valign="top"><div align="center">
      <p>Existing Dr's Timing </p>
      <p>
	  
	  <?php
	include ("connection.php");
	$s=mysql_query("select * from drdtime where staffID='$s1'");
	if(mysql_num_rows($s)==0)
	{
	 echo "<b> Not Set Any Timing ";
	 }
	 else
	 {
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Day Name</th>
	  <th>From Time</th>
	  <th>To Time</th>
	  <th>Patient Number</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>$row[4]</td>
	   </tr>";
	   }
	  echo "</table>";
	  }
	?>
	  
	  &nbsp;
	 </p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
    <td width="181"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td width="139"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
