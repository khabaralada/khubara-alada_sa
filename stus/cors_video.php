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
<title>دليل الفديوهات</title>
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
<h1><small>دليل الفديوهات</small></h1>
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
<label>العنوان</label>
<input  name="T1"   size="20"   required="required"   class="form-control"  required="required">
<input  type=hidden name="cors_ID"   size="20"   value="<?php echo $_GET['cors_ID']; ?>" required="required"   class="form-control"  >
</div> 
 
<div class="form-group col-lg-12">
<label>رابط الفيديو</label>
<input  name="T2"   size="20"   required="required"   class="form-control"  required="required">
 
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
                        <th align="right"><p align="center">العنوان</th>
                        <th align="right"><p align="center">رابط الفيديو</th>
                        <th align="right"><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("conn.php");
$query = "select * from video_cors where cors_ID='$_GET[cors_ID]' ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php echo $row['video_cors_ID']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['video_cors']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['video_title']; ?></td>
 
 
						
                        <td align="center">
                        <a href="" data-id="<?php echo $row['video_cors_ID']; ?>" data-target="#myModaEdit<?php echo $row['video_cors_ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
                        <a href="" data-id="<?php echo $row['video_cors_ID']; ?>" data-target="#myModaDelete<?php echo $row['video_cors_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr><div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['video_cors_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row['Main axes']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 
                  
					<input  type=hidden name="idds"   size="20"   value="<?php echo $row['video_cors_ID']; ?>" required="required"   class="form-control"  >

<div class="row">


 

<div class="form-group col-lg-12">
<label>العنوان</label>
<input  name="T1"   size="20"   required="required"   class="form-control" value="<?php echo $row['video_cors']; ?>"  >
</div>  
<div class="form-group col-lg-12">
<label>رابط الفيديو</label>
<input  name="T2"   size="20"   required="required"   class="form-control" value="<?php echo $row['video_title']; ?>"  >
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
            <div class="modal" id="myModaDelete<?php echo $row['video_cors_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['video_cors_ID']; ?>" required="required"   class="form-control"  >

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
<? if($_SESSION['acount_type']==1 or $_SESSION['acount_type']==9) { ?><input type="submit" class="btn btn-danger"  value="حذف" name="delete"><? } else { ?>
لا يوجد صلاحية الحذف
<? } ?>                  </div></form>
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
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $cors_ID= mysqli_real_escape_string($conn,$_POST['cors_ID']); 
 
$sql="insert into video_cors set video_cors='$T1',video_title='$T2',cors_ID='$cors_ID'  ";
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

$sql="update video_cors set video_cors='$T1',video_title='$T2'  where video_cors_ID='$idds'";
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

$sql="delete from video_cors where video_cors_ID='$idd'";
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