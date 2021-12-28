<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>

<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="266" height="389">&nbsp;</td>
    <td width="672" valign="top"><div align="center">
      <p>Patient Registration</p>
      <form action="" method="post" enctype="multipart/form-data" name="form1">
	   <?php
	  $s1=$_POST['t1'];
	  $s2=$_POST['t2'];
	  $s3=$_POST['t3'];
	  $s4=$_POST['t4'];
	  $s5=$_POST['district'];
	  $s6=$_POST['taluk'];
	  $s7=$_POST['panchayat'];
	  $s8=$_POST['t5'];
	  $s9=$_POST['rb'];
	  $s10=$_POST['t6'];
	  
	 
	  ?>
        <table width="331" border="1">
          <tr>
            <td width="97">Name</td>
            <td width="218"><?php echo $s1  ?></td>
          </tr>
          <tr>
            <td>House Name </td>
            <td><?php echo $s2  ?></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><?php echo $s3  ?></td>
          </tr>
          <tr>
            <td>Pin</td>
            <td><?php echo $s4  ?></td>
          </tr>
          <tr>
            <td>District</td>
            <td><?php echo $s5  ?>
            </td>
          </tr>
          <tr>
            <td>Taluk</td>
            <td>  <?php echo $s6  ?>            
              </td>
          </tr>
          <tr>
            <td>Panchayat</td>
            <td> <?php echo $s7  ?>
            </td>
          </tr>
          <tr>
            <td>Phone</td>
            <td> <?php echo $s8  ?>
              </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $s9  ?></td>
          </tr>
          <tr>
            <td>Date of Brith </td>
            <td><?php echo $s10  ?></td>
          </tr>
          <tr>
            <td>Upload Photo </td>
            <td><?php echo "Photo Uploaded..."  ?></td>
          </tr>
          <tr>
            <td>Aadhar/ration Card </td>
            <td><?php echo "Proof Uploaded..."  ?></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><?php
			
			include ("connection.php");
			  $Pid="UHID20210200";
			  $s=mysql_query("select * from patients order by PID desc");
			  if($row=mysql_fetch_array($s))
			  {
			    $Pid=$row[0];
		      }
			  $Pid++;
			  $filename2=$_FILES['file2']['name'];
			  $x=explode(".",$filename2);
			  $n=count($x);
			  $n--;
			  $ext=$x[$n];
			  $filename2="$Pid.$ext";
			 move_uploaded_file($_FILES["file2"]["tmp_name"],"./pphoto/$filename2");
			  
			  $filename=$_FILES['file']['name'];
			  $x=explode(".",$filename);
			  $n=count($x);
			  $n--;
			  $ext=$x[$n];
			  $filename="$Pid.$ext";
			 move_uploaded_file($_FILES["file"]["tmp_name"],"./pproof/$filename");
			  $Regdate=date('Y-m-d');
			  $s="insert into patients values('$Pid','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$filename2','$filename','user@123','$Regdate','$staffid')";
			  mysql_query($s);
			  echo"<b> Registered Successfully The ID is $Pid </b><br> Password is user@123</br>" ;
			$_SESSION["pid"]=$Pid;
			
			?>
			</div></td>
			
			
            </tr>
          <tr>
            <td colspan="2"><a href="pass.php">Get Pass </a></td>
          </tr>
        </table>
      </form>
      <p>&nbsp; </p>
    </div></td>
    <td width="394">&nbsp;</td>
  </tr>
</table>
</body>
</html>
