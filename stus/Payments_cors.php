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
<title>					الايرادات من تاريخ <? echo $_POST[date_from]; ?> الي تاريخ <? echo $_POST[date_to]; ?>
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
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
الايرادات اليومية
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">	 <div class="noprint">

					 <form method="POST" action="">
 <div class="row">

                    <!-- textarea -->
                    
                     
                     <div class="form-group col-lg-5">
                     
                      <label class="control-label" > التاريخ من </label>
                      <input  name="date_from"  type=date size="20"     required="required"  class="form-control" value="<? echo $date_from; ?>" >
                    </div>
                    <div class="form-group col-lg-5">
                      <label> التاريخ الي</label>
                                           

                      <input  name="date_to" type=date  size="20"    required="required"  class="form-control" value="<? echo $date_to; ?>" >
                        
                     
                     
                    
                    
                   
                    
                    
                     
					
					
					
					 
					
					
					
                    </div>
                    
<div class="form-group col-lg-2">
                      <label> بحث</label>    <br>                  <button class="btn btn-info btn-flat" type="submit" name="go">بحث</button>
                    </div>
</div>
                   
                <div class="box-header"><div class="box-body">
                    <label class="control-label" for="inputSuccess">
					<i class="fa fa-check"></i>
					<font size="2">
					الايرادات من تاريخ <? echo $_POST[date_from]; ?> الي تاريخ <? echo $_POST[date_to]; ?>
					   
                </font>
					   
                </div>   </div>
                
                </div><font size="2"><!-- /.box-header -->
                </font>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
 
 
                    <thead>
                      <tr>
                         <th><p align=center>
						الهوية</th>
                         <th><p align=center>
						الاسم</th>
                         <th><p align=center>
						الجوال</th>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>مبلغ الدورة</span></th>
                         <th><p align=center>اجمالي المتبقي</th>
                         <th><p align=center>طريقة الدفع</th>
                         <th><p align=center>التاريخ</th>
                         <th><p align=center>ملاحظات</th>
                         <th><p align=center>المستخدم</th>
                         <th><p align=center>المدفوع</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;

 
$query = "select * from paid,stu_sec,student,subjects,cors 

 where  stu_sec.ID_reg=paid.ID_reg and student.stu_id=stu_sec.stu_id   and  subjects.cors_ID=cors.cors_ID and cors.ID=stu_sec.section_Id and paid.date>='$_POST[date_from]' 
 and paid.date<='$_POST[date_to]' ";
   
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
						<? echo $row['iqama']; ?> </td>
 
 
 
                        <td>
						<? echo $row['stu_name_ar']; ?> </td>
 
 
 
                        <td>
						<? echo $row['mobile']; ?> </td>
 
 
 
                        <td>
						<? echo $row['cors_no']; ?> </td>
                        <td>
						 <? echo $row['cors_name']; ?> </td>
                        <td>
 <? echo $row['Branches_name'];
?></td>
                        <td>
						<? echo $row['Course_amount']; ?></td>
 
                        <td>   
<?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
  $Amount=$row1[Amount];
}
  ?>
  
  <?  echo $row['Course_amount']-$Amount; ?></td>
  
  <td>
  
  <? echo $row['paid_type']; ?></td>
 
                      	
                  

  <td>
  
   <? echo $row['date']; ?></td>
 
                      	
                  

  <td>
  
   <? echo $row['paid_notes']; ?></td>
 
                      	
                  

  <td>
  
  <? echo $row['user_p']; ?></td>
 
                      	
                  

  <td>
  <p align="center"><b><font size="5">
  <? echo $row['Amount']; 
$sall=$sall+$row['Amount']; ?> 
  </font></b>
  </td>
 
                      	
                  

 </form>
                      </tr>
                    <? }} ?>
                     
                    
 <tr>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
                        <td>
						 &nbsp;</td>
                        <td>
 &nbsp;</td>
                        <td>
						&nbsp;</td>
 
                        <td>   
&nbsp;</td>
  
  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
 <p align="center"><b><font size="5" color="#FF0000">  <? echo $sall; ?> </font>
	</b></td>
 
                      	
                  

                      </tr>
                     
                    
 <tr>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td>
						&nbsp;</td>
                        <td>
						 &nbsp;</td>
                        <td>
 &nbsp;</td>
                        <td>
						&nbsp;</td>
 
                        <td>   
&nbsp;</td>
  
  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
  &nbsp;</td>
 
                      	
                  

                      </tr>
                     
                    
                 <?
include ("conn.php");
$i=0;

 
$query = "select sum(Amount) as su,paid_type from paid
 where   paid.date>='$_POST[date_from]' 
 and paid.date<='$_POST[date_to]'  group by paid_type";
   
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
 
while($row=mysqli_fetch_array($result))
{
 
?>

<tr>
 
 
 
                        <td>
						&nbsp;</td>
 
 
 
                        <td align="center">
						<b><font size="4"><? echo $row['paid_type']; ?></font></b></td>
 
 
 
                        <td align="center">
						<span lang="en-gb"><font size="4"><b><? echo $row['su']; ?></b></font></span></td>
 
 
 
                        <td>
						&nbsp;</td>
                        <td>
						 &nbsp;</td>
                        <td>
 &nbsp;</td>
                        <td>
						&nbsp;</td>
 
                        <td>   
&nbsp;</td>
  
  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
   &nbsp;</td>
 
                      	
                  

  <td>
  
  &nbsp;</td>
 
                      	
                  

  <td>
  
  &nbsp;</td>
 
                      	
                  

                      </tr><? } ?>
                     
                    </tbody>
                     
 
                     
                  </table>
                </div><font size="2"><!-- /.box-body -->
              	</font>
              </div>
	<font size="2">
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

     <!-- jQuery 2.1.3 -->
   </font>
   