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
<script>
function abc()
{
if(document.form1.t1.value==""||document.form1.t2.value==""||document.form1.t3.value==""||document.form1.t4.value==""||document.form1.t5.value=="")
{
alert("Please Enter all fields");
return(false);
}


}
</script>
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
      <form name="form1" onSubmit="return abc()" method="post" action="hospitalreg2.php">
        <table width="335" border="0">
          <tr>
            <td width="172"><span class="style2">Hospital Name </span></td>
            <td width="147"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td><span class="style2">Place</span></td>
            <td><input name="t2" type="text" id="t2" onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td><span class="style2">Pin No. </span></td>
            <td><input name="t3" type="text" id="t3" onKeyPress="return numbers(event)"></td>
          </tr>
          <tr>
            <td><span class="style2">Phone No. </span></td>
            <td><input name="t4" type="text" id="t4" onKeyPress="return numbers(event)"></td>
          </tr>
          <tr>
            <td><span class="style2">District</span></td>
            <td>
                <div align="right">
                  <select name="district">
		           
		            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
		            <option value="Kollam">Kollam</option>
		            <option value="Alappuzha">Alappuzha</option>
		            <option value="Pathanamthitta">Pathanamthitta</option>
		            <option value="Kottayam">Kottayam</option>
		            <option value="Idukki">Idukki</option>
		            <option value="Ernakulam">Ernakulam</option>
		            <option value="Thrissur">Thrissur</option>
		            <option value="Palakkad">Palakkad</option>
		            <option value="Malappuram">Malappuram</option>
		            <option value="Kozhikode">Kozhikode</option>
		            <option value="Wayanad">Wayanad</option>
		            <option value="Kannur">Kannur</option>
		            <option value="Kasaragod">Kasaragod</option>
                  </select>
                </div></td>
          </tr>
          <tr>
            <td><span class="style2">Email ID </span></td>
            <td><input name="t5" type="text" id="t5" onKeyPress="return email(event)"></td>
          </tr>
          <tr>
            <td><span class="style2">Hospital Type </span></td>
            <td>              <div align="right">
              <select name="Htype">
			  
			  <option value="Medical College">Medical College</option>
			  <option value="District Hospital">District Hospital</option>
			  <option value="Taluk Hospital">Taluk Hospital</option>
			  <option value="Primary Health Centre(PHC)">Primary Health Centre</option>
			  <option value="Family Health Centre(FHC)">Family Health Centre</option>
                </select>
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
      <p>&nbsp;</p>
    </div></td>
    <td width="371">&nbsp;</td>
  </tr>
</table>
</body>
</html>
