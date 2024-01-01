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
  
$sql="insert into user_login set username='$_SESSION[username]',date=CURDATE(),time=NOW(),no='$_GET[no]'";
if(mysqli_query($conn,$sql))
{
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>دراسة الحالة</title>
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
<h1><small>دراسة الحالة     

</small></h1>
</section>

 

 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

<table id="example11" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>

                      
 <th align="right"><p align="center">#</th>
 <th align="right"><p align="center">الدورة</th>
 <th align="right"><p align="center">المدة</th>
 <th align="right"><p align="center">تاريخ البداية</th>
 <th align="right"><p align="center">المتدرب</th>
 <th align="right"><p align="center">الجوال</th>
 <th align="right"><p align="center">الجنسية</th>
 <th align="right"><p align="center">المؤهل</th>

<th align="right"><p align="center">الحالة </th>
<th align="right"><p align="center">التاريخ</th>
<th align="right"><p align="center">الوقت</th>
 <th align="right"><p align="center">المسوق</th>
 <th><p align="center">الحالة
<th><p align="center">حالة الدفع
<th><p align="center">رقم العملية

 <th align="right"><p align="center">التفاصيل</th>
 <th align="right"><p align="center">Email</th>

 
 
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     	    $ss=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['no']), ENT_QUOTES, "utf-8")); 

include ("../config.php");
$query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no  and cors.cors_ID=subjects.cors_ID and address=cors.ID  and reg_cors.no='$ss'";

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
                         <td align="right"><p align="center"><?php echo $row['contact_hours']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['start_date_en']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['name']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['mobile']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['nat']; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['qualification']; ?></td> 

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
 
 
 											
<td align="center"   >

																			 <?php echo $row['message']; ?></td>

											


											<td align="center"   >
											<?php
if($row['status']=="failed") echo '<font color="#FF0000">فشلت عملية الدفع</font>'; 
if($row['status']=="paid") echo '<font color="green">عملية الدفع مقبولة</font>';  ?> 

																			  </td>

											


											<td align="center"   >

																			 <?php echo $row['payment']; ?></td>

 
 
  <td   width=2><p align="center">
 <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModaEdit<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-plus"></i> </a>
 

</td>

<td   width=2><p align="center">
 <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModamail<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-Danger btn-sm   "><i class="fa fa-envelope-o"></i> </a>
 

</td>
 
 
                        
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
 
    <textarea  name="replay"  required="required"  class="form-control" rows="5"    ></textarea>                  
                      
                      
                      
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
                   
                </div><br>
                <div class="box-body">

 <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     <div class="row">
 
                    
                    
                    <div class="form-group col-lg-3">
                      <label><i class="fa fa-star"></i>مبلغ الدورة المتفق علية</label>
                      
                      <input  name="T1" id="T1" size="20"      class="form-control"    >
 
                    </div>
 
                    <div class="form-group col-lg-3">
                      <label><i class="fa fa-star"></i>نوع الدفع</label>
                      
                                          <select style="font-family: Arial"  size="1" name="cash"        class="form-control"  >

                            <?php if($row[cash]==1) echo '<option value="1">كاش</option>'; ?>
							<?php if($row[cash]==2) echo '<option value="2">اقساط</option>'; ?>
 

<option></option>

<option value="1">كاش</option>
<option value="2">اقساط</option>
 

</select>



 
                    </div>

   
 
  <div class="form-group col-lg-3">
<label><i class="fa fa-star"></i>طريقة الدفع</label>
<select style="font-family: Arial"  size="1" name="com"        class="form-control"  >

                            <?php if($row[com]==1) echo '<option value="1">التسجيل بالفرع</option>'; ?>
							<?php if($row[com]==2) echo '<option value="2">تحويل علي الشركة</option>'; ?>
							<?php if($row[com]==3) echo '<option value="3">الدفع الالكتروني</option>'; ?>
 

<option></option>

<option value="1">التسجيل بالفرع</option>
<option value="2">تحويل علي الشركة</option>
<option value="3">الدفع الالكتروني</option>
 

</select>
 
                    </div>




                   

 
                    <div class="form-group col-lg-3">
<label><i class="fa fa-star"></i>الحالة</label>
<select style="font-family: Arial"  size="1" name="T3"   required    class="form-control"  >

                            <?php if($row[Supervisor]==1) echo '<option value="1">مهتم ويرغب بالتسجيل</option>'; ?>
							<?php if($row[Supervisor]==2) echo '<option value="2">مهتم ولا يرغب بالتسجيل</option>'; ?>
							<?php if($row[Supervisor]==3) echo '<option value="3">غير مهتم</option>'; ?>
							<?php if($row[Supervisor]==4) echo '<option value="4">لم يتم الرد علي الاتصال</option>'; ?> 
							<?php if($row[Supervisor]==5) echo '<option value="5">الجوال مغلق</option>'; ?> 
							<?php if($row[Supervisor]==6) echo '<option value="6">تم السداد  </option>'; ?> 
							<?php if($row[Supervisor]==7) echo '<option value="7">متردد</option>'; ?> 
							<?php if($row[Supervisor]==8) echo '<option value="8">ارسلت للصندوق</option>'; ?> 

<option></option>

<option value="1">مهتم ويرغب بالتسجيل</option>
<option value="2">مهتم ولا يرغب بالتسجيل</option>
<option value="3">غير مهتم</option>
<option value="4">لم يتم الرد علي الاتصال</option>
<option value="5">الجوال مغلق</option>
<option value="6">تم السداد  </option>
<option value="7">متردد</option>
<option value="8">ارسلت للصندوق</option>
 

</select>
 
                    </div>
                    
                    
<div class="form-group col-xs-12">
                      <label><i class="fa fa-star"></i>ملاحظات البحث</label>
                      
                      <textarea  name="T4"  required="required"  class="form-control" rows="5"    ><?php echo $Supervisor_note; ?></textarea>
 
                    </div>
                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group col-xs-12">
 
<input type="submit" value="حفظ البيانات" name="B1"  class="btn btn-primary" style="float: left">  <br>                  </div></div>

 
                  </form> 
                  
                  
                    <!-- text input -->
                     
                    
                     
                    
                    
 <div class="box-header">
                    <label class="control-label" for="inputSuccess">
					<p style="text-align: left"><i class="fa fa-check"></i>
الملاحظات     
 		   
                </div>

                                       <div class="form-group">
 <!-- textarea -->
<?php
$i=0;
$query = "select reg_cors.no,notes.Status,notes.ID,amount,Paid,date,time,Notes,user_crm.name,user_ID,notes.com,notes.cash   from user_crm,reg_cors,notes
 where reg_cors.no=notes.Research_ID and user_crm.ID=notes.user_ID and no='$_GET[no]'  order by notes.ID ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{


$query1 = "select *  from  notes where Research_ID='$_GET[no]'  order by notes.ID DESC limit 1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $maxID=$row1['ID'];
}
?><table class="table table-striped">
                  <tr>
						<th align="center" height="25"  ><p align=center> الحالة </p></th>
						<th align="center" height="25"  ><p align=center>مبلغ الدورة</p></th>
						<th align="center" height="25"  ><p align=center>المدفوع</th>
						<th align="center" height="25"  ><p align=center>التاريخ</p></th>
						<th align="center" height="25"  ><p align=center>ملاحظات </p></th>
						<th align="center" height="25"  >الدفع</th>
						<th align="center" height="25"  ><p align=center>
						المستخدم</p></th>
						 <th align="center" height="25" width="1">&nbsp;</th> 
						 <th align="center" height="25" width="1"></th> 
								</tr>
							<?php
while($row=mysqli_fetch_array($result))
{

?>								
							<tr>
                  <form role="form" action="" method="post">
 

							<input  type=hidden name="ID" size="20"     class="form-control"   dir="rtl" value="<?php echo $row['ID']; ?>">
							
 
							
							
							
							<input  type=hidden name="Research_ID" size="20"     class="form-control"   dir="rtl" value="<?php echo $row['Research_ID']; ?>">
 

							<td align="center" height="25"  ><font face="Droid Arabic Kufi">
 <input  type=hidden name="no1" size="20"     class="form-control"   dir="rtl" value="<?php echo $row['no']; ?>">


                            <?php if($row['Status']==0) echo '<font color=#00ffdd><i class="fa fa-circle fa-2x" aria-hidden="true" ></i></font>'; ?>
                            <?php if($row['Status']==1) echo '<font color=green><i class="fa fa-thumbs-up  fa-2x" aria-hidden="true" ></i>مهتم ويرغب بالتسجيل</font>'; ?>
							<?php if($row['Status']==2) echo '<font color=red><i class="fa fa-thumbs-down fa-2x" aria-hidden="true" ></i>مهتم ولا يرغب بالتسجيل</font>'; ?>
							<?php if($row['Status']==3) echo '<font color=blue><i class="fa  fa-times fa-2x" aria-hidden="true" ></i>غير مهتم</font>'; ?>
							<?php if($row['Status']==4) echo '<font color=red><i class="fa fa-phone fa-2x" aria-hidden="true" ></i>لم يتم الرد علي الاتصال</font>'; ?>  
							<?php if($row['Status']==5) echo '<font color=#8e0000><i class="fa fa-ban fa-2x" aria-hidden="true" ></i>الجوال مغلق</font>'; ?>  
							<?php if($row['Status']==6) echo '<font color=red><i class="fa fa-money fa-2x" aria-hidden="true" ></i>تم السداد</font>'; ?>
							<?php if($row['Status']==7) echo '<font color=green><i class="fa fa-user fa-2x" aria-hidden="true" ></i>متردد</font>'; ?>
							<?php if($row['Status']==8) echo '<font color=red><i class="fa fa-inbox fa-2x" aria-hidden="true" ></i>ارسلت للصندوق</font>'; ?></td> 
							
							</font></td>
							<td align="center" height="25"  ><font face="Droid Arabic Kufi"><?php echo $row['amount']; ?></font></td>
							<td align="center" height="25"  ><font face="Droid Arabic Kufi"><?php echo $row['Paid']; ?></font></td>
							<td align="center" height="25"  ><font face="Droid Arabic Kufi"><?php echo $row['date']; ?> <?php echo $row['time']; ?></font></td>
							<td align="center" height="25"  ><font face="Droid Arabic Kufi"><?php echo $row['Notes']; ?></font></td>
							<td align="center" height="25"  >  
                            <?php if($row[com]==1) echo 'التسجيل بالفرع'; ?>
							<?php if($row[com]==2) echo 'تحويل علي الشركة'; ?>
							<?php if($row[com]==3) echo 'الدفع الالكتروني'; ?>
-							<?php if($row['cash']==1) echo 'كاش'; ?>
							<?php if($row['cash']==2) echo 'اقساط'; ?>
</td>
						
						
						
							<td align="center" height="25"  ><font face="Droid Arabic Kufi"><?php echo $row['name']; ?></font></td>
						
						
						
 <td align="center" height="25" width="1">
<?php if($row['user_ID']==$_SESSION[user_ID]  and $maxID==$row['ID']) { ?>
<a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaEdits<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
<?php } ?>
</td> 
						
						
						
							 <td align="center" height="25" width="1">
<?php if($row['user_ID']==$_SESSION[user_ID]  and $maxID==$row['ID']) { ?>
<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2" formnovalidate   onclick="return confirm('هل تريد الحذف البيانات ؟')"   class="btn btn-danger" style="float: left"> <?php } ?></td> 
								</form>
								</tr>
								
								
								 <div class="example-modal">
            <div class="modal" id="myModaEdits<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل البيانات </font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >
<input  type=hidden name="no" size="20"     class="form-control"   dir="rtl" value="<?php echo $row['no']; ?>">
                  

<div class="row">
  <div class="form-group col-lg-3">
                      <label>مبلغ الدورة </label>
                      
                      <input  name="T1" id="T1" size="20" value="<?php echo $row['amount']; ?>"      class="form-control"    >
 
                    </div>
                    <div class="form-group col-lg-3">
                      <label><i class="fa fa-star"></i>نوع الدفع</label>
                      
                                          <select style="font-family: Arial"  size="1" name="cash"        class="form-control"  >

                            <?php if($row[cash]==1) echo '<option value="1">كاش</option>'; ?>
							<?php if($row[cash]==2) echo '<option value="2">اقساط</option>'; ?>
 

<option></option>

<option value="1">كاش</option>
<option value="2">اقساط</option>
 

</select>



 
                    </div>


   
 
                    

 
                    <div class="form-group col-lg-3">
<label>الحالة</label>
<select style="font-family: Arial"  size="1" name="T3"   required    class="form-control"  >

                            <?php if($row[Status]==1) echo '<option value="1">مهتم ويرغب بالتسجيل</option>'; ?>
							<?php if($row[Status]==2) echo '<option value="2">مهتم ولا يرغب بالتسجيل</option>'; ?>
							<?php if($row[Status]==3) echo '<option value="3">غير مهتم</option>'; ?>
							<?php if($row[Status]==4) echo '<option value="4">لم يتم الرد علي الاتصال</option>'; ?> 
							<?php if($row[Status]==5) echo '<option value="5">الجوال مغلق</option>'; ?> 
							<?php if($row[Status]==6) echo '<option value="6">تم السداد  </option>'; ?> 
							<?php if($row[Status]==7) echo '<option value="7">متردد</option>'; ?> 
							<?php if($row[Status]==8) echo '<option value="8">ارسلت للصندوق</option>'; ?> 

<option></option>

<option value="1">مهتم ويرغب بالتسجيل</option>
<option value="2">مهتم ولا يرغب بالتسجيل</option>
<option value="3">غير مهتم</option>
<option value="4">لم يتم الرد علي الاتصال</option>
<option value="5">الجوال مغلق</option>
<option value="6">تم السداد  </option>
<option value="7">متردد</option>
<option value="8">ارسلت للصندوق</option>


</select>
 
                    </div>
                    
      <div class="form-group col-lg-3">
<label><i class="fa fa-star"></i>طريقة الدفع</label>
<select style="font-family: Arial"  size="1" name="com"        class="form-control"  >

                            <?php if($row['com']==1) echo '<option value="1">الصندوق</option>'; ?>
							<?php if($row['com']==2) echo '<option value="2">الشركة</option>'; ?>
 

<option></option>

<option value="1">الصندوق</option>
<option value="2">الشركة</option>
 

</select>
 
                    </div>
                
<div class="form-group col-xs-12">
<label>ملاحظات البحث</label>
<textarea  name="T4"  required="required"  class="form-control" rows="5"    ><?php echo $row['Notes']; ?></textarea>
</div> 
  
 </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="edit">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><?php } ?>
 
							</table> <?php } ?></div>              

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
 

 
 <p>&nbsp;</p>
 
 
                </div><!-- /.box-body -->
              </div>
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


if (isset($_POST['B1'])) {

 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $com = mysqli_real_escape_string($conn,$_POST['com']); 
 $cash= mysqli_real_escape_string($conn,$_POST['cash']); 

 
  

  
$sql="update user_cors set com='$com',amount='$T1',Paid='$T2',Supervisor='$T3',com='$com',cash='$cash'  where cors_ID='$_GET[no]'";
if(mysqli_query($conn,$sql))
{
}

$sql="insert into notes set   cash='$cash',com='$com',amount='$T1',Paid='$T2',Status='$T3',Notes='$T4',date=CURDATE(),time='$time',user_ID='$_SESSION[user_ID]',Research_ID='$_GET[no]'";
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
}


if (isset($_POST['edit'])) {

 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 
 $iddd = mysqli_real_escape_string($conn,$_POST['iddd']); 
 $no = mysqli_real_escape_string($conn,$_POST['no']); 
 $com = mysqli_real_escape_string($conn,$_POST['com']); 
 $cash= mysqli_real_escape_string($conn,$_POST['cash']); 

 
  

  
$sql="update user_cors set com='$com',amount='$T1',Paid='$T2',Supervisor='$T3',cash='$cash'  where cors_ID='$no'";
if(mysqli_query($conn,$sql))
{
}

$sql="update notes set com='$com',amount='$T1',Paid='$T2',Status='$T3',Notes='$T4',date=CURDATE(),time='$time',cash='$cash' where ID='$iddd'";
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
}

if (isset($_POST['B2'])) {


 $ID = mysqli_real_escape_string($conn,$_POST['ID']); 
 $no1 = mysqli_real_escape_string($conn,$_POST['no1']); 
 
$Research_ID=mysqli_real_escape_string($conn,$_POST['Research_ID']);
 $com = mysqli_real_escape_string($conn,$_POST['com']); 
 $cash= mysqli_real_escape_string($conn,$_POST['cash']); 


 
$sql="Delete from notes  where ID='$ID'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
} 
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php
}


$query1 = "select *  from  notes where Research_ID='$no1'  order by notes.ID DESC limit 1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $maxID=$row1['ID'];
  $amount=$row1['amount'];
  $Paid=$row1['Paid'];
  $Supervisor=$row1['Status'];
}


$sql="update user_cors set com='$com',amount='$amount',Paid='$Paid',Supervisor='$Supervisor',cash='$cash'  where cors_ID='$no1'";
if(mysqli_query($conn,$sql))
{
}

 


}  

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
 $cash= mysqli_real_escape_string($conn,$_POST['cash']); 



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