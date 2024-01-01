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
<title>المحتوي التعليمي   </title>
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
<h1><small>

					                     <?
include ("conn.php");
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$Branches_name=$row[Branches_name];
$Branches_ID=$row[Branches_ID];
$cors_ID=$row[cors_ID];

$section_Id=$row[ID];
$cors_type=$row[cors_type];
$cors_code=$row[cors_no];
 



?>
المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $cors_name=$row['cors_name']; ?> - بداية الدورة : <? echo $start_date=$row['start_date']; ?>  - نهاية الدورة : <? echo $end_date=$row['end_date']; ?> 
<? } ?>
 
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
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة جديد</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
<div class="row">


 

<div class="form-group col-lg-12">
<label>العنوان </label>
<input  type=hidden name="section_Id"   size="20"   required="required"   class="form-control" value="<?php echo $_GET['section_Id']; ?>"  >
<input  name="T1"   size="20"   required="required"   class="form-control"  >
</div> 

<div class="form-group col-lg-12">
<label>الوصف </label>
<textarea  name="T2"         class="form-control"  ></textarea></div> 

<div class="form-group col-lg-12">
<label>رابط الفيديو او المحتوي </label>
<input  name="T3"   size="20"   required="required"   class="form-control"  >
</div> 


    <div class="form-group col-lg-6">
                      <label>المرفقات</label>
                      <input    type="file" name="myFile" size="20"  >
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
                        <th align="right"><p align="center">العنوان </th>
                        <th align="right"><p align="center">الوصف </th>
                        <th align="right"><p align="center">رابط الفيديو او المحتوي</th>
                        <th align="right"><p align="center">المرفقات</th>
                        <th align="right"><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("conn.php");
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from content where section_Id='$section_Id'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php echo $row['ID']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['content_title']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['description']; ?></td>
                        <td align="right"><p align="center"><a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a></td>
                        <td align="right"><p align="center"><a href="attachment/<?php echo $row['pdf']; ?>"><?php echo $row['pdf']; ?></a></td>
 
						
                        <td align="center">
                        <a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaEdit<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
                        <a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaDelete<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                    
 <div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                	<form role="form" action="" method="post" enctype="multipart/form-data">

                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row['content_title']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 
                  
					<input  type=hidden name="idds"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

<div class="row">


 

<div class="form-group col-lg-12">
<label>العنوان</label>
<input  name="T1"   size="20"   required="required"   class="form-control" value="<?php echo $row['content_title']; ?>"  >
</div>  
<div class="form-group col-lg-12">
 
<label>الوصف</label>
<textarea  name="T2"         class="form-control"  ><?php echo $row['content_title']; ?></textarea>
</div>  

<div class="form-group col-lg-12">
<label>رابط الفيديو او المحتوي</label>
<input  name="T3"   size="20"   required="required"   class="form-control" value="<?php echo $row['url']; ?>"  >
</div>  

 
 <div class="form-group col-lg-6">
<label>المرفقات</label>
<input    type="file" name="myFile" size="20"  >
</div>

</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ التغييرات" name="edit">
                    <input type="submit" class="btn btn-success " value="حفظ المرفقات" name="img">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          

 <div class="example-modal">
            <div class="modal" id="myModaDelete<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['content_title']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

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
                    <input type="submit" class="btn btn-danger" value="حذف" name="delete">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>  </tr>
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
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $section_Id= mysqli_real_escape_string($conn,$_POST['section_Id']); 
 
 
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

$sql="insert into content set content_title='$T1',description='$T2',url='$T3',pdf='$img',section_Id='$section_Id' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
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

$sql="update content set content_title='$T1',description='$T2',url='$T3'  where ID='$idds'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}



if (isset($_POST['img'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $section_Id= mysqli_real_escape_string($conn,$_POST['section_Id']); 
 
 
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

$sql="update    content set  pdf='$img'   where ID='$idds' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}




elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,$_POST['idd']); 

$sql="delete from content  where ID='$idd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}
}

?>