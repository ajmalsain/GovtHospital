<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("p1.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="238" height="155">&nbsp;</td>
    <td width="618" valign="top"><div align="center">
        <p>Allot Test To Hospitals </p>
        <form name="form1" method="post" action="allowtest2.php">
          <table width="471" border="0">
            <tr>
              <td width="105">Select Test ID </td>
              <td width="105"><div align="right">
                <select name="c1" id="c1">
			    
			  <?php
	  
	  include("connection.php");
	  $s=mysql_query("select * from labtest");
	  while($row=mysql_fetch_array($s))
	  {
	    $Tid=$row[0];
		echo "<option> $Tid </option>";
	   }
		?>
         </select>
		 
              </div></td>
              <td width="101">Select Hosp ID </td>
              <td width="76"><div align="right">
                <select name="c2" id="c2">
			    
			  <?php
	  
	  include("connection.php");
	  $s=mysql_query("select * from hospitals");
	  while($row=mysql_fetch_array($s))
	  {
	    $hospid=$row[0];
		echo "<option> $hospid </option>";
	   }
		?>
                </select>
              </div></td>
              <td width="50"><input type="submit" name="Submit" value="Next"></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="13">&nbsp;</td>
    <td width="402" rowspan="2" valign="top"><div align="center">
      <p>Hospital Details</p>
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
	  
	  &nbsp; </p>
    </div></td>
    <td width="61">&nbsp;</td>
  </tr>
  <tr>
    <td height="199">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
