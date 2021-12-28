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
<?php
include("p2.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="126" height="63">&nbsp;</td>
    <td width="433" rowspan="3" valign="top"><p align="center" class="style1">Your Profile</p>      <p> 
	  
	<?php
	  include("connection.php");
	  $s=mysql_query("select * from patients where pid='$pid'");
	  
	  $row=mysql_fetch_array($s);
	  $pid=$row[0];
	  $name=$row[1];
	  $hname=$row[2];
	  $place=$row[3];
	  $pin=$row[4];
	  $district=$row[5];
	  $taluk=$row[6];
	  $village=$row[7];
	  $ph=$row[8];
	  $gender=$row[9];
	  $dob=$row[10];
	  $fname2=$row[11];
	  
	  ?>
      <table width="221" border="1" align="center">
		  <tr>
            <td width="91">ID</td>
            <td width="114"> <?php echo "$pid" ?> &nbsp;</td>
          </tr>
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
            <td width="91">Pin code</td>
            <td width="114"> <?php echo "$pin" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>District</td>
            <td> <?php echo "$district" ?> &nbsp;</td>
          </tr>
		  <tr>
            <td width="91">Taluk</td>
            <td width="114"> <?php echo "$taluk" ?> &nbsp;</td>
          </tr>
          <tr>
            <td>Panchayath</td>
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
    </p></td>
    <td width="154">&nbsp;</td>
    <td width="619">&nbsp;</td>
  </tr>
  <tr>
    <td height="144">&nbsp;</td>
    <td valign="top">
	
	<?php 
	  echo "<img src='./pphoto/$fname2' width='100' height='100'>"; ?>
	
	&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="154">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="48">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
