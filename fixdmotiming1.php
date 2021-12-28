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
<table width="1315" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="235" height="389">&nbsp;</td>
    <td width="736" valign="top"><div align="center">
      <p><strong>Fix DMO's Timing </strong></p>
      <form name="form1" method="post" action="fixdmotiming2.php">
	  
	  
        <table width="429" border="0">
          <tr>
            <td width="112">Select Dr. ID </td>
            <td width="131"><div align="right">
              <select name="t1" id="t1">
			   
			  <?php
	  
	  include("connection.php");
	  $s=mysql_query("select * from staffwork where designation='Medical Officer'");
	  while($row=mysql_fetch_array($s))
	  {
	    $staffid=$row[0];
		
		echo "<option> $staffid </option>";
	   }
		?>
              </select>
            </div></td>
            <td width="172"><div align="center">
              <input type="submit" name="Submit" value="View">
            </div></td>
          </tr>
        </table>
		
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
