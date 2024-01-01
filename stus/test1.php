<?php
error_reporting(0);
//include('session.php'); 
//include('font.php'); 
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
        $open_test=$row['open_test'];
 }}
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
                  <li><a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المحاضرات </a></li>
                  <li ><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المصادر ومحتوى البرنامج </a></li>
                  <li  ><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >دليل الفيديو </a></li>
                  <li><a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>"  >الواجبات والأنشطة </a></li>
                  <li><a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المناقشات والرسائل </a></li>
                  <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?> <li  class="active"><a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  >الاختبار النهائي </a></li>
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

$result11=mysqli_query($conn,"select count(*) as co1 from test where ID_reg='$ID_reg'  and que_type!='Writing' ");
while($row11=mysqli_fetch_array($result11))
{
$co1=$row11[co1];
}
 
$result11=mysqli_query($conn,"select sum(scor) as scor from test where ID_reg='$ID_reg' and scor=1  and que_type!='Writing'");
while($row11=mysqli_fetch_array($result11))
{
$Written=round($row11[scor]*(50/$co1));
}
 
$result11=mysqli_query($conn,"select sum(scor) as scor1 from test where ID_reg='$ID_reg'  and que_type='Writing'");
while($row11=mysqli_fetch_array($result11))
{
$Written1=round($row11[scor1]);
}




  if($cou<=0) { ?>
 
<form method="POST" action="">

<input type=hidden  name="cors_ID" value="<? echo $cors_ID; ?>" >
<input type=hidden  name="ID_reg" value="<? echo $ID_reg; ?>" >
<input type=hidden  name="stu" value="<? echo $stu; ?>" >


<?
                         $i=0;
                  $C=0;
$query88 = "select  * from cat_questions  order by ID ASC ";
$result88 = mysqli_query($conn,$query88);
$rows88 = mysqli_num_rows($result88 );
while($row88=mysqli_fetch_array($result88))
{
 
 

 if($row88[cat]=="Grammar" and $cors_ID==90)
 $lim=2;
 else if($row88[cat]=="Grammar" and $cors_ID==75)
 $lim=2;
 else if($row88[cat]=="Grammar" and $cors_ID==105)
 $lim=2;

 else if($row88[cat]=="Grammar" and $cors_ID==74)
 $lim=2;
 else if($row88[cat]=="Grammar" and $cors_ID==89)
 $lim=2;
 else if($row88[cat]=="Grammar" and $cors_ID==104)
 $lim=2;


 else if($row88[cat]=="Vocabulary" and $cors_ID==90)
 $lim=3;
 else if($row88[cat]=="Vocabulary" and $cors_ID==75)
 $lim=3;
  else if($row88[cat]=="Vocabulary" and $cors_ID==105)
 $lim=3;



 else if($row88[cat]=="Vocabulary" and $cors_ID==74)
 $lim=3;
 else if($row88[cat]=="Vocabulary" and $cors_ID==89)
 $lim=3;
 else if($row88[cat]=="Vocabulary" and $cors_ID==104)
 $lim=3;


 else
 $lim=1;
$query8 = "select  DISTINCT sub1,section,sub2,img,sound,lontext,cors_ID  from questions   where cors_ID='$cors_ID'  and section='$row88[cat]' 
GROUP BY sub1
ORDER BY  rand() limit $lim  ";
$result8 = mysqli_query($conn,$query8);
$rows8 = mysqli_num_rows($result8 );
if($rows8 > 0 )
{
while($row8=mysqli_fetch_array($result8))
{
$sub1=str_replace("'","\'",$row8['sub1']);
$sub2=str_replace("'","\'",$row8['sub2']);
?>

<div class="box box-info  ">
<div class="box-body">

 

<div class="row">
<div class="form-group col-lg-12       ">
<label><p dir="ltr"  align="left"><font color=#009933><? echo $row8['section']; ?> </font>  </label>
<label><p dir="ltr"  align="left"><font color="#FF0000"><? echo $row8['sub1']; ?> </font>  </label>
<label><p dir="ltr"  align="left"><font color="#FF0000"><? echo $row8['sub2']; ?> </font>  </label>
<label><p dir="ltr"  align="left"><font color="#000000"><? echo nl2br($row8['lontext']); ?> </font>  </label>

</div>
     
<? if($row8['img']!='-1.' and $row8['img']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
<img src="attachment/<? echo $row8['img']; ?>">                
</label>
</div>
 <? } ?>
                
<? 
 
if(($row8['cors_ID']>=74 and $row8['cors_ID']<=76) or  ($row8['cors_ID']>=89 and $row8['cors_ID']<=91) or  ($row8['cors_ID']>=104 and $row8['cors_ID']<=106)) { 
}
else {
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
 <?  }} ?>

                     <?

include ("conn.php");
 $query = "select * from questions   where cors_ID='$cors_ID'  and sub1='$sub1' and sub2='$sub2' and section='$row88[cat]' ORDER BY  rand() limit $row88[cou_questions]  ";
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
<p dir="ltr"  align="left"><font color=#0033CC><? $c++; echo $c; ?> : 

<? 

if(($row8['cors_ID']>=74 and $row8['cors_ID']<=76) or  ($row8['cors_ID']>=89 and $row8['cors_ID']<=91) or  ($row8['cors_ID']>=104 and $row8['cors_ID']<=106)) { 
if($row['sound']!='-1.' and $row['sound']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
 <audio controls>
  <source src="attachment/<? echo $row['sound']; ?>" type="audio/ogg">
  <source src="attachment/<? echo $row['sound']; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>                 
</label>
</div>
 <? } } ?>
 
 <? echo $row['question']; ?>  
 <br><? echo $row['The_rest_of_the_question']; ?>  
</font>  </label>
<input type=hidden  name="question_ID[]" value="<? echo $row['question_ID']; ?>" >
<input type=hidden  name="Answer[]" value="<? echo $row['Answer']; ?>" >
<input type=hidden  name="section[]" value="<? echo $row8['section']; ?>" >

</div>

<? if($row88[cat]=='Writing'){ ?>
<div class="form-group col-lg-12 ">
<textarea name="R<? echo $C-1; ?>" rows="8" cols="70"          ></textarea>
 </div>
<? } else { ?>


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
 <? if($row['choice3']!="") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"      value="<? echo $row['choice3']; ?>"  ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice3']; ?></label>
 </div>
 <? } ?> 
 
    <? if($row['choice4']!="") { ?>
<div class="form-group col-lg-12 ">
<input   type=radio name="R<? echo $C-1; ?>"       value="<? echo $row['choice4']; ?>" ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice4']; ?></label>
 </div>
 <? } } ?>
 
 <? } } ?>
 </div>
 
 
  </div>
</div><? }}} ?>        
  
 


   


                 

                  
         
<input type="submit" value="انهاء الاختبار" name="B1" onclick="return confirm('هل تريد انهاء الاختبار ؟')"   class="btn btn-primary" style="float: left"><br><br>

                </div>
          

  </form><? } else { ?>
  
<div class="box box-info">
<div class="box-body">
<div class="row">
<div class="form-group col-lg-12      ">

  <p dir="rtl" align="center"><font color="#FF0000"><b>تم انهاء الاختبار
 
 
  
  </b></font></p>
  
  <? /* if($xxxxxx==2222) { */ ?>
  
  
  
  <table id="example11" class="table table-bordered table-striped" dir="ltr"     >
 
                    <thead>
                       
                      <tr>
                         
                        <th   ><span >Attendance(10)</span></th>
                        <th   ><span >Quizzes(4)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Participation(4)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Listening(5)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Reading(3)</span></th>
                        <th   ><span >Workbook(4)</span></th>
                        <th   > <span >Worksheets(10)</span></span></th>
                        <th   > <span >Writing(10)</span></span></th>
                        <th   ><span >Written Test(50)</span></th>
                        <th   > <span >Total Marks </span> </th>
                      </tr>
                       
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 

$query9 = "select * from student,stu_sec where  stu_sec.stu_id=student.stu_id and stu_sec.ID_reg='$ID_reg'";
$result9 = mysqli_query($conn,$query9);
$rows9 = mysqli_num_rows($result9 );
if($rows9 > 0 )
{
while($row9=mysqli_fetch_array($result9))
{

?>
 <tr>
 
 
                        <td   >
 
						 <? echo $row9['Attendance']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Quizzes']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Participation']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Listening']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Reading']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Workbook']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Lab']; ?></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						  <?
include ("conn.php");
$query8 = "select * from test,questions   where test.cors_ID='$cors_ID' and ID_reg='$ID_reg' and test.question_ID=questions.question_ID and que_type='Writing'";
$result8 = mysqli_query($conn,$query8);
$rows8 = mysqli_num_rows($result8 );
if($rows8 > 0 )
{
while($row8=mysqli_fetch_array($result8))
{
echo $scor1=$row8['scor'];
 }}
?></td><td   >
						 <label class="control-label" for="inputSuccess">
 
						 <? echo $row9['Written']-$scor1; ?></td>
                        <td   >
                        <p align="center"> <? echo $row9['scor']; ?>
						 </td>
 
                      </tr>
                    <? }} ?>
              
                    </tbody>
                     
                  	</form>

                     
                  </table>
                  
                  
                  
                  
  <table id="example11" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						#</th>
                         <th><p align=center>الفئة  </th>
                         
                         <th><p align=center>اجابة الطالب</th>
                         <th><p align=center>الدرجة</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query8 = "select * from test,questions   where test.cors_ID='$cors_ID' and ID_reg='$ID_reg' and test.question_ID=questions.question_ID and que_type!='Writing'";
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
						<? echo $row8['section']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
						
 
                        <td align="center"> 
						<? echo $row8['stu_choice']; ?></td>
						<td>  
						
<? if($row8[que_type]=='Writing') { ?> <? echo $row8['scor'];   ?>

<? } else { echo round($row8['scor']*(50/$co1),2); } ?>



</td>
                      	</form>

                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table><? //} ?>
  
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
 for($i=0;$i<$C;$i++) { 
 $question_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['question_ID'][$i], ENT_QUOTES, "utf-8")); 
 $Answer= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Answer'][$i], ENT_QUOTES, "utf-8")); 
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $R= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R'.$i], ENT_QUOTES, "utf-8") ); 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
 $stu= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stu'], ENT_QUOTES, "utf-8")); 
 
 $section= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section'][$i], ENT_QUOTES, "utf-8")); 

if($R==$Answer)
$scor=1;
else
$scor=0;
$totalscor=$totalscor+$scor;

$sql="insert into test set user_ID='$stu',cors_ID='$cors_ID',question_ID='$question_ID',Answer='$Answer',stu_choice='$R',scor='$scor',ID_reg='$ID_reg',que_type='$section' ";
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

$sql="update stu_sec set  Written='$totalscor',scor=Attendance+Quizzes+Participation+Listening+Reading+Workbook+Lab+Written    where ID_reg='$ID_reg' ";
if(mysqli_query($conn,$sql))
{
}


}
}
?>