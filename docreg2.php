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
<?php
include("p1.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="240" height="46">&nbsp;</td>
    <td width="530" rowspan="3" valign="top"><div align="center">
        <p class="style1">Doctor Registration</p>
        <form name="form1" method="post" action="">
	    <?php
	  $s1=$_POST['t1'];
	  $s2=$_POST['t2'];
	  $s3=$_POST['t3'];
	  $s4=$_POST['t4'];
	  $s5=$_POST['t5'];
	  $s6=$_POST['rb'];
	  $s7=$_POST['hospid'];
	  $s8=$_POST['Spl'];
	  $s9=$_POST['t9'];
	  $s10=$_POST['t6'];
	  $s11=$_POST['t7'];
	  $s12=$_POST['t8'];
	  ?>
          <table width="278" border="0">
            <tr>
              <td width="118">Name</td>
              <td width="144"> <?php echo "$s1"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>House Name </td>
              <td> <?php echo "$s2"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Place</td>
              <td> <?php echo "$s3"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Pin</td>
              <td> <?php echo "$s4"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td> <?php echo "$s5"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>  <?php echo "$s6"; ?>              <div align="left">
                  </div></td>
            </tr>
            <tr>
              <td>HospID</td>
              <td><?php echo "$s7"; ?>
                <div align="left"></div></td></tr>
            <tr>
              <td>Staff Type </td>
              <td> <?php echo "$s8"; ?>
                <div align="left"></div></td></tr>
            <tr>
              <td>Designation</td>
              <td> <?php echo "$s9"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Qualification</td>
              <td> <?php echo "$s10"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">Experience</div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"> <?php echo "$s11"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td>Date of Birth </td>
              <td> <?php echo "$s12"; ?> &nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
			  <?php
			  include ("connection.php");
			  $staffID="ST202100";
			  $s=mysql_query("select * from staff order by staffID desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $staffID=$row[0];
		      }
			  $staffID++;
			  
			  $s="insert into staff values('$staffID','$s1','$s2','$s3','$s4','$s5','$s6','$s7','Doctor','$s10','$s11','$s12','doc@123','A','$s8')";
			  mysql_query($s);
			  
			  $Wno="1";
			  
			  $Regdate=date('Y-m-d');
			  $s="insert into staffwork values('$staffID','$Wno','$s7','$s9','$Regdate')";
			  mysql_query($s);
			  echo"<b> Registered Successfully </b><br> Your User ID is $staffID </br> and <br> Password is doc@123</br>" ;
			  ?>
              </div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp; </p>
    </div></td>
    <td width="31">&nbsp;</td>
    <td width="334">&nbsp;</td>
    <td width="197">&nbsp;</td>
  </tr>
  <tr>
    <td height="356">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">
      <p>Hospital Details </p>
      <p>
	  <?php
	  $s=mysql_query("select * from hospitals where HospID='$s7'");
	  echo "<table border='1'><tr><th> HospID </th><th> Hospital Name</th><th> Place</th><th>District</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td></tr>";
	  }
	  echo "</table>";
	  
	  ?>
	  
	  &nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="110">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
