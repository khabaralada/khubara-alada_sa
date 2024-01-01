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
<title>المهام المرسلة</title>
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
<h1><small>Trash - المحذوفات </small></h1>
</section>

 



 
<section class="content">
          <div class="row">
            <div class="col-md-3">
               <? if($_SESSION['acount_type']!=6) { ?>          
 <a href="compose.php" class="btn btn-primary btn-block margin-bottom">
				ارسال مهمة جديدة</a><? } ?>

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
            <form method="POST" action="">
 
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
 
                  <div class="box-tools pull-right">
                    
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
 
                    <div class="btn-group">
                      <button type=submit name="del" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
 
                    </div><!-- /.btn-group -->
                    <a href="trash.php" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
                    <!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                      
                                      <?
include ("conn.php");
$i=0;
$query1 = "select * from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>                     
                        <tr>
                          <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" /></td>
                          <td class="mailbox-star"><a href="#">                          <? if($row1['msg_read']==1) { ?><i class="fa fa-star-o  text-yellow"></i><? } ?>
                          <? if($row1['msg_read']==0) { ?><i class="fa fa-star    text-yellow"></i><? } ?>
</a></td>
                          <td class="mailbox-name"><a href="read-mail.php?msg_ID=<? echo $row1['msg_ID']; ?>"><?
$query11 = "select * from  user   where ID='$row1[Sender]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 echo $row11['name'];
}

$msg=$row1['message'];
$coM=0;
$query11 = "select count(*) as coM from  attachment where msg_ID='$row1[msg_ID]'  and Attachment!='-1.' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
   $coM=$row11['coM'];
}
?>
</a></td>
                          <td class="mailbox-subject"><b><a href="read-mail.php?msg_ID=<? echo $row1['msg_ID']; ?>"><? echo $row1['address']; ?></b> - <? echo substr($msg,0,100); ?> </a></td>
                          <td class="mailbox-attachment">  <? if($coM>0) { ?><i class="fa fa-paperclip"></i><? } ?></td>
                          <td class="mailbox-date"><? echo $row1['time']; ?><input type="hidden" name="msg_ID[]" size="20" value="<? echo $row1['msg_ID']; ?>"></td>
                        </tr><? }} ?>
                       
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
 
 
 

                    <div class="pull-right">
 
                       <!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div>
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
if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $msg_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['msg_ID'][$i], ENT_QUOTES, "utf-8")); 
 
$sql="update inbox set msg_delete='0' where msg_ID='$msg_ID'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

}
}
?>