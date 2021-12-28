<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 
 include("p3.php");
?>
<body>

<table width="1315" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="235" height="389">&nbsp;</td>
    <td width="736" valign="top"><div align="center">
      <p>Fix Doctor's Timing </p>
      <form name="form1" method="post" action="fixdrtiming2.php">
	  <?php
	  $hospid1="";
	  include("connection.php");
	  $a=0;
	  $s=mysql_query("select * from staff where Stype='Doctor'");
	  while($row=mysql_fetch_array($s))
	  {
	    $staffid=$row[0];
		$ss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
		if($row1=mysql_fetch_array($ss))
		{
		  $hospid1=$row1[2];
		}
		if($hospid1==$hospid)
		$a++;
	   }
	   if($a==0)
	   {
	   echo " No Doctors available ";
	   }
	   else
	   {
	  ?>
        <table width="366" border="1">
          <tr>
            <td width="110">Select Dr. ID </td>
            <td width="136"><div align="right">
              <select name="t1" id="t1">
			   
			  <?php
	  $hospid1="";
	  include("connection.php");
	  $s=mysql_query("select * from staff where Stype='Doctor'");
	  while($row=mysql_fetch_array($s))
	  {
	    $staffid=$row[0];
		$ss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
		if($row1=mysql_fetch_array($ss))
		{
		  $hospid1=$row1[2];
		}
		if($hospid1==$hospid)
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
		<?php
		}
		?>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="344">&nbsp;</td>
  </tr>
  <tr>
    <td height="95">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
