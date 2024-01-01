<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("../config.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>إدارة المحتوى</title>
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
<h1><small>  المستخدمين
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">صلاحيات الدورات: <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd1"   size="20"   value="<?php echo $_GET['ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
							<?php
$i=0;
$query2 = "select * from subjects";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{


$query1 = "select * from user_course where user_ID='$_GET[ID]' and cors_ID='$row2[cors_ID]'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{ $ok=1; } else { $ok=0; }
?>	
<div class="form-group col-lg-12">
<b><label><input  type=hidden name="area_ID[]" size="20"   class="form-control"   dir="rtl" value="<?php echo $row2['cors_ID']; ?>">
<input name="checkbox[]"    type="checkbox" <?php if($ok==1) echo 'checked'; ?> id="checkbox[]" value="<?php echo $i++;?>"   >
<?php echo $i;?> - <?php echo $row2['cors_name']; ?></label></b>
 
</div><?php } } ?>
</div>  


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="games">
                  </div></form>
          
          

 
                  
                
                  
 

 

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?php
  require_once('include/phpmailer/PHPMailerAutoload.php');
 

if (isset($_POST['add'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
  $stop= mysqli_real_escape_string($conn,$_POST['stop']); 
 $cou= mysqli_real_escape_string($conn,$_POST['cou']); 

     $T6 = md5($T6);

 $sql="insert into user_crm set name='$T1',username='$T5',password='$T6',acount_type='$acount_type',mobile='$T4',email='$T8',Branches='$Branches',Activation=1,stop='$stop',cou='$cou'";
 
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
 $iddd = mysqli_real_escape_string($conn,$_POST['iddd']); 
 $act= mysqli_real_escape_string($conn,$_POST['act']); 
 $stop= mysqli_real_escape_string($conn,$_POST['stop']); 
 $cou= mysqli_real_escape_string($conn,$_POST['cou']); 
    $T6 = md5($T6);

$sql="update 	user set name='$T1',username='$T5',acount_type='$acount_type',mobile='$T4',email='$T8',Branches='$Branches',Activation='$act',stop='$stop',cou='$cou'

  where ID='$iddd'";
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




elseif(isset($_POST['edit1'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $iddd = mysqli_real_escape_string($conn,$_POST['iddd']); 
 $act= mysqli_real_escape_string($conn,$_POST['act']); 
 $stop= mysqli_real_escape_string($conn,$_POST['stop']); 
 $cou= mysqli_real_escape_string($conn,$_POST['cou']); 
    $T6 = md5($T6);

$sql="update 	user set password='$T6' 

  where ID='$iddd'";
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




elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,$_POST['idd']); 

$sql="delete from 	user  where ID='$idd'";
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
 

 
if (isset($_POST['games'])) {

$iddd1 = mysqli_real_escape_string($conn,$_POST['iddd1']); 

$sql="delete from user_course where user_ID='$iddd1'  ";
if(mysqli_query($conn,$sql))
{
}

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$area_ID= mysqli_real_escape_string($conn,$_POST['area_ID'][$i]);


$sql="insert into user_course set user_ID='$iddd1',cors_ID='$area_ID'  ";

if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=users.php"><?php
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}}}
}

?>