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

 <style>
 textarea
{
  border:1px solid #999999;
  width:100%;
  margin:5px 0;
  padding:3px;
}
</style>



</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>

                    الاختبارات الالكترونية لدورة / مستوى :  <?
include ("conn.php");
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and  stu_sec.ID_reg='$ID_reg'  ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
echo $row['cors_name'];
  $cors_ID=$row[cors_ID];
    $ID_reg=$row[ID_reg];
      $stu=$row[stu_id];
 }}
?></small></h1>
</section>

 

 

 



<section class="content" dir=ltr>
<?
$cou=0;

$query= "select * from test where ID_reg='$ID_reg'  ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
$cou++;
  $scors=$scors+$row['scor'];
}
 

}
  if($cou<=0) { ?>
 <? } else { ?>
  
<div class="box box-info">
<div class="box-body">
<div class="row">
<div class="form-group col-lg-12      ">

  <p dir="rtl"><font color="#FF0000"><b>تم إنهاء الاختبار
  درجة الاختبار ( <? echo  $scors; ?> )
  
  
  </b></font></p>
  
  
  <table id="example111" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						#</th>
                         <th><p align=center>Question</th>
                         <th><p align=center>Category</th>
                         
                         <th><p align=center>Correct</th>
                         
                         <th><p align=center>Student's answer</th>
                         <th><p align=center>Degree</th>
                       
                         <th>&nbsp;</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query8 = "select * from test,questions   where test.cors_ID='$cors_ID' and ID_reg='$ID_reg' and test.question_ID=questions.question_ID";
$result8 = mysqli_query($conn,$query8);
$rows8 = mysqli_num_rows($result8 );
if($rows8 > 0 )
{
while($row8=mysqli_fetch_array($result8))
{
 
?>
 <tr>
 
 
                        <form method="POST" action="">
 
 
 
                        <td align="center">
                        
                        <input type=hidden  name="test_ID" value="<? echo $row8['test_ID']; ?>" >
 

						<? echo $row8['question_ID']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row8['ID_reg']; ?>"></td>
						 <td align="center">
						<? echo $row8['section']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row8['ID_reg']; ?>"></td>
						
                        <td align="center">
						 <? echo $row8['question']; ?> </td>
                        <td align="center"> <? echo $row8['Answer']; ?></td>
                        <td align="center"> <? echo $row8['stu_choice']; ?></td>
                        <td align="center"> 
                        
                        <? if($row8[que_type]=='Writing') { ?> <input type=text class="form-control"  name="scor" value=" <? echo $row8['scor'];   ?>" >

<? } else { echo $row8['scor']; } ?></td>
                        <td align="center"> <? if($row8[que_type]=='Writing') { ?>
                        <input type="submit" value="تعديل" name="B1" onclick="return confirm('هل تريد حفظ الدرجة؟')"   class="btn btn-primary" style="float: left">
                        <? } ?></td>
 

                      	</form>
 

                      </tr>
                    <? }} ?>
                    <tr>
 
 
 
                        <td align="center" colspan="7">
                        
                        <form method="POST" action="">
                        <? $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); ?>
 <input type=hidden class="form-control"  name="ID_reg" value=" <? echo $ID_reg;   ?>" >
							 <input type="submit" value="حذف الاختبار"  onclick="return confirm('هل تريد حذف البيانات ؟')"  class="btn btn-danger btn-icon fa fa-floppy-o  " name="B2"> 
						</form>
						<p>&nbsp;</td>
 

                      </tr>
                    </tbody>
                     
                  </table>
  
  <? } ?>
</div>
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
if (isset($_POST['B1'])) {
 
 $question_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['question_ID'][$i], ENT_QUOTES, "utf-8")); 
 $Answer= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Answer'][$i], ENT_QUOTES, "utf-8")); 
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $R= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R'.$i], ENT_QUOTES, "utf-8") ); 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
 $stu= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu'], ENT_QUOTES, "utf-8")); 
 $test_ID=mysqli_real_escape_string($conn,htmlspecialchars($_POST['test_ID'], ENT_QUOTES, "utf-8"));
 $scor=mysqli_real_escape_string($conn,htmlspecialchars($_POST['scor'], ENT_QUOTES, "utf-8"));

 
$sql="update test set scor='$scor' where test_ID='$test_ID' ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

$sql="update stu_sec set  Written=Written+'$scor',scor=scor+'$scor'    where ID_reg='$ID_reg' ";
if(mysqli_query($conn,$sql))
{
}

 
 
}

elseif (isset($_POST['B2'])) {
 
 
 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
 
 
$sql="delete from test  where ID_reg='$ID_reg' ";
if(mysqli_query($conn,$sql))
{
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