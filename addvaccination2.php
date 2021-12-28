<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
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
    <td width="204" height="372">&nbsp;</td>
    <td width="743" valign="top"><div align="center">
      <p class="style1">Add Vaccination Details</p>
      <blockquote>
        <form name="form1" method="post" action="">
		<?php
	  $s1=$_POST['t1'];
	  $s2=$_POST['t2'];
	  $s3=$_POST['t3'];
	  $s4=$_POST['t4'];
	  $s5=$_POST['t5'];
	  ?>
            <table width="290" border="1">
              <tr>
                <td width="132">Vaccination Name </td>
                <td width="142"><?php echo $s1; ?>&nbsp;</td>
              </tr>
              <tr>
                <td>Number of Dose </td>
                <td><?php echo $s2; ?>&nbsp;</td>
              </tr>
              <tr>
                <td>Precaution</td>
                <td><?php echo $s3; ?>&nbsp;</td>
              </tr>
              <tr>
                <td>Usage</td>
                <td><?php echo $s4; ?>&nbsp;</td>
              </tr>
              <tr>
                <td>Side-Effects </td>
                <td><?php echo $s5; ?>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                <?php
				$Vid="V101";
			  include ("connection.php");
			  $s=mysql_query("select * from vaccinationmaster order by Vid desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $Vid=$row[0];
		      }
			  $Vid++;
			  $s="insert into vaccinationmaster values('$Vid','$s1','$s2','$s3','$s4','$s5')";
			  mysql_query($s);
			  echo"<b> Add Vaccination Successfully</b>" ;
			  ?>
				
				</div></td>
              </tr>
            </table>
        </form>
      </blockquote>
      <p>&nbsp; </p>
    </div></td>
    <td width="385">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
