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
			color: #000080;
		}
		.auto-style19 {
			font-size: 16pt;
			font-weight: bold;
		}
		.auto-style20 {
			color: #4472D8;
		}
		.auto-style21 {
			text-align: right;
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
?>			<?

include ("conn.php");
$i=0;
$result=mysqli_query($conn,"select* from cer_eng where cer_no='$ID'");
while($row=mysqli_fetch_array($result))
{
     $pran=$row['pr'];
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
													<tr>
														<td class="auto-style8">
														<strong>وزارة 
														التعليم</strong></td>
													</tr>
													<tr>
														<td class="auto-style8">
														<strong>وكالة التعليم العام الاهلي   </strong></td>
													</tr>													<tr>
														<td class="auto-style8">
														<strong>مكتب التعليم العالمي والأجنبي بالرياض</strong></td>
													</tr>

												<?
 
 
include ("conn.php");
  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));

$query8 = "select * from branches where Branches_ID='$pran'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 

												{
												
$Branches_title2=$row8['Branches_title2'];
$Branches_title2_en=$row8['Branches_title2_en'];												
$mang_name2_en=$row8['mang_name2'];
 $branches_logo=$row8['branches_logo'];									
$job2=$row8['job2'];

$name2=$row8['name2'];
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
												
											 <img border="0" src="logo4.jpg"     width="150"    >
												 </div>
												</td>
												<td width="369" style="border-bottom-style: none; border-bottom-width: medium">
										
												<div align="left">
													<table border="0" width="66%" cellspacing="0" cellpadding="0">
														<tr>
															<td>
															 
															
															<img border="0" src="<? echo $branches_logo; ?>"   height="100" align="left"    >
															
															 </td>
														</tr>
													</table>
													</div>
										
												</td>
											</tr>
										</table>
										</div>
										</td>
									</tr>
	<?

include ("conn.php");
$i=0;
$result=mysqli_query($conn,"select* from cer_eng where cer_no='$ID'");
while($row=mysqli_fetch_array($result))
{
$ss_date=$row['level_date_to'];
$ee_date=$row['level_date_from'];

$iqama_date=$row['iqama_date'];

$date1 = d_date($ss_date); // الدالة 
$date2 = m_date($ss_date); // الدالة 
$date3 = y_date($ss_date); // الدالة 

$date19 = d_date($iqama_date); // الدالة 
$date29 = m_date($iqama_date); // الدالة 
$date39 = y_date($iqama_date); // الدالة 


$date11 = d_date($ee_date); // الدالة 
$date22 = m_date($ee_date); // الدالة 
$date33 = y_date($ee_date); // الدالة 


if($row['type']=='دبلوم')
{
$co1=5;
 
 
 }

?>
				
	
									<tr>
										<td dir="rtl"   style="border-style: none; border-width: medium" height="71">
										<p class="MsoBodyText" align="center" dir="RTL" style="margin-left:-27.0pt;
text-align:center;line-height:normal"><font color="#000080">
										<? if($row['type']=='دبلوم') { ?> 
<img border="0" src="3333.jpg"   height="56"><span lang="AR-SA" style="font-size:30.0pt;font-family:FS_Naskh_Ahram">


<? } else { ?> 

<img border="0" src="333.jpg"   height="56"><span lang="AR-SA" style="font-size:30.0pt;font-family:FS_Naskh_Ahram">
<? } ?>
										</span></font></td>
									</tr>

								<?

 
 

?>
<tr>
										<td dir="rtl"  style="border-style: none; border-width: medium">
										<div align="center">
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="auto-style3" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style4">
													
													
													
													يشهد <?  echo $Branches_title2; 	?> بأن
												
												
												</span></td>
													<td valign="top" width="50%" dir="ltr" class="auto-style17">
													 
													<span class="auto-style16">
													
													
													<? if($pran==3)
												{
?>

													<?  echo $Branches_title2_en; 	?>   hereby certifies that ,<?
												}
												else
												{
												?>
<?  echo $Branches_title2_en; 	?> Certifies That													<?
												}
												?>




 												   </span>




 </td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style2">
													<? if($pran==3)
												{
												echo 'المتدربة';
												}
												else
												{
												echo 'الدارس';
												}
												?>/</span><span lang="AR-SA" dir="LTR" style="color: #4472D8" class="auto-style2">
													</span>
													<span lang="AR-SA" style="color: #4472D8" class="auto-style2">
													<? echo $row['name_ar']; ?></span></td>
													<td valign="top" width="50%" dir="ltr">
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
												?> : <span class="auto-style20"> <? echo strtoupper($row['name_en']); ?>
													</span>&nbsp;&nbsp;&nbsp;
													</span></b></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" style="color:black" class="auto-style2">
													 </span><span lang="AR-SA" dir="LTR" style="color: black" class="auto-style2">
													</span>
													<span lang="AR-SA" style="color:#4472D8" class="auto-style6">
													&nbsp;</span><span lang="AR-SA" class="auto-style2">الجنسية </span> : <span lang="AR-SA" style="color:#4472D8" class="auto-style2"><? echo $nat=$row['nat']; ?><? if($pran==3 and $row['nat']!='بدون')
												{
												echo 'ة ';
												}
												else
												{
												echo ' ';
												}
												?></span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:
150%">
													<span lang="EN-US" dir="LTR" style="line-height:150%" class="auto-style16">Nationality<font color="#4472D8">: <? 
$result1=mysqli_query($conn,"select* from nat where nat='$nat'");
while($row1=mysqli_fetch_array($result1))
{
echo ucfirst($row1['nat_en']);

} ?>&nbsp;</font></span><span lang="EN-US" dir="LTR" style="font-size:15.0pt;
line-height:150%"><span lang="EN-US" dir="LTR" style="line-height:150%" class="auto-style16"> </span> </span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">
<?
  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));
 if($pran!=3) 
{


if($row['date_to_en']=='2')	
echo 'جواز سفر رقم' ;
else
echo 'رقم الهوية';

}
else {  
												
if($nat=='سعودي')	
echo 'بموجب السجل المدني';
elseif($nat=='مقيم')	
echo 'بموجب هوية ';

else

if($row['date_to_en']=='2')	
echo 'بموجب جواز سفر ' ;
else
echo 'بموجب اقامة ' ;


 
  }
   ?>
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6"> 
													رقم </span><font color="#4472D8"><span lang="AR-SA" style="line-height: 150%; " class="auto-style5"> </span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
													
													<? echo str_replace($western_arabic, $eastern_arabic,$row['iqama']); ?> 
													
													
													
													
													</span>
													 </font>
													<span style="line-height: 150%; " class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													
													
													
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
											<? 
											  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));
if($pran==3){ ?>		
													وتاريخ    <span class="auto-style18">
<? 
										
										echo str_replace($western_arabic, $eastern_arabic,$date19.'/'.$date29.'/'.$date39);

?>

													
													
													
													  هـ</span><? } ?><font color="#4472D8">
													</font>
													
													
													
													
													</span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">&nbsp; 
													</span></font></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													
   
   
   <? if($pran!=3) 
{


if($row['date_to_en']=='2')	
echo 'Passport number : ' ;
else
echo 'ID number : ';

}
else {  
												
if($nat=='سعودي')	
echo 'ID number :' ;
elseif($nat=='مقيم')	
echo 'ID number :' ;
else

if($row['date_to_en']=='2')	
echo 'Passport number : ' ;
else
echo 'Iqama number : ' ;


 
  }
   ?>




 
													<span class="auto-style20"><? echo $row['iqama']; ?> </span>
													</span> 
					<? 
					  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));
if($pran==3){ ?><span class="auto-style16">&nbsp;&nbsp; Date:<span class="auto-style18">
					
					
					<? 										echo  $date39.'/'.$date29.'/'.$date19 ;
 ?> H</span></span><? } ?></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style7">
													قد <? if($pran==3)
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
													  <? ECHO $type1=$row['type']; ?>
													  

<? if($row['type']=='دبلوم')
{
 
 echo " اللغة الإنجليزية العامة"; 
 
 }
 else { ?>  &nbsp;<? if($row['cer_type']==0){ ?>اللغة الانجليزية<? } else { ?>اللغة الصينية<? } ?><? } ?>
													  
<? if($row['type']=='دبلوم') {    } else { ?>
<? if($row['level_from']!="") echo 'للمستويات'; else echo 'للمستوى'; ?>

<? } ?>


 
													 </span></font></td>
													<td valign="top" width="50%" dir="ltr">
													
													<? if($pran==3)
												{
?>
<p class="MsoNormal" align="center" style="text-align: center; line-height: 150%" dir="RTL">
													<span style="font-size: 14pt; line-height: 150%; font-family: Vijaya,sans-serif" dir="LTR">
													<b>has successfully completed <? if($row['cer_type']==0){ ?>English Language<? } else { ?>Chinese Language<? } ?> 
													
													<? if($row['type']=='دبلوم') {  echo 'Diploma';  } else { ?>
													Course
													<? } ?>
													
													<? if($row['type']=='دبلوم') {    } else { ?>
													<? if($row['level_from']!="") echo 'levels'; else echo 'level'; ?> <? } ?>
													


<? if($row['type']=='دبلوم') {    } else { ?>

 <br>( 
<?
 
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_to]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
      $cors_ID1=$row2['cors_ID'];
}
?>

<?
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_from]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
      $cors_ID2=$row2['cors_ID'];
}
?>

<?
if($cors_ID2=="")
$result2=mysqli_query($conn,"select* from subjects where cors_ID='$cors_ID1' and Branches='$pran' and cors='لغة الإنجليزية' ");
else
$result2=mysqli_query($conn,"select* from subjects where cors_ID>='$cors_ID1' and cors_ID<='$cors_ID2' and Branches='$pran' and cors='لغة الإنجليزية' ");

while($row2=mysqli_fetch_array($result2))
{
  //$cors_name=$row2['cors_name'];
?>
                                                        <? if($row2['cors_name']=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($row2['cors_name']=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($row2['cors_name']=='التأسيسي 3')   echo 'Foundation 3'; ?>
														<? if($row2['cors_name']=='الأول')   echo '1'; ?>
														<? if($row2['cors_name']=='الثاني')   echo '2'; ?>
														<? if($row2['cors_name']=='الثالث')   echo '3'; ?>
														<? if($row2['cors_name']=='الرابع')   echo '4'; ?>
														<? if($row2['cors_name']=='الخامس')   echo '5'; ?>
														<? if($row2['cors_name']=='السادس')   echo '6'; ?>
														<? if($row2['cors_name']=='السابع')   echo '7'; ?>
														<? if($row2['cors_name']=='الثامن')   echo '8'; ?>
														<? if($row2['cors_name']=='التاسع')   echo '9'; ?>
														<? if($row2['cors_name']=='العاشر')   echo '10'; ?>
														<? if($row2['cors_name']=='الحادي عشر')   echo '11'; ?>
														<? if($row2['cors_name']=='الثاني عشر')   echo '12'; ?>
 														<? if($row2['cors_name']=='دورة أطفال')   echo "Children's course"; ?>	

<?
 echo  ' ، ';
}
 
?>
                                                      	
																											
													   )    <? if($row['type']=="دبلوم") echo 'diploma' ; else //echo 'Course'; ?>  
													 
													 </b></span><? }
												}
												else
												{
?>
<p class="MsoNormal" align="center" style="text-align: center; line-height: 150%" dir="RTL">
													<span style="font-size: 14pt; line-height: 150%; font-family: Vijaya,sans-serif" dir="LTR">
													<b>Has completed a  <? if($row['type']=="دبلوم") echo 'diploma' ; else echo 'Course'; ?>  
													in ( <? if($row['cer_type']==0){ ?>English Language<? } else { ?>Chinese Language<? } ?> ) Levels&nbsp; 
													&nbsp;</b></span><?
												}
												?>
													
													
													
													
													
													</td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><font class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6">
													&nbsp;</span><font color="#4472D8"><span lang="AR-SA" style="line-height: 150%; " class="auto-style5"> </span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style6"> 
													
													<? if($row['type']=='دبلوم') {    } else { ?>
( 
 
<?
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_to]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
   $cors_ID1=$row2['cors_ID'];
}
?>

<?
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_from]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
    $cors_ID2=$row2['cors_ID'];
}
?>

<?
if($cors_ID2=="")
$result2=mysqli_query($conn,"select* from subjects where cors_ID='$cors_ID1' and Branches='$pran'  and cors='لغة الإنجليزية' ");
else
$result2=mysqli_query($conn,"select* from subjects where cors_ID>='$cors_ID1' and cors_ID<='$cors_ID2' and Branches='$pran'  and cors='لغة الإنجليزية' ");

while($row2=mysqli_fetch_array($result2))
{
 echo  $row2['cors_name'].' ، ';
}
?>


<?   $level1=$row['level_to']; ?>
<? //if($row['level_from']!="") echo ' ، '; ?>
<?   $level2=$row['level_from']; ?>

)<? } ?></span></font>
													<span lang="AR-SA" style="line-height: 150%; color: #002060" class="auto-style6">
													&nbsp; </span>
													<span lang="AR-SA" style="line-height: 150%; color: black" class="auto-style6">
													بواقع 	 (<? echo str_replace($western_arabic, $eastern_arabic,$row['hours']); ?> ساعة )
													 من أصل
													

 
(													
<? if($row['type']=="دبلوم") echo str_replace($western_arabic, $eastern_arabic,'360');
else
{

 

$result1=mysqli_query($conn,"select * from subjects where cors_name='$level1' and Branches='$pran' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
       $level01=$row1['cors_ID'];
      $credits1=$row1['credits'];
}

$result1=mysqli_query($conn,"select * from  subjects  where cors_name='$level2' and Branches='$pran' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
    $level02=$row1['cors_ID'];
}
if($row['level_from']=="")
{
 echo str_replace($western_arabic, $eastern_arabic,$credits1);

}
else
{
$result1=mysqli_query($conn,"select sum(credits) as hours from subjects where cors_ID>='$level01' AND cors_ID<='$level02' and Branches='$pran' and cors_name!='التأسيسي' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
  echo str_replace($western_arabic, $eastern_arabic,$row1['hours']);
  $hours11=  $row1['hours'];

}
}
}
?> ساعة )
 
													</span></font></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" style="text-align: center; line-height: 150%; direction: ltr; unicode-bidi: embed">
													<span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													 
													<span style="color: #4472C4">
	<?  if($pran!=3)
												{
?>

<? if($row['type']=='دبلوم') {    } else { ?>
<?
 
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_to]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
      $cors_ID1=$row2['cors_ID'];
}
?>

<?
$result2=mysqli_query($conn,"select* from subjects where cors_name='$row[level_from]' and cors='لغة الإنجليزية' and Branches='$pran'");
while($row2=mysqli_fetch_array($result2))
{
      $cors_ID2=$row2['cors_ID'];
}
?>

<?
if($cors_ID2=="")
$result2=mysqli_query($conn,"select* from subjects where cors_ID='$cors_ID1' and Branches='$pran' and cors='لغة الإنجليزية' ");
else
$result2=mysqli_query($conn,"select* from subjects where cors_ID>='$cors_ID1' and cors_ID<='$cors_ID2' and Branches='$pran' and cors='لغة الإنجليزية' ");

while($row2=mysqli_fetch_array($result2))
{
  //$cors_name=$row2['cors_name'];
?>
 
                                                        <? if($row2['cors_name']=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($row2['cors_name']=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($row2['cors_name']=='التأسيسي 3')   echo 'Foundation 3'; ?>
														<? if($row2['cors_name']=='الأول')   echo 'I'; ?>
														<? if($row2['cors_name']=='الثاني')   echo 'II'; ?>
														<? if($row2['cors_name']=='الثالث')   echo 'III'; ?>
														<? if($row2['cors_name']=='الرابع')   echo 'IV'; ?>
														<? if($row2['cors_name']=='الخامس')   echo 'V'; ?>
														<? if($row2['cors_name']=='السادس')   echo 'VI'; ?>
														<? if($row2['cors_name']=='السابع')   echo 'VII'; ?>
														<? if($row2['cors_name']=='الثامن')   echo 'VIII'; ?>
														<? if($row2['cors_name']=='التاسع')   echo 'IX'; ?>
														<? if($row2['cors_name']=='العاشر')   echo 'X'; ?>
														<? if($row2['cors_name']=='الحادي عشر')   echo 'XI'; ?>
														<? if($row2['cors_name']=='الثاني عشر')   echo 'XII'; ?>
 														<? if($row2['cors_name']=='دورة أطفال')   echo "Children's course"; ?>														

<?
 echo  ' ، ';
}
 }
?>
											
 
														</span> Rate <? echo $row['hours']; ?><span style="color:#002060"> 
													hours out of</span> <? } else { ?>Accumulating   <? echo $row['hours']; ?> <? } ?> <? if($pran==3) echo ' hours out of '; ?><? if($row['type']=="دبلوم") echo "360";
else
{

 

$result1=mysqli_query($conn,"select * from subjects where cors_name='$level1'  and Branches='$pran' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
     $level01=$row1['cors_ID'];
        $credits1=$row1['credits'];

}

$result1=mysqli_query($conn,"select * from subjects where cors_name='$level2'  and Branches='$pran' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
    $level02=$row1['cors_ID'];
}
 
$result1=mysqli_query($conn,"select sum(credits) as hours from subjects where cors_ID>='$level01' AND cors_ID<='$level02' and Branches='$pran' and cors_name!='التأسيسي' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
//if($pran!=3) 
echo $row1['hours'];
}
}



  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));

$result1=mysqli_query($conn,"select * from subjects where cors_name='$level1' and Branches='$pran' and cors='لغة الإنجليزية' ");
while($row1=mysqli_fetch_array($result1))
{
  $level03=$row1['cors_ID'];
        $credits1=$row1['credits'];

}
  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));

$result1=mysqli_query($conn,"select * from subjects where cors_name='$level2'  and Branches='$pran' and cors='لغة الإنجليزية'  ");
while($row1=mysqli_fetch_array($result1))
{
  $level04=$row1['cors_ID'];
}
if($row['level_from']=="") {   echo $credits1; }
else
{
 //echo $hours11;
$result1=mysqli_query($conn,"select count(credits) as co1 from subjects where cors_ID>='$level03' AND cors_ID<='$level04' and Branches='$pran' and cors='لغة الإنجليزية'  ");
while($row1=mysqli_fetch_array($result1))
{
  $co1=$row1['co1'];
}


if($row['type']=='دبلوم')
{
 $co1=10;
}



}
  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));

if($pran!=3)
$coo=3;
else
$coo=2;
?>  
  
														hours</span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p align="center">
													<span lang="AR-SA" class="auto-style2">من تاريخ</span><span class="auto-style2">(</span><span lang="EN-US" dir="LTR" class="auto-style5">



</span><span lang="EN-US" dir="LTR">
													
													
 
													
													
																																	<span class="auto-style2">
													
													
 
													
													
																																	<? 
										
										echo str_replace($western_arabic, $eastern_arabic,$date1.'/'.$date2.'/'.$date3);

?>



													</span>



</span><span lang="AR-SA" class="auto-style2"> هـ</span><span class="auto-style2"> 
													)</span><span lang="AR-SA" class="auto-style2">
													</span>
													<span lang="AR-SA" dir="LTR" class="auto-style2">
													&nbsp;</span><span lang="AR-SA" class="auto-style2">&nbsp;</span><span lang="AR-SA" dir="LTR" class="auto-style2">&nbsp;</span><span lang="AR-EG" class="auto-style2">إلى تاريخ</span><span class="auto-style2"> 
													(</span><span lang="AR-SA" class="auto-style2">
													</span>
													<span lang="EN-US" dir="LTR" class="auto-style2">
													<? echo str_replace($western_arabic, $eastern_arabic,$date11.'/'.$date22.'/'.$date33); ?></span>
													<span lang="AR-SA" class="auto-style2">
													هـ</span><span class="auto-style2"> 
													).</span></td>
													<td valign="top" width="50%" dir="ltr">
													<p class="MsoNormal" style="text-align: center; line-height: 150%; direction: ltr; unicode-bidi: embed">
													<span lang="EN-US" style="line-height: 150%" class="auto-style16">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
													 <? if($pran==3) {?>From <? } else { ?>From Date<? } ?>:&nbsp;
													<span style="color: #4472C4">
 
 
<?
 if($pran==3)
 echo  $date3.'/'.$date2.'/'.$date1.' H';
 else
{
$m=$row['m1'];
$d=$row['d1'];
$y=$row['y1'];

function HijriToJD($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}


$date = HijriToJD($d, $m, $y);

  jdtogregorian($date);
echo $newDate = date("d-m-Y", strtotime(jdtogregorian($date))); 
 
 }
 
 
 ?> </span> </span>
													<span lang="AR-SA" dir="RTL" style="line-height:150%" class="auto-style19"> 
													&nbsp;</span><span lang="EN-US" style="line-height: 150%" class="auto-style16">
													<? if($pran==3) {?> to <? } else { ?>to Date<? } ?>&nbsp; 
													<span style="color: #4472C4">
																											<?
//echo $row['end_date_en'];
 
 
 
 ?> <?
   if($pran==3)
 echo  $date33.'/'.$date22.'/'.$date11.' H';
 else
{
$m=$row['m2'];
$d=$row['d2'];
$y=$row['y2'];

function HijriToJD1($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}


$date = HijriToJD1($d, $m, $y);

  jdtogregorian($date);
echo $newDate = date("d-m-Y", strtotime(jdtogregorian($date))); 
 
 }
 
 
 ?>
</span></span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" height="35" class="auto-style2">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%"><span lang="AR-SA" style="line-height: 150%; " class="auto-style2">
													بتقدير</span><span style="line-height: 150%; " class="auto-style2"> 
													(</span><span lang="AR-SA" dir="LTR" style="line-height: 150%; " class="auto-style2">
													</span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style2">
													<? echo $row['grade']; ?></span>
													<span style="line-height: 150%; " class="auto-style2">
													) </span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style2">
													و نسبه </span><b>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style5">
													(</span><span class="auto-style1"><span lang="AR-SA" style="line-height: 150%; color: #4472D8" class="auto-style5">
													</span>
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style5">
													<? echo str_replace($western_arabic, $eastern_arabic,$row['pricent']); ?></span>
													<span lang="AR-SA" style="font-size: 17pt; line-height: 150%; ">
													<span lang="AR-SA" style="line-height: 150%; " class="auto-style5">%)</span></span><span style="font-size: 17pt; line-height: 150%; "><span style="line-height: 150%; " class="auto-style5"> 
													.</span></span></span></b></td>
													<td valign="top" width="50%" dir="ltr" height="35">
													<p class="MsoNormal" align="center" style="text-align:center;line-height:150%;
direction:ltr;unicode-bidi:embed"><span lang="EN-US" style="font-size: 16.0pt; line-height: 150%">
													
													
													
													<? if($pran!=3) {?> Grade :
													<span style="color: #4472C4">
														<span style="color: #4472C4"><? echo $row['pricent']; ?>%</span> - <? if($row['grade']=='ممتاز') echo 'Excellent'; ?> 
													<? if($row['grade']=='جيد جدا') echo 'Very Good'; ?> 
													<? if($row['grade']=='جيد') echo 'Good'; ?> 
													<? if($row['grade']=='مقبول') echo 'Pass'; ?> <? } ?>
 
 
 
 <? if($pran==3) {?>The grade she received is     
													<span style="color: #4472C4">
														   
														
														
														( <? if($row['grade']=='ممتاز') echo 'Excellent'; ?> 
													<? if($row['grade']=='جيد جدا') echo 'Very Good'; ?> 
													<? if($row['grade']=='جيد') echo 'Good'; ?> 
													<? if($row['grade']=='مقبول') echo 'Pass'; ?> ) </span>and percentage (<span style="color: #4472C4"><? echo $row['pricent']; ?>%</span>)
													
 <? } ?>




													
													</span>  	 </span></td>
												</tr>
												<tr>
													<td valign="top" width="50%" style="border-left-style: solid; border-left-width: 1px" class="auto-style2">
													<p class="auto-style3" align="center" dir="RTL" style="text-align:center">
													 </td>
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
												?>
												
												
												
												</span></td>
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
													الشهادة : <? echo $xx=ArabicTools::arabicDate('hj:Y/m/d',time());?> هـ</strong></font></td>
												</tr>
												 
												<tr>
													<td valign="top" class="auto-style2" style="width: 21%">
													<p class="MsoNormal" dir="RTL" align="center" style="text-align: center">
													<font color="#000080">
													<span style="font-weight:700" class="auto-style4"><? if($pran==3)
												{
												echo 'مديرة';
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
 
?></span></span></font><p class="auto-style2" align="center" dir="RTL" style="text-align:center">
													&nbsp;</td>
													<td width="17%" valign="top">
													<p class="auto-style21" align="center" dir="RTL">
													<span lang="ar-sa">
													<font color="#000080">
													<span class="auto-style2"> 
												 <?  
if($co1>=$coo)
{
if($pran!=3)
 echo 'ختم الأكاديمية';
 else
 echo 'ختم المعهد';
}
?> </span></font></span></td>
													<td width="12%" valign="top" class="auto-style15" rowspan="3">
													
													<? if($type1=='دبلوم') { ?> 
													 <? } else { ?>
													
													<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://alzarqaa.edu.sa/stus/display2.php?stu_ID=<? echo $row[iqama]; ?>&choe=UTF-8"    align="center" height="90" style="float: right" ></td>
													<? } ?><td width="38%" valign="top" height="70">
													<p class="MsoNormal" align="center" dir="RTL">
													<font color="#000080">
													<span class="auto-style2">  
<? if($co1>=$coo)   echo $job2 ; 
else
{
  $pran= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['pran']), ENT_QUOTES, "utf-8"));

if($pran!=3)
 echo 'ختم الأكاديمية';
 else
 echo 'ختم المعهد';
 }
 

 ?> </span>
													</font></td>
												</tr>
												<tr>
													<td valign="top" height="38" class="auto-style2" style="width: 21%">
													<p class="auto-style4" align="center" dir="RTL">
													
													
													
													
													  <? echo $mang_name2_en; ?>





</b></td>
													<td width="17%" valign="top" height="38" class="auto-style2">
													&nbsp;</td>
													<td width="38%" valign="top" height="38">
													<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
													<span lang="AR-SA" class="auto-style2">
													 
													<? if($co1>=$coo) echo $name2  ; ?> </span>



 												   <span class="auto-style2">



 </span></span></td>
												</tr>
												<tr>
													<td width="33%" height="38" class="auto-style15" colspan="2" style="width: 50%">
											<span lang="ar-sa">
													<font color="#FF0000" class="auto-style10">
														&nbsp;<font color="#FF0000" class="auto-style22">
												<strong>&nbsp;ملاحظة : أي كشط أو تعديل 
														في هذه الشهادة يلغيها 
													(<? 
													  $ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8"));
echo $ID; ?>)</strong></font></td>
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