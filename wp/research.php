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
<h1><small>  الحالات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-excel-o"></i>  استيراد</a>
 
 
 
 
 
 
 
 </p>


 
          
          
          
          
          
<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">  رفع الحالات عن طريق تحديد ملف الاكسل بصيفة XLS,XLSX</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
                  
 
                    
                    
  
 <div class="form-group col-lg-12">
<label>تحديد الملف</label>
<input    type="file" name="file" id="file" accept=".xls,.xlsx"   size="20" required="required"  >
 



</div> 

 <div class="form-group col-lg-12"><img src="ex1.jpg" width=100%>
</div>
                   
                </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="استيراد" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>

<form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">توزيح الحالات  : 
<?php
$query1 = "select count(*) as Research_ID from reg_cors1 where ok=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?> </font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 

                  

<div class="row">
<div class="form-group col-lg-6">
<label>  عدد الحالات الموزعة لكل مسوق</label>
<input  name="T1"  size="20"   required="required"   class="form-control"  >
</div>
<div class="form-group col-lg-6">
<label> الدورة</label>
<select  name="cors" class="form-control" required="">
                           <option value="<?php echo $row['ID']; ?>"><?php echo $row['cors_name']; ?></option>

 
<?php
$result1=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1 ");
while($row1=mysqli_fetch_array($result1))
{

?>
                          <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['cors_name']; ?></option>
 <?php } ?>
                        </select></div>


<?php
$i=0;
$query2 = "select * from user_crm where acount_type=2 order by Branches";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{

 
?>	
<div class="form-group col-lg-12">
<b><label><input  type=hidden name="ID[]" size="20"   class="form-control"   dir="rtl" value="<?php echo $row2['ID']; ?>">
<input name="checkbox[]"    type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"   >
<?php echo $i;?> - 
<?php
$query1 = "select * from branches_crm where ID='$row2[Branches]'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
  echo $row1['Branches_name'];  } } ?> - <?php echo $row2['name']; ?></label></b>
 
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
 
if (isset($_POST['games'])) {

$T1 = mysqli_real_escape_string($conn,$_POST['T1']); 
$cors= mysqli_real_escape_string($conn,$_POST['cors']);
 

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$ID= mysqli_real_escape_string($conn,$_POST['ID'][$i]);


$query1 = "select * from reg_cors1 where ok=0 limit $T1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$iqama=$row1['iqama'];
$name=$row1['name'];
$mobile=$row1['mobile'];
$mail=$row1['mail'];
$nat=$row1['nat'];
$no=$row1['no'];
 

$sql="insert into  reg_cors  set iqama='$iqama',name='$name',mobile='$mobile',mail='$mail',nat='$nat',qualification='$qualification',address='$cors' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
}

$sql="delete from reg_cors1 where no='$no'";
if(mysqli_query($conn,$sql))
{
}


$sql="insert into user_cors set  cors_ID='$last_id',user_ID='$ID',time='$time',date=CURDATE()";

if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}
}
}}

}

?>




<?php
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');


if (isset($_POST['add'])) {
 $Branches_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches_ID'], ENT_QUOTES, "utf-8"));
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'], ENT_QUOTES, "utf-8"));
 $cors_code= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_code'], ENT_QUOTES, "utf-8"));
 $cors_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_type'], ENT_QUOTES, "utf-8"));
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $Course_amount= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Course_amount'], ENT_QUOTES, "utf-8"));
 $online= mysqli_real_escape_string($conn,htmlspecialchars($_POST['online'], ENT_QUOTES, "utf-8"));


  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $name= "";
                if(isset($Row[0])) {
                    $name= mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $mobile= "";
                if(isset($Row[1])) {
                    $mobile= mysqli_real_escape_string($conn,$Row[1]);
                }
                $iqama= "";
                if(isset($Row[2])) {
                    $iqama= mysqli_real_escape_string($conn,$Row[2]);
                }


                $mail= "";
                if(isset($Row[3])) {
                    $mail= mysqli_real_escape_string($conn,$Row[3]);
                }

               

 
                
 
 

$sql="insert into  reg_cors1 set  name='$name',mobile='$mobile',iqama='$iqama',mail='$mail',ok=0  ";
 
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php
}





 

 

 


 

 


 }}
 
 echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';


}
 
}
?>