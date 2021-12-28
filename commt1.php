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
include('p301.php');
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="225" height="14"></td>
    <td width="471"></td>
    <td width="636"></td>
  </tr>
  <tr>
    <td height="356"></td>
    <td valign="top"><div align="center"><span class="style1">Post Your Comment
      </span>
      <form name="form1" method="post" action="commt2.php">
        <table width="313" border="0">
          <tr>
            <td width="153">Name</td>
            <td width="144"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input name="t2" type="text" id="t2" onKeyPress="return numbers(event)"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="t3" type="text" id="t3" onKeyPress="return email(event)"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Comment</div></td>
            </tr>
          <tr>
            <td height="125" colspan="2">  <div align="center">
              <textarea name="tarea" cols="43" rows="5" id="tarea"></textarea>
            </div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
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
