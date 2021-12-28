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
.style3 {font-size: 16px}
.style4 {font-size: 24px}
-->
</style>
</head>

<body>
<?php
include("p3.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="187" height="87">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">
      <p class="style1">&nbsp;</p>
      <p class="style1">Feedback Replay </p>
    </div></td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td height="302">&nbsp;</td>
    <td colspan="2" valign="top">
	
	<?php
	include ("connection.php");
	$s=mysql_query("select * from feedback where staffID='$staffid'");
	if(mysql_num_rows($s)==0)
	echo "<b>No Feedback</b>";
	else
	{
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>fid</th>
	  <th>Fdate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[2]</td>
	   <td><form action='viewreply2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'>
		   </form>
         </td>
	   </tr>";
	   }
	  echo "</table>";
	  }
	?>
	
	
	&nbsp;</td>
    <td width="396" valign="top">
	<p align="center" class="style3"> Details </p>
	 <span class="style3">
	 <?php
	  include ("connection.php");
	  $s1=$_POST["t1"];
	  $s=mysql_query("select * from feedback where fid='$s1'");
	  if($row=mysql_fetch_array($s))
	  {
	     $fid=$row[0];
		 $feedback=$row[1];
		 $fdate=$row[2];
		 $replay=$row[3];
		 $rdate=$row[4];
		 }
		 ?>
	  
      </span>
	 <table width="200" border="1" align="center">
        <tr>
          <td width="98" class="style3">Fid</td>
          <td width="108" class="style3">
			<?php
			echo $s1;
			?>
		  &nbsp;</td>
        </tr>
        <tr>
          <td height="27" colspan="2" class="style3"><div align="center">Feedback</div></td>
        </tr>
        <tr>
          <td height="45" colspan="2" class="style3"><?php
			echo $feedback;
			?></textarea></td>
        </tr>
        <tr>
          <td class="style3">Date</td>
          <td class="style3"> <?php
			echo $fdate;
			?> &nbsp;</td>
        </tr>

        </table>
  
	
	
	 </td>
    <td colspan="2" valign="top"><div align="center" class="style3">
      <p class="style4">Reply</p>
      
	  <?php
	  if($replay=="")
	  echo "<b> Replay not ready....please wait";
	  else
	  {
	  
	  ?>
	  <table width="200" border="1">
        <tr>
          <td height="121" colspan="2"> <?php echo $replay; ?>  &nbsp;</td>
          </tr>
        <tr>
          <td width="72">Date</td>
          <td width="112"><?php echo $rdate; ?>&nbsp;</td>
        </tr>
      </table>
	  <?php
	  }
	  ?>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td width="377"></td>
    <td></td>
    <td width="82"></td>
    <td></td>
  </tr>
</table>
</body>
</html>

