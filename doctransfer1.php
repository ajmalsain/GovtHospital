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
    <td width="173" height="156">&nbsp;</td>
    <td width="633" valign="top"><div align="center">
        <p class="style1">Doctor's Transfer</p>
        <form name="form1" onSubmit="return abc()" method="post" action="doctransfer2.php">
	    <?php
	  include("connection.php");
	  $s=mysql_query("select * from staff where spl is not null");
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
			while($row=mysql_fetch_array($s))
			{
			echo "<option>$row[0]</option>";
			}
			?>
              </select></td>
              <td width="110"><div align="center">
                <input type="submit" name="Submit" value="view">
              </div></td>
            </tr>
          </table> <?php } ?>
        </form>
        <p class="style1">&nbsp;</p>
    </div></td>
    <td width="491" rowspan="2" valign="top"><div align="center">
      <p>Doctor's Details</p>
      <p>
	  
	  <?php
     echo "<table border='1' width='100%' align='center'>";
	 echo "<tr><th>Dr.ID</th><th>Name</th><th>Hospital ID</th><th>Gender</th><th>Qualification</th></tr>";
	 $s=mysql_query("select * from staff where Stype='Doctor'");
	 while($row=mysql_fetch_array($s))
	 {
	  $staffid=$row[0];
	  $ss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
	  $hid="";
	  if($row1=mysql_fetch_array($ss))
	  {
	  $hid=$row1[2];
	  }
	 
	 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$hid</td><td>$row[6]</td><td>$row[9]</td>";
	 }
	echo "</table>";
	 ?>
	  
	  &nbsp; </p>
    </div></td>
    <td width="103">&nbsp;</td>
  </tr>
  <tr>
    <td height="198">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="97">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
