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
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="13" height="155">&nbsp;</td>
    <td width="169">&nbsp;</td>
    <td width="56">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center">
      <p>Allot Test To Hospitals </p>
      <form name="form1" method="post" action="">
	  <?php
	  include("connection.php");
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  ?>
        <table width="471" border="0">
          <tr>
            <td width="105">Select Test ID </td>
            <td width="105"><div align="right">
              <select name="c1" id="c1">
			  
			  <?php
	  
	  
		echo "<option> $s1 </option>";
		 include("connection.php");
	  $s=mysql_query("select * from labtest");
	  while($row=mysql_fetch_array($s))
	  {
	    $Tid=$row[0];
		echo "<option> $Tid </option>";
	   }
	   
		?>
       </select>
            </div></td>
            <td width="101">Select Hosp ID </td>
            <td width="76"><div align="right">
              <select name="c2" id="c2">
			  
			  <?php
	  
	  
		echo "<option> $s2 </option>";
		  include("connection.php");
	  $s=mysql_query("select * from hospitals");
	  while($row=mysql_fetch_array($s))
	  {
	    $hospid=$row[0];
		echo "<option> $hospid </option>";
	   }
		
	   
		?>
              </select>
            </div></td>
            <td width="50"><input type="submit" name="Submit" value="Next"></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td width="205">&nbsp;</td>
  </tr>
  <tr>
    <td height="248">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">
      <p>Test Details</p>
      <p>
	  
	  <?php
	  $s=mysql_query("select * from labtest where Tid='$s1'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s3=$row[1];
		 $s4=$row[2];
		 $s5=$row[3];
		 $s6=$row[5];
		 $s7=$row[6];
		}
		?>


      </div>      <table width="218" border="0">
        <tr>
          <td width="102">Test ID </td>
          <td width="100"> <?php echo "$s1" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Test Name</td>
          <td> <?php echo "$s3" ?> &nbsp;</td>
        </tr>
        <tr> 
          <td>Requirement</td>
          <td> <?php echo "$s4" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Rate</td>
          <td> <?php echo "$s5" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Test Duration</td>
          <td> <?php echo "$s6" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Result Duration</td>
          <td> <?php echo "$s7" ?> &nbsp;</td>
        </tr>
    </table>

	  
	  
	    </p>
    </div></td>
    <td width="13">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center">
      <p>Hospitals Details </p>
      <p>
	  
		 <?php
	  include("connection.php");
	  $s=mysql_query("select * from hospitals where hospid='$s2'");
	  while($row=mysql_fetch_array($s))
	  {
	     $s8=$row[1];
		 $s9=$row[2];
		 $s10=$row[4];
		 $s11=$row[7];
		 $s12=$row[5];
		}
		?>


      </div>      <table width="218" border="0">
        <tr>
          <td width="102">Hosp ID </td>
          <td width="100"> <?php echo "$s2" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Hosp Name</td>
          <td> <?php echo "$s8" ?> &nbsp;</td>
        </tr>
        <tr> 
          <td>Place</td>
          <td> <?php echo "$s9" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <?php echo "$s10" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>Hosp Type</td>
          <td> <?php echo "$s11" ?> &nbsp;</td>
        </tr>
        <tr>
          <td>District</td>
          <td> <?php echo "$s12" ?> &nbsp;</td>
        </tr>
    </table>
	  
	   </p>
    </div></td>
    <td width="382">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" valign="top"><form name="form2" method="post" action="allowtest3.php">
        <div align="center">
	    <?php
	  $s=mysql_query("select * from testavailability where Tid='$s1' and HospID='$s2'"); 
	  if(mysql_num_rows($s)>0)
	   echo "<b> Test is Already Allotted To This Hospital</b>";
	   else
	   {
	   $s="insert into testavailability values('$s1','$s2')";
	   mysql_query($s);
	  echo"<b> Allot Successfully </b>";
	  }
	  ?>
		  <?php echo "<input type='hidden' name='t1' value='$s1'> <input type='hidden' name='t2' value='$s2'>"; ?>
        </div>
    </form></td>
    <td width="309">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td></td>
    <td width="146"></td>
    <td></td>
    <td width="39"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
