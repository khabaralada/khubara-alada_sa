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


<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  اضافة مستخدم</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة مستخدم جديد</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
<div class="form-group col-lg-6">
                      <label>نوع الحساب</label>
                      <select style="font-family: Arial"  size="1" required="required" name="acount_type" class="form-control" >
                               <option ></option> 
<option  value=3>مدير فرع</option>
<option  value=2>مسوق</option>
<option  value=1>مدير النظام</option>

 
						</select>
                    </div>
                    
                    
                    
                  
<div class="form-group col-lg-6">
                      <label>الفرع</label>
                      <select style="font-family: Arial"  size="1" name="Branches"   required    class="form-control"  >
                      <option></option>
 

 
<?php
$i=0;

 
$query = "select * from branches_crm    ";
 
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<?php echo $row['ID']; ?>"><?php echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                    
<div class="form-group col-lg-6">
                      <label>  الاسم</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       الجوال</label>
 
                      
                      <input  name="T4" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div>
                    
                    
                    
<div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess">       البريد الالكتروني</label>
 
                      
                      <input type=email  name="T8"  size="20"     required="required"      class="form-control" >
                      
                      
                    </div>
                    
                    

                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div> 
                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       كلمة المرور</label>
 
                      
                      <input  name="T6" id="T5" size="20"    required="required"    class="form-control" >
                      
                      
                    </div> 
                     
 

<div class="form-group col-lg-6">
<label>التوزيع</label><br>
 

<select style="font-family: Arial"  size="1" required="required" name="stop" class="form-control" >
				<?php if($row['stop']==1) echo "<option  value=1>ايقاف التوزيع</option>"; ?>
				<?php if($row['stop']==0) echo "<option  value=0>تفعيل التوزيع</option>"; ?>
 
<option  value=0>تفعيل التوزيع</option>
<option  value=1>ايقاف التوزيع</option>
 
						</select>
</div>

<div class="form-group col-lg-6">
<label>الحالات الوهمية</label><br>
<input  name="cou" id="cou" size="20"      required="required"    class="form-control" value="<?php echo $row['cou']; ?>" ></div>  

                    
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
          
          

 <form action="" method=post>
<div class="input-group input-group-sm col-lg-4" dir=ltr>
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-Warning btn-sm"><i class='fa fa-filter btn-sm' dir=ltr></i></button>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control"   required="required"  value="<?php echo $_POST['find']; ?>" name="find" dir=rtl 
                    placeholder="بحث بالمستخدم">
                  </div>
</form>          
<table id='example1'  class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right"><p align="center">#</th>
                        <th align="right"><p align="center">الاسم</th>
                        <th align="right"><p align="center">نوع المستخدم</th>
                        <th align="right"><p align="center">اسم المستخدم</th>
                        <th align="right"><p align="center">التوزيع</th>
 
 
                        <th align="right"><p align="center">التفعيل</th>
 
 
                        <th align="right" >الدورات</th>
 
 
                        <th align="right" ><p align="center">&nbsp;</th>
 
 
                        <th align="right" >&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("../config.php");

$find=$_POST['find'];
if($find=="") 
$query = "select * from user_crm where acount_type!=4   order by ID DESC limit 50";
else
$query = "select * from user_crm where acount_type!=4 and ( username='$find' or name like '%$find%' ) ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php $c++; echo $c; ?></td>
                        <td align="right"><p align="center"><?php echo $row['name']; ?></td>
						<td align="right"><p align="center">
				<?php if($row['acount_type']==1) echo "مدير النظام"; ?>
				<?php if($row['acount_type']==3) echo "مدير فرع"; ?>
				<?php if($row['acount_type']==2) echo "مسوق"; ?> - 
				
				
				 <?php
$query1 = "select * from branches_crm where ID='$row[Branches]'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
  echo $row1['Branches_name'];  } } ?>



				
 
				                    
				                    
</td>						
						<td align="right"><p align="center"><?php echo $row['username']; ?></td>						
 
                                              <td align="center"><p align="center">
                            <?php if($row['stop']==0) echo '<font color=green><i class="fa fa-check  fa-2x" aria-hidden="true" ></i></font>'; ?>
							<?php if($row['stop']==1) echo '<font color=red><i class="fa fa-times fa-2x" aria-hidden="true" ></i></font>'; ?>


</td>
                       <td align="center"><p align="center">
                            <?php if($row['Activation']==1) echo '<font color=green><i class="fa fa-check  fa-2x" aria-hidden="true" ></i></font>'; ?>
							<?php if($row['Activation']==0) echo '<font color=red><i class="fa fa-times fa-2x" aria-hidden="true" ></i></font>'; ?>


</td>

                        <td align="center" width=2>


<p align="center">                        
 <a href="power.php?ID=<?php echo $row['ID']; ?>"   class="btn btn-info btn-sm   ">
 <i class="fa fa-plus"> <?php
$query1 = "select count(*) as co from user_course where user_ID='$row[ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> </i>
</a>  

</td>

                        <td align="center" width=2>
                        <a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaEdit<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
                        <td align="center" width=2>
                                                <a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaDelete<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr>
                     


   <div class="example-modal">
            <div class="modal" id="add<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">صلاحيات الدورات: <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd1"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

                  

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


$query1 = "select * from user_course where user_ID='$row[ID]' and cors_ID='$row2[cors_ID]'";
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
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

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
                    <input type="submit" class="btn btn-danger" value="حذف" name="delete">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          <div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
<div class="form-group col-lg-6">
                      <label>نوع الحساب</label>
                      <select style="font-family: Arial"  size="1" required="required" name="acount_type" class="form-control" >
				<?php if($row['acount_type']==1) echo "<option  value=1>مدير النظام</option>"; ?>
				<?php if($row['acount_type']==3) echo "<option  value=2>مدير فرع  </option>"; ?>
				<?php if($row['acount_type']==2) echo "<option  value=3>المسوق</option>"; ?>
 <option ></option> 
<option  value=1>مدير النظام</option>
<option  value=2>مسوق  </option>
<option  value=3>مدير فرع</option>

 
						</select>
                    </div>
                    
                    
                    
                  
                  
<div class="form-group col-lg-6">
                      <label>الفرع</label>
                      <select style="font-family: Arial"  size="1" name="Branches"   required    class="form-control"  >
 <?php
$query1 = "select * from branches_crm where ID='$row[Branches]'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>
<option value="<?php echo $row1['ID']; ?>"><?php echo $row1['Branches_name']; ?></option>
<?php } } ?>

<option></option>
 
<?php
$query1 = "select * from branches_crm    ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>
<option value="<?php echo $row1['ID']; ?>"><?php echo $row1['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>

                    
                    
<div class="form-group col-lg-6">
                      <label>  الاسم</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"  value="<?php echo $row['name']; ?>" class="form-control"  >
 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       الجوال</label>
 
                      
                      <input  name="T4" id="T5" size="20"  value="<?php echo $row['mobile']; ?>"  required="required"    class="form-control" >
                      
                      
                    </div>
                    
                    
                    
<div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess">       البريد الالكتروني</label>
 
                      
                      <input type=email  name="T8"  size="20"   value="<?php echo $row['email']; ?>"  required="required"      class="form-control" >
                      
                      
                    </div>
                    
                    

                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"   value="<?php echo $row['username']; ?>" required="required"    class="form-control" >
                      
                      
                    </div> 
                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       كلمة المرور</label>
 
                      
                      <input  name="T6"  size="20"   value=""    class="form-control" >
                      <input type="submit" class="btn btn-success " value="حفظ التغيير" name="edit1">
                      
                    </div> 
  
  


<div class="form-group col-lg-4">
<label>تفعيل الحساب</label> 
<select style="font-family: Arial"  size="1" required="required" name="act" class="form-control" >
				<?php if($row['Activation']==1) echo "<option  value=1>نشط</option>"; ?>
				<?php if($row['Activation']==0) echo "<option  value=0>ايقاف</option>"; ?>
 
<option  value=0>ايقاف</option>
<option  value=1>نشط</option>
 
						</select>

 
</div> 
<div class="form-group col-lg-4">
<label>التوزيع</label><br>
 

<select style="font-family: Arial"  size="1" required="required" name="stop" class="form-control" >
				<?php if($row['stop']==1) echo "<option  value=1>ايقاف التوزيع</option>"; ?>
				<?php if($row['stop']==0) echo "<option  value=0>تفعيل التوزيع</option>"; ?>
 
<option  value=0>تفعيل التوزيع</option>
<option  value=1>ايقاف التوزيع</option>
 
						</select>
</div>
<div class="form-group col-lg-4">
<label>الحالات الوهمية</label><br>
<input  name="cou" id="cou" size="20"      required="required"    class="form-control" value="<?php echo $row['cou']; ?>" ></div>  

 
                   
                     
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="edit">
                  </div></form>
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

$sql="update 	user_crm set name='$T1',username='$T5',acount_type='$acount_type',mobile='$T4',email='$T8',Branches='$Branches',Activation='$act',stop='$stop',cou='$cou'

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

$sql="update 	user_crm set password='$T6' 

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

$sql="delete from 	user_crm where ID='$idd'";
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
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}}}
}

?>