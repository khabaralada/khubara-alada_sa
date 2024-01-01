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
<h1><small>  اسئلة الاختبارات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  اضافة سؤال جديد</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة سؤال جديد</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
                  
 
                    
                        
                    
                    
                       <div class="form-group col-lg-12">
                      <label>السؤال</label>
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
                       </div>
                       
                         

                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الاول</label>
                      <input  name="T2"  size="20"   required="required"   class="form-control"  >
                       </div>
                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الثاني</label>
                      <input  name="T3"  size="20"   required="required"   class="form-control"  >
                       </div>
                       
                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الثالث</label>
                      <input  name="T4"  size="20"   required="required"   class="form-control"  >
                       </div>

                      
                       <div class="form-group col-lg-6">
                      <label>الاختيار الرابع</label>
                      <input  name="T5"  size="20"   required="required"   class="form-control"  >
                       </div>
                    
                      
                       <div class="form-group col-lg-6">
                      <label>الإجابة الصحيحة</label>
                      <input  name="T6"  size="20"   required="required"   class="form-control"  >
                       </div>

                      
                       <div class="form-group col-lg-6">
                      <label>صورة</label>
                      <input    type="file" name="myFile" size="20" accept="image/png, image/jpeg">
                       </div>


                       
                       
                       
                    
                </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          

          
<table id='example1'  class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center><p align="center">#</th>
                         <th><p align=center><p align="center">السؤال </th>
                         <th><p align=center><p align="center">الاختيار1</th>
                         <th><p align=center><p align="center">الاختيار2</th>
                         <th><p align=center><p align="center">الاختيار3</th>
                         <th><p align=center><p align="center">الاختيار4</th>
                         <th><p align=center><p align="center">الاجابة</th>
                         <th><p align=center><p align="center">الصورة</th>
 
 
 
                        <th align="right" colspan="2" ><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$lessons_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['lessons_ID']), ENT_QUOTES, "utf-8")); 

$query = "select * from lesson_questions where cors_ID='$lessons_ID'  order by question_ID";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
	<form role="form" action="" method="post" enctype="multipart/form-data">
                        <td align="right"><p align="center"><? $c++; echo $c; ?></td>
                        <td align="right"><p align="center"><? echo $row['question']; ?></td>
                        <td align="right"><p align="center"><? echo $row['choice1']; ?></td>
                        <td align="right"><p align="center"><? echo $row['choice2']; ?></td>
                        <td align="right"><p align="center"><? echo $row['choice3']; ?></td>
                        <td align="right"><p align="center"><? echo $row['choice4']; ?></td>
                        <td align="right"><p align="center"><? echo $row['Answer']; ?></td>
                        <td align="right"><p align="center"><? if( $row['img']!='' and $row['img']!="-1.") { ?><a href="attachment/<? echo $row['img']; ?>"><img src="attachment/<? echo $row['img']; ?>" width="35" height="38"><? } ?></td>
						
 
                      

                        <td align="center" width=2>
                        <a href="" data-id="<? echo $row['question_ID']; ?>" data-target="#myModaEdit<? echo $row['question_ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
                        <td align="center" width=2>
                                                <a href="" data-id="<? echo $row['question_ID']; ?>" data-target="#myModaDelete<? echo $row['question_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr>
                     



                      <div class="example-modal">
            <div class="modal" id="myModaDelete<? echo $row['question_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <? echo $row['question']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<? echo $row['question_ID']; ?>" required="required"   class="form-control"  >

                  </div>
                  <div class="modal-body">
                  
<div class="row">
<div class="form-group col-lg-12">
<b><label>هل تريد حقًا حذف هذه البيانات ؟</label></b>
<input  type=hidden type="text" name="id" id="bookId" value=""/>
</div>
</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <? if($_SESSION['acount_type']==1) { ?><input type="submit" class="btn btn-danger" value="حذف" name="delete"><? } else { ?>لا يوجد لديك صلاحيات الحذف<? } ?>
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          <div class="example-modal">
            <div class="modal" id="myModaEdit<? echo $row['question_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <? echo $row['nquestioname']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<? echo $row['question_ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">


<div class="form-group col-lg-6">
                      <label>الفئة  </label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="cat" class="form-control" >
                               <option ><? echo $row['section']; ?></option> 
<?
include ("conn.php");
$query9 = "select * from cat_questions";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['cat']; ?></option>
<? } ?>

						</select>
                    </div>
                    
                    
  <div class="form-group col-lg-6">
                      <label>السؤال</label>
                      <input  name="T1" id="T1" size="20"  value="<? echo $row['question']; ?>"  required="required"   class="form-control"  >
                       </div>
 
   <div class="form-group col-lg-12">
                      <label>باقي السؤال</label>
                      <input  name="The_rest_of_the_question"  size="20"    value="<? echo $row['The_rest_of_the_question']; ?>"    class="form-control"  >
                       </div>
 
 
                        <div class="form-group col-lg-12">
                      <label>عنوان 1</label>
                      <input  name="sub1"  size="20"     value="<? echo $row['sub1']; ?>"   class="form-control"  >
                       </div>

                       <div class="form-group col-lg-12">
                      <label>عنوان 2</label>
                      <input  name="sub2"   size="20"   value="<? echo $row['sub2']; ?>"    class="form-control"  >
                       </div>

                       <div class="form-group col-lg-12">
                      <label>النص</label>
                      <textarea  name="lontext"       class="form-control"  ><? echo $row['lontext']; ?></textarea>
                       </div>

                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الاول</label>
                      <input  name="T2"  size="20"   value="<? echo $row['choice1']; ?>" required="required"   class="form-control"  >
                       </div>
                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الثاني</label>
                      <input  name="T3"  size="20"  value="<? echo $row['choice2']; ?>"  required="required"   class="form-control"  >
                       </div>
                       
                     
                       <div class="form-group col-lg-6">
                      <label>الاختيار الثالث</label>
                      <input  name="T4"  size="20"   value="<? echo $row['choice3']; ?>" required="required"   class="form-control"  >
                       </div>

                      
                       <div class="form-group col-lg-6">
                      <label>الاختيار الرابع</label>
                      <input  name="T5"  size="20"   value="<? echo $row['choice4']; ?>" required="required"   class="form-control"  >
                       </div>
                    
                      
                       <div class="form-group col-lg-6">
                      <label>الإجابة الصحيحة</label>
                      <input  name="T6"  size="20"  value="<? echo $row['Answer']; ?>"  required="required"   class="form-control"  >
                       </div>

                     


                    
 

 


 
                   
                     
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                     <? if($_SESSION['acount_type']==1) { ?><input type="submit" class="btn btn-success " value="حفظ التغييرات" name="edit"><? } else { ?>لا يوجد لديك صلاحيات التعديل<? } ?>
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
<? 
}
} 
?>
                    </tbody>
                     
                  </table>
                  
                
                  
 

 

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?
if (isset($_POST['add'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
  $cat= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cat'], ENT_QUOTES, "utf-8")); 


  $sub1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['sub1'], ENT_QUOTES, "utf-8")); 
  $sub2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['sub2'], ENT_QUOTES, "utf-8")); 
  $The_rest_of_the_question= mysqli_real_escape_string($conn,htmlspecialchars($_POST['The_rest_of_the_question'], ENT_QUOTES, "utf-8")); 
  $lontext= mysqli_real_escape_string($conn,htmlspecialchars($_POST['lontext'], ENT_QUOTES, "utf-8")); 
 

   define("UPLOAD_DIR", "attachment/");
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

  define("UPLOAD_DIR1", "attachment/");
if (!empty($_FILES["myFile1"])) {
    $myFile1 = $_FILES["myFile1"];
    $sound= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile1["name"]);
    $i = 0;
    $parts1 = pathinfo($sound);
    while (file_exists(UPLOAD_DIR1 . $sound)) {
        $i++;
        $sound= $parts1["filename"] . "-" . $i . "." . $parts1["extension"];
    }
    $success = move_uploaded_file($myFile1["tmp_name"],UPLOAD_DIR1. $sound);
}

$cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 

 $sql="insert into lesson_questions set sub1='$sub1',sub2='$sub2',lontext='$lontext',The_rest_of_the_question='$The_rest_of_the_question',section='$cat',cors_ID='$lessons_ID',question='$T1',choice1='$T2',choice2='$T3',choice3='$T4',choice4='$T5',Answer='$T6',img='$img',sound='$sound'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?
}


 




 
 
}
elseif(isset($_POST['edit'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 $act= mysqli_real_escape_string($conn,htmlspecialchars($_POST['act'], ENT_QUOTES, "utf-8")); 
 $stop= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stop'], ENT_QUOTES, "utf-8")); 
 $cou= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cou'], ENT_QUOTES, "utf-8")); 
 $cat= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cat'], ENT_QUOTES, "utf-8")); 
  $sub1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['sub1'], ENT_QUOTES, "utf-8")); 
  $sub2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['sub2'], ENT_QUOTES, "utf-8")); 
  $The_rest_of_the_question= mysqli_real_escape_string($conn,htmlspecialchars($_POST['The_rest_of_the_question'], ENT_QUOTES, "utf-8")); 
  $lontext= mysqli_real_escape_string($conn,htmlspecialchars($_POST['lontext'], ENT_QUOTES, "utf-8")); 
$cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['lessons_ID']), ENT_QUOTES, "utf-8")); 

 $sql="update lesson_questions set sub1='$sub1',sub2='$sub2',lontext='$lontext',The_rest_of_the_question='$The_rest_of_the_question',section='$cat',
 cors_ID='$cors_ID',question='$T1',choice1='$T2',choice2='$T3',choice3='$T4',choice4='$T5',Answer='$T6'  where question_ID='$iddd'";
if(mysqli_query($conn,$sql))
{
 
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?
}
}



 




elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['idd'], ENT_QUOTES, "utf-8")); 

$sql="delete from 	lesson_questions where question_ID='$idd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?
}

 
}
 

?>