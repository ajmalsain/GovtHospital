<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include('p3.php');
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="250" height="19">&nbsp;</td>
    <td width="660">&nbsp;</td>
    <td width="422">&nbsp;</td>
  </tr>
  <tr>
    <td height="350">&nbsp;</td>
    <td valign="top"><div align="center">
      <p>Your Feedback</p>
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST["t1"];
	  ?>
	  
        <table width="200" border="1">
          <tr>
            <td><textarea name="t1" cols="45" rows="10" id="t1" value="<?php echo "$s1"; ?>"></textarea></td>
          </tr>
          <tr>
            <td><div align="center">
              <?php
			include("connection.php");
			$fid="0";
			$s=mysql_query("select * from feedback order by fid desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $fid=$row[0];
		      }
			  $fid++;
			  $fdate=date("y")."-".date("m")."-".date("d");
			  session_start();
		      $staffid=$_SESSION["staffid"];
			  $s="insert into feedback(fid,feedback,fdate,staffid)values('$fid','$s1','$fdate','$staffid')";
			  mysql_query($s);
			  echo"<b> Your feedback send with id $fid <br> please wait for the replay </b>";
			
			?>
			  
			  
			  </div></td>
          </tr>
        </table>
      </form>
      <p>&nbsp; </p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
