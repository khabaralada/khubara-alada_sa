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
<title>البرنامج الأكاديمي</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
function framePrint(whichFrame){
parent[whichFrame].focus();
parent[whichFrame].print();
}
</script>

 




					    <script type="text/javascript" src="jquery.js"></script>

   <script type="text/javascript">

function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data1.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

</script>
   <script type="text/javascript">

function fetch_select2(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data2.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select2").innerHTML=response; 
     }
   });
}

</script>


   <script type="text/javascript">

function fetch_select3(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data3.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select3").innerHTML=response; 
     }
   });
}

</script>   <script type="text/javascript">

function fetch_select4(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data4.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select4").innerHTML=response; 
     }
   });
}

</script>
 <style>
  
 </style>

</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
تحضير الدورات التطويرية
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

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
   $find= mysqli_real_escape_string($conn,htmlspecialchars(($_GET['find']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where   iqama='$find' or mobile='$find' ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $stu_name_ar=$row['stu_name_ar'];
  $stu_name_en=$row['stu_name_en'];
  $Nationality=$row['Nationality'];
  $iqama=$row['iqama'];
  $iqama_date=$row['iqama_date'];
  $stu_id=$row['stu_id'];
 

  $date3 = d_date($iqama_date); // الدالة 
  $date2 = m_date($iqama_date); // الدالة 
    $date1 = y_date($iqama_date); // الدالة 


  }
  }
?>

                      <?
include ("conn.php");
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id'  and stu_sec.cors_type='لغة الإنجليزية' order by cors_no DESC limit 1 ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
    $cors_name=$row['cors_name'];
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];
  $scor=$row['scor'];
  $Rate=$row['Rate'];
 
 

  $s_date1 = d_date($start_date); // الدالة 
  $s_date2 = m_date($start_date); // الدالة 
   $s_date3 = y_date($start_date); // الدالة 

  $e_date1 = d_date($end_date); // الدالة 
  $e_date2 = m_date($end_date); // الدالة 
   $e_date3 = y_date($end_date); // الدالة 
  }
  }
?>

 
                  <form role="form" action="" method="post">
                    <!-- text input -->
    <div class="row">

                    
                    <div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="pran"   required      tabindex=1   class="form-control"  >
<? if($Branches==0){?> 
 <option></option><? } ?>
 
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
    <div class="form-group col-xs-6">
                      <p style="direction: ltr; text-align: left">
                      <label>نوع الشهادة</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cer_type"   required      tabindex=1   class="form-control" dir="rtl"  >
 <? if($row4['cer_type']==0){ ?> <option value=0>لغة انجليزية</option><? } ?>
 <? if($row4['cer_type']==1){ ?> <option value=1>لغة صينية</option><? } ?>
 
 <option value=0>لغة انجليزية</option>
 <option value=1>لغة صينية</option>
</select>                      
                    </div>                      
                     </div>
                    
		                  <div class="row">

                    <!-- textarea -->
                    
 
			
					
					<div class="form-group col-xs-6">
                      <p style="direction: ltr; text-align: left">
                      <label><i class="fa fa-star"></i>اسم المتدرب - انجليزي</label>
                      <input type="text" name="T336" size="20"  class="form-control"   tabindex=3  required="required" dir="ltr" value="<? echo $stu_name_en; ?>">
                      
                    </div>

					
                    <div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i>اسم المتدرب - عربي</label>
                      <input type="text" name="T1" size="20"  tabindex=2   class="form-control"  required="required" value="<? echo $stu_name_ar; ?>">                    </div>
                    
                    
     



					

</div>
                  <div class="row">

<div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> نوع الهوية</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="date_to_en"   required    tabindex=4   tabindex="2"  class="form-control"  >
                      
                      <option></option>
                      <option value=1>هوية وطنية</option>
                      <option value=2>جواز سفر</option>
 
 
					</select>
 
                    </div>
                    
                    
                    
               
                    
                    <div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> الجنسية</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T3"   required    tabindex=4   tabindex="2"  class="form-control"  >
                      
                      <option><? echo $Nationality; ?></option> <option>سعودي</option>
 
<?
$i=0;
include ("conn.php");
$query = "select * from nat order by nat";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option ><? echo $row['nat']; ?></option>
<?php } } ?>
					</select>
 
                    </div>

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" ><i class="fa fa-star"></i> تاريخ انتهاء الهوية
 </label>
                      <table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d" required  tabindex=6   class="form-control"  ><option><? echo $date1; ?></option>
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m"   tabindex=7   required class="form-control"  ><option><? echo $date2; ?></option>
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td> 


<input type="text" name="y" size="20"  tabindex=5   class="form-control" required="required" value="<? echo $date3; ?>">


</td>
							</tr>
						</table>
                      
                    </div><div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> رقم الهوية
</label>


<input type="text" name="T4" size="20"  tabindex=5   class="form-control" required="required" value="<? echo $iqama; ?>">
                      
                    </div>
                    </div>
                    
                    
                    
                    
                    <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" ><i class="fa fa-star"></i> تاريخ النهاية
 </label>
                      <table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d1"   required   tabindex=12     class="form-control"  ><option><? echo $e_date1; ?></option>

<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m1"   required    tabindex=13    class="form-control"  ><option><? echo $e_date2; ?></option>

<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y1"   required  tabindex=14    class="form-control"  ><option><? echo $e_date3; ?></option>

<option hidden>السنة</option>
<? for($n=1420;$n<=1460;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
							</tr>
						</table>
                      
                    </div><div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> تاريخ البداية  
</label>



<table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d0"   required     tabindex=9   class="form-control"  ><option><? echo $s_date1; ?></option>
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m0"   required     tabindex=10    class="form-control"  ><option><? echo $s_date2; ?></option>
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y0"   required   tabindex=11   class="form-control"  ><option><? echo $s_date3; ?></option>
<option hidden>السنة</option>
<? for($n=1420;$n<=1460;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
							</tr>
						</table>





                      
                    </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
 <div class="row">

                    <!-- textarea -->
                    
                      
                    </div>

                    <!-- input states -->
  <div class="row">
                    
   <div class="form-group col-xs-12">
                      <label><i class="fa fa-star"></i> النوع</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"      name=T5 size="1"  class="form-control" required> 
 
<option>دورة</option>
<option>دبلوم</option>
											</SELECT>
 
                    </div>
                    </div>
                    

                  
           <div class="row">
                             

<div class="form-group col-xs-6">

<label><i class="fa fa-star"></i>  المستوي الي 
</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T7"         tabindex=16   class="form-control"  ><option hidden></option>
<option>التأسيسي 1</option>
<option>التأسيسي 2</option>
<option>التأسيسي 3</option>
<option>الأول</option>
<option>الثاني</option>
<option>الثالث</option>
<option>الرابع</option>
<option>الخامس</option>
<option>السادس</option>
<option>السابع</option>
<option>الثامن</option>
<option>التاسع</option>
<option>العاشر</option>
<option>الحادي عشر</option>
<option>الثاني عشر</option>
<option>دورة أطفال</option>

					</select>
 
                    </div><div class="form-group col-xs-6">

<label><i class="fa fa-star"></i> المستوي من 

</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T6"   required   tabindex=15     class="form-control"  ><option><? echo $cors_name; ?></option><option></option>
<option>التأسيسي 1</option>
<option>التأسيسي 2</option>
<option>التأسيسي 3</option>
<option>الأول</option>
<option>الثاني</option>
<option>الثالث</option>
<option>الرابع</option>
<option>الخامس</option>
<option>السادس</option>
<option>السابع</option>
<option>الثامن</option>
<option>التاسع</option>
<option>العاشر</option>
<option>الحادي عشر</option>
<option>الثاني عشر</option>
<option>دورة أطفال</option>

					</select>
 
                    </div>
     
                     </div>

                    
                    <div class="row">
<div class="form-group col-xs-4">

                      <label><i class="fa fa-star"></i> عدد الساعات</label>
                      
                      <input type="text" name="T8" size="20"  tabindex=19   class="form-control" required="required"> 
                    </div>
                    

            
   <div class="form-group col-xs-4">

                      <label><i class="fa fa-star"></i> الدرجة</label>
                      
                      <input type="text" name="T9" size="20"   tabindex=18  class="form-control" required="required" value="<? echo $scor; ?>">
 
                    </div>
<div class="form-group col-xs-4">

                      <label><i class="fa fa-star"></i>    التقدير
</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"     tabindex=17  required="required"  class="form-control" name=T10 size="1"> <option><? echo $Rate; ?></option>
<option></option>
<option>ممتاز</option>
<option>جيد جدا</option>
<option>جيد</option>
<option>مقبول</option>
											</SELECT>
 
                    </div>                 
                          </div>
               
                      
                      
                    
                    <div class="form-group has-error">
 
<input type="submit" value="حفظ" name="B1"  class="btn btn-primary" style="float: left">                    
&nbsp;</p>
&nbsp;</div>
 
                  </form>
                  <table id="example1" class="table table-bordered table-striped"  >
								<thead><tr>
									 <th><p align=center>تعديل 
									 <th><p align=center>الشهادة 
									 <th><p align=center>الفرع 
									 <th><p align=center>المستخدم 
									 <th><p align=center>تاريخ الإصدار 
									 <th><p align=center>المستويات 
									 <th><p align=center>الاسم 
									 <th><p align=center>رقم الهوية 
									 <th><p align=center>رقم الشهادة 
								</tr></thead>
                    <tbody>
															<?

 
$i=0;
   $find= mysqli_real_escape_string($conn,htmlspecialchars(($_GET['find']), ENT_QUOTES, "utf-8")); 

$result=mysqli_query($conn,"select* from cer_eng where   iqama='$find'  ");
while($row=mysqli_fetch_array($result))
{
    $find= mysqli_real_escape_string($conn,htmlspecialchars(($_GET['find']), ENT_QUOTES, "utf-8")); 


?>	<tr>
									<td>
									<a    href="edit_cer_eng2.php?ID=<? echo $row['cer_no']; ?>&pran=<? echo $row['pr']; ?>&find=<? echo $find; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></td>
									<td><a  target=_blank href="c_com5.php?ID=<? echo $row['cer_no']; ?>&pran=<? echo $row['pr']; ?>"><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
									 
									<td><?
$result1=mysqli_query($conn,"select* from branches where   Branches_ID='$row[pr]'  ");
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Branches_name'];
}
?>

 
									<td>									<? echo $row['user']; ?></td>
									<td>									<? echo $row['date']; ?></td>
									<td><? echo $row['level_to']; ?> - <? echo $row['level_from']; ?></font></td>
									<td><? echo $row['name_ar']; ?></font></td>
									<td><? echo $row['iqama']; ?></font></td>
									<td><? echo $row['cer_no']; ?></font></td>
								</tr>
				<? 
				}
 
				?>
							</table>
                </div> 
 
                  
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?

include ("conn.php");
if (isset($_POST['B1'])) {

 
 $d1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['d1'], ENT_QUOTES, "utf-8")); 
 $d0= mysqli_real_escape_string($conn,htmlspecialchars($_POST['d0'], ENT_QUOTES, "utf-8")); 
 $d= mysqli_real_escape_string($conn,htmlspecialchars($_POST['d'], ENT_QUOTES, "utf-8"));
  
 $m1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['m1'], ENT_QUOTES, "utf-8")); 
 $m0= mysqli_real_escape_string($conn,htmlspecialchars($_POST['m0'], ENT_QUOTES, "utf-8")); 
 $m= mysqli_real_escape_string($conn,htmlspecialchars($_POST['m'], ENT_QUOTES, "utf-8")); 
  
 $y1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['y1'], ENT_QUOTES, "utf-8")); 
 $y0= mysqli_real_escape_string($conn,htmlspecialchars($_POST['y0'], ENT_QUOTES, "utf-8")); 
 $y= mysqli_real_escape_string($conn,htmlspecialchars($_POST['y'], ENT_QUOTES, "utf-8")); 

 
 

 $T1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8")); 
 $T336= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T336'], ENT_QUOTES, "utf-8")); 
 $T3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $T9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8")); 
 $T10= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8")); 
 $T11= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T11'], ENT_QUOTES, "utf-8")); 
 $pran= mysqli_real_escape_string($conn,htmlspecialchars($_POST['pran'], ENT_QUOTES, "utf-8")); 
 //$T9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8")); 
$cer_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cer_type'], ENT_QUOTES, "utf-8")); 
 

 
$sql="insert into cer_eng  set name_ar='$T1',name_en='$T336',nat='$T3',iqama='$T4',iqama_date='$d-$m-$y',type='$T5',level_to='$T6',level_from='$T7',hours='$T8',
level_date_to='$d0-$m0-$y0',level_date_from='$d1-$m1-$y1',pricent='$T9',grade='$T10',date=CURDATE(),
pr='$pran',date_to_en='$date_to_en',date_from_en='$date_from_en',d1='$d0',m1='$m0',y1='$y0',d2='$d1',m2='$m1',y2='$y1',level_date='$y0-$m0-$d0',user='$_SESSION[username]',cer_type='$cer_type' ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?


}


$sql="update student set  stu_name_en='$T336',iqama_date='$d-$m-$y' where stu_id='$T4' ";
if(mysqli_query($conn,$sql))
{
}

 

}
?>