<?php
error_reporting(0);
include('session.php'); 
//include('font.php'); 
include ("conn.php");
 
 
?>
  <?
$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
?>
<?php    
 
date_default_timezone_set('asia/riyadh');
 date('Y-m-d H:i:s'); 

$d1=ArabicTools::arabicDate('hj:d',time()); 
$m1=ArabicTools::arabicDate('hj:m',time()); 
$y1=ArabicTools::arabicDate('hj:Y',time()); 
?>  

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<? 

include ("conn.php");
  $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,teacher,branches,stu_sec,student,subjects
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_sec.ID_reg='$ID_reg' and student.stu_id=stu_sec.stu_id order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];

?>

<title><? echo $row['stu_name_ar'];  ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
function framePrint(whichFrame){
parent[whichFrame].focus();
parent[whichFrame].print();
}
</script>

 <style>
 body {
  width: 100%;
 
  margin: 0;
  padding: 0;
}

.border {
  position: fixed;
  top: 0;
  left: 0;
  border: 3px solid #000;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*  {
 
 font-family: Sakkal Majalla;  
}

 .auto-style1 {
	 text-align: center;
 }

 .auto-style2 {
	 font-weight: bold;
	 text-align: center;
 }

 .auto-style3 {
	 font-weight: bold;
	 text-align: center;
	 font-size: 10pt;
 }

 .auto-style4 {
	 text-align: center;
	 direction: rtl;
 }

.pagebreak {  page-break-before: always;
 }

 .auto-style8 {
	 border-collapse: collapse;
 }
 
 .auto-style10 {
	 font-size: 8pt;
 }
 
 .auto-style11 {
	 font-size: xx-small;
 }
 .auto-style12 {
	 text-align: center;
	 font-size: small;
 }
 .auto-style13 {
	 font-size: small;
 }
 
 </style>

<script type="text/javascript" src="jquery.js"></script>

 

 


</head>
<body class="skin-blue">
<div class="wrapper">      
<? //include("header.php"); ?>
<? //include("sidebar.php"); ?>
 <div class="border">  </div>


<div align="center"><br>


<?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID='$row[Branches_ID]'";
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

}
 ?>


	<table border="0" width="98%" style="border-collapse: collapse">
		<tr>
			<td width="92"><img border="0" src="<? echo $branches_logo; ?>"   height="85"></td>
			<td style="width: 1061px">
			<div align="center">
				<table border="0" width="57%" style="border-collapse: collapse" height="26">
					<tr>
						<td style="border-style: solid; border-width: 1px" width=30 bgcolor="#F0F0F0">
						&nbsp;</td>
						<td style="border-left-style: solid; border-left-width: 1px; border-right-style: solid; border-right-width: 1px">
						<b><font size="4">&nbsp;Approved</font></b></td>
						<td style="border-style: solid; border-width: 1px" width=30 bgcolor="#F0F0F0">
						&nbsp;</td>
						<td style="border-left-style: solid; border-left-width: 1px">
						<b><font size="4">&nbsp;Rejected</font></b></td>
					</tr>
				</table>
			</div>
			</td>
			<td width="159">
			<img border="0" src="tvtc.webp"   height="86" style="float: right"  ></td>
		</tr>
				<tr>
			<td colspan="3">
			<div align="right">
				<table  width="100%" class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.3pt">
					<tr style="height: 18.85pt">
						<td   valign="top" style="  height: 18.85pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size:12.0pt;">
						عقد تسجيل متدرب</span></b></td>
					</tr>
				</table>
			</div>
<br>
			<div align="right">
				<table class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.3pt" width="100%">
					<tr style="height: 15.25pt">
						<td  colspan="4" valign="top" style="  height: 15.25pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						بيانات المتدرب</td>
					</tr>
					<tr>
						<td valign="top" style="padding: 0cm 5.4pt; width: 92pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; background: #DBE5F1; border-top-style: none; border-top-color: inherit; border-top-width: medium;">
						اسم المتدرب</td>
						<td width="237" valign="top" style="width: 178.1pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['stu_name_ar']; ?></td>
						<td  valign="top" style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						رقم الإثبات</span></td>
						<td width="272" valign="top" style="width: 204.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['iqama']; ?></td>
					</tr>
					<tr>
						<td valign="top" style="padding: 0cm 5.4pt; width: 92pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; background: #DBE5F1; border-top-style: none; border-top-color: inherit; border-top-width: medium;">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						مصدر الإثبات</span></b></td>
						<td width="237" valign="top" style="width: 178.1pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						 </td>
						<td  valign="top" style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						تاريخ الإثبات</span></td>
						<td width="272" valign="top" style="width: 204.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['iqama_date']; ?></td>
					</tr>
					<tr>
						<td valign="top" style="padding: 0cm 5.4pt; width: 92pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; background: #DBE5F1; border-top-style: none; border-top-color: inherit; border-top-width: medium;">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						المؤهل</span></b></td>
						<td width="237" valign="top" style="width: 178.1pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['qualified']; ?></td>
						<td   valign="top" style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style3">
						المهنة</td>
						<td width="272" valign="top" style="width: 204.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['job']; ?></td>
					</tr>
					<tr>
						<td valign="top" style="padding: 0cm 5.4pt; width: 92pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; background: #DBE5F1; border-top-style: none; border-top-color: inherit; border-top-width: medium;">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						رقم الجوال</span></b></td>
						<td width="237" valign="top" style="width: 178.1pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['mobile']; ?></td>
						<td width="95" valign="top" style=" border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						رقم جوال آخر</span></td>
						<td width="272" valign="top" style="width: 204.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['mobile2']; ?></td>
					</tr>
					<tr>
						<td valign="top" style="padding: 0cm 5.4pt; width: 92pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-bottom: 1.0pt solid windowtext; background: #DBE5F1; border-top-style: none; border-top-color: inherit; border-top-width: medium;">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						كيف سمعت عن المعهد</span></b></td>
						<td   colspan="3" valign="top" style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size: 10.0pt; color: black"> 
						بروشور&nbsp;&nbsp;&nbsp;&nbsp; </span>
						<span lang="AR-SA" dir="LTR" style="font-size: 10.0pt; color: black">
						&nbsp;</span><span dir="LTR" style="font-size: 10.0pt; color: black"><input type="checkbox"></span><span lang="AR-SA" style="font-size: 10.0pt; color: black"> 
						صحف&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size: 10.0pt; color: black"> 
						وسائل التواصل الإجتماعي&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size: 10.0pt; color: black"> 
						صديق&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size: 10.0pt; color: black"> 
						أخرى...........</span></b></td>
					</tr>
				</table>
			</div>
			<div align="right">
				<br><table class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.3pt" width="100%">
					<tr style="height: 11.2pt">
						<td   colspan="6" valign="top" style="  height: 11.2pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;">
						بيانات البرنامج </span>
						<span lang="AR-SA" style="font-size:10.0pt;font-family:&quot;TheSans&quot;,sans-serif">
						<span style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span dir="LTR" style="font-size: 10.0pt; color: black"><input type="checkbox" <? if($row['cors']=='دبلوم') echo 'checked'; ?> ></span><span style="font-size: 10.0pt; font-family: TheSans,sans-serif; color: black">
						<span lang="AR-SA">دبلوم&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span dir="LTR" style="font-size: 10.0pt; color: black"><input type="checkbox" <? if($row['cors']=='برنامج تدريبي') echo 'checked'; ?> ></span><span style="font-size: 10.0pt; font-family: TheSans,sans-serif; color: black">
						<span lang="AR-SA">برنامج تدريبي&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
						</span>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						<input type="checkbox" <? if($row['cors']=='دورة تأهلية') echo 'checked'; ?> ></span><span style="font-size: 10.0pt; font-family: TheSans,sans-serif; color: black">
						<span lang="AR-SA">دورة تأهيلية&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span></span><span dir="LTR" style="font-size: 10.0pt; color: black"><input type="checkbox" <? if($row['cors']=='تطويري') echo 'checked'; ?> ></span><span style="font-size: 10.0pt; font-family: TheSans,sans-serif; color: black">
						<span lang="AR-SA">دورة تطويرية </span></span></b></td>
					</tr>
					<tr>
						<td width="130" valign="top" style="width: 97.75pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						مسمى البرنامج</span></b></td>
						<td width="222" colspan="3" valign="top" style="width: 166.15pt; border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['cors_name']; ?></td>
						<td   valign="top" style="border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						مدة البرنامج</span></td>
						<td width="227" valign="top" style="width: 170.55pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['contact_hours']; ?></td>
					</tr>
					<tr>
						<td width="130" valign="top" style="width: 97.75pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						آلية السداد </span></b></td>
						<td width="222" colspan="3" valign="top" style="width: 166.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
						<span dir="LTR" style="font-size: 10.0pt; ">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size:
  10.0pt;"> نقداً&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<span dir="LTR" style="font-size: 10.0pt; ">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size:10.0pt;"> 
						أقساط </span></b></td>
						<td   style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						رسوم البرنامج مع الضريبة</span></td>
						<td width="227" valign="top" style="width: 170.55pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['Course_amount']; ?> ريال</td>
					</tr>
					<tr>
						<td   style="width: 97.75pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						نسبة الخصم</span></b></td>
						<td width="66" style="width: 49.45pt; border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="90" style="width: 67.55pt; border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						قيمة الخصم</span></b></td>
						<td width="66" style="width: 49.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td   style="  border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style2">
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						صافي الرسوم بعد الخصم</span></td>
						<td width="227" valign="top" style="width: 170.55pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
					</tr>
					<tr height="0">
						<td width="124" style="border:none">&nbsp;</td>
						<td width="62" style="border:none">&nbsp;</td>
						<td width="87" style="border:none">&nbsp;</td>
						<td width="62" style="border:none">&nbsp;</td>
						<td width="176" style="border:none">&nbsp;</td>
						<td width="212" style="border:none">&nbsp;</td>
					</tr>
				</table>
			</div>
			<div align="right">
				<table class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.0pt" width="100%">
					<tr style="height: 15.25pt">
						<td  colspan="12" valign="top" style="  height: 15.25pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						 
						المقابلة الشخصية </td>
					</tr>
					<tr style="height: 16.15pt">
						<td width="128" colspan="2" style="width: 95.65pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">المظهر العام</span></b></td>
						<td width="128" colspan="2" style="width: 95.65pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">السلوك العام</span></b></td>
						<td width="128" colspan="2" style="width: 95.7pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">اللغة الانجليزية</span></b></td>
						<td width="128" colspan="2" style="width: 95.65pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">الاستيعاب</span></b></td>
						<td width="128" colspan="2" style="width: 95.65pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">الالتزام بالانظمة</span></b></td>
						<td width="128" colspan="2" style="width: 95.7pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">الاجمالي</span></b></td>
					</tr>
					<tr style="height: 16.15pt">
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">20%</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">20%</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">20%</span></b></td>
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">20%</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">20%</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">100%</span></b></td>
					</tr>
					<tr style="height: 16.15pt">
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; line-height: 75%; color: black">
						اسم المدرب</span></b></td>
						<td width="191" colspan="3" style="width: 143.5pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						&nbsp;</td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; line-height: 75%; color: black">
						التوقيع </span></b></td>
						<td width="191" colspan="3" style="width: 143.5pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						&nbsp;</td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.8pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">قبول</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
						<td width="64" style="width: 47.85pt; height: 16.15pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">رفض</span></b></td>
					</tr>
					<tr height="0">
						<td width="62" style="border:none">&nbsp;</td>
						<td width="61" style="border:none">&nbsp;</td>
						<td width="58" style="border:none">&nbsp;</td>
						<td width="61" style="border:none">&nbsp;</td>
						<td width="62" style="border:none">&nbsp;</td>
						<td width="61" style="border:none">&nbsp;</td>
						<td width="59" style="border:none">&nbsp;</td>
						<td width="61" style="border:none">&nbsp;</td>
						<td width="58" style="border:none">&nbsp;</td>
						<td width="61" style="border:none">&nbsp;</td>
						<td width="58" style="border:none">&nbsp;</td>
						<td width="62" style="border:none">&nbsp;</td>
					</tr>
				</table>
			</div>
			<div align="right">
				<table class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.0pt" width="100%">
					<tr style="height: 15.25pt">
						<td   colspan="9" valign="top" style="  height: 15.25pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; ">
						أتعهد بفهم المحاضرة التعريفية وأهم ما ورد فيها حسب 
						النقاط التالية </span></b></td>
					</tr>
					<tr style="height: 21.6pt">
						<td width="28" style="width: 21.25pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="283" colspan="2" style="width: 212.3pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						آلية البرنامج التدريبي</span></b></td>
						<td width="32" style="width: 24.3pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="193" colspan="3" style="width: 144.85pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						نبذه عن الشركة </span></b>
						</td>
						<td width="26" style="width: 19.25pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="203" style="width: 152.05pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						الالتزام بالعمل بعد التدريب</span></b></td>
					</tr>
					<tr style="height: 21.6pt">
						<td width="28" style="width: 21.25pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="283" colspan="2" style="width: 212.3pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						المهارات المطلوبة أثناء 
						المقابلة الشخصية</span></b></td>
						<td width="32" style="width: 24.3pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="193" colspan="3" style="width: 144.85pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						الالتزام والانضباط التام
						</span></b></td>
						<td width="26" style="width: 19.25pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						</td>
						<td width="203" style="width: 152.05pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						أخلاقيات العمل</span></b></td>
					</tr>
					<tr style="height: 23.35pt">
						<td width="142" colspan="2" style="width: 106.75pt; height: 23.35pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; line-height: 75%; color: black">
						اسم المرشح</span></b></td>
						<td width="222" colspan="3" style="width: 166.5pt; height: 23.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<? echo $row['stu_name_ar']; ?></td>
						<td width="126" style="width: 94.5pt; height: 23.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; line-height: 75%; color: black">
						التوقيع</span></b></td>
						<td width="275" colspan="3" style="width: 206.25pt; height: 23.35pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center; line-height: 75%; direction: rtl; unicode-bidi: embed; margin-top: 0cm; margin-bottom: 0cm">
						<b>
						<span lang="AR-SA" style="font-size:10.0pt;line-height:
  75%;">&nbsp;</span></b></td>
					</tr>
					<tr height="0">
						<td width="27" style="border:none">&nbsp;</td>
						<td width="108" style="border:none">&nbsp;</td>
						<td width="158" style="border:none">&nbsp;</td>
						<td width="31" style="border:none">&nbsp;</td>
						<td width="19" style="border:none">&nbsp;</td>
						<td width="120" style="border:none">&nbsp;</td>
						<td width="43" style="border:none">&nbsp;</td>
						<td width="25" style="border:none">&nbsp;</td>
						<td width="191" style="border:none">&nbsp;</td>
					</tr>
				</table>
			</div>
			<div align="right">
				<table class="MsoTableGrid" dir="rtl" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: medium none; margin-left: -12.3pt" width="100%">
					<tr style="height: 55.7pt">
						<td   colspan="4" style="  height: 55.7pt; border: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						 
						تعهد وإقرار خطي من المتدرب ..</span><span lang="AR-SA" style="font-size:10.0pt;font-family:&quot;TheSans&quot;,sans-serif"><span style="color: black">
						</span></span></b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						أتعهد بأن أقوم بالإلتزام بتسديد الرسوم المستحقة طبقا 
						للجدولة المتفق عليها والمذكورة اعلاه، وفي حالة عدم 
						التزامي بالسداد في الاوقات المحددة يحق ل<? echo $Branches_title; ?> إيقافي عن التدريب ولهم الحق في 
						اتخاذ مايلزم لمطالبتي، وأقر وأتعهد أن كل ما ذكرته من 
						معلومات أو بيانات هي صحيحة والتزم بتحديث ما يتغير من 
						بيانات خاصه بي مع الجهة المختصة بالشركة وأنا المسؤل في 
						حال أن الشركة لم تستطع التواصل معي عن طريق الهاتف أو 
						بسبب أي خطأ في بياناتي أو تغيري لها دون إعلامهم وأن لا 
						أطالب في أي تعويض أو مقابل في حين تكرار غيايبي أو أي مما 
						ذكرت سابقا وأنني لست موظفا لدى أي جهة حكومية أو غير 
						حكومية ولست مسجلا في التأمينات الاجتماعية لدى أي منشأة 
						ولست طالبا وأنني متفرغ بشكل تام للتدريب وحريص على 
						الاستفادة من البرنامج التدريبي وعليه فإنني في حال أخفيت 
						أي معلومات أتحمل المسئولية كاملة أمام الجهات الرسمية 
						وللشركة اتخاذ الاجراء القانوني حسب ماتنص عليه قوانين 
						العمل والعمال في المملكة العربية السعودية، واتعهد 
						بالالتزام بالزي الرسمي وفقا لسياسة الشركة وأن التزم 
						بمواعيد الحضور والانصراف. وأتعهد بإخطار الشركة في حالة 
						الاستقالة قبل شهرين على الأقل لاتخاذ الإجراءات اللازمة 
						وعلى هذا أتعهد وأوقع أدناه.</span></td>
					</tr>
					<tr style="height: 14.4pt">
						<td width="120" style="width: 90.3pt; height: 14.4pt; border-left: 1.0pt solid windowtext; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1">
						<p class="MsoNormal" align="center" dir="RTL" style="margin-top:0cm;margin-right:
  0cm;margin-bottom:0cm;margin-left:4.5pt;text-align:center;line-height:normal;
  direction:rtl;unicode-bidi:embed"><b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						المرفقات</span></b></p>
						<p class="MsoNormal" align="center" dir="RTL" style="margin-top:0cm;margin-right:
  0cm;margin-bottom:0cm;margin-left:4.5pt;text-align:center;line-height:normal;
  direction:rtl;unicode-bidi:embed"><b>
						<span dir="LTR" style="font-size: 10.0pt; color: black">
						Attachments</span></b></td>
						<td   colspan="3" style=" height: 14.4pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style4">
						 
						<span dir="LTR" style="font-size: 8.0pt; color: black">
						<input type="checkbox"></span><span lang="AR-SA" style="font-size: 8.0pt; color: black"> 
						صورة الإثبات | </span>
						<span dir="LTR" style="font-size: 8.0pt; color: black">
						ID Copy</span><span lang="AR-SA" style="font-size: 8.0pt; color: black">&nbsp;&nbsp;
						</span>
						<span lang="AR-SA" dir="LTR" style="font-size: 8.0pt; color: black">
						&nbsp;</span><span lang="AR-SA" style="font-size: 8.0pt; color: black">&nbsp;</span><span dir="LTR" style="font-size: 8.0pt; color: black"><input type="checkbox"></span><span lang="AR-SA" style="font-size: 8.0pt; color: black"> 
						ضمان الدفع |</span><span dir="LTR" style="font-size: 8.0pt; color: black">Pay 
						Order</span><span style="font-size: 8.0pt; color: black">
						</span>
						<span dir="LTR" style="font-size: 8.0pt; color: black">
						&nbsp;</span><span lang="AR-SA" style="font-size: 8.0pt; color: black">&nbsp;&nbsp;</span><span lang="AR-SA" dir="LTR" style="font-size: 8.0pt; color: black">&nbsp;</span><span dir="LTR" style="font-size: 8.0pt; color: black"><input type="checkbox"></span><span lang="AR-SA" style="font-size: 8.0pt; color: black"> 
						شهادة الثانوي لبرنامج الدبلوم | </span>
						<span dir="LTR" style="font-size: 8.0pt; color: black">
						HS Cert.</span><span style="font-size: 8.0pt; color: black">
						</span>
						<span dir="LTR" style="font-size: 8.0pt; color: black">
						&nbsp;</span><span lang="AR-SA" style="font-size: 8.0pt; color: black">&nbsp;&nbsp;</span><span dir="LTR" style="font-size: 8.0pt; color: black"><input type="checkbox"></span><span lang="AR-SA" style="font-size: 8.0pt; color: black"> 
						3 ص. شخصية |</span><span dir="LTR" style="font-size: 8.0pt; color: black">3 
						Photos</span></b></td>
					</tr>
					<tr style="height: 21.6pt">
						<td  style="  height: 21.6pt; border-left: 1.0pt solid black; border-right: 1.0pt solid windowtext; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						اسم المتدرب</span></b></td>
						<td width="295" style="width: 221.15pt; height: 21.6pt; border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: white">
						<? echo $row['stu_name_ar']; ?></td>
						<td  style="  height: 21.6pt; border-left: 1.0pt solid black; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: #DBE5F1" class="auto-style1">
						<b>
						<span lang="AR-SA" style="font-size: 10.0pt; color: black">
						التوقيع</span></b></td>
						<td width="272" style="width: 203.95pt; height: 21.6pt; border-left: 1.0pt solid windowtext; border-right: medium none; border-top: medium none; border-bottom: 1.0pt solid windowtext; padding-left: 5.4pt; padding-right: 5.4pt; padding-top: 0cm; padding-bottom: 0cm; background: white">
						</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
	</table>
	<div class="pagebreak"> </div>
 
		
    <table align="center" class="auto-style8" style="width: 98%">
		<tr>
			<td><table border="1" cellpadding="0" cellspacing="0" class="auto-style5" dir="rtl" style="mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-table-dir: bidi; width: 100%;" align="center">
			<tr>
				<td valign="top" width="765" style=" background: #DBE5F1">
				تعليمات 
				وأنظمة المنشأة التدريبية<o:p></o:p></span></b></td>
			</tr>
			<tr>
				<td width="765" class="auto-style10">
				<strong>أولاً: الضوابط العامة:<br>
				</strong>1)	 يلتزم المتدرب بكافة اللوائح والنظم الداخلية ب<? echo $Branches_title; ?> . <br>
2)	الالتزام بالدوام الرسمي والزي الرسمي لجميع المتدربين في الوقت المحدد والمتفق عليه والحفاظ على البيئة الأكاديمية داخل حرم المعهد وخارجه ( الالتزام بالمواقف المحدده للمتدربين، عدم التدخين داخل حرم المعهد وعند المداخل الرئيسية.<br>
3)	 يقوم المتدرب بتسديد الرسوم الدراسية المستحقة عليه في أوقاتها المحددة وفي حالة عدم القيام بذلك يحق للمعهد طي قيد المتدرب والتقدم للجهات الرسمية لتحصيل حقوقه. <br>
4)	 يتعهد المتدرب بأن جميع البيانات الواردة في طلب الالتحاق صحيحة ومطابقة ويقر بمسئوليته عليها. <br>
5)	 يتعهد المتدرب بأن أرقام الهاتف الموجودة في سجله صحيحة وفي حالة تغيرها يجب عليه إبلاغ إدارة المعهد بالأرقام الجديدة . وفي حالة عدم قيامه بذلك يكون <? echo $Branches_title; ?> غير مسئول عن أي أضرار تلحق بالمتدرب من جراء ذلك ( موعد اختبار _ إلى آخره ... ).<br>
6)	المستندات المطلوبة للمتدرب ( تعبئة نموذج التسجيل، صورة المؤهل الدراسي، صورة الهوية أو الاقامة، عدد ( 3 ) صور شخصية). <br>
7)	 لا يحق للمتدرب طلب دخول الاختبار النهائي أو طلب تأجيل الدورة إلا بعد سداد جميع الرسوم المستحقة عليه . <br>
8)	 لا يحق للمتدرب الانقطاع عن الدورة مدة تصل الى 15% متصلة من زمن الدورة أو 20% متقطعة دون عذر رسمي . وعند حدوث ذلك  يحق لإدارة المعهد طي قيد المتدرب. <br>
9)	 في حالة طلب المتدرب تأجيل الدورة لفترة محدودة لظروف خاصة (بتقديم عذر رسمي) فإنها تحذف من فترة الدورة ولا تعتبر غياب عليه . <br>
10)	 يجوز للمتدرب دخول الاختبار النهائي 2 مرات دون اضافة رسوم إعادة تأهيل على أن لا تمر أكثر من سنة من تاريخ التسجيل . <br>
11)	 في حالة مرور أكثر من سنة أو استنفاذ عدد مرات الرسوب يقوم الدارس بدفع رسوم إعادة تأهيل بنسبة 50% من سعر الدورة .<br>
12)	في حالة رسوب المتدرب بالاختبار النهائي يحق له طلب إعادة الاختبار على أن تمر مدة لا تقل عن 30 يوم من تاريخ ظهور النتيجة السابقة كما أنه عليه أن يلتزم بالحضور بفترة التدريب الملحقة للتأهيل مرة أخرى للاختبار . <br>
13)	في حالة رغبة المتدرب تحسين نتيجة اختباره يقوم بسداد مبلغ 500 ريال رسوم إعادة تأهيل على أن تلغي النتيجة السابقة . <br>
14)	في حالة طلب المتدرب تعديل بيانات شهادة مستخرجة وموقعة من قبل يتم سداد رسوم استخراج شهادة بمبلغ 50ريال بإيداع في حساب المؤسسة العامة للتدريب التقني والمهني . <br>
15)	موعد الاختبارات يحدد من قبل الجهات المختصة أو إدارة المعهد وليس للمتدرب حق الاعتراض عليها . <br>
16)	المتدربين المنتدبين في برامج المنح الوظيفية والتدريب المنتهي بالتوظيف يخضعون لسياسات الشركة الموظّفه لهم اضافة الى قوانين المعهد الداخلية<br>

				<strong>ثانياً : ضوابط التأجيل:<br>
				</strong>1)	للمتدرب حق تأجيل دورته قبل بداية الدراسة  بها بيومين على الأقل (مجانا دون سداد رسوم اضافية).<br>
2)	في حاله بدء الدراسة بالدورة أو البرنامج التدريبي يحق للمتدرب تأجيل الدورة بحد أقصى شهرين مع مراعاة تقديم طلب التأجيل قبل الدراسة (برسوم قيمتها 50 ريال) وإذا كانت المدة أكثر من ذلك يتم اضافة رسوم تأجيل للدورة أو البرنامج التدريبي بقيمة 50 ريال عن كل شهر اضافي.<br>
3)	يتم إدراج المتدربين المسجلين لأكثر من دورة بشكل تلقائي وتتابعي إلى الدورة/الدورات التي تليها ما لم يتقدم المتدرب بطلب تأجيل وذلك قبل موعد الدراسة بأسبوع على الأقل .<br>
				<strong>ثالثاً: ضوابط الانسحاب:</strong><br>
1)	الانسحاب قبل بدء الدراسة  يخصم مبلغ 200 ريال  قيمة رسوم التسجيل بالدورة.<br>
2)	الانسحاب قبل نهاية الأسبوع الثاني من الدراسة يخصم الآتي (50 % من قيمة الدورة + 200 ريال  قيمة رسوم التسجيل بالدورة).<br>
3)	الانسحاب قبل نهاية الأسبوع الثالث لا يسترد أي مبلغ للمتدرب من الرسوم الدراسية.

</td>
			</tr>
			<tr>
				<td width="765" style=" background: #DBE5F1">
				أقر أنا 
				الموقع أدناه بقراءتي بعناية لتعليمات وأنظمة <? echo $Branches_title; ?> والموافقة التامة عليها والإلتزام بما ورد 
				فيها<o:p></o:p></span></b></td>
			</tr>
		</table>
		<table border="1" cellpadding="0" cellspacing="0" class="auto-style6" dir="rtl" style="mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-table-dir: bidi; width: 100%;" align="center">
			<tr>
				<td width="143" style=" background: #DBE5F1" class="auto-style1">
				اسم المتدرب<o:p></o:p></span></b></td>
				<td width="125">
				<? echo $row['stu_name_ar']; ?>
				</td>
				<td width="125" style=" background: #DBE5F1" class="auto-style1">
				التاريخ<o:p></o:p></span></b></td>
				<td width="125">
				
				</td>
				<td width="125" style=" background: #DBE5F1" class="auto-style1">
				التوقيع<o:p></o:p></span></b></td>
				<td width="125">
				
				</td>
			</tr>
		</table>
		<br>
		<table border="1" cellpadding="0" cellspacing="0" class="auto-style7" dir="rtl" style="mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-table-dir: bidi; width: 100%;" align="center">
			<tr>
				<td colspan="6" valign="top" width="774" style=" background: #DBE5F1">
				  
					تعليمات وأنظمة التدريب في المؤسسة العامة للتدريب التقني والمهني</td>
			</tr>
			<tr>
				<td colspan="6" class="auto-style10" > 
				<strong>•	تعليمات الدورات التطويرية :<br>
				</strong>1)	إذا حضر المتدرب الدورة يمنح شهادة حضور دورة تدريبية دون عقد أي اختبار من المؤسسة .<br>
				<strong>•	تعليمات الدورات التأهلية :<br>
				</strong>1)	يشترط لإعتماد المسجلين في الدورة التأهيلية رفعها للمؤسسة في موعد لا يتجاوز خمسة عشر يوما من بدء الدورة .<br>
2)	إذا تجاوز المتدرب نسبة الغياب المقررة وهي 20 % من إجمالي ساعات الدورة التأهيلية يطوى قيده .<br>
3)	يمنح المتدرب في نهاية الدورة شهادة بعد حصوله في الإختبار النهائي المطلوب للدورة من قبل المؤسسة على 60 % من درجة الإختبار .<br>
4)	يحق للمتدرب في الدورة التأهيلية في حال رسوبه أو غيابه عن الإختبار طلب إعادة الإختبار بعد مضي مدة لا تقل عن خمسة عشر يوما من تاريخ الإختبار ، وهذا ينطبق أيضا على من يرغب  في تحسين تقديره حيث تلغى النتيجة والشهادة السابقة وتعتمد النتيجة الجديدة . <br>
5)	لا يمكن للمتدرب الذي اكمل الدورة دخول الإختبار أكثر من ثلاث محاولات إلا بموافقة المؤسسة ، علما ان الغياب يعتبر محاولة .<br>
				<strong>•	تعليمات البرنامج التدريبي والدبلوم : <br>
				</strong>1)	يشترط لإعتماد المسجلين في البرنامج التدريبي والدبلوم رفعها للمؤسسة في المواعيد المحددة للتسجيل في التقويم التدريبي ، علما أنه يشترط للقبول في الدبلوم الحصول على شهادة الثانوية العامة أو ما يعادلها .<br>
2)	إذا تجاوز المتدرب نسبة الغياب المقررة وهي 25 % من مجموع الوحدات التدريبية المحددة لكل مقرر يحرم من دخول اختبار المقرر .<br>
3)	يجوز للمتدرب الإنسحاب من جميع المقررات التي تم تسجيلها بعد إشعار المؤسسة وذلك قبل بداية اختبار الفترة التدريبية بأسبوعين .<br>
4)	يجوز للمتدرب حذف بعض المقررات التي قام بتسجيلها بموافقة المنشأة بعد إشعار المؤسسة خلال أسبوعين من بداية الفترة التدريبية .<br>
5)	يجوز انتقال المتدرب من منشأة تدريبية لأخرى في نفس التخصص بعد موافقة المنشأتين وأخذ موافقة المؤسسة قبل الإنتقال ، على ألا يكون مفصولًا من المنشأة التدريبية المنتقل منها ويكون النقل خلال فترة التسجيل .<br>
6)	المدة القصوى للتدريب في المعهد هي ضعف المدة الأساسية المحددة في الخطة التدريبية لكل برنامج تدريبي أو دبلوم ، بما فيها الفترات التدريبية التي انسحب منها المتدرب او حرم منها ، ولا يجوز تجاوز المدة القصوى إلا بعد موافقة المؤسسة .<br>
7)	يطوى قيد المتدرب من البرنامج التدريبي أو الدبلوم في الحالات التالية :<br>
1.	إذا صدر بحقه قرار فصل بسبب أخلاقي أو سلوكي.<br>
2.	إذا انقطع عن التدريب مدة متصلة تعادل أو تزيد عن نصف المدة الأساسية المحددة في الخطة التدريبية لكل برنامج تدريبي أو دبلوم ، ويمكن إعادة تسجيله كمتدرب مستجد عند عودته للتدريب .<br>
3.	إذا لم ينه تدريبه في المدة القصوى التي حددتها الفقرة (6) من هذه التعليمات.<br>
8)	يشترط لدخول المتدرب الإختبار الشامل إنهاء متطلبات الخطة التدريبية للبرنامج واجتياز جميع اختبارات الفترات التدريبية وحصوله على معدل تراكمي لا يقل عن 2 من 5 .<br>
9)	يحصل المتدرب على شهادة اجتياز البرنامج التدريبي أو الدبلوم والسجل التدريبي بعد اجتياز الإختبار الشامل الذي تعقده المؤسسة .<br>
10)	لا يمكن للمتدرب دخول الإختبار الشامل أكثر من أربع محاولات إلا بعد دراسة فضل تدريبي ، علما أن الغياب يعتبر محاولة .
				</td>
			</tr>
			<tr>
				<td colspan="6" width="774" style=" background: #DBE5F1">
				أقر أنا الموقع أدناه بقراءتي بعناية لتعليمات وأنظمة <? echo $Branches_title; ?> والموافقة التامة عليها 
					والإلتزام بما ورد فيها 
				<o:p></o:p>
				</span></b></span>
				</td>
			</tr>
			<tr>
				<td width="78" style=" background: #DBE5F1" class="auto-style1">
				اسم المتدرب</td>
				<td width="240">
							<? echo $row['stu_name_ar']; ?>	</td>
				<td width="78" style=" background: #DBE5F1" class="auto-style1">
				التاريخ</td>
				<td width="144">
								</td>
				<td width="66" style=" background: #DBE5F1" class="auto-style1">
				التوقيع</td>
				<td width="168">
								</td>
			</tr>
		</table>
		<table border="1" cellpadding="0" cellspacing="0" class="auto-style7" dir="rtl" style="mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-table-dir: bidi; width: 100%;" align="center">
			<tr>
				<td colspan="8" valign="top" class="auto-style1" style=" background: #DBE5F1" >
				لاستعمال القبول والتسجيل في <? echo $Branches_title; ?><o:p></o:p></span></b></td>
			</tr>
			<tr>
				<td colspan="8" class="auto-style1" style=" background: #DBE5F1" >
									<input type="checkbox">مسجل في التأمينات<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span><span dir="LTR"><input type="checkbox"></span><span lang="AR-SA"> 
					غير مسجل في التأمينات<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span><span dir="LTR"><input type="checkbox"></span><span lang="AR-SA"> 
					الطلب مكتمل<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span><span dir="LTR"><input type="checkbox"></span><span lang="AR-SA"> 
					الطلب غير مكتمل</span><span dir="LTR"><o:p></o:p></span></b></td>
			</tr>
			<tr>
				<td width="106" class="auto-style12" style=" background: #DBE5F1">
				م القبول والتسجيل</td>
				<td width="114">
				
				</td>
				<td width="96" class="auto-style1" style=" background: #DBE5F1">
				<span class="auto-style13">م الاكاديمي</span><o:p></o:p><span class="auto-style13"></span></b></span></td>
				<td width="88">
				
				</td>
				<td class="auto-style12" style=" background: #DBE5F1; width: 74px;">
				مدير المعهد </td>
				<td class="auto-style11" style="width: 126px">
				<? echo $mang_name; ?>
				</td>
				<td width="60" class="auto-style1" style=" background: #DBE5F1">
				<span class="auto-style13">الختم</span><o:p></o:p><span class="auto-style13"></span></b></span></td>
				<td width="107">
								</td>
			</tr>
		</table></td>
		</tr>
	</table>
&nbsp;<? }} ?></div>
<p>
<!-- /.content-wrapper -->
<? //include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 