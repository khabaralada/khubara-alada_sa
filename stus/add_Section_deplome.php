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
     url: 'fetch_data1d.php',
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
     url: 'fetch_data2d.php',
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
     url: 'fetch_data3d.php',
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
     url: 'fetch_data4d.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select4").innerHTML=response; 
     }
   });
}

</script>

</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>  					 فتح دورة تأهيلية جديدة / شعبة
   

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">



 
                  <form role="form" action="" method="post">
                    <!-- text input -->
    <div class="row">

        <div class="form-group col-xs-2 has-error">
                      <label><i class="fa fa-times-circle-o"></i>رقم الدورة</label>
 

            <span  id="new_select4" ></span> 
                     </div>           
                    <div class="form-group col-xs-10">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required     onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 <option></option> 
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
                    
                          
                     </div>
                    
					
					
					
					
                    <div class="form-group">
                      <label>اسم الدورة / المستوى</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_ID"   required  id="new_select1"   class="form-control"  ><option></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from subjects where   cors='دبلوم' ";
else
$query = "select * from subjects where Branches='$Branches' and cors='دبلوم'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['cors_ID']; ?>"><? echo $row['cors_name']; ?></option>
<?php } } ?>
 
					</select>                    </div>
                    
                    
     



<div class="form-group">
                      <label>اسم الشركة ( ان وجد )</label>
 
                      
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="com"         class="form-control"  >
 <option></option> 
<?
$i=0;
include ("conn.php");
 
$query = "select * from user where     acount_type=5";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option><? echo $row['name']; ?></option>
<?php } } ?>
					</select>
					
					
					
                      
                    </div>
					




               
                    
                    <div class="form-group">
                      <label>  اسم المحاضر / المدرب</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="traning_name"   required     id="new_select2" class="form-control"  >
							<option></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from teacher";
else
$query = "select * from teacher where Branches='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['teacher_id']; ?>"><? echo $row['teacher_name']; ?></option>
<?php } } ?>
					</select>
 
                    </div>
                  <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" > تاريخ نهاية الدورة ( هجري ) </label>
                      <table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d2"   required       class="form-control"  >
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m2"   required        class="form-control"  >
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y2"   required      class="form-control"  >
<option hidden>السنة</option>
<? for($n=1440;$n<=1460;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
							</tr>
						</table>
                      
                    </div><div class="form-group col-xs-6">
                      <label> تاريخ بداية الدورة ( هجري )</label>
                     <table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d1"   required     class="form-control"  >
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m1"   required      class="form-control"  >
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y1"   required      class="form-control"  >
<option hidden>السنة</option>
<? for($n=1440;$n<=1460;$n++) { ?>
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
                      <label>  القاعة / المعمل</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="class"   required     id="new_select3" class="form-control"  >
							<option></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from building order by cou_class";
else
$query = "select * from building where Building='$Branches' order by cou_class";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option><? echo $row['cou_class']; ?></option>
<?php } } ?>
					</select>
 
                    </div>
                    </div>
                    

                  
           <div class="row">
                             

<div class="form-group col-xs-6">

<label>  نهاية الوقت</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="time2"   required       class="form-control"  ><option hidden> نهاية الوقت</option>
<?
$i=0;
include ("conn.php");
$query = "select * from time  order by time";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['time']; ?>"><? echo $row['time1']; ?></option>
<?php } } ?>

					</select>
 
                    </div><div class="form-group col-xs-6">

<label>  بداية الوقت</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="time1"   required       class="form-control"  ><option hidden>بداية الوقت</option>
<?
$i=0;
include ("conn.php");
$query = "select * from time  order by time";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['time']; ?>"><? echo $row['time1']; ?></option>
<?php } } ?>

					</select>
 
                    </div>
     
                     </div>

                    
                    <div class="row">
            
   <div class="form-group col-xs-6">

                      <label>  الايام إلى</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="day2"   required       class="form-control"  >
							<option hidden>إلي يوم</option>
                      <?
include ("conn.php");
$query5 = "select * from days      ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?>							<option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>
 
 

 
 
					</select>
 
                    </div>
<div class="form-group col-xs-6">

                      <label>  الايام من</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="day1"   required       class="form-control"  >
							<option hidden>من يوم</option>
						    <?
include ("conn.php");
$query5 = "select * from days      ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?>							<option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>
 

 
 

 
 
					</select>
 
                    </div> 
<div class="form-group col-xs-6">
 
                      <label>نوع الدورة</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_online"   required       class="form-control"  >
							<option hidden></option>
                     <option>حضوري</option> 
                     <option>اونلاين</option> 
 </select>
</div>
<div class="form-group col-xs-6">
 
                      <label>فترة الدورة</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_time"   required       class="form-control"  >
							<option hidden></option>
                     <option>صباحي</option> 
                     <option>مسائي</option> 
 </select>
</div>
		                    
<div class="form-group col-xs-12">
<label>رابط بث المحاضرة</label>
<input  name="lives" size="20"     class="form-control"  >
</div>  
<div class="form-group col-xs-12">
                      <label>عرض الدورة للتسجيل
</label>
                      <input type="checkbox" name="C1" value="1">

<div> 
              
                          </div>
               
                      
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="تسجيل" name="B1"  class="btn btn-primary" style="float: left">                    
&nbsp;</p>
&nbsp;</div>
 
                  </form>

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

 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $traning_name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['traning_name'], ENT_QUOTES, "utf-8")); 
 $d1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['d1'], ENT_QUOTES, "utf-8")); 
 $d2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['d2'], ENT_QUOTES, "utf-8")); 
 $m1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['m1'], ENT_QUOTES, "utf-8")); 
 $m2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['m2'], ENT_QUOTES, "utf-8")); 
 $y1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['y1'], ENT_QUOTES, "utf-8")); 
 $y2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['y2'], ENT_QUOTES, "utf-8")); 
 $cors_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_no'], ENT_QUOTES, "utf-8")); 
 

 $class= mysqli_real_escape_string($conn,htmlspecialchars($_POST['class'], ENT_QUOTES, "utf-8")); 
 $time1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time1'], ENT_QUOTES, "utf-8")); 
 $time2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time2'], ENT_QUOTES, "utf-8")); 
 $day1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day1'], ENT_QUOTES, "utf-8")); 
 $day2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day2'], ENT_QUOTES, "utf-8")); 
 $com= mysqli_real_escape_string($conn,htmlspecialchars($_POST['com'], ENT_QUOTES, "utf-8")); 
$lives=mysqli_real_escape_string($conn,htmlspecialchars($_POST['lives'], ENT_QUOTES, "utf-8"));
$C1= mysqli_real_escape_string($conn,$_POST['C1']);
$cors_online=mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_online'], ENT_QUOTES, "utf-8"));
$cors_time=mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_time'], ENT_QUOTES, "utf-8"));

 
$m=$m1;
$d=$d1;
$y=$y1;
function HijriToJD($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}
$date = HijriToJD($d, $m, $y);
jdtogregorian($date);
$newDate = date("Y-m-d", strtotime(jdtogregorian($date))); 
 
 
$m=$m2;
$d=$d2;
$y=$y2;

function HijriToJD1($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}


$date = HijriToJD1($d, $m, $y);

  jdtogregorian($date);
$newDate1 = date("Y-m-d", strtotime(jdtogregorian($date))); 

 
 
$sql="insert into cors set cors_online='$cors_online',cors_time='$cors_time',show_reg='$C1',Branches='$Branches',cors_ID='$cors_ID',traning_name='$traning_name',start_date='$y1-$m1-$d1',end_date='$y2-$m2-$d2',start_date_en='$newDate',
end_date_en='$newDate1',cors_no='$cors_no',class='$class',day1='$day1',time1='$time1',time2='$time2',day2='$day2',cors_type='دبلوم',com='$com',live='$lives'  ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?


$sql="insert into class set Building='$Branches',section_Id='$last_id',class_no='$class',day='$day1',day2='$day2',time='$time1',end_time='$time2',cors_type='دبلوم'  ";
if(mysqli_query($conn,$sql))
{
}
}


 

}
?>