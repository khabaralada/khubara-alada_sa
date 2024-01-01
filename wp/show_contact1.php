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
<title> التسجيل بالدورات
</title>
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
<h1><small>  التسجيل بالدورات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">



 
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >


																	

			

																	

			


<thead>

<tr>
<th>
<th>
<th><p align="center">الحالة
<th><p align="center">حالة الدفع
<th><p align="center">رقم العملية


<th>الملاحظات<th><p align="center">حالة المتدرب
<th><p align="center">المسوق
<th><p align="center">تاريخ التسجيل
<th><p align="center">الدورة  
<th><p align="center">الجوال
<th><p align="center">البريد الالكتروني
<th><p align="center">الجنسية
<th><p align="center">المؤهل</th>
<th><p align="center">الهوية الوطنية</th>
<th><p align="center">اسم المتدرب</th>
<th><p align="center">#</th>
</tr>


</thead>
<tbody>

																<?php

					include ("../config.php");

 $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 


$result=mysqli_query($conn,"select* from  reg_cors,subjects,cors 
where cors.ID='$ss' and cors.ID=reg_cors.address and cors.cors_ID=subjects.cors_ID order by dates DESC ");
$i=0;
$C=1;
$c=0;
while($row=mysqli_fetch_array($result))

{
$c++;
?>		 

<tr> 
										


											

											<form method="POST" action="<?php echo( $self ); ?>">

											

											<td width="2%" align="center" >

											<span lang="ar-sa">							
										<input  required="required"    onclick="return confirm('هل تريد حفظ التغيرات ؟')"  type="submit" value="حذف" name="B2" style="float: left" ></td>

											


											<td width="2%" align="center" >

											<span lang="ar-sa">							
										
										<input  required="required"   onclick="return confirm('هل تريد حفظ التغيرات ؟')"  type="submit" value="تأكيد" name="B22" style="float: left" ></td>

											
<td align="center"   >

																			 <?php echo $row['message']; ?></td>

											


											<td align="center"   >
											<?php
if($row['status']=="failed") echo '<font color="#FF0000">فشلت عملية الدفع</font>'; 
if($row['status']=="paid") echo '<font color="green">عملية الدفع مقبولة</font>';  ?> 

																			  </td>

											


											<td align="center"   >

																			 <?php echo $row['payment']; ?></td>

											<td align="center"   >

																			  <a href="notes.php?no=<?php echo $row['no']; ?>"  target=_blank>
 <i class="fa fa-pencil btn btn-info btn-sm"> <?php 
$query1 = "select count(*) as co from notes where Research_ID='$row[no]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
 ?></i></a></td>

											


											<td align="center"   >

																			 <input  required="required"   type="hidden" name="ID" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['no']; ?>" >
 <input  required="required"   type="hidden" name="Branches" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['Branches']; ?>" >
 <input  required="required"   type="hidden" name="section_Id" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['address']; ?>" >
 <input  required="required"   type="hidden" name="cors_type" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['cors_type']; ?>" >
 <input  required="required"   type="hidden" name="cors_code" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['cors_no']; ?>" >
			

																				 <?php if( $row['reg_ok']==1) echo 'تم تأكيد التسجيل مسبقاً';  ?></td>

											


											<td align="center"   >
											
											<?php 
$query1 = "select * from user_crm,user_cors where user_crm.ID=user_cors.user_ID and cors_ID='$row[no]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $names=$row1['name'];
}
 ?>
 
 </td>

											


											<td align="center"   ><?php echo $row['dates']; ?></td>

											


											<td align="center"   ><?php echo $row['cors_name']; ?></td>

											

											<td align="center" ><?php echo $row['mobile']; ?></td>

											

											<td align="center"  ><?php echo $row['mail']; ?></td>

											

											<td align="center"  ><?php echo $row['nat']; ?></td>

											

											<td align="center"  ><?php echo $row['qualification']; ?></td>

											

											<td align="center"  ><?php echo $row['iqama']; ?></td>

											

											<td align="center"><?php echo $row['name']; ?></td>

											

											<td align="center"   ><?php echo $C++; ?></td>

											

										</form>

											

										</tr>                    


									

										 


										 
<?php

}

?>

										 
 
									

 </tbody>
 
									

								</table> </div>

<font face="Droid Arabic Kufi" size="2">

<?php
	?>

</font>

<p>

										&nbsp;</p>

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>
<?php

include ("../config.php");
if(isset($_POST[B2]))
{
	   	    $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 

$sql="DELETE FROM reg_cors where no='$ID'";
if(@mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

 
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';


}


$sql="DELETE from user_crm_cors where cors_ID='$ID'";
if(@mysqli_query($conn,$sql))
{
}

$sql="DELETE FROM notes where Research_ID='$ID'";
if(@mysqli_query($conn,$sql))
{
}


}

?>



<?php

include ("../config.php");
if(isset($_POST[B22]))
{
 

 
	   	    $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
	   	    $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8")); 
	   	    $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'], ENT_QUOTES, "utf-8")); 
	   	    $cors_code= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_code'], ENT_QUOTES, "utf-8")); 
	   	    $cors_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_type'], ENT_QUOTES, "utf-8")); 




$sql="insert into  student (stu_id,stu_name_ar,Nationality,iqama,qualified,mobile,email,Branches) 
select iqama,name,nat,iqama,qualification,mobile,mail,'$Branches'   from  reg_cors where  no='$ID'";
if(@mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}



$sql="insert into  stu_sec(stu_id,section_Id,Branches,cors_code,cors_type) 
select iqama,address,'$Branches','$cors_code','$cors_type'   from  reg_cors where  no='$ID'";
if(@mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}



$sql="update   reg_cors set reg_ok=1 where no='$ID'";
if(@mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
 

 

}

$sql="insert into notes set  Status='6',Notes='تم تأكيد التسجيل مسبقاً وتم نقل المتدرب إلي برنامج شؤون المتدربين',date=CURDATE(),time='$time',user_ID='$_SESSION[user_ID]',Research_ID='$ID'";
if(mysqli_query($conn,$sql))
{ 
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}

?>