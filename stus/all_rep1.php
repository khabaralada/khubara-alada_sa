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
<div class="box-body">

 <div class="noprint">

					 <form method="POST" action="">
					 
					 
					  <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-12">
                      <label> بالبحث بتاريخ</label>

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="types"   required       class="form-control"  > <option></option>
 
<option value=1>بداية الدورة</option>
<option value=2>نهاية الدورة</option>
</select>
</div>

 


</div>
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label> الفترة الي</label>
                                           

<table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d2"   required       class="form-control"  ><option><? echo $d2; ?></option>
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m2"   required        class="form-control"  ><option><? echo $m2; ?></option>
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y2"   required      class="form-control"  ><option><? echo $y2; ?></option>
<option hidden>السنة</option>
<? for($n=1430;$n<=1460;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
							</tr>
						</table>
						                     
                     
                    
                    
                    </div><div class="form-group col-xs-6">
                      <label class="control-label" > الفترة من </label>
<table border="0" width="100%">
							<tr>
								<td>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="d1"   required       class="form-control"  ><option><? echo $d1; ?></option>
<option hidden>اليوم</option>
<? for($n=1;$n<=30;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
<td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="m1"   required        class="form-control"  ><option><? echo $m1; ?></option>
<option hidden>الشهر</option>
<? for($n=1;$n<=12;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
 <td><select style="font-family: Arial"   style="font-family: Arial"   size="1" name="y1"   required      class="form-control"  ><option><? echo $y1; ?></option>
<option hidden>السنة</option>
<? for($n=1430;$n<=1460;$n++) { ?>
<option><? echo $n; ?></option>
<? } ?>
</select></td>
							</tr>
						</table>                    </div>
                    
                    
<div class="form-group col-xs-6">
                      <label class="control-label" > نوع الدورات </label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_type"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
                               <option ><? echo $cors_type; ?></option> <option></option>
<?
include ("conn.php");
$query9 = "select * from catogry";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['catogry']; ?></option>
<? } ?>

					</select>       
                     </div>
                     


					
					
					
					<div class="form-group col-xs-6">
                      <label class="control-label" > المدرس </label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="teacher"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
<? 
$query = "select * from user,teacher where   teacher_id=ID and       user.ID='$_POST[teacher]' and acount_type>1 and acount_type<4 order by user.Branches";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['ID']; ?>"><? echo $row['name']; ?></option>
<?php } } ?>
<option></option>

<?
$i=0;
include ("conn.php");
if($_SESSION[Branches]==0)
$query = "select * from user,teacher where  teacher_id=ID and acount_type>1 and acount_type<4 order by user.Branches ";
else
$query = "select * from user,teacher where   teacher_id=ID and       Branches='$_SESSION[Branches]' and acount_type>1 and acount_type<4 order by user.Branches";
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
					
	<div class="form-group col-xs-12">
                      <label class="control-label" > الفرع </label> <div class="input-group input-group-sm has-error">
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
<option></option>
 
<?
$i=0;
include ("conn.php");
 
$query = "select * from branches    ";
 
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
					<font size="2">احصائية للمتدربين ( <?
	if($_POST['types']==1)
echo "بتاريخ بداية الدورة";
else
echo "بتاريخ نهاية الدورة";

?> ) من الفترة <? echo $y1.'-'.$m1.'-'.$d1; ?> الي الفترة <? echo $y2.'-'.$m2.'-'.$d2; ?>

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
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        
                      </tr>
                      <tr>
                        <th  width="56">
                    <span lang="ar-sa">الدورات</span></th>
                         <th><p align=center>
                    
						<span lang="ar-sa">المتدربين</span></th>
                        <th " width="54">ممتاز</th>
                        <th " width="54">جيدجدا</th>
                        <th " width="54">جيد</th>
                        <th " width="54">مقبول</th>
                        <th " width="55">التخريج</th>
                        <th " width="55">الحضور</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$date_from=$y1.'-'.$m1.'-'.$d1;
$date_to=$y2.'-'.$m2.'-'.$d2;



$c=0;
 
if($_POST['teacher']!="" and $_POST['cors_type']=="" and $_POST['Branches']=="")
$query = "select * from user,teacher   where teacher.teacher_id='$_POST[teacher]' and teacher_id=ID and acount_type>1 and acount_type<4     order by teacher.Branches DESC";
elseif($_POST['teacher']=="" and $_POST['cors_type']!="" and $_POST['Branches']=="")
$query = "select * from user,teacher   where teacher.cors='$_POST[cors_type]' and teacher_id=ID and acount_type>1 and acount_type<4    order by teacher.Branches DESC";
elseif($_POST['teacher']=="" and $_POST['cors_type']=="" and $_POST['Branches']!="")
$query = "select * from user,teacher   where teacher.Branches='$_POST[Branches]' and teacher_id=ID and acount_type>1 and acount_type<4    order by teacher.Branches DESC";


elseif($_POST['teacher']!="" and $_POST['cors_type']!="" and $_POST['Branches']=="")
$query = "select * from user,teacher   where teacher.cors='$_POST[cors_type]' and teacher.teacher_id='$_POST[teacher]'  and teacher_id=ID and acount_type>1 and acount_type<4     order by teacher.Branches DESC";
elseif($_POST['teacher']!="" and $_POST['cors_type']=="" and $_POST['Branches']!="")
$query = "select * from user,teacher   where teacher.Branches='$_POST[Branches]' and teacher.teacher_id='$_POST[teacher]'  and teacher_id=ID and acount_type>1 and acount_type<4     order by teacher.Branches DESC";
elseif($_POST['teacher']=="" and $_POST['cors_type']!="" and $_POST['Branches']!="")
$query = "select * from user,teacher   where teacher.Branches='$_POST[Branches]' and teacher.cors='$_POST[cors_type]'  and teacher_id=ID and acount_type>1 and acount_type<4    order by teacher.Branches DESC";

elseif($_POST['teacher']=="" and $_POST['cors_type']=="" and $_POST['Branches']=="")
$query = "select * from user,teacher   where   teacher_id=ID and acount_type>1 and acount_type<4      order by teacher.Branches DESC";

elseif($_POST['teacher']=="" and $_POST['cors_type']=="" and $_POST['Branches']=="")
$query = "select * from user,teacher   where teacher.Branches='$_POST[Branches]' and teacher.cors='$_POST[cors_type]' and teacher.teacher_id='$_POST[teacher]' and teacher_id=ID and acount_type>1 and acount_type<4       order by teacher.Branches DESC";
 
 

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
                        <td  width="6" >
						<? echo $c; ?></td>
                        <td  width="86" >
						<font size="2"><? echo $row['id_card']; ?></font></td>
                        <td  width="97" >
						<font size="2"><? echo $row['teacher_name']; ?></font></td>
                        <td  width="38" >
 <font size="2">
 <?
 $query3 = "select * from branches where      Branches_ID='$row[Branches]'";
$result3 = mysqli_query($conn,$query3);
while($row3=mysqli_fetch_array($result3))
{
 echo $row3['Branches_name'];
 }
?></font></td>
                        <td  width="56" > 
						<font size="2"><? 
$query1 = "select count(cors_no) as co    from cors    where end_date>='$date_to'  and traning_name='$row[teacher_id]'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co']; 
}
?></font></td>
                        <td width="53">
										<font size="2">
										<b>
										<? 
$query1 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and end_date>='$date_to'  and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? echo $all=$row1['co']; ?>  <?
 }
 $total1= $total1+$all;
 ?></b></font></td>
                        <td width="77">
														<b>
														<font size="2">
<?
$query1 = "select count(DISTINCT absence.ID_reg) as co    from absence,stu_sec,cors   
where    stu_sec.section_Id=cors.ID and stu_sec.ID_reg=absence.ID_reg and   end_date>='$date_to'  and traning_name='$row[teacher_id]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo  $row1['co'];
}
 ?>    
</font></b></td>
                       <td width="54" bgcolor="#FFFFCC">														
						<b>														
						<font size="2">														<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor>=60 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <?   $good=$row1['co']; ?>
 
<? if($row1['co']==0) echo ''; else    $all3=$row1['co']; ?>
  <?
 }
  $total3= $total3+$all3;

 ?>
 
 
 			<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor>=90 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>   
 
<? if($row1['co']==0) echo ''; else    echo $row1['co']; ?>
  <?
 }
 

 ?>
 



 </font>
 
 </b>
 
 </td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor>=80 and scor<90 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>   
 
<? if($row1['co']==0) echo ''; else    echo $row1['co']; ?>
  <?
 }
 

 ?></td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor>=70  and scor<80 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>   
 
<? if($row1['co']==0) echo ''; else    echo $row1['co']; ?>
  <?
 }
 

 ?></td>
                       <td width="54" bgcolor="#FFFFCC">														
						 			<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor>=60  and scor<70 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>   
 
<? if($row1['co']==0) echo ''; else    echo $row1['co']; ?>
  <?
 }
 

 ?></td>
                       <td width="54">		
<b>		
<font size="2">		
<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and scor<60 and Rate!=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? if($row1['co']==0) echo ''; else echo $all4=$row1['co']; ?>  <?
 }
   $total4= $total4+$all4;

 ?>
</font>
</b>
</td>
                       <td width="58">
<b>
<font size="2">
<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]' and Rate=''";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? if($row1['co']==0) echo ''; else echo $all5=$row1['co']; ?>  <?
}

   $total5= $total5+$all5;

 ?>
 </font>
 </b>
 </td>
                       <td width="55"><b><font size="2"><?    
                       if($good>0)
                       $prs=round($good/$all*100,2) ; 
                       else
                       $prs=0;
                       if($prs==0) echo '0';  else echo $prs.' %'; ?></font></b></td>
                       <td width="55"><b><font size="2"><? 
$query1 = "select count(absence.section_Id) as co    from absence   where     absence.section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? 
 if($row1['co']>0)
 echo $sum=round($row1['co']/($credits*$all)*100);
 else
 echo 0;
  ?> % <?
 }
 $sums=$sum+$sums;
 ?></font></b></td>
                      </tr>
                    <? }} ?>
                    <tr>
                        <td  colspan="5" bgcolor="#EEEEEE">
						<b><font size="4" color="#000080">
						الاجمالي</font></b></td>
                        <td bgcolor="#EEEEEE" width="53">
										<b><font size="4"><? echo $total1; ?></font></b></td>
                        <td bgcolor="#EEEEEE" width="77">
														<b>
														<font size="4"><? echo $total2; ?></font></b></td>
                       <td bgcolor="#EEEEEE" colspan="4">														
						<b><font size="4"><? echo $total3; ?></font></b></td>
                       <td bgcolor="#EEEEEE" width="54">		
<b><font size="4"><? echo $total4; ?></font></b></td>
                       <td bgcolor="#EEEEEE" width="58">
<b><font size="4"><? echo $total5; ?></font></b></td>
                       <td bgcolor="#EEEEEE" width="55">
						<b><font size="4"><? echo round($total3/$total1*100,2); ?> %</font></b></td>
                       <td bgcolor="#EEEEEE" width="55">
						<b><font size="4"><? echo round($sums/$c,2); ?> %</font></b></td>
                      </tr>
                    </tbody>
                     
                  </table>              
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
   