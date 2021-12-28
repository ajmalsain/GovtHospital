<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 16px}
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
    <td width="347" height="389">&nbsp;</td>
    <td width="614" valign="top"><div align="center" class="style1">
      <p><strong>Hospital Registration </strong></p>
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST['t1'];
	  $s2=$_POST['t2'];
	  $s3=$_POST['t3'];
	  $s4=$_POST['t4'];
	  $s5=$_POST['district'];
	  $s6=$_POST['t5'];
	  $s7=$_POST['Htype'];
	  ?>
        <table width="333" border="0">
          <tr>
            <td width="172"><span class="style2">Hospital Name </span></td>
            <td width="145" class="style2"><?php echo $s1; ?> </td>
          </tr>
          <tr>
            <td><span class="style2">Place</span></td>
            <td class="style2"><?php echo $s2; ?></td>
          </tr>
          <tr>
            <td><span class="style2">Pin No. </span></td>
            <td class="style2"><?php echo $s3; ?></td>
          </tr>
          <tr>
            <td><span class="style2">Phone No. </span></td>
            <td class="style2"><?php echo $s4; ?></td>
          </tr>
          <tr>
            <td><span class="style2">District</span></td>
            <td class="style2">
              <div align="left" class="style2"></div> <?php echo $s5; ?> </td>
          </tr>
          <tr>
            <td><span class="style2">Email ID </span></td>
            <td class="style2"><?php echo $s6; ?> </td>
          </tr>
          <tr>
            <td><span class="style2">Hospital Type </span></td>
            <td class="style2">              <div align="left" class="style2">
            </div> <?php echo $s7; ?> </td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php
			  include ("connection.php");
			  
			  $s=mysql_query("select * from hospitals order by hospID desc");
			  if(mysql_num_rows($s)==0)
			  {
			  $hospID="GHID20210200";
			  }
			  else
			  if($row=mysql_fetch_array($s))
			  {
			    $hospID=$row[0];
		      }
			  $hospID++;
			  $Regdate=date('Y-m-d');
			  $s="insert into hospitals values('$hospID','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$Regdate')";
			  mysql_query($s);
			  echo"<b> Registered Successfully</b>" ;
			  ?>
            </div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="371">&nbsp;</td>
  </tr>
</table>
</body>
</html>
