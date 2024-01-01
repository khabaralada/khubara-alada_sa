<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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


<title><? echo $Branches_title_sms; ?>  </title><meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
function framePrint(whichFrame){
parent[whichFrame].focus();
parent[whichFrame].print();
}
</script>

 


 
 
 
 



<style>
<!--
 p.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	text-align:right;
	direction:rtl;
	unicode-bidi:embed;
	font-size:16.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold; margin-left:0cm; margin-right:0cm; margin-top:0cm}
-->
</style>



</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: center; background-attachment: fixed">
 

 
 <? for($x=1;$x<=1;$x++){ ?>

<div align="center">                     <?
include ("conn.php");
$query = "select * from heder";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$footer_ar=$row['footer_ar'];
$footer_en=$row['footer_en'];
?>
<br> <table   border=0 width=100% dir="ltr"  >
 <tr>
 <td align="center"><b><font face="Droid Arabic Kufi"><? echo $row['e1']; ?> </font></b></td>
 
 <td rowspan="4" width=40%>
	<p align="center"><img src="<? echo $branches_logo; ?>"   height="96"></td>
 <td align="center"><b><font face="Droid Arabic Kufi">المملكة العربية السعودية
</font></b></td>
 
 </tr>
 <tr>
 <td align="center"><font face="Droid Arabic Kufi" size="2"><? echo $row['e2']; ?> </font></td>
 
 <td align="center"><span lang="ar-sa"><font face="Droid Arabic Kufi" size="2">المؤسسة العامة للتدريب التقني والمنهي - وزارة التعليم </font></span></td>
 
 </tr>
 <tr>
 <td align="center"><font face="Droid Arabic Kufi" size="2"><? echo $row['e3']; ?> </font></td>
 
 <td align="center"><span lang="ar-sa"><font face="Droid Arabic Kufi" size="2"> <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
  echo $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
 }
 ?>  </font></span></td>
 
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td align="center">&nbsp;</td>
 
 </tr>
</table> <? } ?>
 <?
   $ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 


$result=mysqli_query($conn,"select * from achievement where ID='$ID'");
while($row=mysqli_fetch_array($result))
{
  $aqdID=$row['aqdID'];
  $aqdID=$row['aqdID'];
   $ID_user=$row['ID_user'];
?>
	<table border="0" width="100%" cellspacing="0" cellpadding="0" >
	 
		<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();"> 
	 
		<tr>
			<td valign="top" width="33%"  >
			<div align="right">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" valign="top">
						<p dir="rtl"><b><font face="Droid Arabic Kufi" size="2">سند رقم
					 						( <?
 
echo $ID=$row['ID'];
 
 
 ?></font></b><font size="3" face="Droid Arabic Kufi" color="#FF0000"><b><input type=hidden  name="ID"   size="20"    class="form-control" style="width:50; height:30; font-family:Droid Arabic Kufi; text-align:right; font-weight:700" dir="rtl" value="<? echo $ID; ?>"  ></b></font><b><font face="Droid Arabic Kufi" size="2"> )
								</font></b>
						</td>
					</tr>
				</table>
			</div>
			</td>
			<td width="33%"  width=40% >
			<div align="center">
			<img border="0" src="sand1.jpg" width="174" height="57">
			</div>
			</td>
			<td valign="top" width="34%"  >
			<div align="center">
				 <p dir="rtl"><b><font size="2" face="Droid Arabic Kufi">التاريخ :	<? echo $row['date']; ?>
					</font></b>
			</div>
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="3" ><hr></td>
		</tr>
		<tr>
			<td width="100%" colspan="3">
			<div align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="21">
					<tr>
							<td background="p1.jpg">
						<p class="MsoNormal" align="center" dir="RTL">
					 
							<font size="3">
							<span style="font-family: Droid Arabic Kufi; ">
							استلمت من /  &nbsp;  <?
 if($row['types']==2) {
$query1 = "select * from user where ID='$row[mnadeb_ID]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo 'المندوب : '.$row1['name'];
}
 
}
?>

<?
 if($row['types']==1) {

$query2 = "select * from bank where  ID='$row[account]'   ";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
 echo $row2['name']; } }} ?>
   </span></font></tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td width="16%" colspan="3" height="26">
			<div align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="13">
					<tr>
						<td dir="rtl" width="54%" background="p1.jpg">
 
					 
 
					 
 
					 
							 
											<font face="Droid Arabic Kufi" size="2">
 
					 
 
					 
 
					 
							 
											<?php 


 

  $sums1=$row['amount'];
  
  $total=explode(".",$sums1); 
$j= strlen($total[0]); 
$je=$j; 
$je--; 
$de=1; 
for($i=1;$i<$j;$i++) 
$de=$de*10; 

$t=$total[0]; 

for($i=0;$i<$j;$i++) 
{ 
$te[$je]=$t/$de; 
$t=$t%$de; 
$de=$de/10; 
$temp=explode(".",$te[$je]); 
$te[$je]=$temp[0]; 
$je--; 

} 



for($i=0;$i<$j;$i++) 
{ 
if ($i == 0) 
{ 
if ($j<3) 
switch($te[$i]) 
{ 
case "0" : $arb[0]=" "; 
break; 
case "1" :  $arb[0]= " واحد"  ; 
break; 
case "2" : if($te[1]=="1") $arb[0]=" اثنا "; else $arb[0]=" اثنان" ; 
break; 
case "3" : $arb[0]=" ثلاثة"; 
break; 
case "4" : $arb[0]=" اربعة" ; 
break; 
case "5" : $arb[0]=" خمسة"   ; 
break; 
case "6" : $arb[0]=" ستة"     ; 
break; 
case "7" : $arb[0]=" سبعة"     ; 
break; 
case "8" : $arb[0]=" ثمانية"    ; 
break; 
case "9" : $arb[0]=" تسعة"       ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[0]=" "; 
break; 
case "1" :  $arb[0]=" وواحد"  ; 
break; 
case "2" : if($te[1]=="1") $arb[0]=" واثنا "; else $arb[0]=" واثنان" ; 
break; 
case "3" : $arb[0]=" وثلاثة"; 
break; 
case "4" : $arb[0]=" واربعة" ; 
break; 
case "5" : $arb[0]=" وخمسة"   ; 
break; 
case "6" : $arb[0]=" وستة"     ; 
break; 
case "7" : $arb[0]=" وسبعة"     ; 
break; 
case "8" : $arb[0]=" وثمانية"    ; 
break; 
case "9" : $arb[0]=" وتسعة"       ; 
break; 
} 
} 



if ($i == 1) 
{ 
if ($j==2 ) 
{ 
if($te[$i]==1){if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";}  elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]=" عشر"    ; }
 if ( $te[0]=="0") 
switch($te[$i]) 
{ 
case "0" : $arb[1]=" "      ; 
break; 
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";} elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]="عشر"    ;
 break; 
case "2" : $arb[1]=" عشرون"    ; 
break; 
case "3" : $arb[1]=" ثلاثون"    ; 
break; 
case "4" : $arb[1]=" اربعون"     ; 
break; 
case "5" : $arb[1]=" خمسون"       ; 
break; 
case "6" : $arb[1]=" ستون"         ; 
break; 
case "7" : $arb[1]=" سبعون"         ; 
break; 
case "8" : $arb[1]=" ثمانون"         ; 
break; 
case "9" : $arb[1]=" تسعون"           ; 
break; 
} 

} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[1]=" "      ; 
break; 
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" وأحد عشر";}elseif($te[0]=="0")$arb[1]=" وعشرة"; else $arb[1]=" عشر"  ;
 break; 
case "2" : $arb[1]=" وعشرون"    ; 
break; 
case "3" : $arb[1]=" وثلاثون"    ; 
break; 
case "4" : $arb[1]=" واربعون"     ; 
break; 
case "5" : $arb[1]=" وخمسون"       ; 
break; 
case "6" : $arb[1]=" وستون"         ; 
break; 
case "7" : $arb[1]=" وسبعون"         ; 
break; 
case "8" : $arb[1]=" وثمانون"         ; 
break; 
case "9" : $arb[1]=" وتسعون"           ; 
break; 
} 
} 


if ($i == 2) 
{ 
if ($j==3) 
switch($te[$i]) 
{ 
case "0" : $arb[2]=" "      ; 
break; 
case "1" : $arb[2]=" مائة"    ; 
break; 
case "2" : $arb[2]=" مائتان"    ; 
break; 
case "3" : $arb[2]=" ثلاثمائة"    ; 
break; 
case "4" : $arb[2]=" اربعمائة"     ; 
break; 
case "5" : $arb[2]=" خمسمائة"       ; 
break; 
case "6" : $arb[2]=" ستمائة"         ; 
break; 
case "7" : $arb[2]=" سبعمائة"         ; 
break; 
case "8" : $arb[2]=" ثمانمائة"         ; 
break; 
case "9" : $arb[2]=" تسعمائة"           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[2]=" "      ; 
break; 
case "1" : $arb[2]=" ومائة"    ; 
break; 
case "2" : $arb[2]=" ومائتان"    ; 
break; 
case "3" : $arb[2]=" وثلاثمائة"    ; 
break; 
case "4" : $arb[2]=" واربعمائة"     ; 
break; 
case "5" : $arb[2]=" وخمسمائة"       ; 
break; 
case "6" : $arb[2]=" وستمائة"         ; 
break; 
case "7" : $arb[2]=" وسبعمائة"         ; 
break; 
case "8" : $arb[2]=" وثمانمائة"         ; 
break; 
case "9" : $arb[2]=" وتسعمائة"           ; 
break; 
} 
} 

if ($i == 3) 
{ 
if($j==4) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" ألف"    ; 
break; 
case "2" : $arb[$i]=" ألفان"    ; 
break; 
case "3" : $arb[$i]=" ثلاثة آلاف"    ; 
break; 
case "4" : $arb[$i]=" اربعة آلاف"     ; 
break; 
case "5" : $arb[$i]=" خمسة آلاف"       ; 
break; 
case "6" : $arb[$i]=" ستة آلاف"         ; 
break; 
case "7" : $arb[$i]=" سبعة آلاف"         ; 
break; 
case "8" : $arb[$i]=" ثمانية آلاف "         ; 
break; 
case "9" : $arb[$i]=" تسعة آلاف "           ; 
break; 
} 
elseif ($j==5) 

switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" واحد "    ; 
break; 
case "2" : if($te[6]=="1") $arb[$i]=" اثنا "; else $arb[$i]=" اثنان" ; 
break; 
case "3" : $arb[$i]=" ثلاثة "    ; 
break; 
case "4" : $arb[$i]=" اربعة "     ; 
break; 
case "5" : $arb[$i]=" خمسة "       ; 
break; 
case "6" : $arb[$i]=" ستة "         ; 
break; 
case "7" : $arb[$i]=" سبعة "         ; 
break; 
case "8" : $arb[$i]=" ثمانية "         ; 
break; 
case "9" : $arb[$i]=" تسعة "           ; 
} 

else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" وواحد "    ; 
break; 
case "2" : if($te[4]=="1") $arb[$i]=" واثنا "; else $arb[$i]=" واثنان" ; 
break; 
case "3" : $arb[$i]=" وثلاثة "    ; 
break; 
case "4" : $arb[$i]=" واربعة "      ; 
break; 
case "5" : $arb[$i]=" وخمسة "       ; 
break; 
case "6" : $arb[$i]=" وستة "         ; 
break; 
case "7" : $arb[$i]=" وسبعة "         ; 
break; 
case "8" : $arb[$i]=" وثمانية "         ; 
break; 
case "9" : $arb[$i]=" وتسعة "           ; 
} 
} 
if ($i == 4) 
{ 
if($j==5 ) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" أحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" عشرة آلاف";else$arb[$i]=" عشر الفا"    ;
 break; 
case "2" : $arb[$i]=" عشرون "    ; 
break; 
case "3" : $arb[$i]=" ثلاثون "    ; 
break; 
case "4" : $arb[$i]=" اربعون "     ; 
break; 
case "5" : $arb[$i]=" خمسون "       ; 
break; 
case "6" : $arb[$i]=" ستون "         ; 
break; 
case "7" : $arb[$i]=" سبعون "         ; 
break; 
case "8" : $arb[$i]=" ثمانون "         ; 
break; 
case "9" : $arb[$i]=" تسعون "           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" وأحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" وعشرة آلاف";else$arb[$i]=" عشر الفا"    ;
 break; 
case "2" : $arb[$i]=" وعشرون "     ; 
break; 
case "3" : $arb[$i]=" وثلاثون "    ; 
break; 
case "4" : $arb[$i]=" واربعون "     ; 
break; 
case "5" : $arb[$i]=" وخمسون "       ; 
break; 
case "6" : $arb[$i]=" وستون "         ; 
break; 
case "7" : $arb[$i]=" وسبعون "         ; 
break; 
case "8" : $arb[$i]=" وثمانون "         ; 
break; 
case "9" : $arb[$i]=" وتسعون "           ; 
break; 
} 
} 
if ($i == 5) 
{ 
if ($j==6) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" مائة "    ; 
break; 
case "2" : $arb[$i]=" مائتان "    ; 
break; 
case "3" : $arb[$i]=" ثلاثمائة "    ; 
break; 
case "4" : $arb[$i]=" اربعمائة "     ; 
break; 
case "5" : $arb[$i]=" خمسمائة "       ; 
break; 
case "6" : $arb[$i]=" ستمائة "         ; 
break; 
case "7" : $arb[$i]=" سبعمائة "           ; 
break; 
case "8" : $arb[$i]=" ثمانمائة "         ; 
break; 
case "9" : $arb[$i]=" تسعمائة "           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" ومائة "    ; 
break; 
case "2" : $arb[$i]=" ومائتان "    ; 
break; 
case "3" : $arb[$i]=" وثلاثمائة "    ; 
break; 
case "4" : $arb[$i]=" واربعمائة "     ; 
break; 
case "5" : $arb[$i]=" وخمسمائة "       ; 
break; 
case "6" : $arb[$i]=" وستمائة "         ; 
break; 
case "7" : $arb[$i]=" وسبعمائة "           ; 
break; 
case "8" : $arb[$i]=" وثمانمائة "         ; 
break; 
case "9" : $arb[$i]=" وتسعمائة "           ; 
break; 
} 
} 

if ($i == 6) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" مليون "    ; 
break; 
case "2" : $arb[$i]=" مليونان "    ; 
break; 
case "3" : $arb[$i]=" ثلاثة ملايين "    ; 
break; 
case "4" : $arb[$i]=" اربعة ملايين "     ; 
break; 
case "5" : $arb[$i]=" خمسة ملايين "       ; 
break; 
case "6" : $arb[$i]=" تة ملايين "         ; 
break; 
case "7" : $arb[$i]=" سبعة ملايين "           ; 
break; 
case "8" : $arb[$i]=" ثمانية ملايين "         ; 
break; 
case "9" : $arb[$i]=" تسعة ملايين "           ; 
break; 
} 
} 




if($j>4 && $te[4]!="1") 
$arb[4]=$arb[4]." الف "; 


echo $strarb=$arb[6].$arb[5].$arb[3].$arb[4].$arb[2].$arb[0].$arb[1]; 
 

?> ريال سعودي فقط لاغير</span></font></span></font></td>
						<td dir="rtl" width="10%">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span style="font-family: Droid Arabic Kufi; font-weight: 400">
						<font size="2">المبلغ كتابة :</font></span></td>
						<td dir="rtl" width="37%" background="p1.jpg">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
					 
							<p class="MsoNormal" align="center" dir="RTL">
					 
							<font size="2">
							<span style="font-family: Droid Arabic Kufi; font-weight: 400">مبلغ وقدرة  : #<? echo $pr=$row['amount']; ?>#</span></font></td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="3">
		<?
$query1 = "select * from bank where ID='$row[bank]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 $bank=$row1['name']; 
  $type=$row1['type']; 
    } ?> 	
		<table border="0" width="100%" dir="rtl" cellspacing="0" cellpadding="0">
				<tr>
					<td width="2%">
					<p class="MsoNormal" dir="RTL" align="center">
					<input type="checkbox" name="T12"  disabled   <? if($type==2) echo 'checked'; ?> value="1" style="float: left"  ></td>
					<td width="9%">
					<p class="MsoNormal" dir="RTL" align="center">
					<span style="font-family: Droid Arabic Kufi; font-weight: 400">
					<font style="font-size: 10pt">&nbsp;نــقــداً</font></span></td>
					<td width="2%">
					<p class="MsoNormal" align="center" dir="RTL">
					<font size="3">
					<span style="font-size: 11pt; font-family: Droid Arabic Kufi; font-weight: 400">
					<input type="checkbox" name="T13"  disabled <? if($type==1) echo 'checked'; ?> value="1" style="float: left"></span></font></td>
					<td width="26%">
					<p class="MsoNormal" align="center" dir="RTL">
					<span style="font-family: Droid Arabic Kufi; font-weight: 400">
					<font style="font-size: 10pt">حساب <? echo $bank; ?> </font></span></td>
					<td width="22%" background="p1.jpg">
					<p class="MsoNormal" align="center" dir="RTL">
					 
							<font size="3">
					 
							<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
					 
							<font face="Droid Arabic Kufi" style="font-size: 10pt">
					 
							<? echo $row['T14']; ?></font></font></td>
					<td width="7%">
					<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
					<span style="font-family: Droid Arabic Kufi; font-weight: 400">
					<font style="font-size: 10pt">بتاريخ </font></span></td>
					<td width="32%" background="p1.jpg">
 
		 
							<p class="MsoNormal" align="center" dir="RTL">
						<font face="Arial" style="font-size: 13pt">: <? echo $row['date']; ?></font>
					</td>
				</tr>
			</table>
			</td>
		</tr>
					 <tr>
			<td width="14%" colspan="3">

<table border="0" width="100%" dir="rtl" cellspacing="0" cellpadding="0" height="8">
				<tr>
					<td width="14%">
					<p class="MsoNormal" align="center" dir="RTL">
					<span style="font-weight: 400">
					<font style="font-size: 11pt; font-weight:400; font-family:Droid Arabic Kufi">
					<span style="font-family: Droid Arabic Kufi; font-size:11pt; font-weight:400">
					وذلك مقابل </span>&nbsp;:<span style="font-family: Droid Arabic Kufi; font-size:11pt; font-weight:400">&nbsp; 
					</span></font></span></td>
					<td width="86%" background="p1.jpg">
					<span style="font-family: Droid Arabic Kufi; font-size: 11pt; font-weight: 400">
					<? echo $pr=$row['details']; ?>   </span></td>
				</tr>
			</table>
			</td>
		</tr>
		 
		
		
					<?
include ("conn.php");

if($invoID!=""){
$result1=mysqli_query($conn,"select * from invo1 where ID='$invoID'");
while($row1=mysqli_fetch_array($result1))
{
 
 
?><? } } ?>
				
		<tr>
			<td width="100%" colspan="3">
			<div align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td width="99%" align="center" colspan="3" background="p1.jpg">
						&nbsp;</td>
					</tr>
					<tr>
						<td width="33%" align="center">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span style="font-family: Droid Arabic Kufi">
						<font size="2">&nbsp;<span lang="ar-sa">المحاسب</span></font></span></td>
						<td width="33%" align="center">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span style="font-family: Droid Arabic Kufi">
						<font size="2">الختم</font></span></td>
						<td width="33%" align="center">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span lang="ar-sa"><font size="2">المستلم</font></span></td>
					</tr>
					<tr>
						<td width="33%" align="center" height="80">
						<div align="center">
							<table border="0" width="80%" cellspacing="0" cellpadding="0" height="69">
								<tr>
									<td background="p1.jpg">
									<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400"><? echo $row['T9']; ?></span></td>
									<td width="55">
									<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">
									الأسم </span><font face="Arial">
									<span style="font-size: 10pt">:</span></font></td>
								</tr>
								<tr>
									<td background="p1.jpg">
									<p class="MsoNormal" dir="RTL" align="center">&nbsp;</td>
									<td width="55">
									<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">
									التوقيع </span><font face="Arial">
									<span style="font-size: 10pt">:</span></font></td>
								</tr>
							</table>
						</div>
						</td>
						<td width="33%" align="center" height="80">&nbsp;</td>
						<td width="33%" align="center" height="80">
						<div align="center">
							<table border="0" width="80%" cellspacing="0" cellpadding="0" height="69">
								<tr>
									<td background="p1.jpg">
										<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">

<?
$us=$row['username'];
include ("conn.php");
$result1=mysqli_query($conn,"select * from user where username='$us'");
while($row1=mysqli_fetch_array($result1))
{
echo $row1['name'];
 }
?>

</span></td>
									<td width="55">
									<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">
									الأسم </span><font face="Arial">
									<span style="font-size: 10pt">:</span></font></td>
								</tr>
								<tr>
									<td background="p1.jpg">
									<p class="MsoNormal" dir="RTL" align="center">&nbsp;</td>
									<td width="55">
									<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">
									التوقيع </span><font face="Arial">
									<span style="font-size: 10pt">:</span></font></td>
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
			<td width="100%" colspan="3"><hr></td>
		</tr>
		<tr>
			<td width="100%" colspan="3" align="center" dir="rtl">
			<p class="MsoNormal" dir="RTL" align="center" style="text-align: center">
			<span style="font-family: Droid Arabic Kufi; font-weight: 400; font-size: 9pt">
		<? echo $footer_ar; ?></span></td>
		</tr>
		<tr>
			<td width="100%" colspan="3" align="center" dir="rtl">
			<? echo $footer_en; ?></td>
		</tr>
		<tr>
			<td width="100%" colspan="3" align="justify" dir="rtl">
						
			</td>
		</tr>
		</form>
	</table><? } ?>
</div>
<? 

  } ?>
 

</body>
</html>
 