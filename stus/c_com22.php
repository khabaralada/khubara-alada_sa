<?php
error_reporting(0);

 
?>
	
	<html>
<head>

	  <meta http-equiv="Content-Language" content="en-us">

<style>

 @page {
 
   margin: 0 0 0 0;
}

html { 
  background: url(bg2.webp) no-repeat 
    center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



body {
 
 

 
 
 	 background-image: url("bg2.webp");  
 	
    background-size:   cover;                      /* <------ */
    background-repeat: no-repeat;
    background-position: center center; }
    
    
    @media print {
  body {
    zoom: 85%;
  }
}
 
 
  @page {
  size: A4 landscape;
}
 

</style>


<title>برنامج شؤون الطلاب</title>
<script type="text/javascript" src="stmenu.js"></script><script type="text/javascript" src="stmenu.js"></script><script type="text/javascript" src="stmenu.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		margin-top:100px;
 margin-bottom:100px;
 margin-right:50px;
 margin-left:50px;
		.auto-style1 {
			font-family: "Sakkal Majalla";
		}
		.auto-style2 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
			font-size: 18pt;
		}
		.auto-style3 {
			font-weight: bold;
		}
		.auto-style4 {
			font-family: "Sakkal Majalla";
			font-size: 18pt;
		}
		.auto-style5 {
			font-size: 18pt;
		}
		.auto-style6 {
			font-size: 18pt;
			font-weight: bold;
		}
		.auto-style7 {
			font-size: 20pt;
			font-weight: bold;
		}
		.auto-style8 {
			text-align: center;
			font-family: "Sakkal Majalla";
			font-size: 14pt;
			color: #09058B;
		}
		.auto-style10 {
			font-size: 12pt;
		}
		.auto-style12 {
			color: maroon;
			font-family: "Sakkal Majalla";
		}
		.auto-style13 {
			font-size: 14pt;
		}
		.auto-style14 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
			font-size: 18pt;
			text-align: left;
		}
		.auto-style15 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
			font-size: 18pt;
			text-align: center;
		}
		.auto-style16 {
			font-size: 16pt;
		}
		.auto-style17 {
			text-align: center;
		}
		.auto-style18 {
			font-size: 16pt;
			font-weight: bold;
		}
		</style>
 
<body onLoad="init()">
</head>
	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align =center >
 <?
$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
?>
<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table2">
						<tr>
							<td>
								 
							 
								</legend><div align="center">
							 


								<div align="center">
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
?>		<?

include ("conn.php");
$i=0;
  $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8"));

$result=mysqli_query($conn,"select* from stu_sec,cors,student,subjects where subjects.cors_ID=cors.cors_ID and   stu_sec.stu_id=student.stu_id and ID_reg='$ID_reg' and cors.ID=section_Id");
while($row=mysqli_fetch_array($result))
{
      $pran=$row['Branches'];
 
 
 
 
 



?>													 

<?php
  $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8"));


$result1=mysqli_query($conn,"select count(stu_id) as co1 from stu_sec where stu_id='$row[iqama]' and cors_type='لغة صينية' and ID_reg<='$ID_reg'");
while($row1=mysqli_fetch_array($result1))
{
   //$co1=$row1['co1'];
   $co1=1;
}
?>


<?php
$result1=mysqli_query($conn,"select* from stu_sec,cors,student,subjects where subjects.cors_ID=cors.cors_ID and   
stu_sec.stu_id=student.stu_id and stu_sec.stu_id='$row[iqama]' and cors.ID=section_Id order by ID_reg DESC  ");
while($row1=mysqli_fetch_array($result1))
{
   $l_cors_name=$row1['cors_name'];
}
 
?>

			
	<table border="1" dir=ltr width="94%" id="table1" cellspacing="0" bordercolor="#E4E4E4" height="884" cellpadding="0" bordercolorlight="#FFFFFF" style="border-width: 0px">

		
									<tr>
										<td dir="rtl" height="161" style="border-style: none; border-width: medium">
										<div align="center">
										<table border="0" width="100%" cellspacing="0" cellpadding="0" height="153" style="border-bottom-width: 0px">
											<tr>
												<td width="373" style="border-bottom-style: none; border-bottom-width: medium">
												&nbsp;</td>
												<td   style="border-bottom-style: none; border-bottom-width: medium">
												
											 
												&nbsp;</td>
												<td width="369" style="border-bottom-style: none; border-bottom-width: medium">
										
												&nbsp;</td>
											</tr>
											<tr>
												<td width="373" style="border-bottom-style: none; border-bottom-width: medium">
												&nbsp;</td>
												<td   style="border-bottom-style: none; border-bottom-width: medium">
												
											 
												&nbsp;</td>
												<td width="369" style="border-bottom-style: none; border-bottom-width: medium">
										
												&nbsp;</td>
											</tr>
											<tr>
												<td width="373" style="border-bottom-style: none; border-bottom-width: medium"> 

																															
											 
												
												
												
												<table cellpadding="0" cellspacing="0" style="width: 100%">
													<tr>
														<td class="auto-style8">
														&nbsp;</td>
													</tr>
													<tr>
														<td class="auto-style8">
														<strong>المملكة العربية 
														السعودية</strong></td>
													</tr>
													<tr>
														<td class="auto-style8">
														<strong> وزارة 
														التعليم</strong></td>
													</tr>
													<tr>
														<td class="auto-style8">
														<strong> وكالة التعليم العام الاهلي</strong></td>
													</tr>													<tr>
														<td class="auto-style8">
														<strong>مكتب التعليم العالمي والأجنبي بالرياض</strong></td>
													</tr>

													<?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID='$pran'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 

												{
												
$Branches_title2=$row8['Branches_title2'];
$Branches_title2_en=$row8['Branches_title2_en'];												
$mang_name2_en=$row8['mang_name2'];
$job2=$row8['job2'];
$name2=$row8['name2'];
 $branches_logo=$row8['branches_logo'];
												?>
<tr>
														<td class="auto-style8">
														<strong><? echo $Branches_title2=$row8['Branches_title2']; ?>
</strong></td>
													</tr>
													<tr>
														<td class="auto-style8">
														<strong>ترخيص رقم ( 
														<? echo $row8[English_license]; ?> )</strong></td>
													</tr>	 <? } ?>
												</table>
												</td>
												<td   style="border-bottom-style: none; border-bottom-width: medium">
												
											 
												<div align="center">
												
											 <img border="0" src="logomo.png"     width="200"    >
												 </div>
												</td>
												<td width="369" style="border-bottom-style: none; border-bottom-width: medium">
										
												<div align="right">
													<table border="0" width="66%" cellspacing="0" cellpadding="0">
														<tr>
															<td>
												 
 
															<img border="0" src="<? echo $branches_logo; ?>"  height="100" align="left"    > </td>
														</tr>
													</table>
													</div>
										
												</td>
											</tr>
										</table>
										</div>
										</td>
									</tr>
					
	
									<tr>
										<td dir="rtl"   style="border-style: none; border-width: medium" height="71">
										<p class="MsoBodyText" align="center" dir="RTL" style="margin-left:-27.0pt;
text-align:center;line-height:normal"><font color="#000080">
										<img border="0" src="3333.PNG"   height="56"><span lang="AR-SA" style="font-size:30.0pt;font-family:FS_Naskh_Ahram">
										</span></font></td>
									</tr>

								<?

 
$ss_date=$row['start_date'];
$ee_date=$row['end_date'];

$ss_date_en=$row['start_date_en'];
$ee_date_en=$row['end_date_en'];



$eee_date=$row['iqama_date'];
$date1 = d_date($ss_date); // الدالة 
$date2 = m_date($ss_date); // الدالة 
$date3 = y_date($ss_date); // الدالة 


$date11 = d_date($ee_date); // الدالة 
$date22 = m_date($ee_date); // الدالة 
$date33 = y_date($ee_date); // الدالة 

$date111 = d_date($eee_date); // الدالة 
$date222 = m_date($eee_date); // الدالة 
$date333 = y_date($eee_date); // الدالة 



$date_en11 = d_date($ss_date_en); // الدالة 
$date_en22 = m_date($ss_date_en); // الدالة 
$date_en33 = y_date($ss_date_en); // الدالة 

$date_en111 = d_date($ee_date_en); // الدالة 
$date_en222 = m_date($ee_date_en); // الدالة 
$date_en333 = y_date($ee_date_en); // الدالة 

?>
<tr>
										<td dir="rtl"  style="border-style: none; border-width: medium">
										<div align="center">
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="auto-style3" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style4">
													
													
													
													يفيد <?  echo $Branches_title2; 	?> بأن												
												
												</span></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style17">
													 
													<span class="auto-style16">
													
													
														
													<? if($pran==3)
												{
?>

													<?  echo $Branches_title2_en; 	?> hereby certifies that ,<?
												}
												else
												{
												?>
<?  echo $Branches_title2_en; 	?> Certifies That,													<?
												}
												?>




 												   </span>




 </td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style2">
													الدارس<? if($pran==3)
												{
												echo 'ة';
												}
												else
												{
												echo '';
												}
												?>/</span><span lang="AR-SA" dir="LTR" style="color: #4472D8" class="auto-style2">
													</span>
													<span lang="AR-SA" style="color: #4472D8" class="auto-style2">
													<? echo $row['stu_name_ar']; ?></span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><b><span lang="EN-US" dir="LTR" style="font-size:15.0pt;line-height:150%;font-family:&quot;Vijaya&quot;,&quot;sans-serif&quot;">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><b><span lang="EN-US" dir="LTR" style="font-size:15.0pt;line-height:150%;font-family:&quot;Vijaya&quot;,&quot;sans-serif&quot;">
													<? if($pran==3)
												{
												echo 'Trainee';
												}
												else
												{
												echo 'Trainee';
												}
												?>. <span class="auto-style20"> <? echo strtoupper($row['stu_name_en']); ?>
													</span>&nbsp;&nbsp;&nbsp;
													</span></b>&nbsp;&nbsp;&nbsp;
													</span></b></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style2">
													 </span><span lang="AR-SA" dir="LTR" style="color: black" class="auto-style2">
													</span>
													<span lang="AR-SA" style="color:#4472D8" class="auto-style6">
													&nbsp;</span><span lang="AR-SA" style="color:#4472D8" class="auto-style2">
													
													
													<? echo $nat=$row['Nationality']; ?><? if($pran==3 and $row['Nationality']!='بدون')
												{
												echo 'ة ';
												}
												else
												{
												echo ' ';
												}
												?>
													
													 &nbsp;</span><span lang="AR-SA" class="auto-style2">الجنسية</span><span lang="AR-SA" style="color:#4472D8" class="auto-style2"> </span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:
150%">
													<span lang="EN-US" dir="LTR" style="line-height:150%" class="auto-style16"><font color="#4472D8">Nationality: <? 
$result1=mysqli_query($conn,"select* from nat where nat='$nat'");
while($row1=mysqli_fetch_array($result1))
{
echo ucfirst($row1['nat_en']);

} ?></font>&nbsp; &nbsp; </span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">
<? 
 

if($pran!=3) 
{

echo 'رقم الهوية';
}
else {  
												
if($nat=='سعودي')	
echo 'بموجب السجل المدني';
else
echo 'بموجب اقامة رقم' ;
  }
   ?>
													
													</span><span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6"> 
													/</span><font color="#4472D8"><span lang="AR-SA" style="line-height: 150%; " class="auto-style5"> </span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
													
													<? echo str_replace($western_arabic, $eastern_arabic,$row['iqama']); ?> 
													
													
													
													
													</span>
													 </font>
													<span style="line-height: 150%; " class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													
													
													
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
											<? if($pran==3){ ?>		
													وتاريخ  : <span class="auto-style18"><? echo str_replace($western_arabic, $eastern_arabic,$row['iqama_date']); ?></span><? } ?><font color="#4472D8">
													</font>
													
													
													
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">&nbsp; 
													</span></font></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													
													<?
 

if($pran!=3) 
{

echo 'ID No :';
}
else {  
												
if($nat=='سعودي')	
echo 'ID No : ';
else
echo 'ID No : ' ;
  }
   ?>
/
													<? echo $row['iqama']; ?> 
													</span> 
					<? if($pran==3){ ?><span class="auto-style16">&nbsp;&nbsp; Date:<span class="auto-style18"><? echo $row['iqama_date']; ?></span></span><? } ?></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style7">
													قد <?   

if($pran==3)
												{
												echo 'أكملت';
												}
												else
												{
												echo 'اجتاز';
												}
												?></span><span style="line-height: 150%; color: black; direction: LTR" lang="en-gb" class="auto-style7">
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style7">
													  دورة &nbsp;( اللغة الصينية ) للمستويات</span></font></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align: center; line-height: 150%" dir="RTL">
													<span style="font-size: 14pt; line-height: 150%; font-family: Vijaya,sans-serif" dir="LTR">
													<b>Has completed a  Course  
													in ( Chinese Language ) Levels&nbsp; 
													&nbsp;</b></span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6">
													&nbsp;</span><font color="#4472D8"><span lang="AR-SA" style="line-height: 150%; " class="auto-style5"> </span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
													
													<? if($co1>1) { echo $l_cors_name; } ?>
																											<? if($co1>1) echo ' – '; ?>
<? echo $level1=$row['cors_name']; ?></span></font>
													<span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6">
													&nbsp; </span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">
													بواقع 	<? echo str_replace($western_arabic, $eastern_arabic,$row['credits']*$co1); ?> ساعة من أصل 
													
<?  

 
 
echo str_replace($western_arabic, $eastern_arabic,$row['credits']*$co1);
 
 
?> 
													ساعة</span></font></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" style="text-align: center; line-height: 150%; direction: ltr; unicode-bidi: embed">
													<span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													 
													<span style="color: #4472C4">
												
<? if($co1>1) {
?> 
 

															<? if($l_cors_name=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($l_cors_name=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($l_cors_name=='التأسيسي')   echo 'Foundation'; ?>
														<? if($l_cors_name=='الأول')   echo 'I'; ?>
														<? if($l_cors_name=='الثاني')   echo 'II'; ?>
														<? if($l_cors_name=='الثالث')   echo 'III'; ?>
														<? if($l_cors_name=='الرابع')   echo 'IV'; ?>
														<? if($l_cors_name=='الخامس')   echo 'V'; ?>
														<? if($l_cors_name=='السادس')   echo 'VI'; ?>
														<? if($l_cors_name=='السابع')   echo 'VII'; ?>
														<? if($l_cors_name=='الثامن')   echo 'VIII'; ?>
														<? if($l_cors_name=='التاسع')   echo 'IX'; ?>
														<? if($l_cors_name=='العاشر')   echo 'X'; ?>
														<? if($l_cors_name=='الحادي عشر')   echo 'XI'; ?>
														<? if($l_cors_name=='الثاني عشر')   echo 'XII'; ?>
														<? if($l_cors_name=='دورة أطفال')   echo "Children's course"; ?>
<? } ?>

														
														<? if($co1>1) echo ' – '; ?>
														
															<? if($row['cors_name']=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($row['cors_name']=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($row['cors_name']=='التأسيسي')   echo 'Foundation'; ?>
														<? if($row['cors_name']=='الأول')   echo 'I'; ?>
														<? if($row['cors_name']=='الثاني')   echo 'II'; ?>
														<? if($row['cors_name']=='الثالث')   echo 'III'; ?>
														<? if($row['cors_name']=='الرابع')   echo 'IV'; ?>
														<? if($row['cors_name']=='الخامس')   echo 'V'; ?>
														<? if($row['cors_name']=='السادس')   echo 'VI'; ?>
														<? if($row['cors_name']=='السابع')   echo 'VII'; ?>
														<? if($row['cors_name']=='الثامن')   echo 'VIII'; ?>
														<? if($row['cors_name']=='التاسع')   echo 'IX'; ?>
														<? if($row['cors_name']=='العاشر')   echo 'X'; ?>
														<? if($row['cors_name']=='الحادي عشر')   echo 'XI'; ?>
														<? if($row['cors_name']=='الثاني عشر')   echo 'XII'; ?>
														<? if($row['cors_name']=='دورة أطفال')   echo "Children's course"; ?>

														
														</span>Rate <? echo $row['credits']*$co1; ?><span style="color:#002060"> 
													hours</span> <? if($pran==3) echo ' / '; else echo 'out of '; ?> <?  
 

 
echo $row['credits']*$co1;
 
 
?>  
													hours</span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" dir="RTL" align="center">
													<span lang="AR-SA" style="color:black" class="auto-style2">من تاريخ </span>
													<span lang="EN-US" dir="LTR" style="color: black" class="auto-style2">
													&nbsp;&nbsp;</span><span lang="AR-SA" style="color:black" class="auto-style2">:
													</span>
													<span lang="AR-SA" dir="LTR" style="color: #4472D8" class="auto-style2">
													&nbsp;</span><span lang="EN-US" dir="LTR" style="color: #4472D8" class="auto-style5">



</span><span lang="EN-US" dir="LTR" style="color: #4472D8">
													
													
 
													
													
																																	<span class="auto-style2">
													
													
 
													
													
																																	<? 
										
										echo str_replace($western_arabic, $eastern_arabic,$date3.'/'.$date2.'/'.$date1);

?>



													</span>



</span><font color="#4472D8"><span lang="AR-SA" class="auto-style2"> هـ</span></font><span lang="AR-SA" style="color: #002060" class="auto-style2">
													</span>
													<span lang="AR-SA" dir="LTR" style="color: #002060" class="auto-style2">
													&nbsp;</span><span lang="AR-SA" style="color: #002060" class="auto-style2">&nbsp;</span><span lang="AR-SA" dir="LTR" style="color: #002060" class="auto-style2">&nbsp;</span><span lang="AR-EG" style="color: black" class="auto-style2">إلي تاريخ</span><span lang="AR-SA" style="color: #002060" class="auto-style2">:
													</span>
													<span lang="EN-US" dir="LTR" style="color: #4472D8" class="auto-style2">
													<? echo str_replace($western_arabic, $eastern_arabic,$date33.'/'.$date22.'/'.$date11); ?></span>
													<span lang="AR-SA" style="color: #4472D8" class="auto-style2">
													هـ</span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" style="text-align: center; line-height: 150%; direction: ltr; unicode-bidi: embed">
													<span lang="EN-US" style="line-height: 150%" class="auto-style16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 <? if($pran==3) {?>From <? } else { ?>From Date<? } ?></span><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">:&nbsp;
													<span style="color: #4472C4">
													<?
//echo $row['start_date_en'];
 
 ?>
 <? if($pran==3)
 echo  $date3.'/'.$date2.'/'.$date1;
 else
 echo $date_en11.'/'.$date_en22.'/'.$date_en33; ?>
 
 </span></span><span lang="AR-SA" dir="RTL" style="line-height:150%" class="auto-style18"> 
													&nbsp;</span><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%"><? if($pran==3) {?> To <? } else { ?>To Date<? } ?>&nbsp; 
													<span style="color: #4472C4">
																											<?
//echo $row['end_date_en'];
 
 
 
 ?> <?
  if($pran==3)
 echo  $date33.'/'.$date22.'/'.$date11;
 else
 echo $date_en111.'/'.$date_en222.'/'.$date_en333; ?>
</span></span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" height="35" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style2">
													بتقدير</span><span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style2">:</span><span lang="AR-SA" dir="LTR" style="line-height: 150%; color: #002060" class="auto-style2">
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style2">
													 
													<? if($row['scor']>=90) echo 'ممتاز';   
													  elseif($row['scor']>=80)  echo 'جيد جدا';
													  elseif($row['scor']>=70)  echo 'جيد';
													  elseif($row['scor']>=60)  echo 'مقبول';
													  else  echo 'راسب';
													  
 ?> 
													 
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style2">
													و نسبه</span><span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style2">
													</span><b>
													<span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style5">
													(</span><span class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style5"><? echo str_replace($western_arabic, $eastern_arabic,$row['scor']); ?></span><span lang="AR-SA" style="font-size: 17pt; line-height: 150%; color: #4472D8"><span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style5">%)</span></span></span></b></td>
													<td valign="top" width="50%" dir="ltr" height="35">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													<? if($pran==3) {?>With Grade <? } else { ?>Grade :<? } ?>
													<span style="color: #4472C4">
													
													<? if($row['scor']>=90) echo 'Excellent';   
													  elseif($row['scor']>=80)  echo 'V.Good';
													  elseif($row['scor']>=70)  echo 'Good';
													  elseif($row['scor']>=60)  echo 'Pass';
													  else  echo 'Fail';
													  
 ?> 



												 
													
													</span> <? if($pran==3) {?> <? } else { ?><? } ?> and 
													<? if($pran==3) {?>Percentage <? } else { ?>average of <? } ?>   (<span style="color: #4472C4"><? echo $row['scor']; ?>%</span>)</span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="auto-style3" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style4">
													وبناءاً عليه منح<? if($pran==3)
												{
												echo 'ت';
												}
												else
												{
												echo '';
												}
												?> هذه الشهادة 
													والله الموفق ،،،،،</span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													 <? if($pran==3)
												{
												//echo 'Accordingly, this certificate has been awarded to her.';
												}
												else
												{
												echo 'Accordingly, this certificate has been awarded to him';
												}
												?></span></td>
												</tr>
												 
												</table>
										</div>
										</td>
									</tr>
									 
									
									<tr>
										<td dir="rtl"  width="33%" style="border-style: none; border-width: medium" height="208" valign="top">
										<div align="center">
											<table border="0" width="100%" cellspacing="0" cellpadding="0" height="108"  >
												<tr>
													<td width="100%" valign="top" colspan="4">
													<?php    
require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

 
?>

													<p class="auto-style12" align="right" dir="RTL">
													<font size="4" class="auto-style13">
													<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تاريخ إصدار 
													الشهادة : <? echo $xx=ArabicTools::arabicDate('hj:Y-m-d',time());?> هـ</strong></font></td>
												</tr>
												 
												<tr>
													<td width="33%" valign="top" class="auto-style2">
													<p class="MsoNormal" dir="RTL" align="center" style="text-align: center">
													<font color="#000080">
													<span style="font-weight:700" class="auto-style4"><? if($pran==3)
												{
												echo 'قائدة';
												}
												else
												{
												echo 'مدير';
												}
												?>
													<span lang="ar-sa">
													<? if($pran!=3)
 echo 'الأكاديمية';
 else
 echo 'المعهد';
 
?></span></span></font><br class="auto-style2" align="center" dir="RTL" style="text-align:center">
													</td>
													<td width="17%" valign="top">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="ar-sa">
													<font color="#000080">
													<span class="auto-style2">
																								<?  
if($co1>=3)
{
if($pran!=3)
 echo 'ختم الأكاديمية';
 else
 echo 'ختم المعهد';
}
?></span></font></span></td>
													<td width="12%" valign="bottom" class="auto-style15" rowspan="3">
													<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://alzarqaa.edu.sa/stus/display2.php?stu_ID=<? echo $row[iqama]; ?>&choe=UTF-8"    align="center" height="90" style="float: right" ></td>
													<td width="38%" valign="top" height="70">
													<p class="MsoNormal" align="center" dir="RTL">
													<font color="#000080">
													<span class="auto-style2">  
<? if($co1>=3) echo $job2 ; 
else
{
if($pran!=3)
 echo 'ختم الأكاديمية';
 else
 echo 'ختم المعهد';
 }
 

 ?> </span>
													</font></td>
												</tr>
												<tr>
													<td width="33%" valign="top" height="38" class="auto-style2">
													<p class="auto-style4" align="center" dir="RTL">
													
													
													
													
													  <? echo $mang_name2_en; ?>



</b></td>
													<td width="17%" valign="top" height="38" class="auto-style2">
													&nbsp;</td>
													<td width="38%" valign="top" height="38">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" class="auto-style2">
													 
													<? if($co1>=3) echo $name2; ?> </span>



 												   <span class="auto-style2">



 </span></span></td>
												</tr>
												<tr>
													<td width="33%" height="38" class="auto-style14">
											<span lang="ar-sa">
													<font color="#FF0000" class="auto-style10">
														&nbsp;<font color="#FF0000" class="auto-style22">
												<strong>&nbsp;ملاحظة : أي كشط أو تعديل 
														في هذه الشهادة يلغيها 
													(<?
													
  $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8"));

 

 echo $ID_reg; ?>)</strong></font></td>
													<td width="17%" valign="bottom" height="38" class="auto-style2">
													&nbsp;</td>
													<td width="38%" valign="bottom" height="38">
													&nbsp;</td>
												</tr>
											</table><br> 
											 
											</div>
										</td>
									</tr>
									</table><? } ?>
									</div>
								

									

								</div>

									
							</td>
						</tr>
					</table>
</body>
</html>