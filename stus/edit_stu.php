<?
 
 
session_start();
   $_SESSION['iqama_no'];
 
 

?>
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


</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
تعديل بيانات المتدرب/ة
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					   
 
                
<?
include ("conn.php");
  $NUM= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['NUM']), ENT_QUOTES, "utf-8")); 

$query11 = "select * from student where NUM='$NUM'  ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
?>
 
                
                
                  <form role="form" action="" method="post">
                    <!-- text input -->
    <div class="row">

        <div class="form-group col-xs-6  ">
                      <label><i class="fa fa-times-circle-o"></i>الجنسية</label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Nationality"   required      tabindex="2"  class="form-control"  ><option><? echo $row11['Nationality']; ?></option>
 
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
                    <div class="form-group col-xs-6">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required        tabindex="1" class="form-control"  >
<?
$i=0;
include ("conn.php");
 
$query = "select * from branches where      Branches_ID='$row11[Branches]'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>

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
                    
					
					
					
					
                     
                    
                    
                    
                    
                     
                  <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" >اسم المتدرب  باللغة الانجليزية</label>
                      <input  name="stu_name_en"   size="20"     required="required"  tabindex="4"  class="form-control"  placeholder="اسم المتدرب  باللغة الانجليزية" value="<? echo $row11['stu_name_en']; ?>">
                    </div><div class="form-group col-xs-6">
                      <label> اسم المتدرب  باللغة العربية</label>
                      <input  name="stu_name_ar"   size="20"   tabindex="3"  required="required"  class="form-control" placeholder="اسم المتدرب باللغة العربية" value="<? echo $row11['stu_name_ar']; ?>">
                    </div>
                    </div>
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-4">
                      <label class="control-label" >المؤهل العلمي</label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="qualified"   required        tabindex="6" class="form-control"  ><option><? echo $row11['qualified']; ?></option>
 
 

<option >جامعي</option>
<option >ثانوى</option>
<option >متوسط</option>
<option >ابتدائي فأقل</option>
 
					</select>                    </div>
					
					
					<div class="form-group col-xs-4">
                      <label> تاريخ انتهاء الهوية / الإقامة</label>
                      <input  name="iqama_date"    size="20"     tabindex="5" required="required"  class="form-control" value="<? echo $row11['iqama_date']; ?>" >
                    </div>
                    
                    
                    <div class="form-group col-xs-4">
                      <label> رقم الهوية / الإقامة</label>
                      <input  name="iqama" type=text  size="20"     tabindex="5" required="required"  class="form-control" value="<? echo $row11['iqama']; ?>" >
                      
                      
                      <input  name="iqama1" type=hidden  size="20"     tabindex="5" required="required"  class="form-control" value="<? echo $row11['iqama']; ?>" >
                      
                      
                    </div>
                    </div>

                    <!-- input states -->
   
                    
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" >البريد الالكتروني</label>
                      <input  name="email"   type=email size="20"     tabindex="8"   class="form-control"  placeholder="ادخال البريد الالكتروني بالضيغة الصحيحة" value="<? echo $row11['email']; ?>">
                    </div>
                    
                    
                    <div class="form-group col-xs-6">
                      <label> رقم الجوال</label>
<input  name="mobile"  type=number  size="20"    tabindex="7"  pattern="[0-9]{10,10}" autofocus title="Digital numbers must be in 10 digits"  required="required"  class="form-control" placeholder="رقم الجوال المتدرب للتواصل والاشعارات" value="<? echo $row11['mobile']; ?>">

 <input  name="NUM"    type=hidden  size="20"     class="form-control"   value="<? echo $row11['NUM']; ?>">
                    </div>
                    
                    
                    <div class="form-group col-lg-6">
                      <label> رقم الجوال اخر</label>
                      <input  name="mobile2"  type=number  size="20"  value="<? echo $row11['mobile2']; ?>"  tabindex="7"  pattern="[0-9]{10,10}" autofocus title="Digital numbers must be in 10 digits"     class="form-control" placeholder="رقم الجوال المتدرب للتواصل والاشعارات">
                    </div>

             <div class="form-group col-lg-6">
                      <label class="control-label" >الرقم الوظيفي  </label>
                      <input  name="jobID"     size="20"   value="<? echo $row11['jobID']; ?>"  tabindex="8"   class="form-control"   >
                    </div>
<div class="form-group col-lg-12">
                      <label class="control-label" >المهنة</label>
                      <input  name="job"    size="20"     value="<? echo $row11['job']; ?>"   class="form-control"   >
                    </div>


                    </div>

                  
            

                    
                     
               
                      
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="حفظ التغيرات" name="B1"  class="btn btn-warning " style="float: left">                    
&nbsp;</p>
&nbsp;</div>
 
                  </form>
<? }} ?>
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
 $Nationality= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Nationality'], ENT_QUOTES, "utf-8")); 
 $stu_name_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu_name_en'], ENT_QUOTES, "utf-8")); 
 $stu_name_ar= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu_name_ar'], ENT_QUOTES, "utf-8")); 
 $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
 $qualified= mysqli_real_escape_string($conn,htmlspecialchars($_POST['qualified'], ENT_QUOTES, "utf-8")); 
 $mobile= mysqli_real_escape_string($conn,htmlspecialchars($_POST['mobile'], ENT_QUOTES, "utf-8")); 
 $email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8")); 
 $iqama_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama_date'], ENT_QUOTES, "utf-8")); 
 
$NUM= mysqli_real_escape_string($conn,htmlspecialchars($_POST['NUM'], ENT_QUOTES, "utf-8"));
 
 $iqama1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama1'], ENT_QUOTES, "utf-8")); 
  $mobile2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['mobile2'], ENT_QUOTES, "utf-8") );
  $job= mysqli_real_escape_string($conn,htmlspecialchars($_POST['job'], ENT_QUOTES, "utf-8") );
  $jobID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['jobID'], ENT_QUOTES, "utf-8") );


$sql="update student set Branches='$Branches',stu_id='$iqama',stu_name_ar='$stu_name_ar',stu_name_en='$stu_name_en',Nationality='$Nationality',iqama='$iqama',
qualified='$qualified',mobile='$mobile',email='$email',iqama_date='$iqama_date',mobile2='$mobile2',jobID='$jobID',job='$job' where NUM='$NUM' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=reg_stu.php"><?


 
}


$sql="update stu_sec set stu_id='$iqama'  where stu_id='$iqama1'";
if(mysqli_query($conn,$sql))
{
}



 

}
?>