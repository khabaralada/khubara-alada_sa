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
<title>المصادر والتحميلات</title>
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
<h1><small>المصادر والتحميلات</small></h1>
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
<label>العنوان</label>
<input  name="T1"   size="20"   required="required"   class="form-control"  >
<input  type=hidden name="cors_ID"   size="20"   value="<?php echo $_GET['cors_ID']; ?>" required="required"   class="form-control"  >
</div> 

<div class="form-group col-lg-12">
<label>تجديد الصورة</label>
<input      type="file"  name="myFile1"  required="required"  >
 
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
                        <th align="right"><p align="center">المرفق</th>
                        <th align="right"><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("conn.php");
$query = "select * from cors_file where cors_ID='$_GET[cors_ID]' ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php echo $row['cors_file_ID']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['file_title']; ?></td>
                        <td align="right"><p align="center">
                         <a href="cors_files/<?php echo $row['cors_file']; ?>"  ><i class="fa fa-download    "></i>استعراض </a>
                         </td>
 
 
						
                        <td align="center">
 
                        <a href="" data-id="<?php echo $row['cors_file_ID']; ?>" data-target="#myModaDelete<?php echo $row['cors_file_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr><div class="example-modal">
            <div class="modal" id="myModaDelete<?php echo $row['cors_file_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['cors_file_ID']; ?>" required="required"   class="form-control"  >

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
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $cors_ID= mysqli_real_escape_string($conn,$_POST['cors_ID']); 
 
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



$sql="insert into cors_file set file_title='$T1',cors_file='$name1',cors_ID='$cors_ID'  ";
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

$sql="update cors_file set cors_file='$T1'  where cors_file_ID='$idds'";
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

$sql="delete from cors_file where cors_file_ID='$idd'";
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