<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<script>
function abc()
{
if(document.form1.t0.value=="")
{
alert("Please Enter the Patient ID");
return(false);

}

}

</script>
<body>
<?php
include("p3.php");
?>
<table width="1400" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="140">&nbsp;</td>
    <td width="163">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center">
      <p class="style1">Online Appoinment</p>
      <form name="form1" method="post" onSubmit="return abc()" action="attendlab00.php">
	  <?php
	  $s0=$_POST["t0"];
	  $s1=$_POST["c1"];
	  ?>
        <table width="412" border="0">
          <tr>
            <td width="137">Enter Patient ID </td>
            <td width="151"><input name="t0" type="text" id="t0" value="<?php echo $s0 ?>"></td>
            <td width="102"><div align="center">
              <input type="submit" name="Submit" value="view">
            </div></td>
          </tr>
        </table>
      </form>
      <p class="style1">&nbsp;</p>
      </div></td>
    <td width="71">&nbsp;</td>
    <td width="267">&nbsp;</td>
  </tr>
  <tr>
    <td height="295">&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><p class="style1">Details</p>      <?php
	  include("connection.php");
	  $s=mysql_query("select * from patients where pid='$s0'");
	  if(mysql_num_rows($s)==0)
	  {
	  echo "Invalid Patient ID";
	  }
	  else
	  {
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
      <table width="331" border="0">
        <tr>
          <td width="136">Name</td>
          <td width="179"> <?php echo "$name" ?> &nbsp;</td>
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
        <tr>
          <td colspan="2"><form name="form2" method="post" action="sappoinment1.php">
              <div align="center">              </div>
          </form></td>
        </tr>
                  </table>      <?php
	  }
	  ?>
      <p class="style1">&nbsp;</p></td>
    <td width="13">&nbsp;</td>
    <td width="404" rowspan="2" valign="top"><p>&nbsp;</p>      <?php
	
	$aa=0;
	$s=mysql_query("select *from consultation a,labtestentry b where a.pid='$s0' and a.cno=b.cno");
	 while($row=mysql_fetch_array($s))
	 {
	 $cno=$row[10];
	 $tid=$row[11];
	 $ss=mysql_query("select * from attendlab where cno=$cno and tid='$tid'");
	 if(mysql_num_rows($ss)==0)
	 					$aa++;
	   
	 
	 }
	 
	 if($aa==0)
	  echo"<b><font color='red'>No Lab Test Pending";
	  
	else
	{
	
	?>
	
      <form name="form3" method="post" action="attendlab000.php">
        <table width="404" border="0">
          <tr>
            <td width="130"><p>Selected Lab Test</p></td>
            <td width="122"><?php echo $s1; ?>&nbsp;</td>
            <td width="128">&nbsp;</td>
          </tr>
        </table>
    </form>      <?php } 
	
	$s=mysql_query("select * from testavailability where hospid='$hospid' and tid='$s1'");
	if(mysql_num_rows($s)==0)
	  echo "<b>This test is not available here ";
	else
	{
	
	$s=mysql_query("select * from consultation a,labtestentry b where a.pid='$s0' and a.cno=b.cno and b.tid='$s1' and a.cno not in (select cno from attendlab)  order by b.cno desc");
	if($row=mysql_fetch_array($s))
	{
	
	$cno=$row[10];
	}
	
	date_default_timezone_set('Asia/Kolkata');
		$ctime=date('h:i:sA',time());
		 $cdate=date('Y-m-d');
		 
	$s="insert into attendlab(cno,tid,cdate,ctime,hospid,staffid) values($cno,'$s1','$cdate','$ctime','$hospid','$staffid')";
	mysql_query($s);
	echo"<b>Entry Success";
	
	
	}
	
	
	
	
	
	
	?>      <p>&nbsp; </p></td>
    <td width="16">&nbsp;</td>
    <td colspan="2" valign="top"><p>Test Details</p>
    <p>
      <?php
	include ("connection.php");
	$s=mysql_query("select * from labtest");
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Test ID</th>
	  <th>Test Name</th>
	  <th>Rate</th>
	  
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[3]</td>
	  </tr>";
	   }
	  echo "</table>";
	  
	?>
    </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="182"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
