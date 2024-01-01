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

<script type="text/javascript" src="jquery.js"></script>

   <script type="text/javascript">

function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data111ch.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

</script>
   <script type="text/javascript">

function fetch_select2(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data2.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select2").innerHTML=response; 
     }
   });
}

</script>


   <script type="text/javascript">

function fetch_select3(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data3.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select3").innerHTML=response; 
     }
   });
}

</script>   <script type="text/javascript">

function fetch_select4(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data444ch.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select4").innerHTML=response; 
     }
   });
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
تعديل الدورات الدراسية / شعبة
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
 
					   
 
                
                
                                     <?
include ("conn.php");
  $ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 

$query2 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.ID='$ID' order by cors_no DESC";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
?>



                  <form role="form" action="" method="post">
                    <!-- text input -->
    <div class="row">

        <div class="form-group col-xs-2 has-error">
                      <label><i class="fa fa-times-circle-o"></i>رقم الدورة</label>
 

        <input  name="cors_no"   size="15"       readonly required="required"  class="form-control input-lg" value="<? echo $row2['cors_no']; ?>" style="text-align: center" >
        <input  name="ID"   size="15"     type=hidden   readonly required="required"  class="form-control input-lg" value="<? echo $row2['ID']; ?>" style="text-align: center" >
        
        
                     </div>           
                    <div class="form-group col-xs-10">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required       onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 
 <option value="<? echo $row2['Branches_ID']; ?>"><? echo $row2['Branches_name']; ?></option>


 <?php 
 if($Branches==0) { ?> <option></option> <? } ?>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                          
                     </div>
                    
					
					
					
					
                    <div class="form-group">
                      <label>اسم الدورة / المستوى</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_ID"   required  id="new_select1"   class="form-control"  >
                      
                      
<option value="<? echo $row2['cors_ID']; ?>"><? echo $row2['cors_name']; ?></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from subjects where   cors='لغة صينية' ";
else
$query = "select * from subjects where Branches='$Branches' and cors='لغة صينية'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['cors_ID']; ?>"><? echo $row['cors_name']; ?></option>
<?php } } ?>
 
					</select>                    </div>
                    
                    
      <div class="form-group">
                      <label>اسم الشركة ( ان وجد )</label>
  <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="com"         class="form-control"  >
 <option><? echo $row2['com']; ?></option> 
 <option></option>
<?
$i=0;
include ("conn.php");
 
$query = "select * from user where     acount_type=5";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option><? echo $row['name']; ?></option>
<?php } } ?>
					</select>                        
                    </div>              
                    
                    <div class="form-group">
                      <label>  اسم المحاضر / المدرب</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="traning_name"   required     id="new_select2" class="form-control"  >
<option value="<? echo $row2['teacher_id']; ?>"><? echo $row2['teacher_name']; ?></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from teacher";
else
$query = "select * from teacher where Branches='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['teacher_id']; ?>"><? echo $row['teacher_name']; ?></option>
<?php } } ?>
					</select>
 
                    </div>
                  <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" > تاريخ نهاية الدورة ( هجري ) </label>
                      <input  name="end_date"   size="20"     required="required"  class="form-control"  placeholder="yyyy-mm-dd" value="<? echo $row2['end_date']; ?>">
                    </div><div class="form-group col-xs-6">
                      <label> تاريخ بداية الدورة ( هجري )</label>
                      <input  name="start_date" id="T2" size="20"    required="required"  class="form-control" placeholder="yyyy-mm-dd" value="<? echo $row2['start_date']; ?>">
                    </div>
                    </div>
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label class="control-label" > تاريخ نهاية الدورة ( ميلادي ) </label>
                      <input  name="end_date_en"  type=date size="20"     required="required"  class="form-control" value="<? echo $row2['end_date_en']; ?>" >
                    </div><div class="form-group col-xs-6">
                      <label> تاريخ بداية الدورة ( ميلادي )</label>
                      <input  name="start_date_en" type=date  size="20"    required="required"  class="form-control" value="<? echo $row2['start_date_en']; ?>" >
                    </div>
                    </div>

                    <!-- input states -->
  <div class="row">
                    
   <div class="form-group col-xs-12">
                      <label>  القاعة / المعمل</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="class"   required     id="new_select3" class="form-control"  >
<option><? echo $row2['class']; ?></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from building order by cou_class";
else
$query = "select * from building where Building='$Branches' order by cou_class";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option><? echo $row['cou_class']; ?></option>
<?php } } ?>
					</select>
 
                    </div>
                    </div>
                    

                  
           <div class="row">
                             

<div class="form-group col-xs-6">

<label>  نهاية الوقت</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="time2"   required       class="form-control"  ><option><? echo $row2['time2']; ?></option>
<?
$i=0;
include ("conn.php");
$query = "select * from time ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['time']; ?>"><? echo $row['time1']; ?></option>
<?php } } ?>

					</select>
 
                    </div><div class="form-group col-xs-6">

<label>  بداية الوقت</label>
                      

<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="time1"   required       class="form-control"  ><option><? echo $row2['time1']; ?></option>
<?
$i=0;
include ("conn.php");
$query = "select * from time ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['time']; ?>"><? echo $row['time1']; ?></option>
<?php } } ?>

					</select>
 
                    </div>
     
                     </div>

                    
                    <div class="row">
            
   <div class="form-group col-xs-6">

                      <label>  الايام إلى</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="day2"   required       class="form-control"  >
   <?
include ("conn.php");
$query5 = "select * from days   where  days_ID='$row2[day2]'  ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?><option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>	    <?
include ("conn.php");
$query5 = "select * from days      ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?>							<option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>
 
 
 

 
 
					</select>
 
                    </div>
<div class="form-group col-xs-6">

                      <label>  الايام من</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="day1"   required       class="form-control"  >
   <?
include ("conn.php");
$query5 = "select * from days   where  days_ID='$row2[day1]'  ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?><option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>	    <?
include ("conn.php");
$query5 = "select * from days      ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{ ?>							<option  value="<? echo $row5['days_ID']; ?>"><? echo $row5['day']; ?></option><? } ?>
 
 
 

 
 
					</select>
 
                    </div><div class="form-group col-xs-6">
 
                      <label>نوع الدورة</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_online"   required       class="form-control"  >
					                     <option><? echo $row2['cors_online']; ?></option> 

<option hidden></option>
                     <option>حضوري</option> 
                     <option>اونلاين</option> 
 </select>
</div>
<div class="form-group col-xs-6">
 
                      <label>فترة الدورة</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_time"   required       class="form-control"  >
										                     <option><? echo $row2['cors_time']; ?></option> 
<option hidden></option>
                     <option>صباحي</option> 
                     <option>مسائي</option> 
 </select>
</div>
 <div class="form-group col-xs-12">
<label>رابط بث المحاضرة</label>
<input  name="lives" size="20"   value="<? echo $row2['live']; ?>"      class="form-control"  >
</div>                
      <div class="form-group col-xs-12">
                      <label>عرض الدورة للتسجيل
</label>
                      <input type="checkbox" <? if($row2[show_reg]==1) echo 'checked'; ?>  name="C1" value="1">

<div>            
                          </div>
               
                      
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="&#xf040;"   class="btn btn-warning btn-icon fa fa-pencil" name="B1"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-warning " style="float: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2" formnovalidate   onclick="return confirm('هل تريد الحذف البيانات ؟')"   class="btn btn-danger" style="float: left">                    
                    
&nbsp;</p>
&nbsp;</div>
 
                  </form>
<? } } ?>
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

 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $traning_name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['traning_name'], ENT_QUOTES, "utf-8")); 
 $start_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['start_date'], ENT_QUOTES, "utf-8")); 
 $end_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['end_date'], ENT_QUOTES, "utf-8")); 
 $start_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['start_date_en'], ENT_QUOTES, "utf-8")); 
 $end_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['end_date_en'], ENT_QUOTES, "utf-8")); 
 $cors_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_no'], ENT_QUOTES, "utf-8")); 
 

 $class= mysqli_real_escape_string($conn,htmlspecialchars($_POST['class'], ENT_QUOTES, "utf-8")); 
 $time1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time1'], ENT_QUOTES, "utf-8")); 
 $time2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time2'], ENT_QUOTES, "utf-8")); 
 $day1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day1'], ENT_QUOTES, "utf-8")); 
 $day2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day2'], ENT_QUOTES, "utf-8")); 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 
 $com= mysqli_real_escape_string($conn,htmlspecialchars($_POST['com'], ENT_QUOTES, "utf-8")); 
$lives=mysqli_real_escape_string($conn,htmlspecialchars($_POST['lives'], ENT_QUOTES, "utf-8"));
 $C1= mysqli_real_escape_string($conn,$_POST['C1']);
$cors_online=mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_online'], ENT_QUOTES, "utf-8"));
$cors_time=mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_time'], ENT_QUOTES, "utf-8"));



$sql="update cors set cors_online='$cors_online',cors_time='$cors_time',show_reg='$C1',Branches='$Branches',cors_ID='$cors_ID',traning_name='$traning_name',start_date='$start_date',end_date='$end_date',start_date_en='$start_date_en',
end_date_en='$end_date_en',cors_no='$cors_no',class='$class',day1='$day1',time1='$time1',time2='$time2',day2='$day2',cors_type='لغة صينية',com='$com',live='$lives'  where ID='$ID'";
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


$sql="insert into class set Building='$Branches',section_Id='$ID',class_no='$class',day='$day1',day2='$day2',time='$time1',end_time='$time2',cors_type='لغة صينية'  ";
if(mysqli_query($conn,$sql))
{
}

$sql="update   class set Building='$Branches',section_Id='$ID',class_no='$class',day='$day1',day2='$day2',time='$time1',end_time='$time2',cors_type='لغة صينية'  where section_Id='$ID'";
if(mysqli_query($conn,$sql))
{
}


}


 

}


if (isset($_POST['B2'])) {

 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $traning_name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['traning_name'], ENT_QUOTES, "utf-8")); 
 $start_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['start_date'], ENT_QUOTES, "utf-8")); 
 $end_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['end_date'], ENT_QUOTES, "utf-8")); 
 $start_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['start_date_en'], ENT_QUOTES, "utf-8")); 
 $end_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['end_date_en'], ENT_QUOTES, "utf-8")); 
 $cors_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_no'], ENT_QUOTES, "utf-8")); 
 

 $class= mysqli_real_escape_string($conn,htmlspecialchars($_POST['class'], ENT_QUOTES, "utf-8")); 
 $time1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time1'], ENT_QUOTES, "utf-8")); 
 $time2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time2'], ENT_QUOTES, "utf-8")); 
 $day1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day1'], ENT_QUOTES, "utf-8")); 
 $day2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day2'], ENT_QUOTES, "utf-8")); 
 $ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8")); 



$sql="Delete from cors  where ID='$ID'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=mang_cors_eng.php"><?


 
}



$sql="Delete  from class  where section_Id='$ID'";
if(mysqli_query($conn,$sql))
{
}


 

}

?>