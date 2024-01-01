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
<title>ارسال مهمة جديدة</title>
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
<h1><small>ارسال مهمة جديدة </small></h1>
</section>

 



 
<section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="compose.php" class="btn btn-primary btn-block margin-bottom">ارسال مهمة جديدة</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"> </h3>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li ><a href="mailbox.php"><i class="fa fa-inbox"></i>  المهام الواردة<span class="label label-primary pull-right">         
                                                                   <?
include ("conn.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_delete=0 ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $co=$row1['Recepion'];
}
?></span></a></li>
                    <li ><a href="sent.php"><i class="fa fa-envelope-o"></i>   المهام المرسلة</a></li>
 
 
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
            <form method="POST" action="" enctype="multipart/form-data">
 
            <div class="col-md-9">
              <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
 
<div  id="img1"  style="cursor:pointer;" dir="rtl" /><font color="#FF0000"><b><span class="btn btn-primary" >إرسال إلي</span></b></font></div><br> 
 
 		<div id="one1"  style=" width:100%; margin:0 auto; background-color:fffffffff; border:0px solid #FFCC00;"><div style="padding:10px;">

<p dir="rtl">

<? 
$i=0;
$picnum = '0';
echo"<div  align='center'><hr> <table  dir='rtl'>"; 

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
<input name="checkbox[]" type="checkbox"    id="checkbox[]" value="<?php echo $i++;?>"  >&nbsp;&nbsp;<? echo $row['name']; ?>
<input class="form-control"  type="hidden" name="to[]" size="20" value="<?php  echo $row['ID']; ?>">
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
                    <input class="form-control"   name="Subject" placeholder="Subject: عنوان المهمة" dir="rtl"  />
                  </div>
                  <div class="form-group">
                    <textarea id="compose-textarea"  name="compose_textarea" class="form-control" style="height: 300px" dir="rtl" ></textarea>
                  </div>
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-paperclip"></i> Attachment
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
require_once('include/phpmailer/PHPMailerAutoload.php');

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
$sql="insert into inbox set message='$compose_textarea',Recepion='{$_POST['to'][$i]}',address='$Subject',Sender='$_SESSION[user_ID]',Attachment='$name1' ";
if(mysqli_query($conn,$sql))
{
    $last_id = mysqli_insert_id($conn);

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



?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
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