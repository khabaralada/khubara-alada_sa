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

                    الاختبارات الالكترونية لدورة / مستوى :  <?
include ("conn.php");
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 

$query = "select * from subjects where cors_ID='$cors_ID'  ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
echo $row['cors_name'];
 }}
?></small></h1>
</section>

 

 

 



<section class="content" dir=ltr>
<?
$cou=0;
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 

$query= "select * from test where cors_ID='$cors_ID' and user_ID='$_SESSION[user_ID]' ";
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
 
<form method="POST" action="">
                     <?
                      $C=0;
                      $i=0;

include ("conn.php");
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 
 $query = "select * from questions   where cors_ID='$cors_ID'  ORDER BY RAND() LIMIT 60 ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
 $C++;
?>

<div class="box box-info">
<div class="box-body">

 

<div class="row">
<div class="form-group col-lg-12      ">
<input type=hidden  name="question_ID[]" value="<? echo $row['question_ID']; ?>" >
<input type=hidden  name="Answer[]" value="<? echo $row['Answer']; ?>" >
<input type=hidden  name="cors_ID[]" value="<? echo $row['cors_ID']; ?>" >
<label>
<p dir="ltr" class="bg-green" align="left"><? $c++; echo $c; ?> : <? echo $row['question']; ?>  </label>
</div>
     
<? if($row['img']!='-1.' and $row['img']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
<img src="attachment/<? echo $row['img']; ?>">                
</label>
</div>
 <? } ?>
                
<? if($row['sound']!='-1.' and $row['sound']!='') { ?>                    
<div class="form-group col-lg-12 ">
<label>
                    
 <audio controls>
  <source src="attachment/<? echo $row['sound']; ?>" type="audio/ogg">
  <source src="attachment/<? echo $row['sound']; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>                 
</label>
</div>
 <? } ?>
                    
 
 <? if($row['choice1']!="") { ?>
<div class="form-group col-lg-6 ">
<input   type=radio name="R<? echo $C-1; ?>"    required="required"   value="<? echo $row['choice1']; ?>"   ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice1']; ?></label>
 </div>
 <? } ?>
 <? if($row['choice2']!="") { ?>
<div class="form-group col-lg-6 ">
<input   type=radio name="R<? echo $C-1; ?>"    required="required"    value="<? echo $row['choice2']; ?>" ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice2']; ?></label>
 </div>
 <? } ?>
 <? if($row['choice3']!="") { ?>
<div class="form-group col-lg-6 ">
<input   type=radio name="R<? echo $C-1; ?>"    required="required"   value="<? echo $row['choice3']; ?>"  ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice3']; ?></label>
 </div>
 <? } ?>
 <? if($row['choice4']!="") { ?>
<div class="form-group col-lg-6 ">
<input   type=radio name="R<? echo $C-1; ?>"    required="required"    value="<? echo $row['choice4']; ?>" ><label>&nbsp;&nbsp;&nbsp;<? echo $row['choice4']; ?></label>
 </div>
 <? } ?>
 
 </div>
 
 
  </div>
</div>        

 <? } } ?>           
                     
<input type="submit" value="انهاء الاختبار" name="B1" onclick="return confirm('هل تريد انهاء الاختبار ؟')"   class="btn btn-primary" style="float: left">

                </div>
          

  </form><? } else { ?>
  
<div class="box box-info">
<div class="box-body">
<div class="row">
<div class="form-group col-lg-12      ">

  <p dir="rtl"><font color="#FF0000"><b>تم انهاء الاختبار
  درجة الاختبار ( <? echo  $scors; ?> )
  
  
  </b></font></p>
  
  
  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						#</th>
                         <th><p align=center>السؤال  </th>
                         
                         <th><p align=center>اجابة الطالب</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 

$query8 = "select * from test,questions   where test.cors_ID='$cors_ID' and user_ID='$_SESSION[user_ID]' and test.question_ID=questions.question_ID";
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
						 <? echo $row8['question']; ?> </td>
                        <td align="center"> 
						<? echo $row8['stu_choice']; ?></td>
                      	</form>

                      </tr>
                    <? }} ?>
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
 for($i=0;$i<$C;$i++) { 
 $question_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['question_ID'][$i], ENT_QUOTES, "utf-8")); 
 $Answer= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Answer'][$i], ENT_QUOTES, "utf-8")); 
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'][$i], ENT_QUOTES, "utf-8")); 
 $R= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R'.$i], ENT_QUOTES, "utf-8")); 
 

if($R==$Answer)
$scor=1;
else
$scor=0;
$totalscor=$totalscor+$scor;

$sql="insert into test set user_ID='$_SESSION[user_ID]',cors_ID='$cors_ID',question_ID='$question_ID',Answer='$Answer',stu_choice='$R',scor='$scor'";
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
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$sql="update stu_sec set  Written='$totalscor',scor=Attendance+Quizzes+Participation+Listening+Reading+Workbook+Lab+Written    where ID_reg='$ID_reg' ";
if(mysqli_query($conn,$sql))
{
}


}
}
?>