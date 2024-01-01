<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("../config.php");
$query9 = "select * from web_settings";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
 $site_name=$row9['site_name'];
 $site_name_en=$row9['site_name_en'];
 $site_mobile=$row9['site_mobile'];
 $site_email=$row9['site_email'];
 $site_address=$row9['site_address'];
 $site_address=$row9['site_address_en'];
 $site_url=$row9['site_url'];
 $secretKey=$row9['secretKey'];
 $sitKey=$row9['sitKey'];
 $site_map=$row9['site_map'];
  
}
  

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>طلبات الاتصال</title>
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
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>  طلبات الاتصال
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
          
          

        
<table id='example2'  class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right"><p align="center">#</th>
                        <th align="right"><p align="center">الاسم</th>
                        <th align="right"><p align="center">الجوال</th>
                        <th align="right"><p align="center">البريد الالكتروني</th>
                        <th align="right"><p align="center">التاريخ</th>
 
 
                        <th align="right" colspan="2" ><p align="center"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("../config.php");

$find=$_POST['find'];
 
$query = "select* from eqt order by dates DESC ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php $c++; echo $c; ?></td>
                        <td align="right"><p align="center"><?php echo $row['name']; ?></td>
						<td align="right"><p align="center"><?php echo $row['mobile']; ?></td>						
						<td align="right"><p align="center"><?php echo $row['mail']; ?></td>						
						<td align="right"><p align="center"><?php echo $row['dates']; ?></td>						

                        <td align="center" width=2>
                        <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModaEdit<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-print"></i> </a>
</td>
                        <td align="center" width=2>
                                                <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModaDelete<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
</td>
                      	</form>
                      </tr>
                     



                      <div class="example-modal">
            <div class="modal" id="myModaDelete<?php echo $row['no']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<?php echo $row['no']; ?>" required="required"   class="form-control"  >

                  </div>
                  <div class="modal-body">
                  
<div class="row">
<div class="form-group col-lg-12">
<b><label>هل تريد حقًا حذف هذه البيانات ؟</label></b>
<input  type=hidden type="text" name="id" id="bookId" value=""/>
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
          
          
          <div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['no']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">استعراض الرسالة : <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<?php echo $row['no']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
 
                    
                    
                    
 
                    
<div class="form-group col-lg-6">
                      <label>  الاسم</label>: <?php echo $row['name']; ?>
 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       الجوال</label>: <?php echo $row['mobile']; ?>
                      
                      
                    </div>
                    
                    
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       البريد الالكتروني</label>:<?php echo $row['mail']; ?>
                      <input   type=hidden name="mail"  size="20"     required="required"    value="<?php echo $row['mail']; ?>" class="form-control" >
                      <input   type=hidden name="T1"  size="20"     required="required"    value="<?php echo $row['name']; ?>" class="form-control" >

                      
                      
                    </div>
                    
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       التاريخ</label>:<?php echo $row['dates']; ?>
                      
                      
                    </div>
                    
                    

                    <div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess">      الرسالة</label> :
 
                      
<?php echo $row['eqt']; ?>    
					<input  type=hidden name="msg"   size="20"   value="<?php echo $row['eqt']; ?>" required="required"   class="form-control"  >
                  
                      
                    </div> 
                    <div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess">       الرد</label> :
 
                      
                      <input  name="replay"  size="20"     required="required"    value="<?php echo $row['replay']; ?>" class="form-control" >
                      
                      
                    </div> 
  
  

 


 
                   
                     
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="ارسال" name="edit">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
<?php 
}
} 
?>
                    </tbody>
                     
                  </table>
                  
                
                  
 

 

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?php
  require_once('../include/phpmailer/PHPMailerAutoload.php');
 
 if(isset($_POST['edit'])) {
 
 $email= mysqli_real_escape_string($conn,$_POST['mail']); 
 $iddd = mysqli_real_escape_string($conn,$_POST['iddd']); 
 
 $replay= mysqli_real_escape_string($conn,$_POST['replay']); 
 $T1= mysqli_real_escape_string($conn,$_POST['T1']); 
 $msg= mysqli_real_escape_string($conn,$_POST['msg']); 
 

$sql="update 	eqt set replay='$replay'  where no='$iddd'";
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

 
 	   $message .= "\n ".$msg.'<br>'; 
	   $message .= "\n---------------<br>" ; 

	   $message .= $replay.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع ".$site_name."<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<br><center><img src=".$site_url."/logo.png></center>" ;
				 
		   $to = $site_email;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'الرد على الرسالة';
   
	   // Additional headers
	   $name1=$site_name;
	   $headers .= 'To: '.$name.' <'.$email.'>' . "\r\n";
	   $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";  

									   
	   @mail($to, $subject, $message, $headers);  
 
}

elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,$_POST['idd']); 

$sql="delete from 	eqt  where no='$idd'";
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