<?php

require_once 'vendor/autoload.php';

use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;




?>

 

<?php
error_reporting(0);
//include('session.php'); 
 include('font2.php'); 
include ("conn.php");

?>
<!DOCTYPE html>
<html>
<head>

  <style type=text/css>
 
 

.pagebreak {  page-break-before: always;
 }
</style>

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

 body {
  width: 100%;
 
  margin: 0;
  padding: 0;
}

  @page {
   size: 21cm 29.7cm ;
 
}

</style>



</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: center; background-attachment: fixed">
 

 
 <? for($x=1;$x<=2;$x++){ ?> <div class="border">  </div>

 <?
 	    $Paid_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['Paid_ID']), ENT_QUOTES, "utf-8")); 


$result=mysqli_query($conn,"select * from paid1,stu_sec,student,subjects,cors 

 where Paid_ID='$Paid_ID' 
and stu_sec.ID_reg=paid1.ID_reg and student.stu_id=stu_sec.stu_id   and  subjects.cors_ID=cors.cors_ID and cors.ID=stu_sec.section_Id");
while($row=mysqli_fetch_array($result))
{
  $aqdID=$row['aqdID'];
  $aqdID=$row['aqdID'];
   $ID_user=$row['ID_user'];
?>

<div align="center">                      
<br> <table   border=0 width=95% dir="ltr"  >
 <tr>
 <td align="center" rowspan="4"  width="37%">
<p align="center"><b><font size="2">VAT No. : 
	<span lang="ar-sa">ــــــــــــــــــــــــــــــــــ</span></font></b>	</td>
 
 <td rowspan="4" width="21%">
	<p align="center"><p align="center"><img src="<? echo $branches_logo; ?>"   height="75">		 </td>
 <td align="center" width="520"><b><font face="Droid Arabic Kufi" size="2">المملكة العربية السعودية
</font></b></td>
 
 </tr>
 <tr>
 
 <td align="center" width="520"><b><span lang="ar-sa"><font face="Droid Arabic Kufi" size="2"> <? echo $Branches_title_sms; ?></font></span>
	</b></td>
 
 </tr>
 <tr>
 <td align="center" width="520"><span style="font-size: 9pt"><? echo $Branches_title_en_sms; ?> </span></td>
 
 </tr>
  
 </table>  

	<table border="0" width="95%" cellspacing="0" cellpadding="0" >
	 
		<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();"> 
	 
		<input type=hidden  name="ID"   size="20"    class="form-control" style="width:50; height:30; font-family:Droid Arabic Kufi; text-align:right; font-weight:700" dir="rtl" value="<? echo $ID; ?>"  > 
	 
		 
		<tr>
			<td width="100%" ><hr></td>
		</tr>
		<tr>
			<td width="100%">
			<div align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="21">
					<tr>
							<td background="p1.jpg">
						<table border="0" width="100%" style="border-collapse: collapse" height="82">
							<tr>
								<td height="31" colspan="3">
								<p align="center"><b>
								<font face="Droid Arabic Kufi">فاتورة ضريبية<br>
								<u>Tax Invoice</u></font></b></td>
							</tr>
							<tr>
								<td height="31" width="50%">
								<p>
								<b><font face="Droid Arabic Kufi" size="2">Invoice Number
					 						: <?
 
echo $ID=$row['Paid_ID'];
 
 
 ?>  
								</font></b></td>
								<td height="31" width="1%">&nbsp;</td>
								<td height="31" width="49%">
								<p dir="rtl"><b><font face="Droid Arabic Kufi" size="2">رقم الفاتورة  
					 						: <?
 
echo $ID=$row['Paid_ID'];
 
 
 ?>  
								</font></b></td>
							</tr>
							<tr>
								<td height="31" width="50%">
								<b><font size="2" face="Droid Arabic Kufi">Invoice Issue Date:	<? echo $row['sys_date']; ?>    

					</font></b></td>
								<td height="31" width="1%">&nbsp;</td>
								<td height="31" width="49%">
								<p dir="rtl"><b><font size="2" face="Droid Arabic Kufi">تاريخ إصدار الفاتورة :	<? echo $row['sys_date']; ?>   
					</font></b></td>
							</tr>
							<tr>
								<td height="31" width="50%">
								<p class="MsoNormal" align="center" dir="RTL" style="direction: ltr; text-align: left">
					 
							<font size="2">
							<span style="font-family: Droid Arabic Kufi; ">
							Customer Name:  &nbsp;   

<?
 
 echo $row['stu_name_en'];  ?>
   </span></font></td>
								<td height="31" width="1%">&nbsp;</td>
								<td height="31" width="49%"><p class="MsoNormal" align="center" dir="RTL">
					 
							<font size="2">
							<span style="font-family: Droid Arabic Kufi; ">
							اسم العميل:  &nbsp;   

<?
 
 echo $row['stu_name_ar'];  ?>
   </span></font></td>
							</tr>
							<tr>
								<td height="29" width="50%">
								<p class="MsoNormal" align="center" dir="RTL" style="direction: ltr; text-align: left">
					 
							<font size="2">
							<span style="font-family: Droid Arabic Kufi; ">
							  Nationality:  &nbsp;   

<?
$query8 = "select * from nat where nat='$row[Nationality]'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
echo $row8['nat_en'];
 }
 ?>
   </span></font></td>
								<td height="29" width="1%">
								<p class="MsoNormal" align="center" dir="RTL">&nbsp;</td>
								<td height="29" width="49%">
								<p dir="RTL" class="MsoNormal" align="center">
					 
							<font size="2">
							<span style="font-family: Droid Arabic Kufi; ">
							الجنسية  :  &nbsp;   

<?
 
 echo $row['Nationality'];  ?>
   </span></font></td>
							</tr>
							<tr>
								<td height="29" width="50%">
								<p class="MsoNormal" align="center" dir="RTL" style="direction: ltr; text-align: left">
								<font size="2">
								<span style="font-family: Droid Arabic Kufi">ID 
								Number : <?
 
 echo $row['iqama'];  ?>
</span></font></td>
								<td height="29" width="1%">
								&nbsp;</td>
								<td height="29" width="49%">
								<p align="center" class="MsoNormal" dir="RTL">
								<font size="2">
								<span style="font-family: Droid Arabic Kufi">رقم 
								الجوال : <?
 
 echo $row['mobile'];  ?>
</span></font></td>
							</tr>
							 <tr>
								<td colspan="3">
								&nbsp;</td>
							</tr> 
							 </table>
							</tr>
					 </table>
			</div>
			</td>
		</tr>
 
		<tr>
			<td width="100%">
		 	
		<table border="0" width="100%" dir="rtl" cellspacing="0" cellpadding="0" height="58">
				 
				<tr>
					<td width="100%" colspan="7">
					<table border="1" width="100%" cellpadding="2" style="border-collapse: collapse; border-right-width:0px; border-bottom-width:0px; border-top-width:0px" dir="rtl" >
					<tr>
						<td align="center"  width="15%" dir="rtl" height="50" style="border-top-color: #C0C0C0; border-top-width: 1px" bgcolor="#253376">
						<p align="center" dir="rtl">
						<b>
						<font face="Droid Arabic Kufi" size="2"  color="#FFFFFF">
						السعر الاجمالي<br>Total</font></b></td>
						<td align="center"  width="14%" dir="rtl" height="50" style="border-top-color: #C0C0C0; border-top-width: 1px" bgcolor="#253376">
						<p align="center" dir="rtl">
						<b>
						<font face="Droid Arabic Kufi" size="2" color="#FFFFFF">
						سعر الوحدة  <br>Unit Price</font></b></td>
						<td align="center" width="6%" dir="rtl" height="50" style="border-top-color: #C0C0C0; border-top-width: 1px" bgcolor="#253376">
						<p align="center" dir="rtl">
						<b>
						<font face="Droid Arabic Kufi" size="2"  color="#FFFFFF">
						الكمية<br>Qty</font></b></td>
						<td  dir="rtl" width="60%" height="50" style="border-top-color: #C0C0C0; border-top-width: 1px" bgcolor="#253376">
						<p align="center" dir="rtl">
						<b>
						<font face="Droid Arabic Kufi" size="2"  color="#FFFFFF">
						تفاصيل الخدمة<br>Service Details</font></b></td>
						<td align="center"   dir="rtl" style="border-right-color: #808080; border-right-width: 1px; border-top-color:#C0C0C0; border-top-width:1px" width="3%" height="50" bgcolor="#253376">
						<p align="center" dir="rtl">
						<b>
						<font face="Droid Arabic Kufi" size="2" color="#FFFFFF">
						م<br>#</font></b></td>
					</tr>
 				
					<tr>
						<td align="center" width="15%" dir="rtl" height="30">
						
						
						<b>
						
						<font color="#000000">
						
					<? echo $pr=$row['Amount']; ?></font></b></td>
						<td align="center" width="14%" dir="rtl" height="26">
						<b><font color="#000000"><? echo $pr=$row['Amount']; ?>
						</font>
						</b></td>
						<td align="center" width="6%" dir="rtl" height="26">
						<p dir="rtl">
						<b>
						<font color="#000000">1</font></b></td>
						<td dir="rtl" width="60%" height="26">
						<font face="Droid Arabic Kufi" size="2" color="#000000">
						<p align="center"><b><? echo $row['paid_type2']; ?> -  لدورة : <? echo $row['cors_name']; ?>  - <? echo $row['contact_hours']; ?>  رقم الدورة (<? echo $row['cors_no']; ?>)</b></font></td>
						<td align="center" dir="rtl" style="border-right-color: #808080; border-right-width: 1px" width="3%" height="26">
						<font face="Droid Arabic Kufi" size="2" color="#F37F3B">
						<b>
						1 </b></td>
					</tr>   	
 				
					<tr>
						<td align="center" width="15%" dir="rtl" height="30">
						&nbsp;</td>
						<td align="center" width="14%" dir="rtl" height="26">
						&nbsp;</td>
						<td align="center" width="6%" dir="rtl" height="26">
						&nbsp;</td>
						<td dir="rtl" width="60%" height="26">
						&nbsp;</td>
						<td align="center" dir="rtl" style="border-right-color: #808080; border-right-width: 1px" width="3%" height="26">
						&nbsp;</td>
					</tr>   	
 				
					<tr>
						<td align="center" width="15%" dir="rtl" height="30">
						&nbsp;</td>
						<td align="center" width="14%" dir="rtl" height="26">
						&nbsp;</td>
						<td align="center" width="6%" dir="rtl" height="26">
						&nbsp;</td>
						<td dir="rtl" width="60%" height="26">
						&nbsp;</td>
						<td align="center" dir="rtl" style="border-right-color: #808080; border-right-width: 1px" width="3%" height="26">
						&nbsp;</td>
					</tr>   	
 				
					<tr>
						<td align="center" width="15%" dir="ltr" style="border-bottom:1px solid #808080; border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; border-top-width:1px"  height="26" bgcolor="#F37F3B">
						<b>
						<p><font color="#000000">
						 
						 <?   if($row['cors']=="دبلوم" and $row['Nationality']=='سعودي') echo number_format($pr,2); else   echo number_format($pr/1.15,2); ?> ريال</font></b></td>
						<td align="center" dir="rtl" style="border-style:solid; border-width:1px; " height="26" colspan="4">
						
<p align="right" dir="rtl"><span lang="ar-sa"><font color="#000000"><b>الإجمالي 
غير شامل ضريبة القيمة المضافة</b></font></span></td>
					</tr>






					 
					<tr>
						<td align="center" width="15%" dir="ltr" style="border-bottom:1px solid #808080; border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; border-top-width:1px"  height="26" bgcolor="#F37F3B">
						<b>
						<font color="#000000">
						
						<?   if($row['cors']=="دبلوم" and $row['Nationality']=='سعودي') echo $vat=number_format(0,2); else   echo  $vat=number_format($pr-($pr/1.15),2); ?> ريال
						
						
						 </font></b></td>
						<td align="center" dir="rtl" style="border-style:solid; border-width:1px; " height="26" colspan="4">
						
<p align="right"><span lang="ar-sa"><font color="#000000"><b>ضريبة القيمة 
المضافة <?   if($row['cors']=="دبلوم" and $row['Nationality']=='سعودي') echo 0; else   echo  15; ?>%</b></font></span></td>
					</tr>






					 
					<tr>
						<td align="center" width="15%" dir="ltr" style="border-bottom:1px solid #808080; border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; border-top-width:1px"  height="26" bgcolor="#F37F3B">
						 <p><font color="#000000"><b>
						 <?  echo number_format($pr,2); ?> ريال</b></font></td>
						<td align="center" dir="rtl" style="border-style:solid; border-width:1px; " height="26" colspan="4">
						
<p align="right"><font color="#000000"><b>المجموع شامل ضريبة القيمة المضافة</b></font></td>
					</tr>

</table></td>
				</tr>
			</table>
			</td>
		</tr>
					 <tr>
			<td width="14%">

 
			</td>
		</tr>
		 
		
		
 
				
		<tr>
			<td width="100%">
			<div align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td  align="center"   valign="bottom" colspan="2">
						 
						<table border="0" width="100%">
							<tr>
								<td width="123">
								
<?php
$seller_name= $Branches_title_sms;
$seller_tax="123456";
$invoice_date = $row['sys_date'];
$invoice_amount= $pr;
$invoice_tax_amount = $vat;

// data:image/png;base64, .........
$displayQRCodeAsBase64 = GenerateQrCode::fromArray([
    new Seller($seller_name), // seller name
    new TaxNumber($seller_tax), // seller tax number
    new InvoiceDate($invoice_date), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount($invoice_amount), // invoice total amount
    new InvoiceTaxAmount($invoice_tax_amount) // invoice tax amount
    // TODO :: Support others tags
])->render();
?>

 <img src="<?= $displayQRCodeAsBase64?>" height="150"  alt="QR Code" />								
								
								
								
 
								
								
								
								</td>
								<td> </td>
							</tr>
						</table>
						</td>
						<td width="49%" align="center" colspan="2" background="p1.jpg">
						<p align="right" dir="rtl"><b>ملاحظات</b> :  <br><? echo $row['paid_type2']; ?>   <? echo $row['paid_notes']; ?></td>
					</tr>
					 
					<tr>
						<td width="99%" align="center" colspan="4">
						<hr></td>
					</tr>
					 
					<tr>
						<td width="33%" align="center">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span style="font-family: Droid Arabic Kufi; text-decoration:underline">
						<font size="2">&nbsp;المحاسب</font></span></td>
						<td width="33%" align="center" colspan="2">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<span style="font-family: Droid Arabic Kufi; text-decoration:underline">
						<font size="2">الختم</font></span></td>
						<td width="33%" align="center">
						<p class="MsoNormal" align="center" dir="RTL" style="text-align: center">
						<font size="2">
						<span style="font-family: Droid Arabic Kufi; text-decoration: underline">المستلم</span></font></td>
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
						<td width="33%" align="center" height="80" colspan="2">&nbsp;</td>
						<td width="33%" align="center" height="80">
						<div align="center">
							<table border="0" width="80%" cellspacing="0" cellpadding="0" height="69">
								<tr>
									<td background="p1.jpg">
										<p class="MsoNormal" dir="RTL" align="center">
									<span style="font-size: 10pt; font-family: Droid Arabic Kufi; font-weight: 400">

<?
 
include ("conn.php");
$result1=mysqli_query($conn,"select * from user where username='$row[user_p]'");
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
			<td width="100%"><hr></td>
		</tr>
		<tr>
			<td width="100%" align="center" dir="rtl">
			<p class="MsoNormal" dir="RTL" align="center" style="text-align: center">
			<span style="font-family: Droid Arabic Kufi; font-weight: 400; font-size: 9pt">
			

</span></td>
		</tr>
		 <tr>
			<td width="100%" align="center" dir="rtl">
			<p class="MsoNormal" dir="RTL" align="center" style="text-align: center">
			<span style="font-family: Droid Arabic Kufi; font-weight: 400; font-size: 9pt">
			
الطائف . حي الشرفية . الشارع العام TAIF. SHARAFIYAH DISTRICT. MAIN STREET 

</span></td>
		</tr>
		 
		 
		<tr>
			<td width="100%" align="justify" dir="rtl">
						
			</td>
		</tr>
		 
		 
	 
		</form>
	</table><? if($x==1)
echo '<div class="pagebreak"> </div>'; ?>

<? } ?>
</div>
<? 

  } ?>
 

</body>
</html>
 