<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<style>
body,
.bg
{
background-image:url("./back/a1.jfif");
background-repeat:no-repeat;
background-size: cover;
color: black;
background-position: inherit;
}
</style>



<style type="text/css">

input[type=text],input[type=password]{
border-radius: 7px;
padding:7px;
background-color:#FFFF99;
color:#FF0000;



}
input[type=submit],input[type=reset]{
padding:10px;
background-color:#6600FF;
font-size: 14px;
margin: 10px;
width:auto;
border-radius:20px;
border: 1px solid #ff7101;
color:#FFFFFF;

}

textarea {
	
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
	border-radius: 8px;
	background-color:#FFFFCC;
	color:#FF0000;
}

select {
	
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
	border-radius: 8px;
	background-color:#FFFFCC;
	color:#FF0000;
}
</style>
<script  language="javascript">

function numbers(event)
{

var charCode=event.keyCode;
if(charCode>31&&(charCode<48||charCode>57))
return false;

}
function alphabets(event)
{
var charCode=event.keyCode;
if((charCode>=65&&charCode<=90)||(charCode>=97&&charCode<=122)||charCode==32)
return true;
else
return false;
}


function email(event)
{
var charCode=event.keyCode;
if((charCode>=65&&charCode<=90)||charCode==32)
return false;
else
return true;
}

</script>

<body>
<?php
    session_start();
	$pid=$_SESSION["pid"];
	?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" height="204" valign="top"><img src="back/head.jpg" width="100%" height="206"></td>
    <td width="50"></td>
  </tr>
  <tr>
    <td height="27" valign="top" bgcolor="#FF6666"><?php include("patientmenu.htm"); ?><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
