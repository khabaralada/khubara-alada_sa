<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");

?>
<!DOCTYPE html>
<html>
<head>

<style>
*  {
 
 font-family: Droid Arabic Kufi; font-size:13px;
}
</style>

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

                   التقييم :                    <?php
                        $lessons_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['lessons_ID']), ENT_QUOTES, "utf-8")); 

 
$query1 = "select * from  lessons  where lessons_ID='$lessons_ID' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
 echo $row1['lessons'];  }}
?></small></h1>
</section>

 

 

 



<section class="content" dir=ltr>
<div class="nav-tabs-custom">


                <?php
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and ID_reg='$ID_reg'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>
<ul class="nav nav-tabs pull-right">
                  <li ><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  >المقدمة </a></li>
                  <li class="active"><a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المحاضرات </a></li>
                  <li ><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المصادر ومحتوى البرنامج </a></li>
                  <li  ><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >دليل الفيديو </a></li>
                  <li><a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>"  >الواجبات والأنشطة </a></li>
                  <li><a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المناقشات والرسائل </a></li>
                  <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?> <li  ><a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  >الاختبار النهائي </a></li>
<?php } ?>
 
                  <li>
<? if($row[cors_type]=="لغة الإنجليزية" and $row['scor']>=60 ) { ?> 
						<a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
						
       <? if($row[cors_type]=="لغة صينية" and $row['scor']>=60 ) { ?> 
       <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
       
       
   						<? if($row[cors_type]=="تطويري"   ) { ?> 
						<a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دورة تأهلية" and $row['scor']>=60 ) { ?> 
						<a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دبلوم" and $row['scor']>=60 ) { ?> 
						<a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>                  
                  
                  </li>
                  
                   <li><a href="info.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>"  >
					افادة </a></li>
                 
                  
                  
                  
                </ul>                 
                
   <?php } } ?>             
                
                
              </div>
<?
$cou=0;

$query= "select * from test_lessons where ID_reg='$ID_reg' and cors_ID='$lessons_ID' ";
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
 




    ?>
 
<form method="POST" action="">

<input type=hidden  name="cors_ID" value="<? echo $lessons_ID; ?>" >
<input type=hidden  name="ID_reg" value="<? echo $ID_reg; ?>" >
<input type=hidden  name="stu" value="<? echo $stu; ?>" >


<?
                         $i=0;
                  $C=0;
    $lessons_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['lessons_ID']), ENT_QUOTES, "utf-8")); 

 
?>

<div class="box box-info  ">
<div class="box-body">

 

<div class="row" dir="rtl">
 
     
<? if($row8['img']!='-1.' and $row8['img']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
<img src="attachment/<? echo $row8['img']; ?>">                
</label>
</div>
 <? } ?>
                
<? 
 
 
if($row8['sound']!='-1.' and $row8['sound']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
 <audio controls>
  <source src="attachment/<? echo $row8['sound']; ?>" type="audio/ogg">
  <source src="attachment/<? echo $row8['sound']; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>                 
</label>
</div>
 <?   } ?>

                     <?

include ("conn.php");
 $query = "select * from lesson_questions,lessons where sub_axes_ID='$lessons_ID'  and  lessons.lessons_ID=lesson_questions.cors_ID   ORDER BY  rand()   ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
 $C++;
?>
<div class="form-group col-lg-12       ">
<label>
<p  align="left"><font color=#0033CC><? $c++; echo $c; ?> : 

 
 
 <? echo $row['question']; ?>  
 <br><? echo $row['The_rest_of_the_question']; ?>  
</font>  </label>
<input type=hidden  name="question_ID[]" value="<? echo $row['question_ID']; ?>" >
<input type=hidden  name="Answer[]" value="<? echo $row['Answer']; ?>" >
<input type=hidden  name="section[]" value="<? echo $row8['section']; ?>" >
 

</div>

 


  <? if($row['choice1']!="") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"       value="<? echo $row['choice1']; ?>"   ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice1']; ?></label>
 </div>
 <? } ?>

 <? if($row['choice2']!="") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"         value="<? echo $row['choice2']; ?>" ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice2']; ?></label>
 </div>
 <? } ?> 
 <? if($row['choice3']!=" ") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"      value="<? echo $row['choice3']; ?>"  ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice3']; ?></label>
 </div>
 <? } ?> 
 
    <? if($row['choice4']!=" ") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"       value="<? echo $row['choice4']; ?>" ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice4']; ?></label>
 </div>
 <? }   ?>
 
 <? } } ?>
 </div>
 
 <input type="submit" value="انهاء الاختبار" name="B1" onclick="return confirm('هل تريد انهاء الاختبار ؟')"   class="btn btn-primary" style="float: left"><br><br>

  </div>
</div>        
  
 


   


                 

                  
         

 
          

  </form> 
  
<div class="box box-info">
<div class="box-body">
<table id="example11" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th colspan="5">اجابات المتدرب</th>
                       
                      </tr>
                      <tr>
                         <th><p align=center>
						#</th>
                         <th><p align=center>السؤال    </th>
                         
                         <th><p align=center>الاجابة الصحيحة  </th>
                         
                         <th><p align=center>اجابة الطالب</th>
                         <th><p align=center>الدرجة</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?
                         $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 
    $lessons_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['lessons_ID']), ENT_QUOTES, "utf-8")); 

include ("conn.php");
$query8 = "select * from test_lessons,lesson_questions,lessons   where
 sub_axes_ID='$lessons_ID' and ID_reg='$ID_reg' and test_lessons.question_ID=lesson_questions.question_ID  and lessons.lessons_ID=lesson_questions.cors_ID";
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
						<? echo $row8['question_ID']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
						 <td align="center">
						<? echo $row8['question']; ?></td>
						
 
						 <td align="center">
						<? echo $row8['Answer']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
						
 
                        <td align="center"> 
						<? echo $row8['stu_choice']; ?></td>
						<td align="center">  
						
<? echo $row8['scor']; ?>



</td>
                      	</form>

                      </tr>
                    <? }} ?>
                    <tr>
 
                        <td align="center">
						&nbsp;</td>
						 <td align="center">
						&nbsp;</td>
						
 
						 <td align="center">
						&nbsp;</td>
						
 
                        <td align="center"> 
						&nbsp;</td>
						<td align="center" bgcolor="#999999">  
						
<?php echo $scors; ?></td>

                      </tr>
                    </tbody>
                     
                  </table></div>
</div>
</section> 


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?
if (isset($_POST['B1'])) {
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 

$sql="Delete from test_lessons where cors_ID='$cors_ID' and ID_reg='$ID_reg'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?

}

 for($i=0;$i<$C;$i++) { 
 $question_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['question_ID'][$i], ENT_QUOTES, "utf-8")); 
 $Answer= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Answer'][$i], ENT_QUOTES, "utf-8")); 
 $R= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R'.$i], ENT_QUOTES, "utf-8") ); 
 $stu= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu'], ENT_QUOTES, "utf-8")); 
 
 $section= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section'][$i], ENT_QUOTES, "utf-8")); 

if($R==$Answer)
$scor=1;
else
$scor=0;
$totalscor=$totalscor+$scor;

$sql="insert into test_lessons set user_ID='$stu',cors_ID='$cors_ID',question_ID='$question_ID',Answer='$Answer',stu_choice='$R',scor='$scor',ID_reg='$ID_reg',que_type='$section' ";
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
}
?>