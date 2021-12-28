<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function printf()
{
 window.print();
}


</script>

<body id="body">
<?php
    session_start();
	$pid=$_SESSION["pid"];
	?>
<table width="1272" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="data">
  <!--DWLayoutTable-->
  <tr>
    <td width="71" height="19"></td>
    <td colspan="14" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="127"></td>
    <td width="53"></td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td width="7" rowspan="8" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="56">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td colspan="5" rowspan="2" valign="top"><p align="center">Govt Of Kerala</p>      <p align="center">Health Department ---Patient Unique ID Pass  </p></td>
    <td width="57">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="161">&nbsp;</td>
    <td width="11"></td>
    <td width="9" rowspan="8" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><input type="button" name="Button" value="Print" onClick="printf()"></td>
  </tr>
  <tr>
    <td height="37"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="18"></td>
    <td></td>
    <td rowspan="2" valign="top"><table width="200" border="0" >
      <!--DWLayoutTable-->
        <tr>
          <td width="78">Patient ID </td>
          <td width="106"><?php
		
	echo $pid;
		
		?>&nbsp;</td>
        </tr>
    </table></td>
    <td></td>
    <td colspan="6">
	 <?php
	include("connection.php");
	$s=mysql_query("select * from patients where pid='$pid'");
	if($row=mysql_fetch_array($s))
	{
	$name=$row[1];
	$hname=$row[2];
	$place=$row[3];
	$village=$row[7];
	$dob=$row[10];
	$Regdate=$row[14];
	$fname2=$row[12];
	}
	
	?>  
	</td>
    <td colspan="2" rowspan="3" valign="top"><table width="200" border="0">
      <tr>
        <td width="69">Date</td>
        <td width="115"><?php echo $Regdate; ?>&nbsp;</td>
      </tr>
    </table></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td></td>
    <td colspan="4" rowspan="4" valign="top"><p>Personal Details</p>      <?php
	include("connection.php");
	$s=mysql_query("select * from patients where pid='$pid'");
	if($row=mysql_fetch_array($s))
	{
	$name=$row[1];
	$hname=$row[2];
	$place=$row[3];
	$village=$row[7];
	$dob=$row[10];
	$Regdate=$row[14];
	$fname2=$row[11];
	}
	
	?>      <table width="369" border="0">
        <tr>
          <td width="143">Name</td>
          <td width="210"><?php echo $name; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>House Name </td>
          <td><?php echo $hname; ?></td>
        </tr>
        <tr>
          <td>Place</td>
          <td><?php echo $place; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Village </td>
          <td><?php echo $village; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Date of Birth </td>
          <td><?php echo $dob; ?>&nbsp;</td>
        </tr>
        </table>      <p>&nbsp; </p></td>
    <td width="56"></td>
    <td width="26"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="47"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="133"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">
	  <?php 
	  echo "<img src='./pphoto/$fname2' width='100' height='100'>"; ?>
    </div></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="24"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td width="53"></td>
    <td width="122"></td>
    <td width="168"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td colspan="14" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="24"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><a href="patientreg1.php">Home</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="48"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
