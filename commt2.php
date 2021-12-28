<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="225" height="14"></td>
    <td width="471"></td>
    <td width="636"></td>
  </tr>
  <tr>
    <td height="356"></td>
    <td valign="top"><div align="center">Post Your Comment
      <form name="form1" method="post" action="">
	  <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s3=$_POST["t3"];
	  $s4=$_POST["tarea"];
	  ?>
        <table width="313" border="1">
          <tr>
            <td width="153">Name</td>
            <td width="144"><input name="t1" type="text"  id="t1" value="<?php echo $s1; ?>"></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input name="t2" type="text" id="t2" value="<?php echo $s2; ?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="t3" type="text" id="t3" value="<?php echo $s3; ?>"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Comment</div></td>
            </tr>
          <tr>
            <td height="125" colspan="2">  <div align="center">
              <textarea name="tarea" cols="43" rows="5" id="tarea"><?php echo $s4; ?></textarea>
            </div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
			<?php
			  include ("connection.php");
			  $cmno=0;
			  $s=mysql_query("select * from comment order by cmno desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $cmno=$row[0];
		      }
			  $cmno++;
			  $cdate=date("y")."-".date("m")."-".date("d");
			  $s="insert into comment values($cmno,'$s1','$s2','$s3','$s4','$cdate')";
			  mysql_query($s);
			  echo"<b> Comment send with the No. $cmno" ;
			  ?>
            </div></td>
            </tr>
        </table>
      </form> 
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
