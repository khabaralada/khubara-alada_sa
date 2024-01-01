<?php

	
//include('session.php'); 
//include('font.php'); 
  
include ("conn.php");

	
  $Branches1= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['Branches1']), ENT_QUOTES, "utf-8"));
?> 
 


	<html dir="ltr"><head>
<meta http-equiv="Content-Language" content="en-us">
<script type="text/javascript" src="stmenu.js"></script>
<script type="text/javascript" src="selectuser.js"></script>
 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <style>
 
 @page {
   size: 9cm 5.8cm;
   margin: 0 0 0 0;
}


 
</style>
<style>
*  {
 
 font-family: Droid Arabic Kufi; font-size:10px;
}
</style>

<style>
body {
 
 

 
 	<? if($Branches1!=3) { ?>background-image: url("emp/1.png"); <? } ?>
 	<? if($Branches1==3) { ?>background-image: url("emp/2.png"); <? } ?>
 	
    background-size:   cover;                      /* <------ */
    background-repeat: no-repeat;
    background-position: center center; }
.auto-style1 {
	font-weight: bold;
	border-style: solid;
	border-width: 2px;
}
</style>
<title>بطاقة المتدرب</title>
</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: center; ">
  <?
 
include ("conn.php");
  $NUM= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['NUM']), ENT_QUOTES, "utf-8"));

$result=mysqli_query($conn,"select* from student where NUM='$NUM'");
while($row=mysqli_fetch_array($result))
{
$IDD=$row['IDD'];
?>
 <table border="0" width="100%" style="border-collapse: collapse">
	<tr>
		<td width="100%" height="50" colspan="2" align="center">
		<table border="0" width="100%" cellspacing="0" cellpadding="0" height="29">
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	
	<tr>
		<td width="100%" height="5" colspan="2" align="center"></td>
	</tr>
	
	
	<tr>
		<td rowspan="6" style="width: 30%" align="center">
		

										<span lang="en-us">

										<font face="Droid Arabic Kufi" color="#000000" >

 
	

<? if($_GET['Branches1']==3){
											if($row['photo']=="") { ?>
											<img border="0" src="emp/f.png" width="75" height="80"  class="auto-style1" style="border: 0px solid #FFFFFF"> 
											<? } else { ?>

                                <img border="0" src="emp/<? echo $row['photo']; ?>" width="75" height="80"  class="auto-style1" style="border: 0px solid #FFFFFF">
                                <? } ?>
                                
                                
                                <? } else {   
                                
if($row['photo']=="") { ?>
											<img border="0" src="emp/no-image.png" width="75" height="80"  class="auto-style1" style="border: 0px solid #FFFFFF"> 
											<? } else { ?>

                                <img border="0" src="emp/<? echo $row['photo']; ?>" width="75" height="80"  class="auto-style1" style="border: 0px solid #FFFFFF">
                                <? } ?>




 <? } ?>


									
										
										
										</font></span></td>
		<td dir="rtl" height="2" width="69%" align="center">
		</td>
	</tr>
	<tr>
		<td dir="rtl" width="69%" align="center">
		<b>
		<font color="#000000" face="Droid Arabic Kufi" >
		<span lang="ar-sa">   <? echo $row['stu_name_ar']; ?> </span></font></b></td>
	</tr>
	<tr>
		<td dir="rtl" width="69%" align="center">
		<b>
		<font color="#000000" face="Droid Arabic Kufi" >&nbsp;<? echo $row['stu_name_en']; ?></font></td>
</font></b></td>
	</tr>
	<tr>
		<td dir="rtl" width="69%" align="center">
		
		<span lang="ar-sa"> <b>
		<font color="#000000" face="Droid Arabic Kufi" >
		<? if($_GET['Branches1']==3) echo "متدربة"; else  echo "متدرب"; ?>
</font></b></td>
	</tr>
	<tr>
		<td dir="rtl" width="69%" align="center">
		<b>
		<font color="#000000" face="Droid Arabic Kufi" >
		<span lang="ar-sa">رقم الهوية </span> 
		:<span lang="ar-sa">&nbsp; </span> &nbsp;<? echo $row['iqama']; ?> 
		  </font></b></td>
	</tr>
	<tr>
		<td dir="rtl" width="69%" valign="bottom" align="center">
		<b>
		<font color="#000000" face="Droid Arabic Kufi" >
		<?php    
 require 'arabicTools.class.php';

date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

      $cc= ArabicTools::arabicDate("hj:d / m / Y", mktime (0,0,0,date("m"),date("d")+$ff,date("Y")+1));

?>

		<span lang="ar-sa">صالحة لغاية </span>&nbsp;: <? echo $cc; ?> <span lang="ar-sa">
		هــ</span></font></b>  
		</td>
	</tr>
	<tr>
		<td valign="top" colspan="2">
		<div>
			<div align="center">
			<table border="0" width="90%" cellspacing="0" cellpadding="0" dir="rtl">
				<tr height=3>
					<td colspan="2" height="9"> </td>
				</tr>
				<tr>
					<td colspan="2"  >
					 </td>
				</tr>
				<tr>
					<td>
					<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://nahtonline.com/display1.php?stu_ID=<? echo $row[iqama]; ?>&choe=UTF-8" title="Link to Google.com" width="43"   height="39" align="right" /></td>
					<td>
					
					
					
 
					
					
					<p align="center">
					
					
					
 
					
					
					<img src="barcode.php?text=<? echo $row['iqama']; ?>&size=30&print=true"   width=40% align="left">
					
					
					</td>
				</tr>
			</table>
			</div>
		</div>
		</td>
	</tr>
		</table>
<? } ?>
 
	 
</body>
 