<?
 
  
 
 
session_start();


if (isset($_POST['B1'])) {
$iqama_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8"));
$_SESSION['iqama_no']=$_POST['iqama']; // Initializing Session
header("location: reg_stu.php"); // Redirecting To Other Page
}


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
     url: 'fetch_data10.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
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
تسجيل متدرب / دورة
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

	<form role="form" action="" method="post" enctype="multipart/form-data">

<?
   $Branches1= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['Branches1']), ENT_QUOTES, "utf-8")); 

include ("conn.php");
$query11 = "select * from student where iqama='$_SESSION[iqama_no]'   ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
$stu_id=$row11['stu_id'];
?>

<div class="row">
        <div class="form-group col-lg-2  has-error">
			<p align="center"><? if($Branches1==3){
											if($row11['photo']=="") { ?>
											<img border="0" src="emp/f.png" width="100%"  class="auto-style1" style="border: 0px solid #FFFFFF"> 
											<? } else { ?>

                                <img border="0" src="emp/<? echo $row11['photo']; ?>" width="100%"  class="auto-style1" style="border: 0px solid #FFFFFF">
                                <? } ?>
                                
                                
                                <? } else {   
                                
if($row11['photo']=="") { ?>
											<img border="0" src="emp/no-image.png" width="100%"   class="auto-style1" style="border: 0px solid #FFFFFF"> 
											<? } else { ?>

                                <img border="0" src="emp/<? echo $row11['photo']; ?>"width="100%"  class="auto-style1" style="border: 0px solid #FFFFFF">
                                <? } ?>




 <? } ?>
 <br>
 <br>
 			<b>
 <br>
 <? if($row11['attachment']!="") { ?><a href="emp/<? echo $row11['attachment']; ?>" class="fa fa-paperclip btn btn-warning btn-sm "> المرفقات</a><? } ?>
</b>
</div>




        <div class="form-group col-lg-10  has-error">

    <div class="row">



          
<div class="form-group col-lg-4 has-error">
<label>الفرع</label>
 
 <br>
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

 <? echo $row['Branches_name']; ?> 
<?php } } ?>
</div>
  
<div class="form-group col-lg-4  has-error">
 <label><i class="fa fa-times-circle-o"></i>الجنسية</label>
<br><? echo $row11['Nationality']; ?>  
</div>                   

                    <!-- textarea -->
                    <div class="form-group col-lg-4 has-error">
                      <label> اسم المتدرب  باللغة العربية</label>
                       <br><? echo $row11['stu_name_ar']; ?>
                    </div>
                    

 
                    <div class="form-group col-lg-4 has-error">
                      <label class="control-label has-error" >اسم المتدرب  باللغة الانجليزية</label>
                      <br><? echo $row11['stu_name_en']; ?>
                    </div>
                    
                   <div class="form-group col-lg-4 has-error">
                      <label> رقم الهوية / الإقامة</label>
                       <br><? echo $row11['iqama']; ?>
                       <input  name="iqama" type=hidden  size="20"   value="<? echo $row11['iqama']; ?>"   tabindex="5" required="required"  class="form-control" >
                    </div>
 
                   <div class="form-group col-lg-4 has-error">
                      <label>تاريخ انتهاء الهوية</label>
                       <br><? echo $row11['iqama_date']; ?>
                    </div>
                   
                    
                    <div class="form-group col-lg-4 has-error">
                      <label class="control-label" >المؤهل العلمي</label>
                      <br><? echo $row11['qualified']; ?>
                    </div>
 
                    <div class="form-group col-lg-4 has-error">
                      <label class="control-label" >المهنة</label>
                      <br><? echo $row11['job']; ?>
                    </div>
 
                    <div class="form-group col-lg-4 has-error">
                      <label> رقم الجوال</label>
                       <br><? echo $mobile=$row11['mobile']; ?>
                    </div>


                    <div class="form-group col-lg-4 has-error">
                      <label>رقم الجوال اخر</label>
                       <br><? echo $row11['mobile2']; ?>
                    </div>

                    <div class="form-group col-lg-4 has-error">
                      <label class="control-label" >البريد الالكتروني</label>
                       <br><? echo $row11['email']; ?>
                    </div>

                    <div class="form-group col-lg-4 has-error">
                      <label class="control-label" >الرقم الوظيفي</label>
                       <br><? echo $row11['jobID']; ?>
                    </div>

                    

      
                    <div class="form-group col-lg-4">
                      <label class="control-label" >الصورة الشخصية</label>
                      <input    type="file" name="image" size="20">
                      <input type="submit" formnovalidate   value="حفظ الصورة الشخصية" name="B33"  class="btn btn-success" style="float: right">
                    </div>    
                    
                    <div class="form-group col-lg-4">
                      <label class="control-label" >المرفقات</label>
                      <input   type="file" name="myFile" size="20">
                      <input type="submit" formnovalidate   value="حفظ المرفقات" name="B333"  class="btn btn-success" style="float: right">
                    </div>    

 </div>             
            
</div>

                    
                     
               
                      
                    
                    
 
      <div class="form-group col-lg-12">
                      <label class="control-label" >ملاحظات التسجيل</label>
                       <textarea  name="notes1" class="form-control" ><? echo $row11['notes']; ?></textarea>
                    </div>
 
      <div class="form-group col-lg-12">
                      <label>مجال الدورات</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="mag"   required     onclick="fetch_select1(this.value);" onchange="fetch_select1(this.value);"       class="form-control"  >
 <option></option> 
<?
include ("conn.php");
$query9 = "select * from catogry";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['catogry']; ?></option>
<? } ?>

					</select>
                    </div>
                    

      <div class="form-group col-lg-12">

              
      <span id="new_select1" ></span></div>              
                     
      <div class="form-group col-lg-12">
 
<input type="submit" value="اضافة الدورة" name="B3"  class="btn btn-success" style="float: left">   
<a href="edit_stu.php?NUM=<? echo $row11['NUM']; ?>"  class="btn btn-primary" style="float: left">تعديل بيانات المتدرب</a>
 &nbsp;&nbsp;&nbsp;<a href="card.php?NUM=<? echo $row11['NUM']; ?>&Branches1=<? echo $row11['Branches']; ?>"  class="btn btn-warning " style="float: left" target=_blank>طباعة كارت المتدرب</a>
                                
 
</div></div>                
 <? }} else { ?>               
 
     <div class="row">

        
                     
         
                    <div class="form-group col-lg-6">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required        tabindex="1" class="form-control"  >
 
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
                    
                          
 <div class="form-group col-lg-6  ">
                      <label><i class="fa fa-times-circle-o"></i>الجنسية</label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Nationality"   required      tabindex="2"  class="form-control"  ><option>سعودي</option>
 
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
                    <div class="form-group col-lg-6">
                      <label> اسم المتدرب  باللغة العربية</label>
                      <input  name="stu_name_ar"   size="20"   tabindex="3"  required="required"  class="form-control" placeholder="اسم المتدرب باللغة العربية">
                    </div>
 
                    <div class="form-group col-lg-6">
                      <label class="control-label" >اسم المتدرب  باللغة الانجليزية</label>
                      <input  name="stu_name_en"   size="20"        tabindex="4"  class="form-control"  placeholder="اسم المتدرب  باللغة الانجليزية">
                    </div>

                    <!-- textarea -->
                    
                   
					 
                    
                    
                    <div class="form-group col-lg-6">
                      <label> رقم الهوية / الإقامة</label>
                      <input  name="iqama" type=text  size="20"     tabindex="5" required="required"  class="form-control" value="<? echo $_SESSION[iqama_no]; ?>" >
                    </div>
                    
                    <div class="form-group col-lg-6">
                      <label>     تاريخ انتهاء الهوية  </label>
                      <input  name="iqama_date" type=text  size="20"     tabindex="5"   class="form-control"  >
                    </div>

 
 <div class="form-group col-lg-6">
                      <label class="control-label" >المؤهل العلمي</label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="qualified"   required        tabindex="6" class="form-control"  > 
 
 

<option >جامعي</option>
<option >ثانوى</option>
<option >متوسط</option>
<option >ابتدائي فأقل</option>
 
					</select>                    </div>
					
                    <!-- textarea -->
<div class="form-group col-lg-6">
                      <label class="control-label" >المهنة</label>
                      <input  name="job"    size="20"     tabindex="8"   class="form-control"   >
                    </div>
                    
                    <div class="form-group col-lg-6">
                      <label> رقم الجوال</label>
                      <input  name="mobile"  type=number  size="20"    tabindex="7"  pattern="[0-9]{10,10}" autofocus title="Digital numbers must be in 10 digits"  required="required"  class="form-control" placeholder="رقم الجوال المتدرب للتواصل والاشعارات">
                    </div>
                    
                    <div class="form-group col-lg-6">
                      <label> رقم الجوال اخر</label>
                      <input  name="mobile2"  type=number  size="20"    tabindex="7"  pattern="[0-9]{10,10}" autofocus title="Digital numbers must be in 10 digits"     class="form-control" placeholder="رقم الجوال المتدرب للتواصل والاشعارات">
                    </div>
                    
                    <div class="form-group col-lg-6">
                      <label class="control-label" >البريد الالكتروني</label>
                      <input  name="email"   type=email size="20"     tabindex="8"   class="form-control"  placeholder="ادخال البريد الالكتروني بالضيغة الصحيحة">
                    </div>
                    
            
             <div class="form-group col-lg-6">
                      <label class="control-label" >الرقم الوظيفي  </label>
                      <input  name="jobID"     size="20"     tabindex="8"   class="form-control"   >
                    </div>
                    
                    
                  
      <div class="form-group col-lg-6">
                      <label class="control-label" >الصورة الشخصية</label>
                      <input    type="file" name="image" size="20">
                    </div>
                     <div class="form-group col-lg-6">
                      <label class="control-label" >المرفقات</label>
                      <input    type="file" name="myFile" size="20">
                    </div>
                    

<div class="form-group col-lg-12">
                      <label class="control-label" >ملاحظات التسجيل</label>
<textarea  name="notes" class="form-control" ></textarea>
                    </div>      
 
                    
 
<div class="form-group col-lg-12">
                      <label>مجال الدورات</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="mag"   required     onclick="fetch_select1(this.value);" onchange="fetch_select1(this.value);"       class="form-control"  >
 <option></option> 
<?
include ("conn.php");
$query9 = "select * from catogry";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['catogry']; ?></option>
<? } ?>

					</select>
                    </div>
                    


 <div class="form-group col-lg-12">

      <span id="new_select1" ></span>              
 </div>
 
 
<div class="form-group col-lg-12">
 
<input type="submit" value="تسجيل جديد" name="B111"  class="btn btn-primary" style="float: left">                    
 </div>
 </div>

 
 <? } ?>       

                 
                  
 
 
</form>
<? 

include ("conn.php");
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
?>

<div class="box-header  ">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-bell-o"></i>
الدورات السابقة
					   
                </div>
 <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>تاريخ بداية الدورة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>  
                         <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>التقدير</th>
                        <th width="108"><p align=center>مبلغ الدورة</th>
                         <th><p align=center>ــــــــــــــــــــــــــــــــــــــــــــــــ</th>
                         <th><p align=center>المدفوع</th>
                         <th><p align=center>المتبقي </th>
                         <th><p align=center>استمارة التسجيل </th>
                         <th><p align=center>&nbsp;</th>
                         <th><p align=center>المالية</th>
                         <th><p align=center>تعديل </th>
                         <th><p align=center>حذف    </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?

while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];

?>
 <tr>
 
 
 
 
 
 
                        <form method="POST" action="">
 
 
 
 
 
 
 
                        <td><? echo $row['cors_no']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
                        <td><a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['cors_name']; ?></a></td>
                        <td><? echo $row['Branches_name']; ?></td>
                        <td><? echo $row['teacher_name']; ?></td>
                        <td> <? echo $row['start_date']; ?></td>
                        <td><? echo $row['end_date']; ?></td>
                        <td><? echo $row['scor']; ?></td>
                        <td><? echo $row['Rate']; ?></td>
                        <td width="108">
                       <input  name="Course_amount"  <? if($_SESSION['username']!='admin')  echo 'readonly'; ?>   <? if( $row['end_date']>=$ar_date) { } else { echo 'readonly '; }?>  size="3"    required="required"  value="<? echo $row['Course_amount']; ?>"    class="form-control" style="text-align: center"   ></td>

                        <td>
                        
                                               <select   name="online1"           required="required"      class="form-control" style="text-align: center" >
                                               <option><? echo $row['online']; ?></option>
                                               <option></option>
                        <option>حضوري</option>
                        <option>اونلاين</option>
                        
                        </select ></td>

                        <td>
                        
                                                <?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
 echo $Amount=$row1[Amount];
}
?>

                         </td>

                        <td>
<? echo $row['Course_amount']-$Amount; ?></td>

                        <td>
                        <a href="regster_stu.php?ID_reg=<? echo $row['ID_reg']; ?>"  target=_blank ><i class="fa fa-print btn btn-Primary btn-sm "></i></a></td>

                        <td>
                       <a  target=_blank href="https://wa.me/966<? echo $mobile; ?>?text=
 
<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A

اسم الدورة%20  :<? echo nl2br($row[cors_name]); ?>%0D%0A
%20<? echo nl2br($row[Branches_name]); ?>%0D%0A
تاريخ بداية الدورة %20  :<? echo nl2br($row[start_date]); ?>%0D%0A
تاريخ نهاية الدورة %20  :<? echo nl2br($row['end_date']); ?>%0D%0A
مبلغ الدورة%20  :<? echo nl2br($row[Course_amount]); ?>%0D%0A
المبلغ المدفوع%20  :<? echo nl2br($Amount); ?>%0D%0A
المبلغ المتبقي%20  :<? echo nl2br($row[Course_amount]-$Amount); ?>%0D%0A
 
" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i></td>

                        <td>
                        <a href="Payments_stu.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-money btn btn-info btn-sm "></i></a></td>

                        <td>
                        <input type="submit" value="&#xf040;"   class="btn btn-warning btn-icon fa fa-pencil" name="B22"  onclick="return confirm('هل تريد تعديل مبلغ الدورة ؟')" class="btn btn-primary" style="float: left"></td>

                        <td>
                        <? //echo $ar_date; 
                        if( $row['end_date']>=$ar_date) { ?>
						<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2" formnovalidate   onclick="return confirm('هل تريد الحذف البيانات ؟')" class="btn btn-danger" style="float: left">
						<? } ?>
						
						</td>
                      	</form>
                      	</form>
 
 

                      </tr>
                    <? }  ?>
                    </tbody>
                     
                  </table>                     <? }  ?>
   
                  

 </div>
</div>
</section>


 </div>

<? include('footer.php'); ?>
 </div>

  </body>
</html>
<?

include ("conn.php");
if (isset($_POST['B111'])) {

 $image= mysqli_real_escape_string($conn,htmlspecialchars($_FILES["image"], ENT_QUOTES, "utf-8")); 

    if(is_array($_FILES)) {

        $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "emp/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];

        switch ($imageType) {

            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            default:
        // echo "<script language='javascript'>window.alert('صيغة الملف غير معروفة')</script>";
 
         //exit;
               // break;
        }
$nams=$fileNewName. "_thump.". $ext;
if($ext=="")
$nams='';

}


 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $Nationality= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Nationality'], ENT_QUOTES, "utf-8")); 
 $stu_name_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu_name_en'], ENT_QUOTES, "utf-8")); 
 $stu_name_ar= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu_name_ar'], ENT_QUOTES, "utf-8")); 
 $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
 $qualified= mysqli_real_escape_string($conn,htmlspecialchars($_POST['qualified'], ENT_QUOTES, "utf-8")); 
 $mobile= mysqli_real_escape_string($conn,htmlspecialchars($_POST['mobile'], ENT_QUOTES, "utf-8")); 
 $email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8")); 
 $iqama_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama_date'], ENT_QUOTES, "utf-8")); 
  $notes= mysqli_real_escape_string($conn,htmlspecialchars($_POST['notes'], ENT_QUOTES, "utf-8"));
  $mobile2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['mobile2'], ENT_QUOTES, "utf-8"));
  $job= mysqli_real_escape_string($conn,htmlspecialchars($_POST['job'], ENT_QUOTES, "utf-8"));
  $jobID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['jobID'], ENT_QUOTES, "utf-8"));
 

 define("UPLOAD_DIR", "emp/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
    
   
    $nameatt= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($nameatt);
    while (file_exists(UPLOAD_DIR . $nameatt)) {
        $i++;
        $nameatt= $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $nameatt);
   // chmod(UPLOAD_DIR . $nameatt, 755);
}
 


 
 if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'][$i], ENT_QUOTES, "utf-8"));
 $cors_code= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_code'][$i], ENT_QUOTES, "utf-8"));
 $cors_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_type'][$i], ENT_QUOTES, "utf-8"));
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'][$i], ENT_QUOTES, "utf-8"));
 $Course_amount1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Course_amount1'][$i], ENT_QUOTES, "utf-8"));
 $online= mysqli_real_escape_string($conn,htmlspecialchars($_POST['online'][$i], ENT_QUOTES, "utf-8"));

$sql="insert into stu_sec set stu_id='$iqama',section_Id='$section_Id',cors_code='$cors_code',cors_type='$cors_type',
Branches='$Branches',Course_amount='$Course_amount1',reg_date='$synch_timestamp',online='$online'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}

}

 
$sql="insert into student set Branches='$Branches',stu_id='$iqama',stu_name_ar='$stu_name_ar',stu_name_en='$stu_name_en',
Nationality='$Nationality',iqama='$iqama',qualified='$qualified',mobile='$mobile',email='$email',
iqama_date='$iqama_date',photo='$nams',notes='$notes',attachment='$nameatt',mobile2='$mobile2',jobID='$jobID',job='$job'  ";
 
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
}
}


if (isset($_POST['B3'])) {
 

 $notes1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['notes1'], ENT_QUOTES, "utf-8"));


 $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
 
 

 $sql="update student set notes='$notes1' where stu_id='$iqama'";
if(mysqli_query($conn,$sql))
{
}


if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'][$i], ENT_QUOTES, "utf-8"));
 $cors_code= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_code'][$i], ENT_QUOTES, "utf-8"));
 $cors_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_type'][$i], ENT_QUOTES, "utf-8"));
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'][$i], ENT_QUOTES, "utf-8"));
 $Course_amount1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Course_amount1'][$i], ENT_QUOTES, "utf-8"));
 $online= mysqli_real_escape_string($conn,htmlspecialchars($_POST['online'][$i], ENT_QUOTES, "utf-8"));
 
 


$sql="insert into stu_sec set stu_id='$iqama',section_Id='$section_Id',cors_code='$cors_code',cors_type='$cors_type',
Branches='$Branches',Course_amount='$Course_amount1',reg_date='$synch_timestamp',online='$online' ";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}
}


function imageResize1($imageResourceId,$width,$height) {

    $targetWidth =375;
    $targetHeight =425;

    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);

    return $targetLayer;
}


if (isset($_POST['B2'])) {
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
$sql="delete from   stu_sec where ID_reg='$ID_reg'  ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}


if (isset($_POST['B33'])) {
 $image= mysqli_real_escape_string($conn,htmlspecialchars($_FILES["image"], ENT_QUOTES, "utf-8")); 

    if(is_array($_FILES)) {

        $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "emp/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];

        switch ($imageType) {

            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize1($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            default:
         echo "<script language='javascript'>window.alert('صيغة الملف غير معروفة')</script>";
 
         exit;
                break;
        }
$nams=$fileNewName. "_thump.". $ext;
}

 $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
 
 
 $sql="update student set  photo='$nams'   where stu_id='$iqama'";
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
}



if (isset($_POST['B333'])) {
 define("UPLOAD_DIR", "emp/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
    
   
    $nameatt= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($nameatt);
    while (file_exists(UPLOAD_DIR . $nameatt)) {
        $i++;
        $nameatt= $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $nameatt);
   // chmod(UPLOAD_DIR . $nameatt, 755);
}
 
 
 
 $sql="update student set  attachment='$nameatt'   where stu_id='$iqama'";
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
}





if (isset($_POST['B22'])) {
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
$Course_amount= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Course_amount'], ENT_QUOTES, "utf-8")); 
$online1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['online1'], ENT_QUOTES, "utf-8")); 

$sql="update stu_sec set Course_amount='$Course_amount',online='$online1' where ID_reg='$ID_reg'  ";
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
}



?>