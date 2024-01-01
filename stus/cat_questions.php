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
<h1><small>  اعدادات الاختبار
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  اضافة جديد</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة جديد</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
                  
 
                    
                    
<div class="form-group col-lg-6">
                      <label>  الفئة</label>
                      
                      <input  name="T1"    size="20"   required="required"   class="form-control"  >
 
                    </div>

 
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       عدد الاسئلة</label>
 
                      
                      <input  name="T2"   size="20"    required="required"    class="form-control" >
                      
                      
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
                         <th><p align=center><p align="center">الفئة</th>
                         <th><p align=center><p align="center">عدد الاسئلة</th>
 
 
 
 
                        <th align="right" colspan="2" ><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from cat_questions  ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><? $c++; echo $c; ?></td>
                        <td align="right"><p align="center"><? echo $row['cat']; ?></td>
						<td align="right"><p align="center"><? echo $row['cou_questions']; ?></td>						
 
                      

                        <td align="center" width=2>
                        <a href="" data-id="<? echo $row['ID']; ?>" data-target="#myModaEdit<? echo $row['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
                        <td align="center" width=2>
                                                <a href="" data-id="<? echo $row['ID']; ?>" data-target="#myModaDelete<? echo $row['ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr>
                     



                      <div class="example-modal">
            <div class="modal" id="myModaDelete<? echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <? echo $row['cat']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<? echo $row['ID']; ?>" required="required"   class="form-control"  >

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
            <div class="modal" id="myModaEdit<? echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <? echo $row['cat']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<? echo $row['ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
 
                    
 
                    
                    
<div class="form-group col-lg-6">
                      <label>الفئة</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"  value="<? echo $row['cat']; ?>" class="form-control"  >
 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">عدد الاسئلة</label>
 
                      
                      <input  name="T2"   size="20"  value="<? echo $row['cou_questions']; ?>"  required="required"    class="form-control" >
                      
                      
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
 
 
 $sql="insert into cat_questions set cat='$T1',cou_questions='$T2' ";
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
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 $act= mysqli_real_escape_string($conn,htmlspecialchars($_POST['act'], ENT_QUOTES, "utf-8")); 
 $stop= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stop'], ENT_QUOTES, "utf-8")); 
 $cou= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cou'], ENT_QUOTES, "utf-8")); 

 $sql="update cat_questions set cat='$T1',cou_questions='$T2' where ID='$iddd'";
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

$sql="delete from 	cat_questions where ID='$idd'";
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