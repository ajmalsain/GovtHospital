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
.style2 {font-size: 24px}
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
    <td width="187" height="87">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">
      <p class="style1">&nbsp;</p>
      <p class="style1">Feedback Replay To Staff </p>
    </div></td>
    <td width="227">&nbsp;</td>
    <td width="13">&nbsp;</td>
  </tr>
  <tr>
    <td height="302">&nbsp;</td>
    <td colspan="2" valign="top">
	
	<?php
	include ("connection.php");
	$s=mysql_query("select * from feedback");
	if(mysql_num_rows($s)==0)
	echo "<b>No Comment</b>";
	else
	{
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>fid</th>
	  <th>staffID</th>
	  <th>Fdate</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[5]</td>
	   <td>$row[2]</td>
	   <td><form action='freplay2.php' method='POST'>
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
    <td width="363" valign="top"><div align="center">
      <p class="style2">Details</p>
      
	  
	   <?php
	  include ("connection.php");
	  $s1=$_POST["t1"];
	  $s=mysql_query("select * from feedback where fid='$s1'");
	  if($row=mysql_fetch_array($s))
	  {
	     $fid=$row[0];
		 $feedback=$row[1];
		 $fdate=$row[2];
		 $staffID=$row[5];
		 }
		 ?>
	  
        <table width="200" border="1">
          <tr>
            <td width="98">Fid</td>
            <td width="108">
			<?php
			echo $s1;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td height="27" colspan="2"><div align="center">Feedback</div></td>
            </tr>
          <tr>
            <td height="45" colspan="2"><?php
			echo $feedback;
			?></textarea></td>
            </tr>
          <tr>
            <td>Date</td>
            <td> <?php
			echo $fdate;
			?> &nbsp;</td>
          </tr>
          <tr>
            <td>Staff ID</td>
            <td> <?php
			echo $staffID;
			?> &nbsp;</td>
          </tr>
        </table>
  
      <p class="style2">&nbsp;</p>
    </div></td>
    <td colspan="2" valign="top"><div align="center" class="style2">
      <p>Replay</p>
      <form name="form2" method="post" action="freplay3.php">
        <table width="200" border="1">
          <tr>
            <td height="133"><textarea name="t2" cols="40" rows="7" id="t2"></textarea></td>
            </tr>
          <tr>
            <td><div align="center">
              <input type="submit" name="Submit" value="Submit">
            </div></td>
            </tr>
        </table>
        <p>
		<?php
			echo "<input type='hidden' name='t1' value='$row[0]'>";
			?>
		
		&nbsp;</p>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="115"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="377"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
