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
<script>
function abc()
{
if(document.form1.t1.value==""||document.form1.t3.value==""||document.form1.t4.value==""||document.form1.t5.value==""||document.form1.t6.value=="")
{
alert("Please Enter all Fields");
return(false);  

}

}

</script>
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
        <form name="form1" onSubmit="return abc()" method="post" action="labtestreg2.php">
            <table width="278" border="0">
              <tr>
                <td width="118">Test Name </td>
                <td width="144"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
              </tr>
              <tr>
                <td>Requirement</td>
                <td>                  <div align="right">
                  <select name="c1" id="c1">
				  <option value="Blood">Blood</option>
				  <option value="Urine">Urine</option>s
				  <option value="Saliva">Saliva</option>
				  <option value="nasal fluid">nasal fluid</option>
				  <option value="Semen">Semen</option>
				  <option value="Stool">Stool</option>
				  <option value="Sputum">Sputum</option>
				  <option value="Oral Fluid">Oral Fluid</option>
				  <option value="Sweat">Sweat</option>
				  <option value="Tissue Biopsy">Tissue Biopsy</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td>Rate</td>
                <td><input name="t3" type="text" id="t3" onKeyPress="return numbers(event)"></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">Test Condition </div></td>
              </tr>
              <tr>
                <td colspan="2"><textarea name="t4" cols="39" id="t4" ></textarea></td>
              </tr>
              <tr>
                <td>Test Duration </td>
                <td><input name="t5" type="text" id="t5"></td>
              </tr>
              <tr>
                <td>Result Duration </td>
                <td><input name="t6" type="text" id="t6"></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
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
