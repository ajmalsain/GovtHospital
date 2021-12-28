<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.file.value=="")
{
alert("Please Select The Result File");
return(false);  

}

}

</script>
<body>
<?php
include("p3.php");
?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="78" height="57">&nbsp;</td>
    <td width="165">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center">
        <p><strong>Lab Test Result Entry </strong></p>
        <p>&nbsp;
	  </p>
    </div></td>
    <td width="239">&nbsp;</td>
    <td width="17">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td colspan="2" rowspan="4" valign="top"><?php
	  
	include ("connection.php");
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$s=mysql_query("select * from consultation where cno=$s1");
	if($row=mysql_fetch_array($s))
	{
	$pid=$row[1];
	$drid=$row[6];
	
	}
	$s=mysql_query("select * from patients where pid='$pid'");
	if($row=mysql_fetch_array($s))
	{
	$name=$row[1];
	$place=$row[3];
	$phone=$row[8];
	$gender=$row[9];
	$dob=$row[10];
	
	}
	
	
	$s=mysql_query("select * from attendlab  where hospid='$hospid' and rfname is null and (cno<>$s1 and  tid<>'$s2')");
	if($row=mysql_num_rows($s)==0)
	echo "<b>No More Test waiting for result";
else
{	
	
	  echo "<table border='0' width='100%'>
	  <tr>
	  <th>CNo</th>
	  <th>TID</th>
	  <th>Current Date</th>
	  <th>Current Time</th>
	  <th>Click</th>
	  </tr>";
	
	 while($row=mysql_fetch_array($s))
	  {
	   echo "<tr align='center'>
	   <td>$row[0]</td>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>
	   <form action='labresultentry2.php' method='POST'>
	   <input type='submit' value='view'>
	   	   <input type='hidden' name='t1' value='$row[0]'><input type='hidden' name='t2' value='$row[1]'></form>
		   </td></tr>";
	   }
	  echo "</table>";
	  }
	?></td>
    <td width="17">&nbsp;</td>
    <td width="317" rowspan="3" valign="top"><p><strong>Details</strong></p>      <table width="308" border="0">
        <tr>
          <td width="171">ConsultatioNo</td>
          <td width="121"><?php  echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Test ID </td>
          <td><?php  echo $s2; ?></td>
        </tr>
        <tr>
          <td>Patient Name </td>
          <td><?php  echo $name; ?></td>
        </tr>
        <tr>
          <td>Place</td>
          <td><?php  echo $place; ?></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php  echo $phone; ?></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php  echo $gender; ?></td>
        </tr>
        <tr>
          <td>Date of Birth </td>
          <td><?php  echo $dob; ?></td>
        </tr>
        <tr>
          <td>Dr.ID</td>
          <td><?php  echo $drid; ?></td>
        </tr>
            </table>      <p>&nbsp;</p></td>
    <td width="9">&nbsp;</td>
    <td width="191">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="169">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><p>U<strong>pload Result</strong></p>      <form action="labresultentry3.php" onSubmit="return abc()" method="post" enctype="multipart/form-data" name="form1">
        <table width="426" border="0">
          <tr>
            <td width="124">Select File </td>
            <td width="196">Selected</td>
            <td width="92"><?php
			
			
			 $filename=$_FILES['file']['name'];
			  $x=explode(".",$filename);
			  $n=count($x);
			  $n--;
			  $ext=$x[$n];
			  $filename="$s1-$s2.$ext";
			 move_uploaded_file($_FILES["file"]["tmp_name"],"./labresult/$filename");
			 
			 date_default_timezone_set('Asia/Kolkata');
		$ctime=date('h:i:sA',time());
		 $cdate=date('Y-m-d');
		 
		 $s="update attendlab set rfname='$filename',rdate='$cdate',rtime='$ctime',rstaffid='$staffid' where cno=$s1 and tid='$s2'";
		 mysql_query($s);
			  
		echo "<b>Result Uploaded...";
			  
			
			?>&nbsp;</td>
          </tr>
        </table>
		<?php
		echo "<input type='hidden' name='t1' value='$s1'>";
			echo "<input type='hidden' name='t2' value='$s2'>";
		?>
    </form>      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="110">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="299"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
