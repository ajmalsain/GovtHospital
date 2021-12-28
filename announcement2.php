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
<table width="1124" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="129" height="14"></td>
    <td width="752"></td>
    <td width="109"></td>
    <td width="117"></td>
    <td width="17"></td>
  </tr>
  <tr>
    <td height="28"></td>
    <td rowspan="2" valign="top"><div align="center"><h2>Announcement To All</h2>
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST['t1'];
	  ?>
        <table width="200" border="0">
          <tr>
            <td> 
			
			<textarea name="t1" cols="60" rows="10" id="t1"><?php echo $s1;?> </textarea></td>
          </tr>
          <tr>
            <td><div align="center">
              <?php
			  include ("connection.php");
			  $anno=0;
			  $s=mysql_query("select * from announcement order by anno desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $anno=$row[0];
		      }
			  $anno++;
			  $andate=date("y")."-".date("m")."-".date("d");
			  $s="insert into announcement values($anno,'$s1','$andate','A')";
			  mysql_query($s);
			  echo"<b> Announcement send with the No. $anno" ;
			  ?>
			  </div></td>
          </tr>
        </table>
      </form> 
    </div></td>
    <td>&nbsp;</td>
    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="331"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>
</body>
</html>
