<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");
$sql="insert into user_login set username='$_SESSION[username]',date=CURDATE(),time=NOW()";
if(mysqli_query($conn,$sql))
{
}
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
<h1><small>  الإعدادات العامة  
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  اضافة فرع جديد</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة فرع جديد</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
                  
 
                    
                    
<div class="form-group col-lg-6">
                      <label> اسم الفرع</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
 
                    </div>
 
                     
                    
<div class="form-group col-lg-6">
<label>Branches_name</label>
<input  name="T2" size="20"    required="required"    class="form-control" >
</div>
                    
<div class="form-group col-lg-6">
<label> المدير المعتمد بالمؤسسة</label>
<input  name="T3" size="20"    required="required"    class="form-control" >
</div>                    

<div class="form-group col-lg-6">
<label> المدير المعتمد بالوزارة</label>
<input  name="T4" size="20"    required="required"    class="form-control" >
</div>                    
 
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالمؤسسة</label>
<input  name="T5" size="20"    required="required"    class="form-control" >
</div>                    
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالوزارة</label>
<input  name="T6" size="20"    required="required"    class="form-control" >
</div>  


<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالمؤسسة  English</label>
<input  name="T9" size="20"    required="required"    class="form-control" >
</div>                    
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالوزارة English</label>
<input  name="T10" size="20"    required="required"    class="form-control" >
</div>  


                  
<div class="form-group col-lg-6">
<label>ترخيص المؤسسة</label>
<input  name="T7" size="20"    required="required"    class="form-control" >
</div>                    
 <div class="form-group col-lg-6">
<label>ترخيص الوزارة</label>
<input  name="T8" size="20"    required="required"    class="form-control" >
</div> 

 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي1</label>
<input  name="T11" size="20"    required="required"    class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي2</label>
<input  name="T12" size="20"    required="required"    class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي3</label>
<input  name="T13" size="20"    required="required"    class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>مدير التدريب الاهلي</label>
<input  name="T14" size="20"    required="required"    class="form-control" >
</div> 


 <div class="form-group col-lg-6">
<label>تصديق الوزارة</label>
<input  name="T15" size="20"    required="required"    class="form-control" >
</div> 

 <div class="form-group col-lg-6">
<label>المدير ( الوزارة )</label>
<input  name="T16" size="20"    required="required"    class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>الشعار</label>
<input    type="file" name="myFile" size="20" required="required" accept="image/png, image/jpeg"></div> 

                   
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
                         <th><p align=center><p align="center">الفرع</th>
                         <th><p align=center><p align="center">Branches_name</th>
 
 
 
 
                         <th><p align=center>الشعار</th>
 
 
 
 
                        <th align="right" colspan="2" ><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from branches  ";
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
                        <td align="right"><p align="center"><? echo $row['Branches_name']; ?></td>
						<td align="right"><p align="center"><? echo $row['Branches_name_en']; ?></td>						
 
                      

						<td align="right" width=1><img src="<? echo $row['branches_logo']; ?>" height=50></td>						
 
                      

                        <td align="center" width=2>
                        <a href="" data-id="<? echo $row['Branches_ID']; ?>" data-target="#myModaEdit<? echo $row['Branches_ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
                        <td align="center" width=2>
 <? if($_SESSION['acount_type']==1) { ?> <a href=""  data-id="<? echo $row['Branches_ID']; ?>"  data-target="#myModaDelete<? echo $row['Branches_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a><? } ?>
</td>
                      	</form>
                      </tr>
                     



                      <div class="example-modal">
            <div class="modal" id="myModaDelete<? echo $row['Branches_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
              	<form role="form" action="" method="post" enctype="multipart/form-data">

                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <? echo $row['Branches_name']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<? echo $row['Branches_ID']; ?>" required="required"   class="form-control"  >

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
                    <? if($_SESSION['acount_type']==1) { ?><input type="submit"    class="btn btn-danger" value="حذف" name="delete"><? } else { ?>لا يوجد لديك صلاحيات الحذف<? } ?>
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          <div class="example-modal">
            <div class="modal" id="myModaEdit<? echo $row['Branches_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">               
                
                	<form role="form" action="" method="post" enctype="multipart/form-data">

                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <? echo $row['Branches_name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<? echo $row['Branches_ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
 
                    
                    
                    
                  
 
                    
                    
<div class="form-group col-lg-6">
                      <label> اسم الفرع</label>
                      
                      <input  name="T1" id="T1" size="20" value="<? echo $row['Branches_name']; ?>"   required="required"   class="form-control"  >
 
                    </div>
 
                     
                    
<div class="form-group col-lg-6">
<label>Branches_name</label>
<input  name="T2" size="20"    required="required"   value="<? echo $row['Branches_name_en']; ?>" class="form-control" >
</div>
                    
<div class="form-group col-lg-6">
<label> المدير المعتمد بالمؤسسة</label>
<input  name="T3" size="20"    required="required"  value="<? echo $row['mang_name']; ?>"  class="form-control" >
</div>                    

<div class="form-group col-lg-6">
<label> المدير المعتمد بالوزارة</label>
<input  name="T4" size="20"    required="required"  value="<? echo $row['mang_name2']; ?>"  class="form-control" >
</div>                    
 
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالمؤسسة</label>
<input  name="T5" size="20"    required="required"  value="<? echo $row['Branches_title']; ?>"  class="form-control" >
</div>                    
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالوزارة</label>
<input  name="T6" size="20"    required="required"   value="<? echo $row['Branches_title2']; ?>" class="form-control" >
</div> 

<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالمؤسسة  English</label>
<input  name="T9" size="20"    required="required"   value="<? echo $row['Branches_title_en']; ?>" class="form-control" >
</div>                    
<div class="form-group col-lg-6">
<label>مسمي المعهد/المركز بالوزارة English</label>
<input  name="T10" size="20"    required="required"  value="<? echo $row['Branches_title2_en']; ?>"  class="form-control" >
</div>  

                   
<div class="form-group col-lg-6">
<label>ترخيص المؤسسة</label>
<input  name="T7" size="20"    required="required"   value="<? echo $row['Computer_license']; ?>" class="form-control" >
</div>                    
 <div class="form-group col-lg-6">
<label>ترخيص الوزارة</label>
<input  name="T8" size="20"    required="required"   value="<? echo $row['English_license']; ?>" class="form-control" >
</div> 


 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي1</label>
<input  name="T11" size="20"    required="required"    value="<? echo $row['tvtc_job1']; ?>" class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي2</label>
<input  name="T12" size="20"    required="required"    value="<? echo $row['tvtc_job2']; ?>" class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>منصب مدير التدريب الاهلي3</label>
<input  name="T13" size="20"    required="required"    value="<? echo $row['tvtc_job3']; ?>" class="form-control" >
</div> 
 <div class="form-group col-lg-6">
<label>مدير التدريب الاهلي</label>
<input  name="T14" size="20"    required="required"     value="<? echo $row['name1']; ?>" class="form-control" >
</div> 
 
<div class="form-group col-lg-6">
<label>تصديق الوزارة</label>
<input  name="T15" size="20"    required="required"    value="<? echo $row['job2']; ?>"  class="form-control" >
</div> 

 <div class="form-group col-lg-6">
<label>المدير ( الوزارة )</label>
<input  name="T16" size="20"    required="required"   value="<? echo $row['name2']; ?>"   class="form-control" >
</div>  

 <div class="form-group col-lg-6">
<label>الشعار</label>
<input    type="file" name="myFile" size="20" required="required" accept="image/png, image/jpeg">
<input type="submit" class="btn btn-success " value="تغيير الشعار" name="editimg"></div> 

                   
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
 $T9 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8")); 
  $T10 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8")); 
  $T11 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T11'], ENT_QUOTES, "utf-8")); 
  $T12= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T12'], ENT_QUOTES, "utf-8")); 
  $T13 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T13'], ENT_QUOTES, "utf-8")); 
  $T14 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T14'], ENT_QUOTES, "utf-8")); 
   $T15 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T15'], ENT_QUOTES, "utf-8")); 
   $T16 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T16'], ENT_QUOTES, "utf-8")); 
   $T17 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T17'], ENT_QUOTES, "utf-8")); 
  
 
  define("UPLOAD_DIR", "./");
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
 
 $sql="insert into branches set Branches_name='$T1',Branches_name_en='$T2',mang_name='$T3',mang_name2='$T4',Branches_title='$T5',Branches_title2='$T6',
 Computer_license='$T7',English_license='$T8',Branches_title_en='$T9',Branches_title2_en='$T10',tvtc_job1='$T11',tvtc_job2='$T12',tvtc_job3='$T13'
 ,name1='$T14',job2='$T15',name2='$T16',branches_logo='$img'";
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

elseif (isset($_POST['editimg'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $T9 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8")); 
  $T10 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8")); 
  $T11 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T11'], ENT_QUOTES, "utf-8")); 
  $T12= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T12'], ENT_QUOTES, "utf-8")); 
  $T13 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T13'], ENT_QUOTES, "utf-8")); 
  $T14 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T14'], ENT_QUOTES, "utf-8")); 
   $T15 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T15'], ENT_QUOTES, "utf-8")); 
   $T16 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T16'], ENT_QUOTES, "utf-8")); 
   $T17 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T17'], ENT_QUOTES, "utf-8")); 
  
 
  define("UPLOAD_DIR", "./");
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
 
 $sql="update branches  set Branches_name='$T1',Branches_name_en='$T2',mang_name='$T3',mang_name2='$T4',Branches_title='$T5',Branches_title2='$T6',
 Computer_license='$T7',English_license='$T8',Branches_title_en='$T9',Branches_title2_en='$T10',
 tvtc_job1='$T11',tvtc_job2='$T12',tvtc_job3='$T13',name1='$T14',job2='$T15',name2='$T16',branches_logo='$img' where Branches_ID='$iddd' ";
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



elseif(isset($_POST['edit'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
  $T9 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8")); 
  $T10 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8")); 
 
  $T11 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T11'], ENT_QUOTES, "utf-8")); 
  $T12= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T12'], ENT_QUOTES, "utf-8")); 
  $T13 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T13'], ENT_QUOTES, "utf-8")); 
  $T14 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T14'], ENT_QUOTES, "utf-8")); 
   $T15 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T15'], ENT_QUOTES, "utf-8")); 
   $T16 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T16'], ENT_QUOTES, "utf-8")); 
   $T17 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T17'], ENT_QUOTES, "utf-8")); 
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 $act= mysqli_real_escape_string($conn,htmlspecialchars($_POST['act'], ENT_QUOTES, "utf-8")); 
 $stop= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stop'], ENT_QUOTES, "utf-8")); 
 $cou= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cou'], ENT_QUOTES, "utf-8")); 

 $sql="update branches  set Branches_name='$T1',Branches_name_en='$T2',mang_name='$T3',mang_name2='$T4',Branches_title='$T5',Branches_title2='$T6',
 Computer_license='$T7',English_license='$T8',Branches_title_en='$T9',Branches_title2_en='$T10',
 tvtc_job1='$T11',tvtc_job2='$T12',tvtc_job3='$T13',name1='$T14',job2='$T15',name2='$T16' where Branches_ID='$iddd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

 

}

elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['idd'], ENT_QUOTES, "utf-8")); 

$sql="delete from 	branches where Branches_ID='$idd'";
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

$sql="delete from 	teacher where teacher_id='$idd'";
if(mysqli_query($conn,$sql))
{
}
}
 

?>