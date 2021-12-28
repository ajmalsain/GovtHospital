<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style6 {
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
<table width="1407" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="138" height="372">&nbsp;</td>
    <td width="945" valign="top"><div align="center" class="style1">
      <p class="style6">Lab Test Registration </p>
      <blockquote>
        <form name="form1" method="post" action="labtestreg2.php">
		<?php
		include("connection.php");
		$s1=$_POST["t1"];
		$s2=$_POST["c1"];
		$s3=$_POST["t3"];
		$s4=$_POST["t4"];
		$s5=$_POST["t5"];
		$s6=$_POST["t6"];
		?>
            <table width="278" border="0">
              <tr>
                <td width="118">Test Name </td>
                <td width="144"> <?php echo $s1; ?></td>
              </tr>
              <tr>
                <td>Requirement</td>
                <td><div align="left">
                 <?php echo $s2; ?>
                </div></td>
              </tr>
              <tr>
                <td>Rate</td>
                <td> <?php echo $s3; ?> </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">Test Condition </div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"> <?php echo $s4; ?> </td>
              </tr>
              <tr>
                <td>Test Duration </td>
                <td> <?php echo $s5; ?> </td>
              </tr>
              <tr>
                <td>Result Duration </td>
                <td> <?php echo $s6; ?> </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                <?php
				$Tid="T1001";
                $s=mysql_query("select * from labtest order by Tid desc");
			    if($row=mysql_fetch_array($s))
			  {
			    $Tid=$row[0];
		      }
			  $Tid++;
			  $s="insert into labtest values('$Tid','$s1','$s2','$s3','$s4','$s5','$s6')";
			  mysql_query($s);
			  echo"<b> Registered Successfully</b>" ;
			  ?>


                </div></td>
              </tr>
            </table>
        </form>
      </blockquote>
      <p>&nbsp;</p>
    </div></td>
    <td width="324">&nbsp;</td>
  </tr>
  <tr>
    <td height="112">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
