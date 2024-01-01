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
<title>Inbox - صندوق البريد</title>
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
<h1><small>صندوق المهام</small></h1>
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
                    <li class="active"><a href="mailbox.php"><i class="fa fa-inbox"></i> المهام الواردة<span class="label label-primary pull-right">        
                                                                   <?
include ("conn.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_delete=0 ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $co=$row1['Recepion'];
}
?></span></a></li>
                    <li><a href="sent.php"><i class="fa fa-envelope-o"></i> المهام المرسلة</a></li>
 
 
                    <li><a href="trash.php"><i class="fa fa-trash-o"></i> Trash - المحذوفات<span class="label label-waring pull-right"> <?
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
            <form method="POST" action="">
  <?
include ("conn.php");
$i=0;
   $msg_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['msg_ID']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from  inbox    where msg_ID='$msg_ID'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?> 
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
            
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3><font face="Droid Arabic Kufi"><? echo $row1['address']; ?></font></h3>
                    <h5>From: <font face="Droid Arabic Kufi"> <?
$query11 = "select * from  user   where ID='$row1[Sender]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 echo $row11['name'];
}

$msg=$row1['message'];
?> 


<input type="hidden" name="msg_ID" size="20" value="<? echo $row1['msg_ID']; ?>">


</font> <span class="mailbox-read-time pull-right"> <? echo $row1['date']; ?></span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
<button    type=submit name="del" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <a href="reply.php?msg_ID=<? echo $row1['msg_ID']; ?>"class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
                      <a href="forward.php?msg_ID=<? echo $row1['msg_ID']; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i class="fa fa-share"></i></a>
                    </div><!-- /.btn-group -->
                    <button  class="btn btn-default btn-sm" data-toggle="tooltip"  onclick ='window.print();return false' title="Print"><i class="fa fa-print"></i></button>
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    <? echo  nl2br($row1['message']); ?></p>
 
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                



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
                          1,245 KB
                          <a href="attachment/<? echo $row11['Attachment']; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                      </div>
                    </li><? } ?>

                     
                     
                     
                  </ul>
                </div><!-- /.box-footer -->
                <div class="box-footer">
                  <div class="pull-right">
                    <a href="reply.php?msg_ID=<? echo $row1['msg_ID']; ?>" class="btn btn-default"><i class="fa fa-reply"></i> Reply  </a>
                    <a href="forward.php?msg_ID=<? echo $row1['msg_ID']; ?>"  class="btn btn-default"><i class="fa fa-share"></i> Forward</a>
                  </div>
                  <button   class="btn btn-default" name="del" type=submit ><i class="fa fa-trash-o"></i> Delete</button>
                  <button    class="btn btn-default" onclick ='window.print();return false'><i class="fa fa-print" ></i> Print</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><? } } ?>
			</form>

			<!-- /.col -->
          </div><!-- /.row -->
        </section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
          } else {
            //Check all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");          

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>
  </body>
</html>

  	<?

include ("conn.php");
if(isset($_POST[del]))
{
 
 $msg_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['msg_ID'], ENT_QUOTES, "utf-8")); 
 
$sql="update inbox set msg_delete='1' where msg_ID='$msg_ID'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=mailbox.php"><?
 
 
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

 }
}



?>