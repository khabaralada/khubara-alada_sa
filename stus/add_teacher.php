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

 



</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
تسجيل الهيئة التدريبية 
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

 
                
                
                
                  <form role="form" action="" method="post">
                    <!-- text input -->
                    <div class="form-group">
                      <label> المجال / التخصص</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="cors" class="form-control" >
                               <option ></option> 
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
                    
                    <div class="form-group">
                      <label>الفرع</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required    class="form-control"  >
 
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
                    
                    
                    <div class="form-group">
                      <label>  اسم المحاضر / المدرب</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
 
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label> رقم بطاقة الأحوال /الرقم الوظيفي</label>
                      <input  name="T7" id="T2" size="20"    required="required"  class="form-control" >
                    </div>
                    <div class="form-group">
                      <label class="control-label" >الدرجة العليمة</label>
                      <input  name="T2" id="T3" size="20"     required="required"  class="form-control" >
                    </div>

                    <!-- input states -->
                    <div class="form-group"  >
                      <label class="control-label" for="inputSuccess">       العنوان</label>
 
                      
                      <input  name="T3" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div>
                     
                    
                     <div class="form-group"  >
                      <label class="control-label" for="inputSuccess">       الجوال</label>
 
                      
                      <input  name="T4" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div>
                    
                    
                    
                    <div class="form-group"  >
                      <label class="control-label" for="inputSuccess">       البريد الالكتروني</label>
 
                      
                      <input type=email  name="T8"  size="20"         class="form-control" >
                      
                      
                    </div>
                    
                    
                    <div class="form-group"  >
                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div><div class="form-group"  >
                      <label class="control-label" for="inputSuccess">       كلمة المرور</label>
 
                      
                      <input  name="T6" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
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




$sql="insert into teacher set teacher_name='$T1',degree='$T2',address='$T3',phone='$T4',username='$T5',password='$T6',id_card='$T7',count_h='2000',
Branches='$Branches',cors='$cors',email='$T8'";
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


$sql="insert into user set name='$T1',username='$T5',password='$T6',acount_type='2',mobile='$T4',email='$T8',ID='$last_id',Branches='$Branches'";
if(mysqli_query($conn,$sql))
{
}

}
?>