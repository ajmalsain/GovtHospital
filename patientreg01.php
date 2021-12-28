<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value==""||document.form1.t2.value==""||document.form1.t3.value==""||document.form1.t4.value==""||document.form1.t5.value==""||document.form1.t6.value=="")
{
alert("Please Enter all Fields");
return(false);  
}

}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
function check1()
{

xyz1();

var a=new Array();
if(document.form1.district.selectedIndex==0)
{
a[0]="Neyattinkara";										// add TVM Taluk if it is 5  then a[0] to a[4]   and  i< 5 
a[1]="Kattakkada";
a[2]="Nedumangadu";
a[3]="Thiruvananthapuram";
a[4]="Chirayinkeezhu";
a[5]="Varkala";
for(i=0;i<6;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}  
else if(document.form1.district.selectedIndex==1)
{
a[0]="Kollam";					//add Kollam taluk
a[1]="Kunnathoor";
a[2]="Karunagappally";
a[3]="Kottarakkara";
a[4]="Punalur";
a[5]="Pathanapuram";
for(i=0;i<6;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==2)
{
a[0]="Adoor";					//add Pathanamthitta taluk
a[1]="Konni";
a[2]="Kozhencherry";
a[3]="Ranni";
a[4]="Mallappay";
a[5]="Thiruvalla";
for(i=0;i<6;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==3)
{
a[0]="Chenganoor";					//add Pathanamthitta taluk
a[1]="Mavelikkara";
a[2]="Karthikappally";
a[3]="Kuttanad";                     
a[4]="Ambalappuzha";
a[5]="Cherthala";
for(i=0;i<6;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==4)
{
a[0]="Changanasserry";					//add Pathanamthitta taluk
a[1]="Kottayam";
a[2]="Vaikom";              
a[3]="Meenachil";                     
a[4]="Kanjirappally";
for(i=0;i<5;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==5)
{
a[0]="Peermade";					//add Pathanamthitta taluk
a[1]="Udumbanchola";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==6)
{
a[0]="Aluva";					//add Pathanamthitta taluk
a[1]="Kochi";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==7)
{
a[0]="Thrissur";					//add Pathanamthitta taluk
a[1]="Kunnamkulam";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==8)
{
a[0]="Palakkad";					//add Pathanamthitta taluk
a[1]="Ottapalam";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==9)
{
a[0]="Ponnani";					//add Pathanamthitta taluk
a[1]="Thirur";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==10)
{
a[0]="Kozhikode";					//add Pathanamthitta taluk
a[1]="Vadakara";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==11)
{
a[0]="Mananthavady";					//add Pathanamthitta taluk
a[1]="Sulthan Bathery";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==12)
{
a[0]="Kannur";					//add Pathanamthitta taluk
a[1]="Thalassery";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

else if(document.form1.district.selectedIndex==13)
{
a[0]="Kasargod";					//add Pathanamthitta taluk
a[1]="Manjeswaram";
for(i=0;i<2;i++)
  {
   var newOpt1=new Option(a[i]);
   document.form1.taluk.options[i]=newOpt1;
   
  } 
}

//  repeate abve else if for remaining district carefully

  

check2();
}

function xyz1()
{
var x=document.form1.taluk.length;
for(i=x;i>=0;i--)
  document.form1.taluk.options[i]=null;
}



function check2()
{

xyz2();
var a=new Array();

if(document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==0)
{
a[0]="Athiyanoor";				//add tvm district  first taluk all panchayath
a[1]="Balaramapuram";
a[2]="Chenkal";
a[3]="Kanjiramkulam";
a[4]="Karode";
a[5]="Karumkulam";
a[6]="Kollayil";
a[7]="Kottukal";

for(i=0;i<8;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}
else if(document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==0)   // it is tvm second taluk
{

a[0]="Amboori";					//add tvm district second taluk all panchayath
a[1]="Aryancode";
a[2]="Kallikkadu";
a[3]="Kattakada";
a[4]="Kuttichal";
a[5]="Maranalloor";
a[6]="Poovachal";

for(i=0;i<7;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if(document.form1.taluk.selectedIndex==2 && document.form1.district.selectedIndex==0)   // it is tvm second taluk
{

a[0]="Anad";					//add tvm district second taluk all panchayath
a[1]="Aruvikkara";
a[2]="Aryanad";
a[3]="Kallara";
a[4]="Karakulam";
a[5]="Panavoor";
a[6]="Pangodu";
a[7]="Vithura";

for(i=0;i<8;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if(document.form1.taluk.selectedIndex==3 && document.form1.district.selectedIndex==0)   // it is tvm second taluk
{

a[0]="Andoorkonam";					//add tvm district second taluk all panchayath
a[1]="Kadinamkulam";
a[2]="Kalliyoor";
a[3]="Mangalapuram";
a[4]="pothenkodu";
a[5]="Venganoor";

for(i=0;i<6;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if(document.form1.taluk.selectedIndex==4 && document.form1.district.selectedIndex==0)   // it is tvm second taluk
{

a[0]="Anchuthengu";					//add tvm district second taluk all panchayath
a[1]="Azhoor";
a[2]="Chirayinkeezhu";
a[3]="Kilimanoor";

for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if(document.form1.taluk.selectedIndex==5 && document.form1.district.selectedIndex==0)   // it is tvm second taluk
{

a[0]="Chemmaruthy";					//add tvm district second taluk all panchayath
a[1]="Edava";
a[2]="Madavoor";
a[3]="Navaikulam";
a[4]="Pallikkal";

for(i=0;i<5;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}
// repeate else if foreach taluk all panchayath


if(document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==1)
{ 
a[0]="Adichanalloor";				//add kollam dist first taluk all panchayath
a[1]="Chathannoor";
a[2]="Chirakara";         
a[3]="Kallada";
a[4]="Kalluvathukkal";
for(i=0;i<5;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==1)
{
a[0]="Kunnathoor";
a[1]="Mynagappally";
a[2]="Pozhuvazhy";
a[3]="Sasthamcotta";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==2 && document.form1.district.selectedIndex==1)
{
a[0]="Alappad";
a[1]="Chavara";
a[2]="Clappana";
a[3]="Neendakara";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==3 && document.form1.district.selectedIndex==1)
{
a[0]="Kottarakkara";
a[1]="Chadayamangalam";
a[2]="Ummannoor";
a[3]="Veliyam";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==4 && document.form1.district.selectedIndex==1)
{
a[0]="Anchal";
a[1]="Alayamon";
a[2]="Edamulakkal";
a[3]="Karavaloor";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==5 && document.form1.district.selectedIndex==1)
{
a[0]="Pathanapuram";
a[1]="Pattazhi";
a[2]="Piravanthoor";
a[3]="Thalavoor";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}



//  reapeate remaining using else if 



}
function xyz2()
{
var x=document.form1.panchayat.length;
for(i=x;i>=0;i--)
  document.form1.panchayat.options[i]=null;


}





</script>
<body>
<?php include("p3.php"); ?>
<table width="1332" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="266" height="389">&nbsp;</td>
    <td width="672" valign="top"><div align="center">
      <p>Patient Registration</p>
      <form action="patientreg2.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="331" border="1">
          <tr>
            <td width="97">Name</td>
            <td width="218">
                <div align="right">
                  <input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"> 
                </div></td></tr>
          <tr>
            <td>House Name </td>
            <td><div align="right">
              <input name="t2" type="text" id="t2" onKeyPress="return alphabets(event)">
            </div></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><div align="right">
              <input name="t3" type="text" id="t3" onKeyPress="return alphabets(event)">
            </div></td>
          </tr>
          <tr>
            <td>Pin</td>
            <td><div align="right">
              <input name="t4" type="text" id="t4" onKeyPress="return numbers(event)">
            </div></td>
          </tr>
          <tr>
            <td>District</td>
            <td><div align="right">
			  <select name="district" onChange="check1()">
		            
		            <option value="Thiruvananthapuram" selected>Thiruvananthapuram</option>
		            <option value="Kollam">Kollam</option>
					<option value="Pathanamthitta">Pathanamthitta</option>
		            <option value="Alappuzha">Alappuzha</option>
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
            <td>Taluk</td>
            <td>              
              <div align="right">
			  	<select name="taluk" onChange="check2()">
				<option value="Neyyattinkara">Neyyattinkara</option>
				<option value="Kattakkada">Kattakkada</option>
				<option value="Nedumangadu">Nedumangadu</option>
				<option value="Thiruvananthapuram">Thiruvananthapuram</option>
				<option value="Chirayinkeezhu">Chirayinkeezhu</option>
				<option value="Varkala">Varkala</option>
                  </select>
              </div></td>
          </tr>
          <tr>
            <td>Panchayat</td>
            <td><div align="right">
			  <select name="panchayat">
			 <option value="Athiyanoor">Athiyanoor</option>
			 <option value="Balaramapuram">Balaramapuram</option>
			 <option value="Chenkal">Chenkal</option>
			 <option value="Kanjiramkulam">Kanjiramkulam</option>
			 <option value="Karode">Karode</option>
			 <option value="Karumkulam">Karumkulam</option>
			 <option value="Kollayil">Kollayil</option>
			 <option value="Kottukal">Kottukal</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>
                <div align="right">
                  <input name="t5" type="text" id="t5" onKeyPress="return numbers(event)">
                </div></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><div align="right">
                  <input name="rb" type="radio" value="M">
              Male 
              <input name="rb" type="radio" value="F"> 
              Female</div></td>
          </tr>
          <tr>
            <td>Date of Brith </td>
            <td><div align="right">
              <input name="t6" type="date" id="t6">
            </div></td>
          </tr>
          <tr>
            <td>Upload Photo </td>
            <td><div align="right">
              <input type="file" name="file2">
            </div></td>
          </tr>
          <tr>
            <td>Aadhar/ration card </td>
            <td>              <input type="file" name="file">            </td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
            </div></td>
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
