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
<?php  include("p2.php");?>
<div align="center"></div>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="262" height="78">&nbsp;</td>
    <td width="712" valign="top"><div align="center" class="style1">Online Appoinment </div></td>
    <td width="358">&nbsp;</td>
  </tr>
  <tr>
    <td height="81">&nbsp;</td>
    <td valign="top"><div align="center">
      <form name="form1" method="post" action="">
        
		<?php
		include("connection.php");
		$s1=$_POST["c1"];
		$s2=$_POST["c2"];
		
		?>
		
		<table width="572" border="0">
          <tr>
            <td width="93">Select District </td>
            <td width="105"><div align="right">
              <select name="c1"><?php
			 echo " <option>$s1</option>";
		            ?>
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
            <td width="132">Select Specialization </td>
            <td width="115"><div align="right">
			 <select name="c2" id="c2">
				<?php echo " <option>$s2</option> "; ?>
				<option value="General Medicine">General Medicine</option>
				<option value="Cardiology">Cardiology</option>
			    <option value="Dermatology">Dermatology</option>
			    <option value="ENT">ENT</option>
			    <option value="General Surgery">General Surgery</option>
				<option value="Pediatrics">Pediatrics</option>
                </select>
            </div></td>
            <td width="93"><div align="center">
              <input type="submit" name="Submit" value="view">
            </div></td>
          </tr>
        </table>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="191">&nbsp;</td>
    <td rowspan="2" valign="top">
	
	 
      <p align="center">Select Hospital</p>
      <p align="left">&nbsp;
	  <?php
	  $s=mysql_query("select * from hospitals where district='$s1'");
	  if(mysql_num_rows($s)==0)
	  echo "No Hospital Available";
	  else
	  {
	  
	  echo "<table border='0' width='100%'><tr><th>HospID</th><th>HospName</th><th>Place</th><th>Htype</th><th>Click</th></tr>";
	  while($row=mysql_fetch_array($s))
	  {
	   $hospid=$row[0];
	   $ss=mysql_query("select * from staff where spl='$s2'");
	   if(mysql_num_rows($ss)>0)
		{
	    if($row1=mysql_fetch_array($ss))
		{
		$staffid=$row1[0];
		$sss=mysql_query("select * from staffwork where staffid='$staffid' order by Wno desc");
		$hid="";
		if($row2=mysql_fetch_array($sss))
		{
		 $hid=$row2[2];
		 }
		 if($hid==$hospid)
		 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[7]</td><td><form action='onappoinment3.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$hid'> <input type='hidden' name='c2' value='$s2'> <input type='hidden' name='c1' value='$s1'>
		   </form></td></tr>";
		 }
		 }
		 }
		 echo"</table>";
		 }
	  ?>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"></td>
    <td></td>
  </tr>
  <tr>
    <td height="18"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
