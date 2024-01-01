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
<h1><small>
	

<a href="reg_stu.php">


				دورات المتدرب /                      <?
include ("conn.php");
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from student,stu_sec  where stu_sec.stu_id=student.stu_id and  ID_reg='$ID_reg'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 
  
  }
?></a>
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					

					   
 
                  <table id="example1" class="table table-bordered table-striped"  >
 
 
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>تاريخ بداية الدورة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>
                         <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>نسبة الغياب</th>
                         <th><p align=center>مبلغ الدورة</span></th>
                         <th><p align=center>المدفوع</span></th>
                         <th><p align=center>المتبقي</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and   stu_sec.ID_reg='$ID_reg' order by cors_no DESC";
   
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
     $cors_type=$row['cors_type'];
    $absences_co=$row['absences'];
$end_date=$row['end_date'];

?>


 <tr>
 
 
                        <form method="POST" action="">
 
 
 
                        <td>
						<? echo $row['cors_no']; ?> </td>
                        <td>
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['cors_name']; ?></a></td>
                        <td>
 <? echo $row['Branches_name'];
?></td>
                        <td>
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td> 
						<? echo $row['start_date']; ?></td>
                        <td>
						<? echo $row['end_date']; ?></td>
                        <td>
						 
						
						<input  name="ID_reg"    size="3"    type=hidden   value="<? echo $row['ID_reg']; ?>"    class="form-control" style="text-align: center"   >
						<? echo $row['scor']; ?></td>
                        <td>
												 <?
						 $aa=0;
						 $prs=0;
						 
$result1=mysqli_query($conn,"select count(type) as con from absence where ID_reg='$row[ID_reg]' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$con=$row1[con];
}
  $aa=$absences_co-$con;
echo $prs=round($aa/$absences_co*100);
?>%</td>
                        <td>
						<? echo $row['Course_amount']; ?></td>
 
                        <td>   
<?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
echo $Amount=$row1[Amount];
}
  ?></td>
  
  <td><?  echo $row['Course_amount']-$Amount; ?></td>
 
                      	
                  

 </form>
                      </tr>
                    <? }} ?>
                     
                    </tbody>
                     
 
                     
                  </table>
                </div> 
 
 <div class="box-header"><div class="box-body noprint">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>
 
					   
                </div> <div class="box-body noprint">
                  
                    <!-- text input -->
 
 
                  
                  

                </div> 

 
                    <label class="control-label" for="inputSuccess">
					كشف حساب المتدرب

					   
                </div> <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
 
 
                    <thead>
                      <tr>
                         <th><p align=center>
						م#</th>
                         <th><p align=center>
						التاريخ</th>
                         
                         <th><p align=center>رقم السند/العملية</th>
                         
                         <th><p align=center>طريقة الدفع</th>
                         
                         <th><p align=center>مدين</th>
                         <th><p align=center>
						دائن</th>
                         <th><p align=center>
						 المتبقي</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">ملاحظات</th>
                        <th width=1>
						 <span lang="ar-sa" class="noprint">الايصال</span></th>
                      </tr>
                    </thead>
                    <tbody>
                                        <?
include ("conn.php");
$i=0;

    $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from stu_sec		where ID_reg='$ID_reg'  ";
   
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
     $cors_type=$row['cors_type'];
    $absences_co=$row['absences'];
$end_date=$row['end_date'];

?>


 <tr>
 
 
                        <form method="POST" action="">
 
 
 
						<input  name="ID_reg"    size="3"    type=hidden   value="<? echo $row['ID_reg']; ?>"    class="form-control" style="text-align: center"   >
 
 
 
                        <td>
						<?   $C++; echo $C; ?> </td>
                        <td><? echo $row['reg_date']; ?>
						   </td>
                        <td>
 <? echo $row['ID_reg']; ?> - رسوم تسجيل الدورة</td>
                        <td>
ـــــــ</td>
                        <td>
 <? echo $Course_amount=$row['Course_amount']; ?></td>
                        <td>
						 ـــــــ
 </td>
 
                        <td>
						<? echo $Course_amount; ?></td>
 
                        <td>
						ــــــ</td>
 
                        <td>
						</td>
 
                                              	
                  

 
                      </tr>
                    <? }} ?>
                    
                    
                     <?
include ("conn.php");
$i=0;

    $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from paid	where ID_reg='$ID_reg' order by date ASC";
   
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
     $cors_type=$row['cors_type'];
    $absences_co=$row['absences'];
$end_date=$row['end_date'];

?>


 <tr>
 
 
                        <form method="POST" action="">
 
 
 
						<input  name="Paid_ID"    size="3"    type=hidden   value="<? echo $row['Paid_ID']; ?>"    class="form-control" style="text-align: center"   >
 
 
 
                        <td>
						<?   $C++; echo $C; ?> </td>
                        <td>
						 <? echo $row['date']; ?> </td>
                        <td><? echo $row['sand']; ?>
 </td>
                        <td>
<? echo $row['paid_type']; ?></td>
                        <td>
 ـــــــ</td>
                        <td>
						 
 <? echo $row['Amount']; $total=$total+$row['Amount']; ?></td>
 
                        <td>
						<? echo $Course_amount-$total; ?></td>
 
                        <td>
						<? echo $row['paid_notes']; ?></td>
 
                        <td> <span class="noprint"><a href="sand_stu.php?Paid_ID=<? echo $row['Paid_ID']; ?>"  ><i class="fa fa-print btn btn-info btn-sm noprint"></i></a></span>
						</td>
 
                    <? }} ?>
                    
                    
 <tr>
 
 
 
                        <td bgcolor="#FFFFCC">
						&nbsp;</td>
 
 
 
                        <td bgcolor="#FFFFCC">
						&nbsp;</td>
 
 
 
                        <td bgcolor="#FFFFCC">
						&nbsp;</td>
                        <td bgcolor="#FFFFCC">
                    <label class="control-label" for="inputSuccess">
						<b>الاجمالي</b></td>
                        <td bgcolor="#FFFFCC">
 <b>
 <? echo $Course_amount; ?></b></td>
                        <td bgcolor="#FFFFCC">
						<b>
						<? echo  $total ; ?></b></td>
 
                        <td bgcolor="#FFFFCC">
						<b><font color="#FF0000"><? echo $Course_amount-$total; ?></font></b></td>
 
                        <td bgcolor="#FFFFCC">
						&nbsp;</td>
 
                        <td bgcolor="#FFFFCC">
						&nbsp;</td>
 
                      </tr>
                    
                    </tbody>
                     
 
                     
                  </table>
                </div> 
 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>


<?

include ("conn.php");
if (isset($_POST['B1'])) {

 $T1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 

 
    $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$sql="insert into paid set Amount='$T1',date='$T2',sand='$T3',ID_reg='$ID_reg',paid_type='$T4',paid_notes='$T5',user_p='$_SESSION[username]',sys_date='$synch_timestamp'  ";
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
elseif(isset($_POST['B2'])) {

 $Paid_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Paid_ID'], ENT_QUOTES, "utf-8"));
$sql="delete from paid   where   Paid_ID='$Paid_ID'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?


 
}


 

}
?>