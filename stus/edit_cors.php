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
     url: 'fetch_data101.php',
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
  الدورات التدريبية
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                <?

include ("conn.php");
$result=mysqli_query($conn,"select * from subjects,branches where cors_ID='$ID' and Branches_ID=Branches");
 
while($row=mysqli_fetch_array($result))
{
?>
	<form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="form-group  col-lg-3">
                      <label> المجال / التخصص</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="cors" class="form-control" >
                               <option ><? echo $row['cors']; ?></option> 
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
 

                    <div class="form-group  col-lg-3">
                      <label> التصنيف</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="level" class="form-control" >
 <?
include ("conn.php");
$query9 = "select * from sub where sub_ID='$row[Semester]'";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option  value="<?php echo $row9['sub_ID']; ?>"><? echo $row9['sub']; ?></option>
<? } ?>


<option></option>


<?
include ("conn.php");
$query9 = "select * from sub where type=6";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option  value="<?php echo $row9['sub_ID']; ?>"><? echo $row9['sub']; ?></option>
<? } ?>

						</select>
                    </div>




                   
                    <div class="form-group  col-lg-6">
                      <label>الفرع</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required    class="form-control"  >
<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query1 = "select * from branches    ";
else
$query1 = "select * from branches where      Branches_ID='$Branches'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>

<option value="<? echo $row1['Branches_ID']; ?>"><? echo $row1['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                    
                    <div class="form-group  col-lg-6">
                      <label>  اسم الدورة</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control" value="<? echo $row['cors_name']; ?>"  >
 <input   type=hidden name="ID" id="ID" size="20"   required="required"   class="form-control" value="<? echo $row['cors_ID']; ?>"  >
                    </div>


<div class="form-group  col-lg-6">
                      <label> انجليزي اسم الدورة</label>
                      
 
 <input   name="cors_name_en"   size="20"   required="required"   class="form-control" value="<? echo $row['cors_name_en']; ?>"  >
                    </div>



                    <!-- textarea -->
                    <div class="form-group  col-lg-6">
                      <label> رقم الاعتماد</label>
                      <input  name="T2" id="T2" size="20"    required="required"  class="form-control" value="<? echo $row['cors_code']; ?>" >
                    </div>
                    <div class="form-group  col-lg-6">
                      <label class="control-label" >عدد الساعات  </label>
                      <input  name="T3" id="T3" size="20"     required="required"  class="form-control" value="<? echo $row['contact_hours']; ?>" >
                    </div>


<div class="form-group  col-lg-6">
                      <label class="control-label" >مدة الدورة انجليزي</label>
                      <input  name="contact_hours_en"   size="20"     required="required"  class="form-control" value="<? echo $row['contact_hours_en']; ?>" >
                    </div>
                    
                    <!-- input states -->
                    <div class="form-group  col-lg-6"  >
                      <label class="control-label" for="inputSuccess">     عدد الايام  </label>
 
                      
                      <input  name="T4" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['credits']; ?>" >
                      
                      
                    </div>
                    
                    
                    <div class="form-group  col-lg-6"  >
                      <label class="control-label" for="inputSuccess">اجمالي عدد ايام الحضور</label>
 
                      
                      <input  name="absences"   size="20"    required="required"    class="form-control" value="<? echo $row['absences']; ?>" >
                      
                      
                    </div>
                    

<div class="form-group  col-lg-3"  >
<label class="control-label" for="inputSuccess">سعر الحضور</label>
<input  name="price"   size="20"    required="required"    class="form-control" value="<? echo $row['price']; ?>" >
 </div>
<div class="form-group  col-lg-3"  >
<label class="control-label" for="inputSuccess">سعر الاونلاين</label>
<input  name="price1"   size="20"    required="required"    class="form-control" value="<? echo $row['price1']; ?>" >
 </div>




<div class="form-group  col-lg-6"  >
<label class="control-label" for="inputSuccess">عدد المقاعد</label>
<input  name="size"   size="20"    required="required"     class="form-control input-sm" value="<? echo $row['size']; ?>" >
 </div>

 <div class="form-group  col-lg-6"  >
                      <label class="control-label" for="inputWarning">     النوع</label>
 
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T5"  class="form-control input-sm" >
						<option><? echo $row['type']; ?></option>
						<option>دورة عملي</option>
						<option>دورة نظري</option>
						</select>
						
						
                    </div>
                    
<div class="form-group  col-lg-6"  >
<label class="control-label" for="inputSuccess">نبذة مختصرة</label>
<textarea   required="required"  rows="2" name="short_desc_ar" cols="20" style="width: 100%; height: 64"   id="textarea3"><? echo $row['short_desc_ar']; ?></textarea>
 </div>

<div class="form-group  col-lg-6"  >
<label class="control-label" for="inputSuccess">Abstract</label>
<textarea   required="required"  rows="2" name="short_desc_en" cols="20" style="width: 100%; height: 64"   id="textarea4"><? echo $row['short_desc_en']; ?></textarea>
 </div>



<div class="form-group  col-lg-12"  >
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea      rows="2" name="S1" cols="20" style="width: 100%; height: 64"   placeholder="اكتب النص هنا" id="textarea1"><? echo $row['word']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script> 
 </div>

<div class="form-group  col-lg-12"  >
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea     rows="2" name="S22" cols="20" style="width: 100%; height: 64"   placeholder="Enter Text Here" id="textarea2"><? echo $row['word_en']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea2');
</script>
 </div>



                   
                    
                 <div class="form-group col-lg-4">
<label>ارفاق المحتوى المفتوح</label>
<input    type="file" name="myFile" size="20"   > <br>
 <br>
<input type="submit" value="حفظ المرفق"   class="btn btn-warning btn-icon fa fa-pencil" name="B3"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-warning " >
    
       <? if($row['cors_files']!="" and $row['cors_files']!='-1.') {  ?>
 <a href="cors_files/<? echo $row['cors_files']; ?>"   target=_blank><i class="fa fa-download btn btn-success  btn-sm "> استعراض المرفق</i></a><? } ?>
    </div> 



<div class="form-group col-lg-4">
<label>ارفاق الحقيبة التدريبية</label>
<input    type="file" name="myFile2" size="20"   > <br>
 <br>
<input type="submit" value="حفظ المرفق"   class="btn btn-warning btn-icon fa fa-pencil" name="B32"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-warning " >
    
       <? if($row['cors_files2']!="" and $row['cors_files2']!='-1.') {  ?>
 <a href="cors_files/<? echo $row['cors_files2']; ?>"   target=_blank><i class="fa fa-download btn btn-success  btn-sm "> استعراض المرفق</i></a><? } ?>
    </div>
    
    


                 <div class="form-group col-lg-4">
<label>ارفاق صورة الدورة</label>
<input      type="file" accept="image/png, image/jpeg" name="myFile1"    > <br>
 <br>
<input type="submit" value="حفظ الصورة"   class="btn btn-warning btn-icon fa fa-pencil" name="B33"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-warning " >
    
       <? if($row['photo']!="" and $row['photo']!='-1.') {  ?>
 <a href="cors_files/<? echo $row['photo']; ?>"   target=_blank><i class="fa fa-download btn btn-success  btn-sm "> استعراض الصورة</i></a><? } ?>
    </div> 
    

          
                    
                 <div class="form-group col-lg-12">
<input type="submit" value="&#xf040; حفظ التغييرات"   class="btn btn-info  btn-icon fa fa-pencil" name="B1"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-info " style="float: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2" onclick="return confirm('هل تريد الحذف البيانات ؟')"   class="btn btn-danger" style="float: left"> </div>
 
                  </form>
<? } ?>
                </div> 
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

 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $cors= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8")); 
$Branches=mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8")); 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 $absences= mysqli_real_escape_string($conn,htmlspecialchars($_POST['absences'], ENT_QUOTES, "utf-8")); 
 $cors_name_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_name_en'], ENT_QUOTES, "utf-8")); 
 $contact_hours_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['contact_hours_en'], ENT_QUOTES, "utf-8")); 
 
 $S1= mysqli_real_escape_string($conn,$_POST['S1']);
$S22= mysqli_real_escape_string($conn,$_POST['S22']);
$page_no= mysqli_real_escape_string($conn,$_POST['page_no']);
$teachers= mysqli_real_escape_string($conn,$_POST['teachers']);
$Title= mysqli_real_escape_string($conn,$_POST['Title']);
$Title_en= mysqli_real_escape_string($conn,$_POST['Title_en']);
$researcher= mysqli_real_escape_string($conn,$_POST['researcher']);
$short_desc_ar= mysqli_real_escape_string($conn,$_POST['short_desc_ar']);
$short_desc_en= mysqli_real_escape_string($conn,$_POST['short_desc_en']);
$size= mysqli_real_escape_string($conn,$_POST['size']);
$hours= mysqli_real_escape_string($conn,$_POST['hours']);
$price= mysqli_real_escape_string($conn,$_POST['price']);
$price1= mysqli_real_escape_string($conn,$_POST['price1']);
$start= mysqli_real_escape_string($conn,$_POST['start']);
$C1= mysqli_real_escape_string($conn,$_POST['C1']);

$level=mysqli_real_escape_string($conn,htmlspecialchars($_POST['level'], ENT_QUOTES, "utf-8"));


$sql="update subjects set cors_name='$T1',cors_code='$T2',contact_hours='$T3',credits='$T4',type='$T5',cors='$cors',Branches='$Branches',absences='$absences',
cors_name_en='$cors_name_en',contact_hours_en='$contact_hours_en',
short_desc_ar='$short_desc_ar',
short_desc_en='$short_desc_en',
word='$S1',
word_en='$S22',
size='$size',
price='$price',
price1='$price1',
hours='$T4',Semester='$level'

 where cors_ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}

if (isset($_POST['B2'])) {

 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 
$sql="Delete from subjects  where cors_ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=e_cors.php"><?
}
}
if (isset($_POST['B3'])) {

 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 
 


  define("UPLOAD_DIR", "cors_files/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
    $img= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($img);
    while (file_exists(UPLOAD_DIR . $img)) {
        $i++;
        $img= $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $img);
 
}



 
$sql="update subjects set cors_files='$img'  where cors_ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}


if (isset($_POST['B33'])) {

 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 


  define("UPLOAD_DIR1", "cors_files/");
if (!empty($_FILES["myFile1"])) {
    $myFile1 = $_FILES["myFile1"];
   
 
  
    $name1 = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile1["name"]);
    $i = 0;
    $parts1 = pathinfo($name1);
    while (file_exists(UPLOAD_DIR1 . $name1)) {
        $i++;
        $name1 = $parts1["filename"] . "-" . $i . "." . $parts1["extension"];
    }
    $success = move_uploaded_file($myFile1["tmp_name"],UPLOAD_DIR1. $name1);
}

 

 
$sql="update subjects set photo='$name1'  where cors_ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}


if (isset($_POST['B32'])) {

 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 


  define("UPLOAD_DIR2", "cors_files/");
if (!empty($_FILES["myFile2"])) {
    $myFile2 = $_FILES["myFile2"];
   
 
  
    $name2 = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile2["name"]);
    $i = 0;
    $parts2 = pathinfo($name2);
    while (file_exists(UPLOAD_DIR2 . $name2)) {
        $i++;
        $name2 = $parts2["filename"] . "-" . $i . "." . $parts2["extension"];
    }
    $success = move_uploaded_file($myFile2["tmp_name"],UPLOAD_DIR2. $name2);
}

 

 
$sql="update subjects set cors_files2='$name2'  where cors_ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}

?>