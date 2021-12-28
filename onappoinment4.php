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
<?php  include("p2.php");?>
<div align="center"></div>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="26">&nbsp;</td>
    <td width="243">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td colspan="4" valign="top"><div align="center" class="style1">Online Appoinment </div></td>
    <td width="303">&nbsp;</td>
    <td width="55">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">    
    <td rowspan="4" valign="top">        <div align="center">Hospitals Details
        <?php
	  include("connection.php");
	  $s1=$_POST["c1"];
	  $s3=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $sp=$_POST["t3"];
	  
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


      </div>      <table width="218" border="1">
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
    <td colspan="2" rowspan="4" valign="top">      <div align="center">
        <p>Select Doctor </p>
       <p>
         <?php
     echo "<table border='1' width='100%'>";
	 echo "<tr><th>Dr.ID</th><th>Name</th><th>Gender</th><th>Qualification</th><th>Click</th><tr>";
	
	 $s=mysql_query("select * from staff where spl='$sp'");
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
	 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[6]</td><td>$row[9]</td><td><form action='onappoinment4.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t2' value='$staffid'> <input type='hidden' name='t1' value='$s3'> <input type='hidden' name='t3' value='$sp'><input type='hidden' name='c1' value='$s1'></form></td></tr>";
	 }
	 echo "</table>";
	 ?>       
        <p>          </div>
    
    <td width="9">    
    <td width="289" valign="top"><div align="center">DoctorDetails
      </div>
    <td width="17">    
  <td rowspan="3" valign="top"><div align="center">
    <p>&nbsp;    </p>
  </div>
  <td>  
  </tr>
  <tr>
    <td height="13">  
    <td>  
    <td>
    <td>  
    <td>  
  </tr>
  <tr>
    <td height="283">  
    <td>  
	
	<?php
	 $s=mysql_query("select * from staff where staffid='$s2'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s11=$row[1];
		 $s12=$row[6];
		 $s13=$row[9];
		}
		?>
    <td rowspan="2" valign="top"><form name="form1" method="post" action="onappoinment5.php">
      <table width="200" border="1">
        <tr>
          <td width="76">Dr.ID</td>
          <td width="108"> <?php echo "$s2"; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td> <?php echo "$s11"; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td> <?php echo "$s12"; ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Qualification</td>
          <td> <?php echo "$s13"; ?> &nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="View Duty Time">
          </div></td>
          </tr> <?php echo "<input type='hidden' name='t2' value='$s2'> <input type='hidden' name='t1' value='$s3'> <input type='hidden' name='t3' value='$sp'><input type='hidden' name='c1' value='$$s1'>"; ?>
		   
      </table>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
    </form>
	               
    <td>  
    <td>  
  </tr>
  <tr>
    <td height="13">  
    <td>  
    <td>  
    <td>  
    <td>  
  </tr>
  <tr>
    <td height="35">  
    <td>    
    <td>    
    <td width="397">  
    <td>    
    <td>    
    <td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
