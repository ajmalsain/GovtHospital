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
<?php  include("p3.php");?>
<div align="center"></div>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="262" height="26">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center" class="style1">Online Appoinment </div></td>
    <td width="341">&nbsp;</td>
    <td width="17">&nbsp;</td>
  </tr>
  <tr>
    <td height="328" colspan="2" valign="top">        
	
	 
      <p align="center">Select Hospital</p>      <p align="left">&nbsp;
	    <?php
	  include("connection.php");
		$s1=$_POST["c1"];
		$s2=$_POST["c2"];
		$s3=$_POST["t1"];
        $s0=$_POST["t0"];
	  
		echo "District:-$s1<br>Specialization:-$s2";
	  $s=mysql_query("select * from hospitals where district='$s1'");
	  if(mysql_num_rows($s)==0)
	  echo "No Hospital Available";
	  else
	  {
	  
	  echo "<table border='1' width='100%'><tr><th>HospID</th><th>HospName</th><th>Place</th><th>Htype</th><th>Click</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   $hospid=$row[0];
	   $ss=mysql_query("select * from staff where spl='$s2'");
	   if(mysql_num_rows($ss)>0)
		{
	    if($row1=mysql_fetch_array($ss))
		{
		$staffid=$row1[0];
		$sss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
		$hid="";
		if($row2=mysql_fetch_array($sss))
		{
		 $hid=$row2[2];
		 }
		 if($hid==$hospid)
		 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[7]</td><td><form action='sappoinment3.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$hid'> <input type='hidden' name='c2' value='$s2'> <input type='hidden' name='c1' value='$s1'><input type='hidden' name='t0' value='$s0'>
		   </form></td></tr>";
		 }
		 }
		 }
		 echo"</table>";
		 }
	  ?>
          
    <td width="9">    
    <td width="243" valign="top">    <div align="center">Hospitals Details
        <?php
	  include("connection.php");
	  $s=mysql_query("select * from hospitals where hospid='$s3'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s4=$row[1];
		 $s5=$row[2];
		 $s6=$row[4];
		 $s7=$row[7];
		 $s8=$row[5];
		}
		?>


      </div>
      <table width="218" border="1">
        <tr>
          <td width="102">Hosp ID </td>
          <td width="100"> <?php echo "$s3" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Hosp Name</td>
          <td> <?php echo "$s4" ?> &nbsp;</td>
        </tr>
        <tr> 
          <td>Place</td>
          <td> <?php echo "$s5" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <?php echo "$s6" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Hosp Type</td>
          <td> <?php echo "$s7" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>District</td>
          <td> <?php echo "$s8" ?> &nbsp;</td>
        </tr>
      </table>
    <td width="12">    
    <td colspan="2" valign="top"><div align="center">
      <p>Select Doctor </p>
	  <?php
     echo "<table border='1' width='100%'>";
	 echo "<tr><th>Dr.ID</th><th>Name</th><th>Gender</th><th>Qualification</th><th>Click</th></tr>";
	 $s=mysql_query("select * from staff where spl='$s2'");
	 while($row=mysql_fetch_array($s))
	 {
	  $staffid=$row[0];
	  $ss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
	  $hid="";
	  if($row1=mysql_fetch_array($ss))
	  {
	  $hid=$row1[2];
	  }
	 if($s3==$hid)
	 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[6]</td><td>$row[9]</td><td><form action='sappoinment4.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t2' value='$staffid'> <input type='hidden' name='t1' value='$s3'> <input type='hidden' name='t3' value='$s2'>
		   <input type='hidden' name='t0' value='$s0'>
		    </form></td></tr>";
	 }
	 echo "</table>";
	 ?>
    </div>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">  
    <td width="243">  
    <td>  
    <td>    
    <td>    
    <td width="205">    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
