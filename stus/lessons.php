<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");
$sql="insert into user_login set username='$_SESSION[username]',date='$synch1',time=NOW()";
if(mysqli_query($conn,$sql))
{
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>الدروس التعليمية  </title>
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
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>الدروس التعليمية</small></h1>
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


 

<div class="form-group col-lg-12">
<label>عنوان الدرس  </label>
<input  name="T1"   size="20"   required="required"   class="form-control"  >
<input  type=hidden name="cors_ID"   size="20"   value="<?php echo $_GET['cors_ID']; ?>" required="required"   class="form-control"  >
</div> 


<div class="form-group col-lg-12">
<label>المحاور الفرعية    </label>
<select  style="width: 100%;"  class="form-control input-sm select2"  size="1" name="T2"   required    class="form-control"  >
 <option></option>

 
<?php
include ("conn.php");
$query2 = "select * from sub_axes where cors_ID='$_GET[cors_ID]'";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
?>
<option value="<?php echo $row2['sub_axes_ID']; ?>"><?php echo $row2['sub_axes']; ?></option>
<?php } } ?>
</select></div>


<div class="form-group col-lg-12">
<label>محتوي الدرس  </label>

										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea      rows="2" name="S1" cols="20" style="width: 100%; height: 64"   placeholder="اكتب النص هنا" id="textarea1"></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script> 
 
</div> 
 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="اضافة" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          

          
<table    class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right"><p align="center">#</th>
                        <th align="right"><p align="center">المحور الفرعي</th>
                        <th align="right"><p align="center">عنوان الدرس</th>
                        <th align="right"><p align="center">الاسئلة</th>
                        <th align="right"><p align="center">المرئيات</th>
                        <th align="right" width=1></th>
                        <th align="right" width=1><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("conn.php");
$query = "select * from lessons where cors_ID='$_GET[cors_ID]' ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php echo $row['lessons_ID']; ?></td>
                        <td align="right">
                        
                        
                                             <?php
include ("conn.php");
$query2 = "select * from  sub_axes where  sub_axes_ID='$row[sub_axes_ID]' ";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
  echo $row2['sub_axes']; }}  ?></td>
 
 
						
                        <td align="right"><p align="center"><?php echo $row['lessons']; ?></td>
 
 
						
                        <td align="center">
 


			 <a href="lesson_questions.php?lessons_ID=<? echo $row['lessons_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  lesson_questions where cors_ID='$row[lessons_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>

</td>
 
 
						
                        <td align="center">
                                              		 <a href="lesson_video.php?lessons_ID=<? echo $row['lessons_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  lesson_video where lessons_ID='$row[lessons_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a></td>
 
 
						
                        <td align="center">
                                               <a href="" data-id="<?php echo $row['lessons_ID']; ?>" data-target="#myModaEdit<?php echo $row['lessons_ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
 
 
						
                        <td align="center">
                        <a href="" data-id="<?php echo $row['lessons_ID']; ?>" data-target="#myModaDelete<?php echo $row['lessons_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr>
                      
                      <div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['lessons_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row['lessons']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 
                  
					<input  type=hidden name="idds"   size="20"   value="<?php echo $row['lessons_ID']; ?>" required="required"   class="form-control"  >

<div class="row">


 

<div class="form-group col-lg-12">
<label>عنوان الدرس </label>
<input  name="T1"   size="20"   required="required"   class="form-control" value="<?php echo $row['lessons']; ?>"  >
</div>  
 
<div class="form-group col-lg-12">
<label>المحاور الفرعية    </label>
<select  style="width: 100%;"  class="form-control input-sm select2"  size="1" name="T2"   required    class="form-control"  >
<?php
 
$query2 = "select * from sub_axes where sub_axes_ID='$row[sub_axes_ID]'";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
?>
<option value="<?php echo $row2['sub_axes_ID']; ?>"><?php echo $row2['sub_axes']; ?></option>
<?php } } ?>

 <option></option>

 
<?php
 
$query2 = "select * from sub_axes where cors_ID='$row[cors_ID]'";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
?>
<option value="<?php echo $row2['sub_axes_ID']; ?>"><?php echo $row2['sub_axes']; ?></option>
<?php } } ?>
</select></div>



<div class="form-group col-lg-12">
<label>محتوي الدرس  </label>

										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea      rows="2" name="S1" cols="20" style="width: 100%; height: 64"   placeholder="اكتب النص هنا" id="textareaa<?php echo $row['lessons_ID']; ?>"><?php echo $row['lessons_contant']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textareaa<?php echo $row['lessons_ID']; ?>');
</script> 
 
</div>
 


</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
 
<input type="submit" class="btn btn-success"  value="حفظ التغييرات" name="edit"> 
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>  
          
          
          
          <div class="example-modal">
            <div class="modal" id="myModaDelete<?php echo $row['lessons_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['lessons']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['lessons_ID']; ?>" required="required"   class="form-control"  >

                  </div>
                  <div class="modal-body">
                  
<div class="row">
<div class="form-group col-lg-12">
<b><label>هل تريد حقًا حذف هذه البيانات ؟</label></b>
 
</div>
</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
 <input type="submit" class="btn btn-danger"  value="حذف" name="delete">                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
 

<?php 
}
} 
?>
                    </tbody>
                     
                  </table>
                   

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?php
if (isset($_POST['add'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $S1 = mysqli_real_escape_string($conn,$_POST['S1']); 
 $cors_ID= mysqli_real_escape_string($conn,$_POST['cors_ID']); 
 
$sql="insert into lessons set lessons='$T1',cors_ID='$cors_ID',lessons_contant='$S1',sub_axes_ID='$T2'  ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php
}
}
elseif(isset($_POST['edit'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $ids = mysqli_real_escape_string($conn,$_POST['ids']); 
 $stop = mysqli_real_escape_string($conn,$_POST['stop']); 
 $S1 = mysqli_real_escape_string($conn,$_POST['S1']); 

$sql="update lessons set lessons='$T1',lessons_contant='$S1',sub_axes_ID='$T2'  where lessons_ID='$idds'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php
}
}

elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,$_POST['idd']); 

$sql="delete from lessons where lessons_ID='$idd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php
}
}

?>