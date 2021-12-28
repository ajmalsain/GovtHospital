<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include('p2.php');
?>
<table width="1124" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="18" height="18"></td>
    <td width="223"></td>
    <td width="255"></td>
    <td width="16"></td>
    <td width="125"></td>
    <td width="378"></td>
    <td width="109"></td>
  </tr>
  <tr>
    <td height="59"></td>
    <td></td>
    <td colspan="3" valign="top"><div align="center">Announcement</div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="312">&nbsp;</td>
    <td colspan="2" valign="top">
	<?php
	$s1=$_POST["t1"];
	include ("connection.php");
	$s=mysql_query("select * from announcement where anmode='A'");
	if(mysql_num_rows($s)==0)
	echo "<b>No Announcement</b>";
	else
	{
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>Anno</th>
	  <th>Andate</th>
	  <th>Click</th>
	  </tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[2]</td>
	   <td><form action='viewann2.php' method='POST'>
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
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><div align="center">
      <p>Details</p>
      <form name="form1" method="post" action="viewannpatient3.php">
	  <?php
	  include ("connection.php");
	  $s1=$_POST["t1"];
	  $s=mysql_query("select * from announcement where anno=$s1");
	  if($row=mysql_fetch_array($s))
	  {
	     $announcement=$row[1];
		 $andate=$row[2];
		 $anmode=$row[3];
		 }
		 ?>
        <table width="345" border="1">
          <tr>
            <td width="161">Anno</td>
            <td width="168">
			<?php
			echo $s1;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Announcement</div></td>
            </tr>
          <tr>
            <td height="142" colspan="2"><textarea name="t1" cols="60" rows="10" id="t1">
			<?php
			echo $announcement;
			?>
			</textarea></td>
            </tr>
          <tr>
            <td>Date</td>
            <td>
		    <?php
			echo $andate;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td height="23">Anmode</td>
            <td>
			<?php
			echo $anmode;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td height="40" colspan="2"><div align="center">
            
			  
			  <input type="submit" name="Submit" value="Remove">
            </div></td>
            </tr>
        </table>
		<?php
			echo "<input type='hidden' name='t1' value='$s1'>";
			?>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
