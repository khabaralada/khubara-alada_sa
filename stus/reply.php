<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");

?>
<?
 


$siteurl="nahtonline.com	"; //رابط الموقع
$sitename="nahtonline.com	";    //إسم الموقع
$webmaster_email=$_SESSION['email']; //بريد ادارة الموقع
?>
<!DOCTYPE html>
<html>
<head>
<script src="jquery.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
<? for($x=1;$x<=10;$x++) { ?>
		$("#one<? echo $x; ?>").hide();
		<? } ?>
 

	<? for($x=1;$x<=10;$x++) { ?>
	$("#img<? echo $x; ?>").click(function(){

<? for($xx=1;$xx<=10;$xx++) { ?>

$("#one<? if($xx!=$x)echo $xx; ?>").hide();
<? } ?>
 

			if ($("#one<? echo $x; ?>").is(":hidden")){
				$("#one<? echo $x; ?>").slideDown();
			}
			else
			{
				$("#one<? echo $x; ?>").slideUp();
			}
		});

		<? } ?>
		
});
	</script>
<meta charset="UTF-8">
<title>رد الكل    </title>
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
<h1><small>رد الكل     </small></h1>
</section>

 



 
<section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="compose.php" class="btn btn-primary btn-block margin-bottom">
				ارسال مهمة جديدة</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"> </h3>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li ><a href="mailbox.php"><i class="fa fa-inbox"></i> المهام الواردة<span class="label label-primary pull-right">         
                                                                   <?
include ("conn.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_delete=0 ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $co=$row1['Recepion'];
}
?></span></a></li>
                    <li ><a href="sent.php"><i class="fa fa-envelope-o"></i> المهام المرسلة</a></li>
 
 
                    <li class="active"><a href="trash.php"><i class="fa fa-trash-o"></i> Trash - المحذوفات<span class="label label-waring pull-right"> <?
include ("conn.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_delete=1 ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $co=$row1['Recepion'];
}
?></span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
               <!-- /.box -->
            </div><!-- /.col -->
                 <?
include ("conn.php");
$i=0;
  $msg_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['msg_ID']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from  inbox,user   where user.ID=inbox.Recepion    and msg_ID='$msg_ID'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>             <form method="POST" action="" enctype="multipart/form-data">
 
             <div class="col-md-9">
              <div class="box box-primary">
               <!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
 
<div  id="img1"  style="cursor:pointer;" dir="rtl" /><span class="btn btn-primary"  >إرسال إلي</span> : 
<? 
$query11 = "select * from  user   where ID='$row1[Recepion]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 echo $row11['name'];
}
?>
</div><br> 
 
 		<div id="one1"  style=" width:100%; margin:0 auto; background-color:fffffffff; border:0px solid #FFCC00;"><div style="padding:10px;">


<? 
$i=0;
$picnum = '0';
echo"<div  align='center'> <table  dir='rtl'>"; 

$acount_type=$row['type'];
 
 if($_SESSION['acount_type']!=5 )   
$query = "select * from user  order by name ";
else
$query = "select * from user  where Branches=0 and acount_type in (1,3,4) ";

 
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
        ++$picnum; 
        if($picnum=="3"){ 
        $picnum="0";
        $down = "<tr></tr>";
        }else{
        $down = "";
        }
 echo "<td>";
?>

<? 
if($row1[ID]==$row[ID]) 
$ch='checked';
else
$ch='';

 ?> 


<input name="checkbox[]" type="checkbox"    <? echo $ch; ?> id="checkbox[]" value="<?php echo $i++;?>"  >&nbsp;&nbsp;<? echo $row['name']; ?>
<input class="form-control"  type="hidden"  name="to[]" size="20" value="<?php  echo $row['ID']; ?>">
<?
echo $down;
echo "</td>";

}
}
echo "</table>";

?>
</div>
</div>
                   
 </div>
                  <div class="form-group">
                    <input class="form-control"   required       name="Subject" placeholder="Subject: عنوان الرسالة" dir="ltr" value="Re:<? echo str_replace(array('Fw:','Re:'), array('',''),$row1['address']); ?>"      />
                  </div>
                  <div class="form-group">
<textarea id="compose-textarea"  name="compose_textarea" class="form-control" style="height: 300px"  >

-
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ 
From:  <?
$query11 = "select * from  user   where ID='$row1[Sender]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 echo $row11['name'];
}
?>  
Sent : <? echo $row1['date']; ?> 

To :<?
$query11 = "select * from  user   where ID='$row1[Recepion]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 echo $row11['name'];
}

$msg=$row1['message'];
?> 

Subject :  <? echo $row1['address']; ?> 
 
<? echo $row1['message']; ?></textarea>
                  </div>
                  
<ul class="mailbox-attachments clearfix">
<?
$coM=0;
$query11 = "select * from  attachment where msg_ID='$row1[msg_ID]' and Attachment!='-1.'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
   $coM=$row11['coM'];
?> <li>
                      <span class="mailbox-attachment-icon">
                      <? if($row11['extension']=='pdf') echo '<i class="fa fa-file-pdf-o"></i>';
                      elseif($row11['extension']=='doc') echo '<i class="fa fa-file-word-o"></i>';
                      elseif($row11['extension']=='docx') echo '<i class="fa fa-file-word-o"></i>';
                      elseif($row11['extension']=='xls') echo '<i class="fa fa-file-excel-o"></i>';
                      elseif($row11['extension']=='xlsx') echo '<i class="fa fa-file-excel-o"></i>';
                      elseif($row11['extension']=='png') echo '<i class="fa fa-file-picture-o"></i>';
                      else
                         echo '<i class="fa fa-file "></i>';
 ?>
                      </span>
                      <div class="mailbox-attachment-info">
                        <a href="attachment/<? echo $row11['Attachment']; ?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i><? echo substr($row11['Attachment'],1,25); ?></a>
                        <span class="mailbox-attachment-size">
                          .
                          <a href="attachment/<? echo $row11['Attachment']; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                      </div>
                    </li><? } ?>

                     
                     
                     
                  </ul>                  
                  
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-paperclip"></i> New Attachment
                      <input    type="file" name="myFile[]" multiple/>
                    </div>
                    <p class="help-block"> </p>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
 
                    <button   type="submit" name="send" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ارسال</button>
                  </div>
                  <button    class="btn btn-default"><i class="fa fa-times"></i> الغاء</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div>
			</form>
<? } } ?>

			<!-- /.col -->
          </div><!-- /.row -->
        </section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->         <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
 
    <!-- AdminLTE for demo purposes -->
 
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script> </body>
</html>
  	<?

include ("conn.php");
if(isset($_POST[send]))
{
 
  $filecount = count($_FILES['myFile']['name']);
  define("UPLOAD_DIR", "attachment/");




 $compose_textarea= mysqli_real_escape_string($conn,htmlspecialchars($_POST['compose_textarea'], ENT_QUOTES, "utf-8")); 
 $to=mysqli_real_escape_string($conn,htmlspecialchars($_POST['to'], ENT_QUOTES, "utf-8")); 
 $Subject= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Subject'], ENT_QUOTES, "utf-8")); 
 
 
 
if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$time=date('H:i:s');
$sql="insert into inbox set message='$compose_textarea',Recepion='{$_POST['to'][$i]}',address='$Subject',Sender='$_SESSION[login_user]',Attachment='$name1' ";
if(mysqli_query($conn,$sql))
{
    $last_id = mysqli_insert_id();


 $too=$_POST['to'][$i];


$query1 = "select * from user   where ID='$too' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $customer_email=$row1['email'];
$customer_name=$row1['name'];
}
  		//$subject = "لديك مهمة جديدة    ";
  		$message = "$compose_textarea  ";
$headers .= "From:  <$webmaster_email>\r\n".
           		'MIME-Version: 1.0' . "\r\n".
            	"Content-type: text/html ; charset=utf-8 \n";
@mail($customer_email, $Subject, $message, $headers);



?><meta http-equiv="refresh" content="2;url=mailbox.php"><?
}

$sql="insert into attachment (msg_ID,Attachment,extension) select '$last_id',Attachment,extension from attachment  where msg_ID='$msg_ID'";
if(mysqli_query($conn,$sql))
{
}

 

  for ($i=0; $i<$filecount ; $i++) {
  $fileName = $_FILES['myFile']['name'][$i];
  $name = preg_replace("/[^A-Z0-9._-]/i", "_", $fileName );
  $ii = 0;
  $parts = pathinfo($name);
  while (file_exists(UPLOAD_DIR . $name)) {
      $ii++;
      $name = $parts["filename"] . "-" . $ii . "." . $parts["extension"];
  }
  move_uploaded_file($_FILES['myFile']['tmp_name'][$i],UPLOAD_DIR.$name);

$sql="insert into attachment set msg_ID='$last_id',Attachment='$name',extension='$parts[extension]' ";
if(mysqli_query($conn,$sql))
{
}
}

 

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