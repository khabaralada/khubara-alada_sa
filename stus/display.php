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
 

					دورات المتدرب /                      <?
include ("conn.php");
   $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_ID']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where  stu_id='$stu_id'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 $mobile=$row['mobile'];
  
  }
?></small></h1>
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
                         
                         <th><p align=center>بداية الدورة</th>
                         <th><p align=center>نهاية الدورة</th>
                        <? if($_SESSION['acount_type']!=5 ) { ?>   <th><p align=center>مبلغ الدورة</th>
                         <th><p align=center>المدفوع</th>
                         <th><p align=center>المتبقي </th>
                         <th><p align=center>المالية</th>
                        <? } ?>
                        
                         <th><p align=center>الدرجة</th>
                         <th><p align=center>التقدير</th>
                         <th><p align=center>نسبة الغياب</th>
                         <th><p align=center>الحضور</th>
                        <? if($_SESSION['acount_type']!=5 ) { ?>  <th><p align=center>جدول المحاضرات    </th><? } ?>
                                  <? if($_SESSION['acount_type']==1 or $_SESSION['acount_type']==3) { ?>          
 <th><p align=center>الشهادة</th><? } ?>

 <? if($_SESSION['acount_type']!=5 ) { ?>  <th><p align=center></th><? } ?>
  <th><p align=center>الاختبار</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id'  order by cors_no DESC";
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
  $absences=$row['absences'];
?>
 <tr>
                        <form method="POST" action="">
 
                        <td align="center">
						<? echo $row['cors_no']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
                        <td align="center">
						 <? echo $row['cors_name']; ?> </td>
                        <td align="center"> 
						<? echo $row['start_date']; ?></td>
                        <td align="center">
						<? echo $row['end_date']; ?></td>
						 <? if($_SESSION['acount_type']!=5 ) { ?> <td align="center"><? echo $row['Course_amount']; ?>
						 <td align="center">
						 <?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
 echo $Amount=$row1[Amount];
}
?>
						 <td align="center"><font color="#FF0000"><? echo $row['Course_amount']-$Amount; ?> 
							</font>
						<td align="center"><a href="Payments_stu1.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-money btn btn-info btn-sm "></i></a><? } ?>
                        <td align="center">
						<? echo $row['scor']; ?></td>
                        <td align="center">
						<? echo $row['Rate']; ?></td>
                        <td align="center">
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
?>%</td><td><a href="print_report_stu.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a></td>
                        <? if($_SESSION['acount_type']!=5 ) { ?> <td align="center">
						<a href="table1.php?section_Id=<? echo $row['0']; ?>">استعراض</a></td><? } ?>
                       

          <? if($_SESSION['acount_type']==1 or $_SESSION['acount_type']==3) { ?>          
 <td align="center">
 
 
				
	
		           <? 
				                  
 
				                      
         if($cors_type=="تطويري") {  	
                  if($row['scor']>=0 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<0) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>


					
 
                



                 <? if($cors_type=="لغة الإنجليزية") { ?>	
                 <?                   if($row['scor']>=60 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>


 <? if($cors_type=="لغة صينية") { ?>	
                 <?                   if($row['scor']>=60 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>





                 <? if($cors_type=="دورة تأهلية") { ?>	
		         <?                   if($row['scor']>=60 and $con>=$absences) { 
 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"  target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>


                 <? if($cors_type=="دبلوم") { ?>	
		         <?                   if($row['scor']>=60 and $con>=$absences) { 
 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"  target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>



						
						</td><? } ?>
						
						 <? if($_SESSION['acount_type']!=5 ) { ?> <td><a  target=_blank href="https://wa.me/966<? echo $mobile; ?>?text=
 
<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A

اسم الدورة%20  :<? echo nl2br($row[cors_name]); ?>%0D%0A
%20<? echo nl2br($row[Branches_name]); ?>%0D%0A
تاريخ بداية الدورة %20  :<? echo nl2br($row[start_date]); ?>%0D%0A
تاريخ نهاية الدورة %20  :<? echo nl2br($row['end_date']); ?>%0D%0A
مبلغ الدورة%20  :<? echo nl2br($row[Course_amount]); ?>%0D%0A
المبلغ المدفوع%20  :<? echo nl2br($Amount); ?>%0D%0A
المبلغ المتبقي%20  :<? echo nl2br($row[Course_amount]-$Amount); ?>%0D%0A
 
" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i></td><? } ?>

<td>                      <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
 
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i></a>
<?
}
?></td>
                      	</form>

                      </tr>
                    <? }} ?>
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

 