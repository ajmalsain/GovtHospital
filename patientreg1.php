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

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==2)
{
a[0]="Erathu";
a[1]="Enadhimangalam";
a[2]="Ezhamkulam";
a[3]="Kadampanad";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==2)
{
a[0]="Chittar";
a[1]="Aruvanppulam";
a[2]="Kalanjoor";         
a[3]="Konni";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==2 && document.form1.district.selectedIndex==2)
{
a[0]="Aranmula";                  
a[1]="Chennerkara";
a[2]="Elanthur";         
a[3]="Kulanada";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==3 && document.form1.district.selectedIndex==2)
{
a[0]="Cherukole";               
a[1]="Ranni";
a[2]="Ranni Angadi";         
a[3]="Ayroor";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==4 && document.form1.district.selectedIndex==2)
{
a[0]="Anicadu";               
a[1]="Ezhumattur";             
a[2]="Kalloopara";         
a[3]="Kaviyoor";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==5 && document.form1.district.selectedIndex==2)
{
a[0]="Kadapara";               
a[1]="Eraviperoor";         
a[2]="Koipuram";         
a[3]="Kuttoor";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==3)
{
a[0]="Ala";              
a[1]="Mannar";         
a[2]="Budhanoor";         
for(i=0;i<3;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==3)
{
a[0]="Bharanikkavu";               
a[1]="Chettikulangara";         
a[2]="Chunakkara";         
a[3]="Mavelikara";
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==2 && document.form1.district.selectedIndex==3)
{
a[0]="Muthukulam";               
a[1]="Kandalloor";         
a[2]="Devikulangara";         
a[3]="Chingoli";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==3 && document.form1.district.selectedIndex==3)
{
a[0]="Edathua";               
a[1]="Chambakulam";       
a[2]="Kavalam";         
a[3]="Muttar";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==4 && document.form1.district.selectedIndex==3)
{
a[0]="Ambalappuzha North";               
a[1]="Ambalappuzha South";       
a[2]="Aryad";         
a[3]="Mannacherry";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==5 && document.form1.district.selectedIndex==3)
{
a[0]="Mararikulam North";               
a[1]="Kuthiathodu";       
a[2]="Muhamma";         
a[3]="Panavally";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==4)
{
a[0]="Kangazha";               
a[1]="Karukachal";       
a[2]="Kurichi";         
a[3]="Madappally";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==4)
{
a[0]="Kumarakom";               
a[1]="Arpookara";       
a[2]="Athirampuzha";         
a[3]="Aymanam";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==2 && document.form1.district.selectedIndex==4)
{
a[0]="Chempu";               
a[1]="Kallara";       
a[2]="Kaduthuruthy";         
a[3]="Mulakulam";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==3 && document.form1.district.selectedIndex==4)
{
a[0]="Melukavu";               
a[1]="Moonnilavu";       
a[2]="Mutholy";         
a[3]="Meenachil";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==4 && document.form1.district.selectedIndex==4)
{
a[0]="Chirakkadavu";               
a[1]="Elikulam";       
a[2]="Erumely";         
a[3]="Kanjirappally";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==5)
{
a[0]="Elappara";               
a[1]="Kokkayar";       
a[2]="Kumily";         
a[3]="Peermade";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==5)
{
a[0]="Bisonvalley";               
a[1]="Chakkupallam";       
a[2]="Chinnakanal";         
a[3]="Erattayar";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==6)
{
a[0]="Ayyampuzha";               
a[1]="Edathala";       
a[2]="Kalady";         
a[3]="Kanjoor";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==6)
{
a[0]="Chellanam";               
a[1]="Njarakkal";       
a[2]="Pallippuram";         
a[3]="Kuzhuppilli";        
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==7)
{
a[0]="Adat";               
a[1]="Anthikad";       
a[2]="Arimpur";         
a[3]="Avanur";   
a[4]="Avinisserry";
a[5]="Chazhur";
a[6]="Cherpu";
a[7]="Kaiparambu";
a[8]="Madakkathara";     
for(i=0;i<9;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==7)
{
a[0]="Choondal";               
a[1]="Chowannur";       
a[2]="Kadangode";         
a[3]="Kadavallur";   
a[4]="Kandanassery";
a[5]="Kattakampal";
a[6]="Porkulam";
a[7]="Velur";    
for(i=0;i<8;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==8)
{
a[0]="Akathehtara";               
a[1]="Elappully";       
a[2]="Kannadi";         
a[3]="Keralassery";   
a[4]="Kongad";
a[5]="Malampuzha";
a[6]="Mankara";
a[7]="Mannur";
a[8]="Parali";     
for(i=0;i<9;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==8)
{
a[0]="Ananganadi";               
a[1]="Chalavara";       
a[2]="Lekkidi-perur";         
a[3]="Nellaya";   
a[4]="Thrikkaderi";
a[5]="Vallapuzha";
a[6]="Vaniyamkulam";   
for(i=0;i<7;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==9)
{
a[0]="Alamkodu";               
a[1]="Edappal";       
a[2]="Kaladi";         
a[3]="Thavannur";      
for(i=0;i<4;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==9)
{
a[0]="Athavanadu";               
a[1]="Cheriyamundam";       
a[2]="Edayur";         
a[3]="Kuttippuram";
a[4]="Mangalam";
a[5]="Ozhur";      
for(i=0;i<6;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==10)
{
a[0]="Balusseri";               
a[1]="Chelannur";       
a[2]="Koduvally";         
a[3]="Kunnamangalam"; 
a[4]="Kunnummal";
a[5]="Perambra";
a[6]="Thodannur";
a[7]="Thuneri";     
for(i=0;i<8;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==10)
{
a[0]="Ayancheri";               
a[1]="Kuttiadi";       
a[2]="Purameri";         
a[3]="Thiruvallur";
a[4]="Velom";
a[5]="Maniyur";
a[6]="Villiappally";      
for(i=0;i<7;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==11)
{
a[0]="Edavaka";               
a[1]="Panamaram";       
a[2]="Thavinhal";         
a[3]="Thirunelly";
a[4]="Mananthavady";
a[5]="Vellamunda";      
for(i=0;i<6;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==11)
{
a[0]="Ambalavayal";               
a[1]="Meenagadi";       
a[2]="Nenmeni";         
a[3]="Noolpuzha";
a[4]="Pulppalli";
a[5]="Poothadi";
a[6]="Sulthan Bethery";      
for(i=0;i<7;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==12)
{
a[0]="Anjarakkandi";               
a[1]="Azhikode";       
a[2]="Kaladi";         
a[3]="Chembilode"; 
a[4]="Cherukkunu";
a[5]="Chirakkal";     
for(i=0;i<6;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==12)
{
a[0]="Chittariparambu";               
a[1]="Chokli";       
a[2]="Dharmadam";         
a[3]="Koodali";
a[4]="Kottayam";
a[5]="Kottiyoor";      
for(i=0;i<6;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

if (document.form1.taluk.selectedIndex==0 && document.form1.district.selectedIndex==13)
{
a[0]="Badiadka";               
a[1]="Belloor";       
a[2]="Chemnad";         
a[3]="Delampady";
a[4]="Kuttikol";      
for(i=0;i<5;i++)
{
var newOpt1=new Option(a[i]);
document.form1.panchayat.options[i]=newOpt1;
}
}

else if (document.form1.taluk.selectedIndex==1 && document.form1.district.selectedIndex==13)
{
a[0]="Kumbala";               
a[1]="Meenja";       
a[2]="Puthige ";         
a[3]="Paivalike";
a[4]="Vorkady";
a[5]="Mangalpady ";      
for(i=0;i<6;i++)
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
        <table width="331" border="0">
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
                <p>
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
          </p>
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
