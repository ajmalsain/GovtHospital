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
<table width="1323" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="15" height="14"></td>
    <td width="417"></td>
    <td width="190"></td>
    <td width="17"></td>
    <td width="199"></td>
    <td width="384"></td>
    <td width="101"></td>
  </tr>
  <tr>
    <td height="67"></td>
    <td></td>
    <td colspan="3" valign="top"><div align="center"><strong>View Comments </strong></div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="294"></td>
    <td colspan="2" valign="top">
	<?php
	include ("connection.php");
	$s1=$_POST["t1"];
	$s=mysql_query("select * from comment where cmno<>$s1");
	if(mysql_num_rows($s)==0)
	echo "<b>No Comment</b>";
	else
	{
	  echo "<table border='1' width='100%'>
	  <tr>
	  <th>Commtno</th>
	  <th>Name</th>
	  <th>Commtdate</th>
	  <th>Click</th>
	  </tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[5]</td>
	   <td><form action='viewcommt2.php' method='POST'>
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
      <p><strong>Details</strong></p>
      <form name="form1" method="post" action="">
	  <?php
	  include ("connection.php");
	  $s1=$_POST["t1"];
	  $s=mysql_query("select * from comment where cmno=$s1");
	  if($row=mysql_fetch_array($s))
	  {
	     $name=$row[1];
		 $phone=$row[2];
		 $email=$row[3];
	     $comment=$row[4];
		 $cdate=$row[5];
		 
		 }
		 ?>
        <table width="451" border="1">
          <tr>
            <td width="215">CommtNo</td>
            <td width="220">
			<?php
			echo $s1;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td>Name</td>
            <td>
			<?php
			echo $name;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td> Phone</td>
            <td>
			<?php
			echo $phone;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
			<?php
			echo $email;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Comment</div></td>
            </tr>
          <tr>
            <td height="100" colspan="2"><textarea name="textarea" cols="65" rows="5"><?php
			echo $comment;
			?></textarea></td>
            </tr>
          <tr>
            <td>CommtDate</td>
            <td>
			<?php
			echo $cdate;
			?>
			&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php 
			$s="delete from comment where cmno=$s1";
			mysql_query($s);
			  echo "<b> Removed</b>";
			  ?>
            </div></td>
            </tr>
        </table>
      </form>
      <p align="center"><strong></strong></p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
