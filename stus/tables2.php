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
جداول قسم الحاسب الآلي
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">	
					<form method="POST" dir="rtl">
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label> المدرس  </label>
                                            <div class="input-group input-group-sm has-error">

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="teacher"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 <option></option>
<?
$i=0;
include ("conn.php");
if($_SESSION[Branches]==0)
$query = "select * from user,teacher where cors!='لغة الإنجليزية' and teacher_id=ID and acount_type>1 and acount_type<4 order by user.Branches ";
else
$query = "select * from user,teacher where cors!='لغة الإنجليزية' and teacher_id=ID and       Branches='$_SESSION[Branches]' and acount_type>1 and acount_type<4 order by user.Branches";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['ID']; ?>"><? echo $row['name']; ?></option>
<?php } } ?>
					</select>                      <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">بحث</button>
                    </span>
                    </div>
                    
                    
                    </div><div class="form-group col-xs-6">
                      <label class="control-label" > الفرع </label>
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"         onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 <option></option>
<?
$i=0;
include ("conn.php");
if($_SESSION[Branches]==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$_SESSION[Branches]'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>                      </div>
                    </div>
                  	</form>

                   
                </div><font size="2"><!-- /.box-header -->
                </font>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						 المدرس </th>
<?
include ("conn.php");
if($_POST['Branches']!="" and $_POST['teacher']=="" )
$query1  = "select DISTINCT cors.time1,am,time.time1 from time,cors where  Branches='$_POST[Branches]' and end_date>='$ar_date' and   cors.time1=time.time  and cors_type!='لغة الإنجليزية' order by time.time";
elseif($_POST['teacher']!="" and $_POST['Branches']=="" )
$query1  = "select DISTINCT cors.time1,am,time.time1 from time,cors where  traning_name='$_POST[teacher]' and end_date>='$ar_date' and   cors.time1=time.time  and cors_type!='لغة الإنجليزية' order by time.time";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{ 
?> <th><p align=center> <span lang="ar-sa"><font size="2"><? echo $row1['2']; ?> <? echo $row1['am']; ?> 
						</font></span></th><?  } ?>                           
                      </tr>
                    </thead>
                    <tbody>

                      <?
include ("conn.php");
if($_POST['Branches']!="" and $_POST['teacher']=="" )
$query = "select *  from teacher   where  Branches='$_POST[Branches]' and cors!='لغة الإنجليزية' order by Branches DESC";
elseif($_POST['Branches']=="" and $_POST['teacher']!="" )
$query = "select *  from teacher   where  teacher_id='$_POST[teacher]'  and cors!='لغة الإنجليزية' order by Branches DESC";
elseif($_POST['teacher']!="" and $_POST['Branches']=="" ) 
$query = "select*  from  teacher    where  Branches='$_POST[Branches]' and cors!='لغة الإنجليزية' and teacher_id='$_POST[teacher]' order by Branchese DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ 
$teacher_id=$row['teacher_id'];
?>
 <tr>
                        <td>
						<span lang="ar-sa"><font size="2"><? echo $row['teacher_name']; ?></font></span></td>
    <?
include ("conn.php");
if($_POST['Branches']!="" and $_POST['teacher']=="" )
$query12  = "select DISTINCT cors.time1,am,time.time1,time.time  from time,cors where   Branches='$_POST[Branches]' and end_date>='$ar_date' and   cors.time1=time.time and cors_type!='لغة الإنجليزية'  order by time.time";
elseif($_POST['teacher']!="" and $_POST['Branches']=="" )
$query12  = "select DISTINCT cors.time1,am,time.time1,time.time  from time,cors where   traning_name='$_POST[teacher]' and  end_date>='$ar_date' and   cors.time1=time.time and cors_type!='لغة الإنجليزية'  order by time.time";
$result12 = mysqli_query($conn,$query12);
while($row12=mysqli_fetch_array($result12))
{ 
$time1=$row12['3'];
?>
<?
 
include ("conn.php");
if($_POST['Branches']!="" and $_POST['teacher']=="" )
$query1 = "select * from cors,subjects,teacher,branches   where cors.Branches='$_POST[Branches]' and  branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID  and  end_date>='$ar_date' and teacher_id='$teacher_id' and time1='$time1' and cors_type!='لغة الإنجليزية' order by cors_no DESC";
elseif($_POST['teacher']!="" and $_POST['Branches']=="" )
$query1 = "select * from cors,subjects,teacher,branches   where  traning_name='$_POST[teacher]' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID  and  end_date>='$ar_date' and teacher_id='$teacher_id' and time1='$time1' and cors_type!='لغة الإنجليزية' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{

?>
 <td>
<font size="2">
<?
while($row1=mysqli_fetch_array($result1))
{
  $cors_ID=$row1['ID'];
 
?>
</font>

<font size="2">
<? //echo $row1['class']; ?>  
 <font color="#0000FF"><b>  
 <? echo $row1['cors_name']; ?><br></b></font></font> <span ><font color=red>( رقم<? echo $row1['cors_no']; ?> )</font>
 <br> <? 
$query11 = "select count(stu_id) as co    from stu_sec   where   section_Id='$cors_ID'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 ?> عدد الطلاب <? echo $row11['co']; ?><?
 }
 
 ?> 
 <br>بداية الدورة : <? echo $row1['start_date']; ?>
 <br>نهاية الدورة : <? echo $row1['end_date']; ?>
</p>
</span><font size="2">

<?
}
?></font></td><? } else { ?>

<td bgcolor=#666666></td>


<? }  ?>


<? } ?>
                      </tr><?   } ?> 
 
 
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
   