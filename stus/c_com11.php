<?php
error_reporting(0);

 
?>
	
	<html>
<head>

	  <meta http-equiv="Content-Language" content="en-us">



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
			font-weight: normal;
			font-family: "Sakkal Majalla";
		}
		.auto-style8 {
			text-align: center;
			font-family: "Sakkal Majalla";
			font-size: 14pt;
			color: #09058B;
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
		.auto-style17 {
			text-align: center;
			font-size: 15pt;
		}
		.auto-style20 {
			font-size: 18pt;
			font-weight: normal;
		}
		.auto-style22 {
			color: #000000;
		}
		.auto-style23 {
			font-size: 15pt;
		}
		.auto-style24 {
			font-weight: normal;
		}
		.auto-style25 {
			font-size: 15pt;
			font-weight: bold;
		}
		.auto-style26 {
			text-align: center;
		}
		</style>
 <style>
<!--
h1
	{margin-bottom:.0001pt;
	text-align:right;
	page-break-after:avoid;
	direction:rtl;
	unicode-bidi:embed;
	font-size:20.0pt;
	font-family:"Times New Roman","serif";
	font-weight:normal; margin-left:0cm; margin-right:0cm; margin-top:0cm}
h2
	{margin-bottom:.0001pt;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Times New Roman","serif";
	font-weight:normal; margin-left:0cm; margin-right:0cm; margin-top:0cm}
		.auto-style1 {
			font-family: "Sakkal Majalla";
			font-weight: normal;
			font-size: 14pt;
		}
		.auto-style3 {
			font-family: "Sakkal Majalla";
		}
		.auto-style6 {
			font-family: "Sakkal Majalla";
			font-weight: normal;
			font-size: 14pt;
			color: #09058B;
		}
		.auto-style8 {
			color: #09058B;
		}
		.auto-style11 {
			font-family: "Sakkal Majalla";
			font-size: 14pt;
			color: #09058B;
		}
		.auto-style13 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
		}
		.auto-style14 {
			font-family: "Sakkal Majalla";
			font-size: 22pt;
		}
		.auto-style18 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
			font-size: 17pt;
		}
		.auto-style19 {
			font-family: "Sakkal Majalla";
			font-size: 17pt;
		}
		.auto-style22 {
			font-size: 12pt;
		}
		.auto-style23 {
			text-align: center;
		}
		.auto-style26 {
			font-family: "Sakkal Majalla";
			font-size: 17pt;
			text-align: center;
		}
		.auto-style33 {
			text-align: center;
			font-family: "Sakkal Majalla";
			font-size: 17pt;
			color: #000080;
		}
		.auto-style35 {
			font-family: "Sakkal Majalla";
			font-weight: bold;
			font-size: 17pt;
			text-align: center;
		}
		.auto-style37 {
			font-family: "Sakkal Majalla";
			font-size: 12pt;
			text-align: right;
			color: #FF0000;
		}
		.auto-style42 {
	text-align: center;
	font-family: "Sakkal Majalla";
	font-size: 15pt;
	color: #000080;
}
		.auto-style43 {
	 font-family: "Sakkal Majalla";
	 font-size: 12pt;
 }
		.auto-style44 {
	 font-family: "Sakkal Majalla";
	 font-size: xx-large;
 }
		.auto-style45 {
	 text-align: right;
	 font-family: "Sakkal Majalla";
	 font-size: 17pt;
	 color: #000080;
 }
 .auto-style46 {
	 font-size: large;
 }
		.auto-style47 {
	 font-family: "Sakkal Majalla";
	 font-weight: normal;
 }
		-->
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

$result1=mysqli_query($conn,"select count(stu_id) as co1 from stu_sec where stu_id='$row[iqama]' and cors_type='لغة الإنجليزية' and ID_reg<='$ID_reg'");
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
	$Branches_title=$row8['Branches_title'];
$mang_name=$row8['mang_name'];
$tvtc_job1=$row8['tvtc_job1'];
$tvtc_job2=$row8['tvtc_job2'];
$tvtc_job3=$row8['tvtc_job3'];
$name1=$row8['name1'];
 $branches_logo=$row8['branches_logo'];
											?>
<tr>
														<td class="auto-style8">
														<strong><? echo $Branches_title2=$row8['Branches_title']; ?>
</strong></td>
													</tr>
<tr>
														<td class="auto-style8">
														<strong><? echo  $row8['Branches_title_en']; ?>
</strong></td>
													</tr>
													<tr>
														<td class="auto-style8">
															<span lang="ar-sa" class="auto-style11">
															<strong>تحت إشراف المؤسسة 
															العامة للتدريب 
															التقني والمهنيي</strong></span></td>
													</tr>	 
													<tr>
														<td class="auto-style8">
														<strong>رخصة رقم ( 
														<? 	echo str_replace($western_arabic, $eastern_arabic,$row8[Computer_license]); ?> )</strong></td>
													</tr>	 <? } ?>
												</table>
												</td>
												<td   style="border-bottom-style: none; border-bottom-width: medium">
												
											 
												&nbsp;</td>
												<td width="369" style="border-bottom-style: none; border-bottom-width: medium">
										
												<div align="left">
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
										<td dir="rtl"   style="border-style: none; border-width: medium; height: 36px;" height="71">
										<p class="MsoBodyText" align="center" dir="RTL" style="margin-left:-27.0pt;
text-align:center;line-height:normal"><font color="#000080">
										<span class="auto-style44"><strong><? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "شهادة برنامج تأهيلي"; else echo "شهادة دبلوم"; ?></strong></span><strong><br class="auto-style44">
										</strong><span class="auto-style44">
										<strong><? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "Qualification Program Certificate"; else echo "Diploma Certificate"; ?>
</strong></span></font></td>
									</tr>

	
									<tr>
										<td dir="rtl"   style="border-style: none; border-width: medium; height: 35px;" height="71">
										&nbsp;</td>
									</tr>

								<?

 
$ss_date=$row['start_date'];
$ee_date=$row['test_date'];

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
													
													
													
												يشهد <?  echo $Branches_title; 	?>												
												
												</span></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style17">
													 
													
													Al-zarqaa Institute Certifies That</td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style2">
													بأن/</span><span lang="AR-SA" dir="LTR" style="color: #4472D8" class="auto-style2">
													</span>
													<span lang="AR-SA"   class="auto-style2">
													<? echo $row['stu_name_ar']; ?> , <? if($pran==3 and $row['Nationality']!='بدون')
												{
												echo 'وجنسيتها';
												}
												else
												{
												echo 'وجنسيته';
												}
												?>
 / 
													
													<? echo $nat=$row['Nationality']; ?><? if($pran==3 and $row['Nationality']!='بدون')
												{
												echo 'ة ';
												}
												else
												{
												echo ' ';
												}
												?>
													
													 </span></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style25">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><span lang="EN-US" dir="LTR" style="font-size:15.0pt;line-height:150%;font-family:&quot;Vijaya&quot;,&quot;sans-serif&quot;">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><b><span lang="EN-US" dir="LTR" style="font-size:15.0pt;line-height:150%;font-family:&quot;Vijaya&quot;,&quot;sans-serif&quot;">
												 <span class="auto-style24"> <? echo  ($row['stu_name_en']); ?> , 
													</span>
												 <span class="auto-style20"> 
													<span lang="EN-US" dir="LTR" style="line-height:150%" class="auto-style23">
													Nationality<font  > <? 
$result1=mysqli_query($conn,"select* from nat where nat='$nat'");
while($row1=mysqli_fetch_array($result1))
{
echo ucfirst($row1['nat_en']);

} ?></font>&nbsp; &nbsp; </span>
													</span>&nbsp;&nbsp;&nbsp;
													</span></b>&nbsp;&nbsp;&nbsp;
													</span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style20">
بموجب هوية وطنية رقم 													
													</span></font>
													<font class="auto-style20"><span lang="AR-SA" style="line-height: 150%; color: #002060" c > 
													<span class="auto-style20">/</span></span><font color="#4472D8"><span class="auto-style46"><span lang="AR-SA" style="line-height: 150%; "  > </span>
													</span>
													<span lang="AR-SA" style="line-height: 150%; "  > 
													
													<span class="auto-style20"> 
													
													<? echo str_replace($western_arabic, $eastern_arabic,$row['iqama']); ?> 
													
													
													
													
													</span> 
													
													
													
													
													</span>
													 </font>
													 
													 </td>
													<td valign="top" width="50%" dir="ltr" class="auto-style23">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="line-height: 150%" class="auto-style23">
													
													<? 
 $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));
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
													<? echo $row['iqama']; ?> 
													</span> 
					 </td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style4">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style20">
													<strong>قد أنهى المقررات <? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "لبرنامج"; else echo "لدبلوم"; ?> <? echo $level1=$row['cors_name']; ?> 
													لمدة <? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "عام ونصف تدريبي"; else echo "لعامين ونصف تدريبية"; ?>
																										<span lang="en-us"><br></span>بتاريخ<span lang="en-us">&nbsp;
													</span><span style="font-weight:700" class="auto-style14"> 
<? echo str_replace($western_arabic, $eastern_arabic,$date3); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date2); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date1); ?> 
										</span>هـ ، واجتاز الاختبار الشامل للمؤسسة العامة للتدريب<br>
التقني والمهني والذي عقد بتاريخ<span lang="en-us"> </span>

<span style="font-weight:700" class="auto-style14"> 
<? echo str_replace($western_arabic, $eastern_arabic,$ee_date); ?>  
										</span>هـ ، وحصل على
<br>تقدير " <span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style2">
													<? echo $row['Rate']; ?></span>
" ، بنسبة <span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style5"><? echo str_replace($western_arabic, $eastern_arabic,$row['scor']); ?> %</span>.
													</strong> </span></font></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style23">
													<p class="MsoNormal" style="text-align: center; line-height: 150%; direction: ltr; unicode-bidi: embed">
													<span lang="EN-US" style="line-height: 150%" class="auto-style23">
													 
													Has completed the curricula for<br>
													The 
													<? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "Program"; else echo "Diploma"; ?>
													
 of <? echo $level1=$row['cors_name_en']; ?>
 for <? //echo str_replace($western_arabic, $eastern_arabic,$row['contact_hours_en']); ?> 
 
 <? if($row['cors_name']=="تطبيقات الحاسب المكتبية والسكرتارية") echo "Year and a half training"; else echo "two and a half years training"; ?>


 , In  <?  echo  $date3.'/'.$date2.'/'.$date1; ?> H, <? echo $row['start_date_en']; ?>,
and has successfully passed the Comprehensive Exam
of the Technical and Vocational Training Corporation
held in  <? echo $ee_date; ?> H, <? echo $row['test_date_en']; ?>,
with grade: <span style="color: #4472C4">
													<? if($row['Rate']=='ممتاز') echo 'Excellent'; ?> 
													<? if($row['Rate']=='جيد جدا') echo 'V.Good'; ?> 
													<? if($row['Rate']=='جيد') echo 'Good'; ?> 
													<? if($row['Rate']=='مقبول') echo 'Pass'; ?> 
 
													
													</span>, and an Percentage: <span style="color: #4472C4"><? echo $row['scor']; ?>%</span>.
</span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="auto-style3" align="center" dir="RTL" style="text-align:center">
													<?php    
require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

 
?>

													<font size="4" class="auto-style13">
													<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
													حررت بتاريخ    <? echo $xx=ArabicTools::arabicDate('hj:Y-m-d',time());?> هـ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الموافق <? echo date ('Y-m-d');?> م</strong></font></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style26">
												Issued on : <? echo $xx=ArabicTools::arabicDate('hj:Y-m-d',time());?> H ,   <? echo date ('Y-m-d');?></td>
												</tr>
												 
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													&nbsp;</td>
													<td valign="top" width="50%" dir="ltr" class="auto-style26">
													&nbsp;</td>
												</tr>
												 
												</table>
										</div>
										</td>
									</tr>
									 
									
									<tr>
										<td dir="rtl"  width="33%" style="border-style: none; border-width: medium" height="208" valign="top">
										<div align="center">
											<table border="0" width="100%" cellspacing="0" cellpadding="0" height="151" align="left"  >
											<tr>
												<td valign="top" align="right" height="32" class="auto-style18" colspan="2">
												<p class="MsoNormal" dir="RTL">
												<font color="#000080">
												<span class="auto-style18">&nbsp;مدير <? if($pran==3)
												{
												echo 'ة ';
												}
												else
												{
												echo '';
												}
												?>
المعهد	<br>
												<span class="auto-style43">Institute Director
												 </span>											</span></font></td>
												<td  valign="top" height="32" class="auto-style33" style="width: 292px">
												<p class="auto-style45" align="center" dir="RTL">ختم المعهد
												<br>
												<span class="auto-style43">institute stamp
												 </span>
												 
												 </td>
												<td  width="350" valign="top" height="32" class="auto-style33">
												<font color="#000080">
												<span class="auto-style19"><? echo $tvtc_job1; ?><br>
												 </span>
												<span class="auto-style43">Approved by Technical and Vocational Training Corporation
												 </span></font></td>
											</tr>
											<tr>
												<td valign="top" align="right" class="auto-style18" colspan="2">
												<p class="MsoNormal" dir="RTL">
												<span class="auto-style18">&nbsp;</span><span lang="ar-sa" class="auto-style18">الاســــم</span><span class="auto-style18"> : 
													<? echo $mang_name; ?>
												</span></td>
												<td   valign="top" class="auto-style33" style="width: 292px"  >
												&nbsp;</td>
												<td  valign="top" class="auto-style42"><? echo $tvtc_job2; ?></span></font></td>
											</tr>
											<tr>
												<td valign="top" align="right" class="auto-style18" colspan="2">
												<p class="MsoNormal" dir="RTL">
												<span class="auto-style18">&nbsp;&nbsp;</span><span lang="ar-sa" class="auto-style18">التوقيع</span><span class="auto-style18"> : 
													 
												</span></td>
												<td  valign="bottom" class="auto-style23" style="width: 292px"  >
												&nbsp;</td>
												<td  valign="top" class="auto-style42">
												<? echo $tvtc_job3; ?></td>
											</tr>
											<tr>
												<td valign="top" class="auto-style35"   rowspan="3" s >
												<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://alzarqaa.edu.sa/stus/display2.php?stu_ID=<? echo $row[iqama]; ?>&choe=UTF-8"    align="left" height="90" ></td>
												<td valign="top" align="right" class="auto-style18" style="width: 268px">
												&nbsp;</td>
												<td  valign="bottom" class="auto-style23" style="width: 292px"  >
												&nbsp;</td>
												<td width="273" valign="top" class="auto-style26">
												&nbsp;</td>
											</tr>
											<tr>
												<td valign="top" class="auto-style37" style="width: 268px"  >
												<strong>&nbsp; رقم الشهادة (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
													)</strong></td>
												<td  valign="bottom" class="auto-style23" style="width: 292px"  >
												&nbsp;</td>
												<td   valign="top" class="auto-style26">
												&nbsp;</td>
											</tr>
											<tr>
												<td valign="top" class="auto-style37" colspan="2"   >
												<font color="#FF0000" class="auto-style22">
												<span lang="ar-sa"><strong>&nbsp;ملاحظة : أي كشط أو تعديل 
														في هذه الشهادة يلغيها</strong></span><strong> 
													(<? 
													 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8"));
 

echo $ID_reg; ?>)</strong></font></td>
												<td  valign="top" class="auto-style26">
<? echo $name1; ?></td>
											</tr>
										</table>
<br> 
											 
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