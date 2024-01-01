<?php error_reporting(0);

//	include('session.php');  

 

?>
   
  
	<html><head>
	
	  <style>
 
 

 @media print{
 

    #Header, #Footer { display: none !important; }
    .noprint {
        display: none;
    }

}

  @page {
 
   margin: 0 0 0 0;
}

    @media print {
  body {
    zoom: 94%;
    
     	 background-image: url("bg1.jpg");  
 	
    background-size:   cover;                      /* <------ */
    background-repeat: no-repeat;
    background-position: center center; }



  }
}

 @page {
  size: A4 portrait ;
}
 
</style>


<style>

 @page {
 
   margin: 0 0 0 0;
}

html { 
  background: url(bg1.jpg) no-repeat 
    center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



body {
 
 

 
 
 	 background-image: url("bg1.jpg");  
 	
    background-size:   cover;                      /* <------ */
    background-repeat: no-repeat;
    background-position: center center; }
    
    
    @media print {
  body {
    zoom: 85%;
  }
}
 
 
  @page {
  size: A4 portrait ;
}
 

</style>


	<LINK href="image/style.css" type=text/css rel=stylesheet>

<meta http-equiv="Content-Language" content="ar-sa">
<LINK href="image/style.css" type=text/css rel=stylesheet>


<title>افادة</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
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
p
	{margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	}
 p.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	text-align:right;
	direction:rtl;
	unicode-bidi:embed;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	}
.auto-style2 {
	font-family: "Sakkal Majalla";
}
.auto-style3 {
	font-family: "Sakkal Majalla";
	font-size: x-large;
}
.auto-style4 {
	font-family: "Sakkal Majalla";
	font-weight: bold;
	font-size: x-large;
}
.auto-style5 {
	font-size: medium;
}
  .auto-style6 {
	  border-width: 0px;
  }
  .auto-style7 {
	  font-weight: normal;
	  text-align: center;
	  border-style: solid;
	  border-width: 1px;
  }
  .auto-style9 {
	  text-align: center;
	  border-style: solid;
	  border-width: 1px;
	  font-family: "Traditional Arabic", serif;
	  font-size: large;
  }
  .auto-style10 {
	  font-family: "Traditional Arabic", serif;
	  font-size: x-large;
  }
  .auto-style11 {
	  text-align: center;
	  border-style: solid;
	  border-width: 1px;
	  font-family: "Traditional Arabic", serif;
	  font-size: x-large;
  }
  </style>

<title>افادة</title>
 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>	 	
 
 
 
 

		   
    <?
    include ("conn.php");
    	    $ID_reg1= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects,teacher,branches,stu_sec,student
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and ID_reg='$ID_reg1'  and student.stu_ID=stu_sec.stu_ID order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>  

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: center;  "MsoNormal" align="center" dir="RTL" style="text-align:center">
<p><br></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</p>
	<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse">
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td >
			<div align="center">
				<table border="0" width="85%" style="border-collapse: collapse">
					<tr>
						<td>
						<p align="left" dir="rtl" class="auto-style5">
						<span lang="AR-SA" class="auto-style2"><strong>&nbsp;الرقم
	: </strong>
	</span>
	<span lang="en-us" class="auto-style2"><strong><? echo $row['ID_reg']; ?>
						</strong></span></p>
	<p class="auto-style5" dir="RTL" style="text-align: left">
	<span lang="AR-SA" class="auto-style2">
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;التاريخ
	:&nbsp; <? echo date('Y-m-d'); ?></strong></span></p>
	<p class="MsoNormal" align="center" dir="RTL" style="text-align:center">
	&nbsp;</p>
	<p align="center" dir="RTL" style="margin:0in;text-align:center;line-height:150%;
direction:rtl;unicode-bidi:embed">
	<span lang="AR-SA" style="font-size: 20.0pt; line-height: 150%; font-family: PT Bold Heading">
	إلى من يهمه الأمر</span></p>
						<p align="center" dir="RTL" style="margin:0in;text-align:center;line-height:150%;
direction:rtl;unicode-bidi:embed">
						&nbsp;</p>
						<table class="auto-style6" style="width: 100%" dir="ltr">
							<tr>
								<td class="auto-style11">
								<span dir="RTL" lang="AR-SA" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style10">
								<strong>الجنسية</strong></span></td>
								<td class="auto-style7">
								<span dir="RTL" lang="AR-SA" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style10">
								<strong>السجل المدني</strong></span></td>
								<td class="auto-style7">
								<span dir="RTL" lang="AR-SA" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style10">
								<strong>الاسم</strong></span></td>
							</tr>
							<tr>
								<td class="auto-style9"><strong><? echo $row['Nationality']; ?><? if($row['Branches_ID']==3)    echo 'ة'; ?>
								</strong></td>
								<td class="auto-style9"><strong><? echo $row['iqama']; ?>
								</strong></td>
								<td class="auto-style9"><strong><? echo $row['stu_name_ar']; ?>
								</strong></td>
							</tr>
						</table>
	<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%">
	&nbsp;</p>
						<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%">
						<span lang="AR-SA" style="line-height: 150%; " class="auto-style3">
						<strong>السلام عليكم ورحمة الله وبركاته</strong></span></p>
	<p class="MsoNormal" align="center" dir="RTL" style="text-align:center;line-height:
150%">
	<span lang="AR-SA" style="line-height: 150%; " class="auto-style3">
	<strong>الحمد لله والصلاة والسلام على سيدنا محمد وصحبه وسلم ... وبعد</strong></span></p>
	<p dir="RTL" style="margin-top:0in;margin-right:7.1pt;margin-bottom:0in;
margin-left:0in;text-align:center;text-kashida:20%;
line-height:150%;direction:rtl;unicode-bidi:embed">
	<span lang="AR-SA" style="line-height:150%;" class="auto-style3">
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; يفيد <? echo $row['Branches_title']; ?> 
	<b>
	<span dir="RTL" lang="AR-SA" style="mso-fareast-font-family: &quot;Times New Roman&quot;; mso-ansi-language: EN-US; mso-fareast-language: AR-SA; mso-bidi-language: AR-SA">
	بأن الموضح بياناته<? if($row['Branches_ID']==3)    echo 'ا'; ?> أعلاه&nbsp; </span></b>مسجل<? if($row['Branches_ID']==3)    echo 'ة'; ?> لدينا ب<? echo $row['cors_type']; ?> /<? echo $row['cors_name']; ?>  والمعتمدة من المؤسسة 
	العامة للتدريب التقني والمهني ،،لمدة <? echo $row['contact_hours']; ?>&nbsp; 
	وبعدد <? echo $row['credits']; ?> ساعة 
						والتي تبدأ بتاريخ: 
	<? echo $row['start_date']; ?> هـ&nbsp; الموافق <? echo $row['start_date_en']; ?> م وتنتهي بتاريخ: <? echo $row['end_date']; ?> 
	هـ</strong></span><span lang="en-us" style="line-height: 150%; " class="auto-style3"><strong>
	</strong>
						</span>
						<span style="line-height: 150%; " class="auto-style3">
						<strong>الموافق <? echo $row['end_date_en']; ?> م</strong></span><span lang="AR-SA" style="line-height:150%;" class="auto-style3"><strong> .</strong></span></p>
	<p dir="RTL" style="margin-top:0in;margin-right:7.1pt;margin-bottom:0in;
margin-left:0in;text-align:center;text-kashida:10%;
line-height:150%;direction:rtl;unicode-bidi:embed">
	<span lang="AR-SA" style="line-height:150%;" class="auto-style3">
	<strong>&nbsp;</strong></span></p>
	<p dir="RTL" style="margin-top:0in;margin-right:7.1pt;margin-bottom:0in;
margin-left:0in;text-align:center;text-kashida:20%;
line-height:150%;direction:rtl;unicode-bidi:embed">
	<span lang="AR-SA" style="line-height:150%;" class="auto-style3">
	<strong>وقد أعطي هذا المشهد للمذكور<? if($row['Branches_ID']==3)    echo 'ة'; ?> أعلاه بناء على طلبه<? if($row['Branches_ID']==3)    echo 'ا'; ?> لتقديمه لمن يهمه الأمر دون 
	ادنى مسؤولية على المعهد تجاه الغير ،،،</strong></span></p>
	<p dir="RTL" style="margin-top:0in;margin-right:7.1pt;margin-bottom:0in;
margin-left:0in;text-align:justify;text-justify:kashida;text-kashida:20%;
line-height:115%;direction:rtl;unicode-bidi:embed">
	<span lang="AR-SA" style="line-height:115%;" class="auto-style4">
	<strong>&nbsp;</strong></span></p>
	<p align="center" dir="RTL" style="margin-top:0in;margin-right:7.1pt;margin-bottom:
0in;margin-left:0in;text-align:center;line-height:115%;direction:rtl;
unicode-bidi:embed">
	<span lang="AR-SA" style="line-height:
115%;" class="auto-style3"><strong>هذا لإحاطة سعادتكم , والله ولي التوفيق،،،</strong></span></p>
						</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
</table>
	<? } } ?> </body>
</html>
 