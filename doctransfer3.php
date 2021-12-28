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
alert("Please Enter the DR. ID");
return(false);

}

}

</script>
<body>
<?php
include("p1.php");
?>
<table width="1400" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="22" height="130">&nbsp;</td>
    <td width="151">&nbsp;</td>
    <td colspan="4" valign="top"><div align="center">
        <p class="style1">Doctor's Transfer</p>
        <form name="form1" method="post" onSubmit="return abc()" action="stafftransfer2.php">
          <?php
		$s0=$_POST["t0"];
		$s1=$_POST["hospid"];
		$s2=$_POST["desig"];
	  include("connection.php");
	  $s=mysql_query("select* from staff where spl is not null");
	  if(mysql_num_rows($s)==0)
	     echo"<b>No Doctor Available";
		 else
		 {
	  
	  ?>
          <table width="424" border="0">
            <tr>
              <td width="148">Enter Doctor ID </td>
              <td width="144"><select name="t0" id="to">
                  <?php
				echo "<option>$s0</option>";
			while($row=mysql_fetch_array($s))
			{
			if($s0==$row[0])
			   continue;
			echo "<option>$row[0]</option>";
			}
			?>
              </select></td>
              <td width="110"><div align="center">
                  <input type="submit" name="Submit" value="view">
              </div></td>
            </tr>
          </table>
          <?php } ?>
        </form>
    </div></td>
    <td width="265">&nbsp;</td>
    <td width="71">&nbsp;</td>
  </tr>
  <tr>
    <td height="48">&nbsp;</td>
    <td colspan="2" rowspan="3" valign="top"><p class="style1">Details</p>      <?php
	  include("connection.php");
	  $s=mysql_query("select * from staff where staffid='$s0' and spl is not null");
	  if(mysql_num_rows($s)==0)
	  {
	  echo "Invalid Doctor ID";
	  }
	  else
	  {
	  $row=mysql_fetch_array($s);
	  $name=$row[1];
	  $hname=$row[2];
	  $place=$row[3];
	  $phone=$row[5];
	  $gender=$row[6];
	  $hospid=$row[7];
	  $stype=$row[8];
	  $quali=$row[9];
	  $dob=$row[11];
	  
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
          <td> <?php echo "$phone" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Village</td>
          <td> <?php echo "$gender" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <?php echo "$hospid" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td> <?php echo "$stype" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td> <?php echo "$quali" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Date of Birth </td>
          <td> <?php echo "$dob" ?> &nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><form name="form2" method="post" action="doctransfer3.php">
            <div align="center"></div>
          </form></td>
        </tr>
                  </table>      <?php
	  }
	  ?></td>
    <td width="327">&nbsp;</td>
    <td width="87">&nbsp;</td>
    <td colspan="2" rowspan="3" valign="top"><p>Hospitals</p>
      <p>
        <?php
	  $s=mysql_query("select * from hospitals");
	  echo "<table border='1'><tr><th> HospID </th><th> Hospital Name</th><th> Place</th><th>District</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td></tr>";
	  }
	  echo "</table>";
	  
	  ?>
      </p>
    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="224">&nbsp;</td>
    <td valign="top"><form name="form3" method="post" action="stafftransfer3.php">
        <table width="327" border="1">
          <tr>
            <td width="152">Current Working </td>
            <td width="159"><?php
			$hospid="";
			$s=mysql_query("select * from staffwork where staffid ='$s0' order by wno desc");
			
			if($row=mysql_fetch_array($s))
			{
			$hospid=$row[2];
			$desig=$row[3];
			}
			echo $hospid;
			?>&nbsp;</td>
          </tr>
          <tr>
            <td>Designation</td>
            <td><?php echo $s2; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Transfer To </td>
            <td><?php echo $s1; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><?php
			$wno=0;
			$s=mysql_query("select * from staffwork where staffid='$s0' order by wno desc");
			if($row=mysql_fetch_array($s))
			{
			$wno=$row[1];
			}
			$wno++;
			$regdate=date("Y")."-".date("m")."-".date("d");
			$s="insert into staffwork values('$s0',$wno,'$s1','$s2','$regdate')";
			mysql_query($s);
			echo "<b>Success....";
			?>&nbsp;</td>
          </tr>
        </table>
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="46">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="275"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="202"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
