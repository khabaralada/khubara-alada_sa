<?php error_reporting(0);

//	include('session.php');  

 

?>
   
  
	<html><head>
	
 <style>
 thead{
    display: table-header-group;
}
</style>


<style>
  
</style>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: green;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar2 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #93cedc;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar2.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar3 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar3.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

  <style type=text/css>
 
 

.pagebreak {  page-break-before: always;
 }
</style>


 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>	 	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: right; background-attachment:fixed" background="bg.webp">
	<div align=center > 
  
	<html><head>
	
	 

	<LINK href="image/style.css" type=text/css rel=stylesheet>

<meta http-equiv="Content-Language" content="ar-sa">
<script type="text/javascript" src="stmenu.js"></script>
<script type="text/javascript" src="selectuser1.js"></script>
<LINK href="image/style.css" type=text/css rel=stylesheet>
	 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
  $branches_logo=$row8['branches_logo'];
 }
 ?>


<title><? echo $Branches_title_sms; ?>  </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>	 	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: right; background-attachment:fixed" background="bg.webp">
	<div align=center > 
<?
function d_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$day"; 
return $new_date; 
}
function m_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$month"; 
return $new_date; 
}

function y_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$year"; 
return $new_date; 
}

 

?><br>
<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from subjects,cors   where  cors.cors_ID=subjects.cors_ID and cors.ID='$section_Id'");
while($row=mysqli_fetch_array($result))
{
  $cors=$row['cors'];
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];

$d = d_date($start_date); // الدالة 
$m = m_date($start_date); // الدالة 
$y = y_date($start_date); // الدالة 



 
function HijriToJD($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}
$date = HijriToJD($d, $m, $y);
jdtogregorian($date);
$newDate = date("Y-m-d", strtotime(jdtogregorian($date))); 
 
 
$d = d_date($end_date); // الدالة 
$m = m_date($end_date); // الدالة 
$y = y_date($end_date); // الدالة 

function HijriToJD1($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}


$date = HijriToJD1($d, $m, $y);

  jdtogregorian($date);
  $newDate1 = date("Y-m-d", strtotime(jdtogregorian($date))); 




}
?> 

<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result5=mysqli_query($conn,"select distinct manth,year from absence  where  section_Id='$section_Id' order by manth,year");
$rows=mysqli_num_rows($result5) ; 
if($rows > 0 )
{

while($row5=mysqli_fetch_array($result5))
{
 
    $date3=$row5['year'];
     $date2=$row5['manth'];

 
	if($date2>12)
	{
$date2=1;
$date3++;
}
?>  
<table id="Table_01" width="100%" height="773" border="0" cellpadding="0" cellspacing="0" style="border-bottom-width: 0px">

	<tr>
		<td width="316" align="center" style="border-left-style: solid; border-left-width: 1px; border-top-style: solid; border-top-width: 1px">
			<div align="center">
				
			<div align="center">
						<img border="0" src="logo-01.png"   height="68" align="center">
			</div>
					 
</td>
		<td width="644" align="center" style="border-top-style: solid; border-top-width: 1px; border-bottom-style: none; border-bottom-width: medium">
			<p dir="rtl">
			<b><font size="3">بيان حضور المتدربيين للدورة لشهر
			<font color="#FF0000"><? echo $row5['manth']; ?></font> لعام <font color="#FF0000"><? echo $row5['year']; ?>			</font>
			هــ</font></b></td>
		<td   valign="top" width="9" align="center" style="border-top-style: solid; border-top-width: 1px">
			&nbsp;</td>
		<td   valign="top" width="248" align="center" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px">
			<img border="0" src="<? echo $branches_logo; ?>"  height="74"  ></td>
	</tr>

	<tr>
		<td   valign="top" width="960" colspan="2" style="border-left-style: solid; border-left-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="695">
			&nbsp;
			
			

			<div align="right">
			
			

<table border="1" width="99%" bordercolorlight="#EEEEEE" cellspacing="0" cellpadding="0" height="186" style="border-collapse: collapse">
				<thead><tr>
					<td colspan="31" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الأسبوع</font></td>
					<td align="center" rowspan="3" width="84" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">الجوال</font></td>
					<td align="center" rowspan="3" width="84" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">رقم الهوية</font></td>
					<td align="center" rowspan="3" width="223" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">اسم المتدرب/ة</font></td>
					<td align="center" rowspan="3" width="22" bgcolor="#CCCCCC" height="51">
					<font color="#000000" size="2">م</font></td>
				</tr>
				<tr>
					<td colspan="3" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الخامس</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الرابع</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الثالث</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الثاني</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الاول</font></td>
				</tr>
				<tr>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080">31</font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080">30</font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">29</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">28</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">27</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">26</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">25</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">24</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">23</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">22</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">21</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">20</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">19</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">18</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">17</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">16</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">15</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">14</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">13</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">12</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">11</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">10</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">9</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">8</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">7</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">6</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">5</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">4</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">3</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">2</span></font></td>
					<td align="center" width="28" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">1</span></font></td>
				</tr></thead>
										<?

include ("conn.php");
$c1=0;
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from stu_sec,student  where student.stu_id=stu_sec.stu_id and section_Id='$section_Id'");
while($row=mysqli_fetch_array($result))
{
$c1++;
    $ID_reg=$row['ID_reg'];

?>
<tr>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-31'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-31'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-30'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-30'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-29'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-29'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-28'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-28'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-27'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-27'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-26'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-26'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26">  <?
$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-25'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-25'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-24'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-24'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-23'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-23'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-22'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-22'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-21'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-21'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-20' ");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-20'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-19'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-19'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-18'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-18'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-17'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-17'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-16'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-16'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-15'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-15'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-14'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-14'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-13'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-13'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-12'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-12'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-11'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-11'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-10'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-10'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-09'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-09'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-08'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-08'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-07'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-07'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-06'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?>
<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-06'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-05'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-05'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-04'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-04'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-03'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-03'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-02'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-02'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="28" height="26">
<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-01'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}

?>

<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-01'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?>
</td>
					<td align="center" width="84" height="26">
					<font size="2" color="#000000">
					<? echo $row['mobile']; ?></font></td>
					<td align="center" width="84" height="26">
					<font size="2" color="#000000"><? echo $row['iqama']; ?></font></td>
					<td align="center" width="223" height="26">	<p align="right"><span lang="en-us">	<font color="#000000" style="font-size: 9pt">
					<? echo $row['stu_name_ar']; ?></font></span></td>
					<td align="center" width="22" height="26"><span lang="en-us">
					<font size="2" color="#000000"><? echo $c1; ?></font></span></td>
				</tr>
				<? } ?>
				<? for($v=$c1+1;$v<=20;$v++) { ?><tr>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="28" height="26">
&nbsp;</td>
					<td align="center" width="84" height="26">	&nbsp;</td>
					<td align="center" width="84" height="26">	&nbsp;</td>
					<td align="center" width="223" height="26">	&nbsp;</td>
					<td align="center" width="22" height="26"><font size="2" color="#000000"><? echo $v; ?></font></span></td>
				</tr><? } ?>
				<tr>
					<td align="center" width="69" height="39" colspan="3">&nbsp;</td>
					<td align="center" width="161" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="167" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="168" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="172" height="39" colspan="7">&nbsp;</td>
					<td align="center" colspan="4" height="39">
					<font size="2" color="#000000">توقيع المدرب/ة *1</font></td>
				</tr>
				<tr>
					<td align="center" height="38" colspan="3">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="4" height="38">
					<font size="2" color="#000000">توقيع مدير/ة المنشآة *2</font></td>
				</tr>
				</table>
					 
			</div>
					 
</td>
		<td   valign="top" width="9" style="border-bottom-style: solid; border-bottom-width: 1px" height="695">
			&nbsp;</td>
		<td   valign="top" width="248" style="border-right-style: solid; border-right-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="695">
			<div align="center">
&nbsp;
<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from subjects,cors   where  cors.cors_ID=subjects.cors_ID and cors.ID='$section_Id'");
while($row=mysqli_fetch_array($result))
{
 $traning_name=$row['traning_name'];
   $Branches=$row['Branches'];
?>
<table border="1" width="98%" cellspacing="0" cellpadding="0" height="384">
					<tr>
						<td colspan="2" bgcolor="#000000" height="39">
						<p align="center"><b>
						<font color="#FFFFFF" size="4" face="Arial">تفاصيل 
						الدورة</font></b></td>
					</tr>
					<tr>
						<td colspan="2" align="center" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						مسمي الدورة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000"> <? echo $row['cors_name']; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font face="Tahoma" size="2" color="#000000">رقم 
						الدورة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
							  <? echo $row['cors_no']; ?> </font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						المدة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $row['contact_hours']; ?> <? if($row['cors']!="دورة تأهلية" )echo " يوم"; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						الفترة</font></td>
					</tr>
					<tr>
						<td align="center" width="118" dir="rtl">
						<font size="2" face="Tahoma" color="#000000">
						إلي</font></td>
						<td align="center" width="114" dir="rtl">
						<font size="2" face="Tahoma" color="#000000">من</font></td>
					</tr>
					<tr>
						<td align="center" width="118" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $row['end_date']; ?><br><? echo $newDate1; ?></font></span></td>
						<td align="center" width="114" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $xx=$row['start_date']; ?><br><? echo $newDate; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						الوقت</font></td>
					</tr>
					<tr>
						<td align="center" width="118">
						<font face="Tahoma" size="4" color="#FF0000">
						<input type="checkbox"    disabled name="C2" value="ON" checked ></font><font face="Tahoma" size="2" color="#000000">مسائي</font></td>
						<td align="center" width="114">
						<font face="Tahoma" size="4" color="#FF0000">
						<input type="checkbox"     disabled name="C1" value="ON"></font><font face="Tahoma" size="2" color="#000000">صباحي</font></td>
					</tr>
					<? if($row['com']!="") { ?> <tr>
						<td align="center" width="232" colspan="2" bgcolor="#999999">
						الشركة</td>
					</tr>
					<tr>
						<td align="center" width="232" colspan="2">
						<b><? echo $row['com']; ?></b></td>
					</tr><? } ?>
				</table><? } ?>
				<p>&nbsp;</p>
				<div align="center">
					<table border="1" width="98%" cellspacing="0" cellpadding="0" height="79">
						<tr>
							<td align="right"><span lang="en-us">
							<font face="Tahoma" style="font-size: 9pt" color="#FF0000">
						 
							
							<?
include ("conn.php");
$result=mysqli_query($conn,"select* from teacher where teacher_id='$traning_name'");
while($row=mysqli_fetch_array($result))
{
  echo $row['teacher_name']; 
  }
?>

</font></span></td>
							<td align="right" width="79">
							<font face="Tahoma" color="#000000" style="font-size: 9pt">
							<? 
if($Branches==1)
echo 'مدرب'; 
if($Branches==2)
echo 'مدرب';
if($Branches==3)
echo 'مدربة';

?> الدورة</font></td>
						</tr>
						<tr>
							<td align="right"><span lang="en-us">
							<font face="Tahoma" style="font-size: 9pt" color="#FF0000">
 
 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID='$Branches'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    echo  $row8['mang_name2'];
 
 }
 ?>

 
</font></span></td>
							<td align="right" width="79">
							<font face="Tahoma" color="#000000" style="font-size: 9pt">
							<? 
if($Branches==1)
echo 'مدير'; 
if($Branches==2)
echo 'مدير';
if($Branches==3)
echo 'مديرة';

?> المنسآة </font></td>
						</tr>
					</table>
					
					<p>&nbsp;</p>
					<p dir="rtl" align="right"><u><b>
					<font size="2" color="#000000"><span lang="en-us">&nbsp;</span>ملاحظة</font></b></u></p>
					<p align="right" dir="rtl"><font size="2" color="#000000">
					<span lang="en-us">&nbsp; </span>(1) توقيع <? 
if($Branches==1)
echo 'مدرب'; 
if($Branches==2)
echo 'مدرب';
if($Branches==3)
echo 'مدربة';

?> الدورة بشكل 
					يومي</font></p>
					<p align="right" dir="rtl"><font size="2" color="#000000">
					<span lang="en-us">&nbsp; </span>(2) توقيع <? 
if($Branches==1)
echo 'مدير'; 
if($Branches==2)
echo 'مدير';
if($Branches==3)
echo 'مديرة';

?> المنشآة بشكل 
					أسبوعي</font></div>
			</div>
					 
</td>
	</tr>

	</table><br><div class="pagebreak"> </div>
<? 
	$date2++;

}} else { ?>
<table id="Table_01" width="100%" height="773" border="0" cellpadding="0" cellspacing="0" style="border-bottom-width: 0px">

	<tr>
		<td width="316" align="center" style="border-left-style: solid; border-left-width: 1px; border-top-style: solid; border-top-width: 1px">
			<div align="center">
				
			<div align="center">
						<div align="left">
						
					 
							<table border="0" width="102%" cellspacing="0" cellpadding="0">
								<tr>
									<td valign="bottom">
									<p align="center">

										<font face="Droid Arabic Kufi">

										<img border="0" src="logo-01.png"   height="68" align="center"></font></td>
								</tr>
							</table>
 

						</div>
			</div>
					 
</td>
		<td width="644" align="center" style="border-top-style: solid; border-top-width: 1px; border-bottom-style: none; border-bottom-width: medium">
			<p dir="rtl">
			<b><font size="3">بيان حضور المتدربيين للدورة لشهر
			<font color="#FF0000"><? echo $row5['manth']; ?></font> 
			<span lang="en-gb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			لعام <font color="#FF0000"><? echo $row5['year']; ?>			
			<span lang="en-gb">&nbsp;&nbsp;&nbsp;&nbsp; 20 </span>			</font>
			م</font></b></td>
		<td   valign="top" width="9" align="center" style="border-top-style: solid; border-top-width: 1px">
			&nbsp;</td>
		<td   valign="bottom" width="248" align="center" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px">
			<img border="0" src="<? echo $branches_logo; ?>" width="220" height="74"  ></td>
	</tr>

	<tr>
		<td   valign="top" width="960" colspan="2" style="border-left-style: solid; border-left-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="695">
			&nbsp;
			
			

			<div align="right">
			
			

<table border="1" width="99%" bordercolorlight="#EEEEEE" cellspacing="0" cellpadding="0" height="186" style="border-collapse: collapse">
				<thead><tr>
					<td colspan="31" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الأسبوع</font></td>
					<td align="center" rowspan="3" width="84" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">الجوال</font></td>
					<td align="center" rowspan="3" width="84" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">رقم الهوية</font></td>
					<td align="center" rowspan="3" width="223" bgcolor="#CCCCCC" height="51">
					<font size="2" color="#000000">اسم المتدرب/ة</font></td>
					<td align="center" rowspan="3" width="22" bgcolor="#CCCCCC" height="51">
					<font color="#000000" size="2">م</font></td>
				</tr>
				<tr>
					<td colspan="3" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الخامس</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الرابع</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الثالث</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الثاني</font></td>
					<td colspan="7" align="center" bgcolor="#CCCCCC" height="13">
					<font size="2" color="#000000">الاول</font></td>
				</tr>
				<tr>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080">31</font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080">30</font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">29</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">28</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">27</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">26</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">25</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">24</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">23</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">22</span></font></td>
					<td align="center" width="23" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">21</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">20</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">19</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">18</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">17</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">16</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">15</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">14</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">13</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">12</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">11</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">10</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">9</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">8</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">7</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">6</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">5</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">4</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">3</span></font></td>
					<td align="center" width="24" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">2</span></font></td>
					<td align="center" width="28" height="23" dir="rtl">
					<font color="#000080"><span lang="en-us">1</span></font></td>
				</tr></thead>
										<?

include ("conn.php");
$c1=0;
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from stu_sec,student  where student.stu_id=stu_sec.stu_id and section_Id='$section_Id'");
while($row=mysqli_fetch_array($result))
{
$c1++;
    $ID_reg=$row['ID_reg'];

?>
<tr>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-31'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-31'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-30'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-30'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-29'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-29'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-28'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-28'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-27'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-27'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-26'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-26'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26">  <?
$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-25'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-25'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-24'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-24'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-23'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-23'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-22'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-22'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-21'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-21'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-20' ");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-20'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-19'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-19'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-18'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-18'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-17'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-17'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-16'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-16'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-15'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-15'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-14'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-14'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-13'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-13'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-12'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-12'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-11'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-11'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-10'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-10'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-09'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-09'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-08'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-08'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-07'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-07'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-06'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?>
<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-06'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-05'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-05'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-04'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-04'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-03'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-03'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					
					<td align="center" width="24" height="26"><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-02'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}


?><?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-02'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?></td>
					<td align="center" width="28" height="26">
<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date3-$date2-01'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
}

?>

<?

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date3-$date2-01'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}
?>
</td>
					<td align="center" width="84" height="26">
					<font size="2" color="#000000">
					<? echo $row['mobile']; ?></font></td>
					<td align="center" width="84" height="26">
					<font size="2" color="#000000"><? echo $row['iqama']; ?></font></td>
					<td align="center" width="223" height="26">	<p align="right"><span lang="en-us">	<font color="#000000" style="font-size: 9pt">
					<? echo $row['stu_name_ar']; ?></font></span></td>
					<td align="center" width="22" height="26"><span lang="en-us">
					<font size="2" color="#000000"><? echo $c1; ?></font></span></td>
				</tr>
				<? } ?>
				<? for($v=$c1+1;$v<=20;$v++) { ?><tr>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="24" height="26">&nbsp;</td>
					
					<td align="center" width="24" height="26">&nbsp;</td>
					<td align="center" width="28" height="26">
&nbsp;</td>
					<td align="center" width="84" height="26">	&nbsp;</td>
					<td align="center" width="84" height="26">	&nbsp;</td>
					<td align="center" width="223" height="26">	&nbsp;</td>
					<td align="center" width="22" height="26"><font size="2" color="#000000"><? echo $v; ?></font></span></td>
				</tr><? } ?>
				<tr>
					<td align="center" width="69" height="39" colspan="3">&nbsp;</td>
					<td align="center" width="161" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="167" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="168" height="39" colspan="7">&nbsp;</td>
					<td align="center" width="172" height="39" colspan="7">&nbsp;</td>
					<td align="center" colspan="4" height="39">
					<font size="2" color="#000000">توقيع المدرب/ة *1</font></td>
				</tr>
				<tr>
					<td align="center" height="38" colspan="3">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="7" height="38">&nbsp;</td>
					<td align="center" colspan="4" height="38">
					<font size="2" color="#000000">توقيع مدير/ة المنشآة *2</font></td>
				</tr>
				</table>
					 
			</div>
					 
</td>
		<td   valign="top" width="9" style="border-bottom-style: solid; border-bottom-width: 1px" height="695">
			&nbsp;</td>
		<td   valign="top" width="248" style="border-right-style: solid; border-right-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="695">
			<div align="center">
&nbsp;
<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from subjects,cors   where  cors.cors_ID=subjects.cors_ID and cors.ID='$section_Id'");
while($row=mysqli_fetch_array($result))
{
 $traning_name=$row['traning_name'];
   $Branches=$row['Branches'];
?>
<table border="1" width="98%" cellspacing="0" cellpadding="0" height="384">
					<tr>
						<td colspan="2" bgcolor="#000000" height="39">
						<p align="center"><b>
						<font color="#FFFFFF" size="4" face="Arial">تفاصيل 
						الدورة</font></b></td>
					</tr>
					<tr>
						<td colspan="2" align="center" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						مسمي الدورة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000"> <? echo $row['cors_name']; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font face="Tahoma" size="2" color="#000000">رقم 
						الدورة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
							  <? echo $row['cors_no']; ?> </font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						المدة</font></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $row['contact_hours']; ?> <? if($row['cors']!="دورة تأهلية" )echo " يوم"; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						الفترة</font></td>
					</tr>
					<tr>
						<td align="center" width="118" dir="rtl">
						<font size="2" face="Tahoma" color="#000000">
						إلي</font></td>
						<td align="center" width="114" dir="rtl">
						<font size="2" face="Tahoma" color="#000000">من</font></td>
					</tr>
					<tr>
						<td align="center" width="118" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $row['end_date']; ?><br><? echo $newDate1; ?></font></span></td>
						<td align="center" width="114" dir="rtl"><span lang="en-us">
						<font face="Tahoma" size="2" color="#FF0000">
						<? echo $xx=$row['start_date']; ?><br><? echo $newDate; ?></font></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2" dir="rtl" bgcolor="#999999">
						<font size="2" face="Tahoma" color="#000000">
						الوقت</font></td>
					</tr>
					<tr>
						<td align="center" width="118">
						<font face="Tahoma" size="4" color="#FF0000">
						<input type="checkbox"    disabled name="C2" value="ON" checked ></font><font face="Tahoma" size="2" color="#000000">مسائي</font></td>
						<td align="center" width="114">
						<font face="Tahoma" size="4" color="#FF0000">
						<input type="checkbox"     disabled name="C1" value="ON"></font><font face="Tahoma" size="2" color="#000000">صباحي</font></td>
					</tr>		<? if($row['com']!="") { ?> <tr>
						<td align="center" width="232" colspan="2" bgcolor="#999999">
						الشركة</td>
					</tr>
					<tr>
						<td align="center" width="232" colspan="2">
						<b><? echo $row['com']; ?></b></td>
					</tr><? } ?>
				</table><? } ?>
				<p>&nbsp;</p>
				<div align="center">
					<table border="1" width="98%" cellspacing="0" cellpadding="0" height="79">
						<tr>
							<td align="right"><span lang="en-us">
							<font face="Tahoma" style="font-size: 9pt" color="#FF0000">
						 
							
							<?
include ("conn.php");
$result=mysqli_query($conn,"select* from teacher where teacher_id='$traning_name'");
while($row=mysqli_fetch_array($result))
{
  echo $row['teacher_name']; 
  }
?>

</font></span></td>
							<td align="right" width="79">
							<font face="Tahoma" color="#000000" style="font-size: 9pt">
							<? 
if($Branches==1)
echo 'مدرب'; 
if($Branches==2)
echo 'مدرب';
if($Branches==3)
echo 'مدربة';

?> الدورة</font></td>
						</tr>
						<tr>
							<td align="right"><span lang="en-us">
							<font face="Tahoma" style="font-size: 9pt" color="#FF0000">
 

 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID='$Branches'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    echo  $row8['mang_name2'];
 
 }
 ?>
</font></span></td>
							<td align="right" width="79">
							<font face="Tahoma" color="#000000" style="font-size: 9pt">
							<? 
if($Branches==1)
echo 'مدير'; 
if($Branches==2)
echo 'مدير';
if($Branches==3)
echo 'مديرة';

?> المنسآة </font></td>
						</tr>
					</table>
					
					<p>&nbsp;</p>
					<p dir="rtl" align="right"><u><b>
					<font size="2" color="#000000"><span lang="en-us">&nbsp;</span>ملاحظة</font></b></u></p>
					<p align="right" dir="rtl"><font size="2" color="#000000">
					<span lang="en-us">&nbsp; </span>(1) توقيع <? 
if($Branches==1)
echo 'مدرب'; 
if($Branches==2)
echo 'مدرب';
if($Branches==3)
echo 'مدربة';

?> الدورة بشكل 
					يومي</font></p>
					<p align="right" dir="rtl"><font size="2" color="#000000">
					<span lang="en-us">&nbsp; </span>(2) توقيع <? 
if($Branches==1)
echo 'مدير'; 
if($Branches==2)
echo 'مدير';
if($Branches==3)
echo 'مديرة';

?> المنشآة بشكل 
					أسبوعي</font></div>
			</div>
					 
</td>
	</tr>

	</table><br><br><? 
	$date2++;

  ?><? } ?>
</div> 
</body>
</html>
 <br>

 
</div> 
</body>
</html>
 