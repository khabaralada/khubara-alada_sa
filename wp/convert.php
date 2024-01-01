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
<title>                             البحث عن متدرب
</title>
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
<h1><small>                           البحث عن متدرب

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 

 
 
  <form action="" method=post>
<div class="input-group input-group-sm col-lg-4" dir=ltr>
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-Warning btn-sm"><i class='fa fa-filter btn-sm' dir=ltr></i></button>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control"   required="required"  value="<?php echo $_POST['find']; ?>" name="find" dir=rtl 
                    placeholder="بحث بالمستخدم">
                  </div>
</form> 
                
                
                  <table id="example2" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>

                      
 <th align="right"><p align="center">#</th>
 <th align="right"><p align="center">الدورة</th>
 <th align="right"><p align="center">المتدرب</th>
 <th align="right"><p align="center">الجوال</th>

<th align="right"><p align="center">الحالة </th>
<th align="right"><p align="center">التاريخ</th>
<th align="right"><p align="center">الوقت</th>
 <th align="right"><p align="center">المسوق</th>
 <th align="right"><p align="center">تحويل</th>
 <th align="right"><p align="center">Email</th>
 <th align="right"><p align="center">الملاحظات</th>
<th><p align="center">الحالة
<th><p align="center">حالة الدفع
<th><p align="center">رقم العملية
 
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     	    $ss=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['no']), ENT_QUOTES, "utf-8")); 

include ("../config.php");

 if($_POST[find]!="")
{
if($_SESSION['acount_type']==1)
$query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no  and cors.cors_ID=subjects.cors_ID and address=cors.ID  and (name like '%$_POST[find]%' or mobile='$_POST[find]' or iqama='$_POST[find]')";
 

elseif($_SESSION['acount_type']==3)
$query = "select * from user_crm,reg_cors,user_cors,subjects,cors
where user_crmBranches='$_SESSION[Branches]' and user_crm.ID=user_cors.user_ID and user_cors.cors_ID=reg_cors.no  and cors.cors_ID=subjects.cors_ID and address=cors.ID  and (reg_cors.name like '%$_POST[find]%' or reg_cors.mobile='$_POST[find]' or reg_cors.iqama='$_POST[find]')";
}
else
{

$query = "select * from user_crm,reg_cors,user_cors,subjects,cors
where user_crmBranches='$_SESSION[Branches]' and user_crm.ID=user_cors.user_ID and user_cors.cors_ID=reg_cors.no  and cors.cors_ID=subjects.cors_ID and address=cors.ID  and (  reg_cors.iqama='11')";
}
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
 
                         <td align="right"><p align="center"><?php $C++; echo $C; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['cors_name']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['name']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['mobile']; ?></td> 

                        <td align="right"><p align="center">
                            <?php if($row['Supervisor']==0) echo '<font color=#00ffdd><i class="fa fa-circle fa-2x" aria-hidden="true" ></i></font>'; ?>
                            <?php if($row['Supervisor']==1) echo '<font color=green><i class="fa fa-thumbs-up  fa-2x" aria-hidden="true" ></i></font>'; ?>
							<?php if($row['Supervisor']==2) echo '<font color=red><i class="fa fa-thumbs-down fa-2x" aria-hidden="true" ></i></font>'; ?>
							<?php if($row['Supervisor']==3) echo '<font color=blue><i class="fa  fa-times fa-2x" aria-hidden="true" ></i></font>'; ?>
							<?php if($row['Supervisor']==4) echo '<font color=red><i class="fa fa-phone fa-2x" aria-hidden="true" ></i></font>'; ?>  
							<?php if($row['Supervisor']==5) echo '<font color=#8e0000><i class="fa fa-ban fa-2x" aria-hidden="true" ></i></font>'; ?>  
							<?php if($row['Supervisor']==6) echo '<font color=red><i class="fa fa-money fa-2x" aria-hidden="true" ></i></font>'; ?>  
							<?php if($row['Supervisor']==7) echo '<font color=green><i class="fa fa-user fa-2x" aria-hidden="true" ></i></font>'; ?> 
							<?php if($row['Supervisor']==8) echo '<font color=red><i class="fa fa-inbox fa-2x" aria-hidden="true" ></i></font>'; ?></td> 
                      <?php 
                      $now=date('Y-m-d H:i:s');
                      $cdate=$row['date'].' '.$row['time'];
                     $end_date = date("Y-m-d H:i:s", strtotime('+2 days', strtotime($cdate)));
                      if($end_date>=$now) { ?>
                       
                        <td align="right" bgcolor=#99FF99><p align="center"><?php echo $row['date']; ?></td> 
                        <td align="right" bgcolor=#99FF99><p align="center"><?php echo $row['time']; ?></td> 
 <?php } else { ?>
                        <td align="right"  bgcolor=#FF0066><p align="center"><?php echo $row['date']; ?></td> 
                        <td align="right"  bgcolor=#FF0066><p align="center"><?php echo $row['time']; ?></td> 
 <?php } ?>                       
                         <td align="right"><p align="center">
<?php 
$query1 = "select * from user_crm where user_crm.ID='$row[user_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $names=$row1['name'];
}
 ?></td> 
 
  <td   width=2><p align="center">
 <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModaEdit<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-plus"></i> </a>
 

</td>

<td   width=2><p align="center">
 <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModamail<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-Danger btn-sm   "><i class="fa fa-envelope-o"></i> </a>
 

</td>
 
   <td   width=2><p align="center">
<a href="notes.php?no=<?php echo $row['no']; ?>"  target=_blank>
 <i class="fa fa-pencil btn btn-info btn-sm"> <?php 
$query1 = "select count(*) as co from notes where Research_ID='$row[no]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
 ?></i></a></td>
 											
<td align="center"   >

																			 <?php echo $row['message']; ?></td>

											


											<td align="center"   >
											<?php
if($row['status']=="failed") echo '<font color="#FF0000">فشلت عملية الدفع</font>'; 
if($row['status']=="paid") echo '<font color="green">عملية الدفع مقبولة</font>';  ?> 

																			  </td>

											


											<td align="center"   >

																			 <?php echo $row['payment']; ?></td>
                       
                      </tr>
                       <div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['no']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">بيانات المتدرب : <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="id1"   size="20"   value="<?php echo $row['no']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
<div class="form-group col-lg-6">
 <label>اسم المتدرب</label> <input  name="fullname"  size="20"    value="<?php echo $row['name']; ?>"   class="form-control"    >   
</div>
                    
                    
                    
                  
<div class="form-group col-lg-6">
 <label>الهوية الوطنية</label><input  name="iqama"   size="20"    value="<?php echo $row['iqama']; ?>"   class="form-control"    >  
</div>
                    
 <div class="form-group col-lg-6">
 <label>المؤهل</label><input  name="qualification"   size="20"    value="<?php echo $row['qualification']; ?>"   class="form-control"    >   
</div>
                    
                    
                    
                  
<div class="form-group col-lg-6">
 <label>الجنسية</label> <input  name="nat"   size="20"    value="<?php echo $row['nat']; ?>"   class="form-control"    > 
</div>

<div class="form-group col-lg-6">
 <label>البريد الالكتروني</label> <input  name="email"   size="20"    value="<?php echo $row['mail']; ?>"   class="form-control"    > 
</div>
 
<div class="form-group col-lg-6">
 <label>الجوال</label><input  name="phone"   size="20"    value="<?php echo $row['mobile']; ?>"   class="form-control"    >  
</div>

<div class="form-group col-lg-12">
 <label>الدورة </label>
 <select  name="cors" class="form-control" required="">
                           <option value="<?php echo $row['ID']; ?>"><?php echo $row['cors_name']; ?></option>

                          <option value="">الدورة التدريبية</option>
<?php
$result1=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1 ");
while($row1=mysqli_fetch_array($result1))
{

?>
                          <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['cors_name']; ?></option>
 <?php } ?>
                        </select>
                          
</div>
<div class="form-group col-lg-6">
 <label>تاريخ بداية الدورة </label> : <br> <?php echo $row['start_date_en']; ?> م  -  (<?php echo $row['start_date']; ?> هـ  )
</div>
 

<div class="form-group col-lg-6">
 <label>تاريخ نهاية الدورة </label> : <br> <?php echo $row['end_date_en']; ?> م  - (<?php echo $row['end_date']; ?> هـ )
</div>
 
                   
 
<div class="form-group col-lg-6">
 <label>تاريخ التسجيل</label> : <br> <?php echo $row['dates']; ?>  
</div>
<div class="form-group col-lg-12">
 <label>ملاحظات </label> <input  name="eqt"   size="20"    value="<?php echo $row['eqt']; ?>"   class="form-control"    >  
</div>

<div class="form-group col-lg-12">
 <label>المسوق  </label> 
 
 <select  name="user_cors" class="form-control" required="">
                           <option value="<?php echo $row[user_ID]; ?>"><?php echo $names; ?></option>

                          <option ></option>
<?php
if($_SESSION['acount_type']==1)
$result1=mysqli_query($conn,"select* from user_crm  ");
else
$result1=mysqli_query($conn,"select* from user_crm where user_crmBranches='$_SESSION[Branches]' ");
while($row1=mysqli_fetch_array($result1))
{

?>
                          <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['name']; ?></option>
 <?php } ?>
                        </select>
                        
 
</div>



                    
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    
<input type="submit" class="btn btn-success " value="تعديل" name="edit1"> 
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          
          
          
          <div class="example-modal">
            <div class="modal" id="myModamail<?php echo $row['no']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">ارسال بريد للمتدرب : <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="id2"   size="20"   value="<?php echo $row['no']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
<div class="form-group col-lg-6">
 <label>اسم المتدرب</label> : <?php echo $row['name']; ?> <input  type=hidden name="fullname"  size="20"    value="<?php echo $row['name']; ?>"   class="form-control"    >   
</div>
                    
                    
                    
                  
<div class="form-group col-lg-6">
 <label>الهوية الوطنية</label> : <?php echo $row['iqama']; ?>  
</div>
                    
  
                    
                    
                    
                  
 

<div class="form-group col-lg-6">
 <label>البريد الالكتروني</label>  : <?php echo $row['mail']; ?> <input type=hidden  name="mail"   size="20"    value="<?php echo $row['mail']; ?>"   class="form-control"    > 
</div>
 
<div class="form-group col-lg-6">
 <label>الجوال</label> : <?php echo $row['mobile']; ?>  
</div>

<div class="form-group col-lg-12">
 <label>الدورة </label> : <?php echo $row['cors_name']; ?>
 
 <input type=hidden  name="cors"   size="20"    value="<?php echo $row['cors_name']; ?>"   class="form-control"    > 

 
 
 
                    
                </div>
                
 <div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess">       الرد</label> :
 
                      
                      <input  name="replay"  size="20"     required="required"    value="" class="form-control" >
                      
                      
                    </div> 
               
                
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    
<input type="submit" class="btn btn-success " value="ارسال بريد" name="send"> 
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>

                     <?php }} ?>

                    </tbody>
                     
                  </table>
                </div><!-- /.box-body -->
              </div>
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

    </div><!-- ./wrapper -->
  </body>
</html>
    </div><!-- ./wrapper -->
  </body>
</html>
<?php

if (isset($_POST['edit1'])) {
	   	    $name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['fullname'], ENT_QUOTES, "utf-8")); 
	       $phone= mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8")); 
	       $cors = mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8")); 
	        $eqt= mysqli_real_escape_string($conn,htmlspecialchars($_POST['eqt'], ENT_QUOTES, "utf-8")); 
	   	    $company= mysqli_real_escape_string($conn,htmlspecialchars($_POST['company'], ENT_QUOTES, "utf-8")); 
	   	    $email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8")); 
	   	    $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
	   	    $nat= mysqli_real_escape_string($conn,htmlspecialchars($_POST['nat'], ENT_QUOTES, "utf-8")); 
	   	    $qualification= mysqli_real_escape_string($conn,htmlspecialchars($_POST['qualification'], ENT_QUOTES, "utf-8")); 
	   	    
	   	     $id1 = mysqli_real_escape_string($conn,$_POST['id1']); 


	   	    $com= mysqli_real_escape_string($conn,htmlspecialchars($_POST['com'], ENT_QUOTES, "utf-8")); 
	   	    $user_cors= mysqli_real_escape_string($conn,htmlspecialchars($_POST['user_cors'], ENT_QUOTES, "utf-8")); 



	    $sql="update reg_cors set  name='$name',mobile='$phone',eqt='$eqt',address='$cors',mail='$email',iqama='$iqama',
	    nat='$nat',qualification='$qualification' where no='$id1'";
	    
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}


    $sql="update user_cors set  user_ID='$user_cors'  where cors_ID='$id1'";
	    
if(mysqli_query($conn,$sql))
{
}



}

 
 if(isset($_POST['send'])) {
 
 $mail= mysqli_real_escape_string($conn,$_POST['mail']); 
 
 
 $replay= mysqli_real_escape_string($conn,$_POST['replay']); 
 
 $cors= mysqli_real_escape_string($conn,$_POST['cors']); 
 

$sql="insert into notes set amount='',Paid='',Status='',Notes='ارسل رسالة للمتدرب : $replay',date=CURDATE(),time='$time',user_ID='$_SESSION[user_ID]',Research_ID='$_GET[no]'";
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

 
 	   $message .= "\n  الدورة المسجل بها<br>"; 
 	   $message .= "\n  ".$cors.'<br>'; 
	   $message .= "\n---------------<br>" ; 

	   $message .= $replay.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع ".$site_name."<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<br><center><img src=".$site_url."/logo.png></center>" ;
				 
		   $to = $site_email;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = $site_name;
   
	   // Additional headers
	   $name1=$site_name;
	   $headers .= 'To: '.$name.' <'.$mail.'>' . "\r\n";
	   $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";  

									   
	   @mail($to, $subject, $message, $headers);  
 
}

 

?>