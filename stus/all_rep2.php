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
تقرير باعداد الحضور
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body"> <div class="noprint">

					 <form method="POST" action="">
					 
					 
					  <div class="row">

                    <!-- textarea -->
                    
                     

 


</div>
 <div class="row">

                    <!-- textarea -->
                    
                   
					
					
					<div class="form-group col-lg-3">
                      <label class="control-label" > المدرس </label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="teacher"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
<option></option><? 
$query = "select * from user,teacher where   teacher_id=ID   order by name";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['ID']; ?>"><? echo $row['name']; ?></option>
<?php } } ?>
 
					</select>       
                     </div>
					
	<div class="form-group col-lg-3">
                      <label class="control-label" > الفرع </label> <div class="input-group input-group-sm has-error">
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
<option></option>
 
<?
$i=0;
include ("conn.php");
 
$query = "select * from branches   ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>       <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">بحث</button>
                    </span>                </div>
</div>				
					
                    </div>
                  	</form>
</div>
                   
                <div class="box-header"><div class="box-body">
                    <label class="control-label" for="inputSuccess">
					<i class="fa fa-check"></i>
					<font size="2">احصائية   من الفترة <? echo $_POST[date_to]; ?>

<? $query = "select * from branches where      Branches_ID='$_POST[Branches]' and Branches_ID!=0";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo "لفرع ".$row['Branches_name'];
} 
?> 

<? $query = "select * from teacher  where      teacher_id='$_POST[teacher]'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
?>

                </font>
					   
                	<b><font color="#FF0000">

<? echo "للمدرب ( ".$row['teacher_name']." ) "; ?>

</font></b>
					<font size="2">

<?
} 
?> 
					   
                </font>
					   
                </div>
                
                </div><font size="2"><!-- /.box-header -->
                </font>
                <div class="box-body">
                <? if(isset($_POST['go'])) { ?>
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th   rowspan="2">
						#</th>
                        <th   rowspan="2">الجوال</th>
                        <th   rowspan="2">المدرس</th>
                        <th   rowspan="2">الفرع</th>
                        <th   colspan="2"> القائمة</th>
                        <th   colspan="2">المنتهية</th>
                        <th   rowspan="2">المختبرين</th>
                        <th    rowspan="2">الناجحين</th>
                        <th    rowspan="2">الراسبين</th>
                        <th    rowspan="2">المطوفين</th>
                        <th    colspan="4">الناجحين</th>
                        <th rowspan="2">نسبة الخريجين </th>
                        <th colspan="3">الاجمالي للدورات القائمة فقط</th>
                        <th>ملاحظات</th>
                        <th>&nbsp;</th>
                      </tr>
                      <tr>
                         <th><span lang="ar-sa">دورات</span></th>
                         <th>متدربين</th>
                         <th>
                    <label class="control-label" for="inputSuccess">
							<span lang="ar-sa">دورات</span></th>
                         <th>متدربين</th>
                        <th>ممتاز</th>
                        <th>جيدجدا</th>
                        <th>جيد</th>
                        <th>مقبول</th>
                        <th>
                    <label class="control-label" for="inputSuccess">
						الحضور</th>
                        <th>الغياب</th>
                        <th>نسبة الحضور</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");



$c=0;
 
  if($_POST[teacher]!='')             $xx1=' and teacher.teacher_id='.$_POST[teacher]; else $xx1='';
  if($_POST[Branches]!='')            $xx2=' and teacher.Branches='.$_POST[Branches]; else $xx2='';
 
 


 
$query = "select * from user,teacher   where  teacher_id=ID  $xx1 $xx2 order by teacher.Branches DESC";
 
 

$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
  $credits=$row['credits'];
  $c++;
?>
 <tr>
                        <td  >
						<? echo $c; ?> </td>
                        <td  >
						<font size="2"><? echo $row['mobile']; ?>
						
						
						</font></td>
                        <td  >
						<font size="2"><? echo $row['teacher_name']; ?></font></td>
                        <td  >
 <font size="2">
 <?
 $query3 = "select * from branches where      Branches_ID='$row[Branches]'";
$result3 = mysqli_query($conn,$query3);
while($row3=mysqli_fetch_array($result3))
{
 echo $Branches_name=$row3['Branches_name'];
 }
?></font></td>
                        <td  > 
						<font size="2"><? 
$query1 = "select count(cors_no) as co    from cors    where end_date>='$ar_date'  and traning_name='$row[teacher_id]'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $A1=$row1['co']; 
}
?></font></td>
                        <td  >
						<font size="2"><? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and end_date>='$ar_date'   and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  echo $all=$row1['co'];  
    $all_go=$row1['co'];  
 }
 $total1= $total1+$all;
 ?></font></td>
                        <td width="130">
                    <label class="control-label" for="inputSuccess">
<? 
$query1 = "select count(cors_no) as co    from cors    where end_date<'$ar_date'   and traning_name='$row[teacher_id]'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $A2=$row1['co']; 
}
?></td>
                        <td width="54">
<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and end_date<'$ar_date'   and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? echo $end11=$row1['co']; ?>  <?
 }
 $total1= $total1+$all;
 ?></td>
                        <td width="54">
														<b>
														<font size="2">
														<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and   Rate!=''    and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 echo $all2=$row1['co'];  
   $A3=$row1['co'];  
 }
  $total2= $total2+$all2;

 ?></font></b></td>
                        <td width="54">
															<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and scor>=60   and   Rate!=''  and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$A4=$row1['co'];
 ?>  <? if($row1['co']==0) echo ''; else echo $all2=$row1['co']; ?>  <?
 }
  $total2= $total2+$all2;

 ?></td>
                        <td width="54">
															<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and scor<60   and   Rate!=''   and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$A5=$row1['co'];
  echo $all4=$row1['co'];  
 }
   $total4= $total4+$all4;

 ?></td>
                        <td width="54">
<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and end_date<'$ar_date' and Rate=''  and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$A6=$row1['co'];

  echo $all5=$row1['co'];  
}

   $total5= $total5+$all5;

 ?></td>
                       <td width="54" bgcolor="#FFFFCC">														
						<b>														
						<font size="2">	
						<?
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and   scor>=90 and traning_name='$row[teacher_id]'";
 
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
   echo  $row1['co'];  
 $A7=$row1['co'];

 
 }
 

 ?>
 
 
 



 </font>
 
 </b>
 
 </td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and  scor>=80 and  scor<90 and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
   echo $row1['co'];
   $A8=$row1['co'];
 
 }
 

 ?></td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and   scor>=70 and  scor<80 and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  echo $row1['co'];
  $A9=$row1['co'];
  
 }
 

 ?></td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and  scor>=60 and  scor<70 and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
   echo $row1['co'];  
   $A10=$row1['co'];

 }
 

 ?></td>
                       <td width="54"><b><font size="2"><?    
                        
                       $prs=round($all2/$end11*100) ; 
                       
                       if($prs==0) echo '0';  else echo $prs.' %'; ?></font></b></td>
                       <td width="54"><b><font size="2"><? 
                       $abs=0;
 
$query1 = "select count(DISTINCT  absence.ID_reg) as co    from absence,stu_sec,cors   where  cors.end_date>='$ar_date' and stu_sec.section_Id=cors.ID and  absence.ID_reg=stu_sec.ID_reg   and absence.teacher='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 
 echo $abs=$row1['co'];
 
 $A11=$row1['co'];
 }
 $sums=$sum+$sums;
 ?>   &nbsp; </font></b></td>
                       <td width="54"><? echo $A12=$all_go-$abs ; ?> </td>
                       <td width="54"><? 
                       
                           $rrr=round($abs/$all_go*100);
                        if($rrr>=100) echo 100;
                        else 
                        echo  $rrr;
 echo '%';

?></td>
                       <td width="54">
                       <? if($prs<80) { echo $A13='نسبة الخريجين اقل من 80%'; echo '<br>'; } ?>
                       <? if($rrr<80) { echo $A14='نسبة الحضور اقل من 75%'; }?>

                       
                       
                       </td>
                       <td width="54">
<a  target=_blank href="https://wa.me/966<? echo $row[mobile]; ?>?text=
 
الموظف %20  :<? echo nl2br($row[teacher_name]); ?>%0D%0A
الفرع%20  :<? echo nl2br($Branches_name); ?>%0D%0A
%0D%0A

 عدد الدورات القائمة %20  :<? echo nl2br($A1); ?>%0D%0A
 عدد المتدربين للدورات القائمة %20  :<? echo nl2br($all_go); ?>%0D%0A
%0D%0A

 عدد الدورات المنتهية %20  :<? echo nl2br($A2); ?>%0D%0A
 عدد المتدربين للدورات المنتهية %20  :<? echo nl2br($end11); ?>%0D%0A
%0D%0A

المختبرين%20  :<? echo nl2br($A3); ?>%0D%0A
الناجحين %20  :<? echo nl2br($A4); ?>%0D%0A
الراسبين %20  :<? echo nl2br($A5); ?>%0D%0A
الغير مختبرين %20  :<? echo nl2br($A6); ?>%0D%0A

%0D%0A
التقدير ممتاز %20  :<? echo nl2br($A7); ?>%0D%0A
التقدير جيد جدا %20  :<? echo nl2br($A8); ?>%0D%0A
التقدير جيد %20  :<? echo nl2br($A9); ?>%0D%0A
التقدير مقبول %20  :<? echo nl2br($A10); ?>%0D%0A
%0D%0A

نسبة الخريجين %20  :<? echo nl2br($prs); ?>%0D%0A%0D%0A%0D%0A
%0D%0A

اجمالي الحضور للدورات القائمة فقط %20  :<? echo nl2br($A11); ?>%0D%0A
اجمالي الغياب للدورات القائمة فقط %20  :<? echo nl2br($A12); ?>%0D%0A%0D%0A
نسبة الحضور للدورات القائمة فقط %20  :<? echo nl2br($rrr); ?>%0D%0A
%0D%0A
عدد الحضور ليوم <? echo nl2br($dayy); ?> الموافق %20  :<? echo nl2br($_POST[date_to]); ?> :(<? echo nl2br($A15); ?>) %0D%0A%0D%0A


* ملاحظات الادارة %20  %0D%0A
<? echo nl2br($A13); ?>%0D%0A
<? echo nl2br($A14); ?>%0D%0A

" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i>


</td>
                      </tr>
                    <? }} ?>
                     
                    </tbody>
                     
                  </table>  <? } ?>            
                </div> 
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
   