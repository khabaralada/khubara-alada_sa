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

 

<SCRIPT src="jquery-1.3.2.min.js" type=text/javascript></SCRIPT>

<script type="text/javascript">

	$(document).ready(function(){
<?php   for($x=1;$x<=100;$x++) { ?>
		
		<?php if($x==1) { ?>		$("#one<?php   echo $x; ?>").slideDown(); <? } else { ?>		$("#one<?php   echo $x; ?>").hide();  <? } ?>
		<?php   } ?>
 

	<?php   for($x=1;$x<=100;$x++) { ?>
	$("#img<?php   echo $x; ?>").click(function(){

<?php   for($xx=1;$xx<=100;$xx++) { ?>

$("#one<?php   if($xx!=$x)echo $xx; ?>").hide();
<?php   } ?>
 

			if ($("#one<?php   echo $x; ?>").is(":hidden")){
				$("#one<?php   echo $x; ?>").slideDown();
			}
			else
			{
				$("#one<?php   echo $x; ?>").slideUp();
			}
		});

		<?php   } ?>
		
		

 
		
 
 


});
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
$query = "select * from student  where  stu_id='$_SESSION[user_ID]'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 $mobile=$row['mobile'];
   $iqama=$row['iqama'];
  
  }
  
  $iqama2=0;
$query1 = "select * from open_test where  iqama='$iqama'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
   $iqama2=$row1['iqama'];
}


?></small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="nav-tabs-custom">

                <?php
   $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and subjects.cors_ID='$cors_ID'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
$section_Id=$row['section_Id'];
?>
<ul class="nav nav-tabs pull-right">
                  <li ><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  >المقدمة </a></li>
                  <li><a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المحاضرات </a></li>
                  <li ><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المصادر ومحتوى البرنامج </a></li>
                  <li  ><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >دليل الفيديو </a></li>
                  <li><a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>"  >الواجبات والأنشطة</a></li>
                  <li class="active"><a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المناقشات والرسائل </a></li>
                  <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?> <li><a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  >الاختبار النهائي </a></li>
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
                
     <?php }} ?>           
                
                
              </div>

 


 

 

 


 


<div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><b><? echo $row['cors_name']; ?></b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                  <p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> رسالة جديدة</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">رسالة جديدة</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
<div class="row">


 

<div class="form-group col-lg-12">
<label>المرسل </label>
<input  type=hidden name="section_Id"   size="20"   required="required"   class="form-control" value="<?php echo $section_Id; ?>"  >
<input  name="T1"    readonly size="20"   required="required"   class="form-control"  value="<?php echo $_SESSION['name']; ?>" >
</div> 

<div class="form-group col-lg-12">
<label>التعليق </label>
<textarea  name="T2"         class="form-control"  ></textarea></div> 

<div class="form-group col-lg-12">
<label>رابط الفيديو او المحتوي </label>
<input  name="T3"   size="20"      class="form-control"  >
</div> 


    <div class="form-group col-lg-6">
                      <label>المرفقات</label>
                      <input    type="file" name="myFile" size="20"  >
                       </div>
                       
                       
 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="اضافة" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                     <?php
 
$query1 = "select * from stu_mail where section_Id='$section_Id' order by ID DESC";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
$C++;
?>                    
                    
                    
                    <div class="panel box box-<?php if($row1['teacher_ID']>0) echo 'Warning '; else echo 'Danger '; ?>">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row1['ID']; ?> ">
                           <?php if($row1['teacher_ID']>0) { ?><i class="fa fa-user   text-red  "></i><?php } else { ?><i class="fa fa-graduation-cap  text-blue  "></i><?php } ?>
                           
                           
                             <b> <?php echo $row1['content_title']; ?>
                          </b>
                          </a>
                        </h4>
                      </div>
                      <div id="collapse<?php echo $row1['ID']; ?>" class="panel-collapse collapse  ">
                        <div class="box-body">




   <div class="row"> 
 <div class="form-group col-lg-8"><i class="fa  fa-circle"></i>  <?php echo $row1['description']; ?></div> 
 <div class="form-group col-lg-2"><label><?php if($row1['pdf']!='-1.') { ?><a href="attachment/<?php echo $row1['pdf']; ?>"  ><i class="fa fa-download    "></i> استعراض المرفق </a><?php } ?></label></div> 
 <div class="form-group col-lg-2"><label><?php if($row1['url']!='') { ?><a href="<?php echo $row1['url']; ?>"  ><i class="fa fa-paperclip    "></i> فتح الرابط </a></label><?php } ?></div> 
 
   <p align="left"> <?php if($_SESSION['user_ID']==$row1['stu_ID']) { ?>
                        <a href="" data-id="<?php echo $row1['ID']; ?>" data-target="#myModaEdit<?php echo $row1['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
                        <a href="" data-id="<?php echo $row1['ID']; ?>" data-target="#myModaDelete<?php echo $row1['ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
                        <?php } ?>
                        
                        
                        
                                                
                        <?php if($_SESSION['user_ID']==$row1['teacher_ID']) { ?>
                        <a href="" data-id="<?php echo $row1['ID']; ?>" data-target="#myModaEdit<?php echo $row1['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
                        <a href="" data-id="<?php echo $row1['ID']; ?>" data-target="#myModaDelete<?php echo $row1['ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
                        <?php } ?>
                        
   

</p>
                        
   

<div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row1['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                	<form role="form" action="" method="post" enctype="multipart/form-data">

                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row1['content_title']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 
                  
					<input  type=hidden name="idds"   size="20"   value="<?php echo $row1['ID']; ?>" required="required"   class="form-control"  >

<div class="row">


 

<div class="form-group col-lg-12">
<label>المرسل</label>
<input  name="T1"   size="20"   required="required"  readonly  class="form-control" value="<?php echo $row1['content_title']; ?>"  >
</div>  
<div class="form-group col-lg-12">
 
<label>التعليق</label>
<textarea  name="T2"         class="form-control"  ><?php echo $row1['description']; ?></textarea>
</div>  

<div class="form-group col-lg-12">
<label>رابط الفيديو او المحتوي</label>
<input  name="T3"   size="20"      class="form-control" value="<?php echo $row1['url']; ?>"  >
</div>  

 
 <div class="form-group col-lg-6">
<label>المرفقات</label>
<input    type="file" name="myFile" size="20"  >
</div>

</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ التغييرات" name="edit">
                    <input type="submit" class="btn btn-success " value="حفظ المرفقات" name="img">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          

 <div class="example-modal">
            <div class="modal" id="myModaDelete<?php echo $row1['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row1['content_title']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row1['ID']; ?>" required="required"   class="form-control"  >

                  </div>
                  <div class="modal-body">
                  
<div class="row">
<div class="form-group col-lg-12">
<b><label>هل تريد حقًا حذف هذه البيانات ؟</label></b>
 
</div>
</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-danger" value="حذف" name="delete">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>                      
  </div> 





 

                        </div>
                      </div>
                    </div>
                     
                     <?php }} ?>
                     
                     
                     
                     
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
             <!-- /.col -->
          </div></section>

 



</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>
          
<?php
if (isset($_POST['add'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $section_Id= mysqli_real_escape_string($conn,$_POST['section_Id']); 
 
 
    define("UPLOAD_DIR", "attachment/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
    $img= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($img);
    while (file_exists(UPLOAD_DIR . $img)) {
        $i++;
        $img= $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $img);
 
}

if($_SESSION['acount_type']==2) 
$sql="insert into stu_mail set content_title='$T1',description='$T2',url='$T3',pdf='$img',section_Id='$section_Id',teacher_ID='$_SESSION[user_ID]' ";
else
$sql="insert into stu_mail set content_title='$T1',description='$T2',url='$T3',pdf='$img',section_Id='$section_Id',stu_ID='$_SESSION[user_ID]' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}
elseif(isset($_POST['edit'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $ids = mysqli_real_escape_string($conn,$_POST['ids']); 
 $stop = mysqli_real_escape_string($conn,$_POST['stop']); 

$sql="update stu_mail set content_title='$T1',description='$T2',url='$T3'  where ID='$idds'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}



if (isset($_POST['img'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $section_Id= mysqli_real_escape_string($conn,$_POST['section_Id']); 
 
 
    define("UPLOAD_DIR", "attachment/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
    $img= preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($img);
    while (file_exists(UPLOAD_DIR . $img)) {
        $i++;
        $img= $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $img);
 
}

$sql="update    stu_mail set  pdf='$img'   where ID='$idds' ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}




elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,$_POST['idd']); 

$sql="delete from stu_mail  where ID='$idd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}
}

?>