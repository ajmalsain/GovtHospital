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
    <td width="173" height="140">&nbsp;</td>
    <td width="891" valign="top"><div align="center">
      <p class="style1">Online Appoinment</p>
      <form name="form1" method="post" onSubmit="return abc()" action="sappoinment00.php">
	  <?php
	  $s0=$_POST["t0"];
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
      <p class="style1">Details</p>
      <?php
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
            <div align="center">
              <input type="submit" name="Submit2" value="Continue"> 
			  <?php
			echo " <input type='hidden' name='t0' value='$s0'>";
			?>
            </div>
          </form></td>
          </tr>
      </table>
	  <?php
	  }
	  ?>
      <p class="style1">&nbsp;</p>
    </div></td>
    <td width="336">&nbsp;</td>
  </tr>
  <tr>
    <td height="295">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
