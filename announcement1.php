<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please Write Something....");
return(false);

}

}

</script>
<body>
<?php
include("p1.php");
?>
<table width="1124" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="129" height="14"></td>
    <td width="752"></td>
    <td width="243"></td>
  </tr>
  <tr>
    <td height="359"></td>
    <td valign="top"><div align="center"><h2>Announcement To All</h2>
      <form name="form1" onSubmit="return abc()" method="post" action="announcement2.php">
        <table width="200" border="0">
          <tr>
            <td><textarea name="t1" cols="60" rows="10" id="t1"></textarea></td>
          </tr>
          <tr>
            <td><div align="center">
              <input type="submit" name="Submit" value="Submit">
            </div></td>
          </tr>
        </table>
     </form>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
  </tr>
</table>

</body>
</html>
