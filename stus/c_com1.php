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
		.auto-style15 {
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
		.auto-style27 {
			font-size: 11pt;
		}
		.auto-style28 {
			font-family: "Sakkal Majalla";
			font-size: 12pt;
			color: #800000;
		}
		.auto-style30 {
			color: #030AF3;
		}
		.auto-style31 {
			font-family: "Sakkal Majalla";
			font-size: 23pt;
		}
		.auto-style33 {
			text-align: center;
			font-family: "Sakkal Majalla";
			font-size: 17pt;
			color: #000080;
		}
		.auto-style34 {
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
		.auto-style38 {
			color: #800000;
		}
		.auto-style40 {
			color: #800000;
			font-size: 12pt;
		}
		.auto-style41 {
	text-align: right;
	font-family: "Sakkal Majalla";
	font-size: 17pt;
	color: #000080;
}
		.auto-style42 {
	text-align: center;
	font-family: "Sakkal Majalla";
	font-size: 15pt;
	color: #000080;
}
		-->
</style>

<body onLoad="init()">
</head>
	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (index.psd) -->
<p>
<div align =center >
<?php    
require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

 
?>
 <?
$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
?>

<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table2">
						<tr>
							<td>
								 
							 
								</legend><div align="center">
							 


								<div align="left">
<?php  
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
?>	

<?

include ("conn.php");
$i=0;
  $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8"));

$result=mysqli_query($conn,"select* from stu_sec,cors,student,subjects where subjects.cors_ID=cors.cors_ID and   stu_sec.stu_id=student.stu_id and ID_reg='$ID_reg' and cors.ID=section_Id");
while($row=mysqli_fetch_array($result))
{
      $pran=$row['Branches'];
 
 $ss_date=$row['start_date'];

  $date1 = d_date($ss_date); // الدالة 
  $date2 = m_date($ss_date); // الدالة 
    $date3 = y_date($ss_date); // الدالة 


 $ee_date=$row['end_date'];

  $date11 = d_date($ee_date); // الدالة 
  $date22 = m_date($ee_date); // الدالة 
  $date33 = y_date($ee_date); // الدالة 


?>
	<table border="1" dir=ltr width="100%" id="table1" cellspacing="0" bordercolor="#E4E4E4" height="499" cellpadding="0" bordercolorlight="#FFFFFF" style="border-width: 0px">

		
									<tr>
										<td dir="rtl" height="38" style="border-style: none; border-width: medium">
										<table border="0" width="100%" cellspacing="0" cellpadding="0" height="169">
											<tr>
												<td   >	
												 <table border="0" width="85%" cellspacing="0" cellpadding="0">
														 
														
																																						<?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID='$pran'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
$Branches_title=$row8['Branches_title'];
$mang_name=$row8['mang_name'];
$tvtc_job1=$row8['tvtc_job1'];
$tvtc_job2=$row8['tvtc_job2'];
$tvtc_job3=$row8['tvtc_job3'];
$name1=$row8['name1'];
 $branches_logo=$row8['branches_logo'];



												?>
														 
														
														

													<tr>
															<td align="center" class="auto-style6">
															<span lang="ar-sa" class="auto-style11">
															<strong>المملكة العربية السعودية
															 </strong></span></td>
														</tr>
														
														

													<tr>
															<td align="center" class="auto-style6">
															<span lang="ar-sa" class="auto-style11">
															<strong><? echo $row8['Branches_title']; ?>
															 </strong></span></td>
														</tr>
														<tr>
															<td height="21" align="center" class="auto-style11">
															<font size="2" class="auto-style1">
															<span lang="ar-sa" class="auto-style8">
															<strong>رخصة رقم (</strong></span><strong><span lang="en-gb" class="auto-style8"><? 	echo str_replace($western_arabic, $eastern_arabic,$row8[Computer_license]); ?></span></strong><span lang="ar-sa" class="auto-style8"><strong>)</strong></span></font></td>
														</tr>
												 
												 
                                                <?
                								}

												?>
												
											
														<tr>
															<td height="21" align="center" class="auto-style6">
															<span lang="ar-sa" class="auto-style11">
															<strong>معتمد من المؤسسة 
															العامة للتدريب 
															التقني والمهنيي</strong></span></td>
														</tr>
												
											
													 
													</table>
</td>
												<td width="264">
												<div align="center">
																						&nbsp;</div>
												</td>
												<td width="420">
										
												<div align="left">
													<img border="0" src="<? echo $branches_logo; ?>"   height="80">  
													</div></td>
											</tr>
										</table>
										</td>
									</tr>
					
	
 

 
									<tr>
										<td dir="rtl" height="55" style="border-style: none; border-width: medium">
										<p align="center">
										<img border="0" src="33.webp"   height="55"></td>
									</tr>

	
 

 
<tr>
										<td dir="rtl" height="232" style="border-style: none; border-width: medium">
										<p class="MsoNormal" dir="RTL" style="text-align: center; text-kashida: 0%">
										<b>
										<span class="auto-style14">يشهد <? echo $Branches_title; ?> بأن 
 <? if($pran==3)
												{
												echo 'المتدربة';
												}
												else
												{
												echo 'المتدرب';
												}
												?>
 </span>
										<font class="auto-style15">
										<span class="auto-style3">/</span></font><span style="font-family: HeshamNormal; " class="auto-style15"><font class="auto-style3"> 
										</font>
										</span><span class="auto-style14">
									 	<? ECHO $row['stu_name_ar']; ?> 
										</span><span class="auto-style3">
										<span class="auto-style15"><? if($pran==3)
												{
												echo 'وجـــنسيتها';
												}
												else
												{
												echo 'وجـــنسيته';
												}
												?>
:
  
													<? echo $row['Nationality']; ?><? if($row['Nationality']!="بدون") {
													
													if($pran==3)
												{
												echo 'ة';
												}
												else
												{
												echo '';
												}
												}
												
												
												?> 
										</span></span></b></p>
										<p class="MsoNormal" dir="RTL" style="text-align: center; text-kashida: 0%">
										<b>
										<font class="auto-style3">
										<span class="auto-style15">بموجب  <? if($row['Nationality']!="سعودي") 
										{
										?> هوية مقيم  
										<?
										}
										else
										{
										?> الهوية الوطنية رقم	
										<?
										}
										?>
										(<? ECHO str_replace($western_arabic, $eastern_arabic,$row['iqama']); ?>)
										قد <? if($pran==3)
												{
												echo 'اجتازت';
												}
												else
												{
												echo 'اجتاز';
												}
												?> دورة &nbsp;</span></font><font class="auto-style15"><span class="auto-style3">(</span></font></b><span style="font-size: 20pt; font-weight:700" class="auto-style3"> 
										</span>
										<span class="auto-style31"> 
										<span class="auto-style30"><strong> <? echo $row['cors_name']; ?>  
										</strong></span> 
										</span>
										<font class="auto-style15">
										<span class="auto-style13">)</span></font><span style="font-weight:700" class="auto-style14"> </span></p>
										<p class="MsoNormal" dir="RTL" style="text-align: center; text-kashida: 0%">
										<span style="font-weight:700" class="auto-style14"> مدتــــها   </span>
										<font class="auto-style15">
										<span class="auto-style13">(</span></font><span style="font-size: 20pt; font-weight:700" class="auto-style3"> 
										</span>
										<span style="font-weight:700" class="auto-style14"> <? echo str_replace($western_arabic, $eastern_arabic,$row['contact_hours']); ?> 
										</span>
										<font class="auto-style15">
										<span class="auto-style13">)</span></font><span style="font-weight:700" class="auto-style14">&nbsp;
										والمنعــــــــــقدة في الفــــــــترة من 
										&nbsp;</span><font class="auto-style15"><span class="auto-style13">:</span></font><span style="font-size: 20pt; font-weight:700" class="auto-style3"> </span>
										<span style="font-weight:700" class="auto-style14"> 
<? echo str_replace($western_arabic, $eastern_arabic,$date3); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date2); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date1); ?> 
										</span><span style="font-size: 20pt; font-family: Traditional Arabic; font-weight:700"> 
										<span style="font-weight:700" class="auto-style14"> هـ&nbsp; </span> </span>
										<span style="font-weight:700" class="auto-style14"> إلى </span>
										<font class="auto-style15">
										<span class="auto-style13">:</span></font><span style="font-size: 20pt; font-weight:700" class="auto-style3"> </span>
										<span style="font-weight:700" class="auto-style14"> 
<? echo str_replace($western_arabic, $eastern_arabic,$date33); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date22); ?>/<? echo str_replace($western_arabic, $eastern_arabic,$date11); ?> 
										</span><span style="font-size: 20pt; font-family: Traditional Arabic; font-weight:700"> 
										<span style="font-weight:700" class="auto-style14"> هـ 
										</span></span></p>
										<p class="MsoNormal" dir="RTL" style="text-align: center; text-kashida: 0%">
										<span style="font-size: 20pt; font-family: Traditional Arabic; font-weight:700"> 
										<span style="font-weight:700" class="auto-style14">
	بمعــدل <? echo str_replace($western_arabic, $eastern_arabic,$row['credits']); ?> ســــــاعة <? if($pran==3)
												{
												echo 'وحصـــلت';
												}
												else
												{
												echo 'وحصـــل';
												}
												?>
 على تقـــديـــر" <? echo str_replace($western_arabic, $eastern_arabic,$row['Rate']); ?>" بنســـــبة <? echo str_replace($western_arabic, $eastern_arabic,$row['scor']); ?> %									
 
										</td>
									</tr>
									 
									
									<tr>
										<td dir="rtl" height="211" width="100%" style="border-style: none; border-width: medium">
										<table border="0" width="98%" cellspacing="0" cellpadding="0" height="151" align="left"  >
											<tr>
												<td valign="top" colspan="2">
												<span class="auto-style3">
												<strong>
												<span class="auto-style27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
												</span></strong>
												<span class="auto-style40">
												<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حرر بتاريخ : <? echo str_replace($western_arabic, $eastern_arabic,ArabicTools::arabicDate('hj:d-m-Y',time()));?>
													&nbsp;هـ </strong></span>
												</span><strong>
												<br class="auto-style28">
												</strong>
												<span class="auto-style3">
												<span class="auto-style22">
												<span class="auto-style38">
												<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; المـــوافـق : <? echo str_replace($western_arabic, $eastern_arabic,date ( "Y-m-d" ));   ?> 
													م
													 </strong></span></span>
												<span class="auto-style27">
												</span></span><strong>
												<span class="auto-style38">
												<span class="auto-style22">
												</span></span></strong>
													</span></span></td>
												<td valign="top" style="width: 292px">
												&nbsp;</td>
												<td width="350" valign="top">&nbsp;</td>
											</tr>
											<tr>
												<td valign="top" align="right" height="32" class="auto-style18" colspan="2">
												<p class="MsoNormal" dir="RTL">
												<font color="#000080">
												<span class="auto-style18">&nbsp;مدير <? if($pran==3)
												{
												echo 'ة';
												}
												else
												{
												echo '';
												}
												?>
<? echo $Branches_title; ?>												</span></font></td>
												<td  valign="top" height="32" class="auto-style34" style="width: 292px">
												<p class="auto-style41" align="center" dir="RTL">ختم المنشأة التدريبية </td>
												<td   valign="top" height="32" class="auto-style33">
												<font color="#000080">
												<span class="auto-style19"><? echo $tvtc_job1; ?>
												</span></font></td>
											</tr>
											<tr>
												<td valign="top" align="right" class="auto-style18" colspan="2">
												<p class="MsoNormal" dir="RTL">
												<span class="auto-style18">&nbsp;</span><span lang="ar-sa" class="auto-style18">الاســــم</span><span class="auto-style18"> : 
													<? echo $mang_name; ?>
												</span></td>
												<td   valign="top" class="auto-style23" style="width: 292px"  >
												</td>
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
												<br>
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