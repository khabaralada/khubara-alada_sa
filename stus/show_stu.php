<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");
$sql="insert into user_login set username='$_SESSION[username]',date=CURDATE(),time=NOW()";
if(mysqli_query($conn,$sql))
{
}
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

					                     <?
include ("conn.php");
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$Branches_name=$row[Branches_name];
$Branches_ID=$row[Branches_ID];
$cors_ID=$row[cors_ID];

$section_Id=$row[ID];
$cors_type=$row[cors_type];
$cors_code=$row[cors_no];
 



?>
المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $cors_name=$row['cors_name']; ?> - بداية الدورة : <? echo $start_date=$row['start_date']; ?>  - نهاية الدورة : <? echo $end_date=$row['end_date']; ?> 
<? } ?>
 
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

<? if($_SESSION['acount_type']==1) { ?>          

 <p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-excel-o"></i>  إلحاق المتدربين بالدورة    </a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
	<form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">  رفع المتدربين عن طريق تحديد ملف الاكسل بصيفة XLS,XLSX</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
                  
 
                    
                    
  
 <div class="form-group col-lg-12">
<label>تحديد الملف</label>
<input    type="file" name="file" id="file" accept=".xls,.xlsx"   size="20" required="required"  >
<input  name="Branches_ID"  type=hidden id="Branches_ID" value="<? echo $Branches_ID; ?>" size="20"   required="required"   class="form-control"  >
<input  name="section_Id"  type=hidden value="<? echo $section_Id; ?>" size="20"   required="required"   class="form-control"  >
<input  name="cors_code"  type=hidden value="<? echo $cors_code; ?>" size="20"   required="required"   class="form-control"  >
<input  name="cors_type"  type=hidden value="<? echo $cors_type; ?>" size="20"   required="required"   class="form-control"  >
 



</div> 

 <div class="form-group col-lg-12"><img src="ex.webp" width=100%>
</div>
                   
                </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="استيراد" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          <? } ?>
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>البريد الالكتروني    </th>   <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>التقدير</th>

 <th><p align=center>مبلغ الدورة</th>
                         <th><p align=center>المدفوع</th>
                         <th><p align=center>المتبقي </th>
                         <th><p align=center>المالية</th>

                         <th><p align=center>الاختبار</th>

                         <th>تفاصيل الدورة</th>

                         <th><p align=center>&nbsp;</th>

                         <th><p align=center>حذف</span></th>
                         <th><p align=center>تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from student,stu_sec where  stu_sec.stu_id=student.stu_id and section_Id='$section_Id'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
?>
 <tr>
                        <form method="POST" action="">
 
                        <td>
						
						<input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"><? echo $row['iqama']; ?></td>
                        <td>
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['stu_name_ar']; ?></a></td>
                        <td>
 <? echo $row['Nationality'];
?></td>
                        <td>
						 
<? 
echo $row['mobile'];

?></td>
                        <td> 
						<? echo $row['email']; ?></td>    <td>
						<? echo $row['scor']; ?></td>
                        <td>
						<? echo $row['Rate']; ?></td>

						<td align="center"><? echo $row['Course_amount']; ?>
						 <td align="center">
						 <?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
 echo $Amount=$row1[Amount];
}
?>
						 <td align="center"><font color="#FF0000"><? echo $row['Course_amount']-$Amount; ?> 
							</font>
						<td align="center"><a href="Payments_stu1.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-money btn btn-info btn-sm "></i></a>


                        <td>
						                        <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$cors_ID'  ");
 
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i></a>
<?
}
?></td>


                        <td>
						<a  target=_blank href="https://wa.me/966<? echo $row[mobile]; ?>?text=
 
 مرحبًا، نشكرك علي انضمامك  . 
 Hello, we thank you for joining .
%20 %0D%0A

<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A
%20%0D%0A

المتدرب/ة%20  :<? echo nl2br($row[stu_name_ar]); ?>%0D%0A
رقم الهوية %20  :<? echo nl2br($row[iqama]); ?>%0D%0A
اسم الدورة %20  :<? echo nl2br($cors_name); ?>%0D%0A
تاريخ بداية الدورة%20  :<? echo nl2br($start_date); ?>%0D%0A
تاريخ نهاية الدورة%20  :<? echo nl2br($end_date); ?>%0D%0A
%20%0D%0A


نسعد بمتابعتكم لنا عبر حساب  
%20 %0D%0A


https://twitter.com  %20 %0D%0A

https://www.instagram.com  %20 %0D%0A

سناب شات :   %20 %0D%0A

%20%0D%0A


 


" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i>
</td>


                        <td>
						<a  target=_blank href="https://wa.me/966<? echo $row[mobile]; ?>?text=
 
<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A

اسم الدورة%20  :<? echo nl2br($cors_name); ?>%0D%0A
%20<? echo nl2br($Branches_name); ?>%0D%0A
تاريخ بداية الدورة %20  :<? echo nl2br($start_date); ?>%0D%0A
تاريخ نهاية الدورة %20  :<? echo nl2br($end_date); ?>%0D%0A
مبلغ الدورة%20  :<? echo nl2br($row[Course_amount]); ?>%0D%0A
المبلغ المدفوع%20  :<? echo nl2br($Amount); ?>%0D%0A
المبلغ المتبقي%20  :<? echo nl2br($row[Course_amount]-$Amount); ?>%0D%0A
 
" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i></td>


                        <td>
						<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2"  onclick="return confirm('هل تريد الحذف البيانات ؟')" class="btn btn-danger" style="float: left"></td>
                        <td>
				<a href="edit_stu.php?NUM=<? echo $row[NUM];  ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></td>
                      	</form>
                      </tr>
                    <? }} ?><form method="POST" action="">
 
 <tr>
 
                        <td colspan="16">
						<? //echo $allmobi; ?>
						<textarea  name="msg1" maxlength=69 class="form-control"  required="required"   placeholder="ارسال رسالة جوال للمشتركين بالدورة 70 حرف"></textarea></td>
 
                      </tr>
 <tr>
 
                        <td colspan="16">
						
						<input type="submit" value="ارسال SMS" class="btn btn-success " name="send" style="float: left"></td>
 
                      </tr>
                    	</form>
                    </tbody>
                     
                  </table>
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST['add'])) {
 $Branches_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches_ID'], ENT_QUOTES, "utf-8"));
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'], ENT_QUOTES, "utf-8"));
 $cors_code= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_code'], ENT_QUOTES, "utf-8"));
 $cors_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_type'], ENT_QUOTES, "utf-8"));
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $Course_amount= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Course_amount'], ENT_QUOTES, "utf-8"));
 $online= mysqli_real_escape_string($conn,htmlspecialchars($_POST['online'], ENT_QUOTES, "utf-8"));


  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $iqama= "";
                if(isset($Row[0])) {
                    $iqama= mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $name= "";
                if(isset($Row[1])) {
                    $name= mysqli_real_escape_string($conn,$Row[1]);
                }
                $stu_name_en= "";
                if(isset($Row[2])) {
                    $stu_name_en= mysqli_real_escape_string($conn,$Row[2]);
                }


                $nat= "";
                if(isset($Row[3])) {
                    $nat= mysqli_real_escape_string($conn,$Row[3]);
                }

                $qualified= "";
                if(isset($Row[4])) {
                    $qualified= mysqli_real_escape_string($conn,$Row[4]);
                }

                $mobile= "";
                if(isset($Row[5])) {
                    $mobile= mysqli_real_escape_string($conn,$Row[5]);
                }

                $email= "";
                if(isset($Row[6])) {
                    $email= mysqli_real_escape_string($conn,$Row[6]);
                }
                
                $Course_amount= "";
                if(isset($Row[7])) {
                    $Course_amount= mysqli_real_escape_string($conn,$Row[7]);
                }
 
 $sql="insert into student  set  stu_name_en='$stu_name_en',email='$email',Branches='$Branches_ID',stu_name_ar='$name',Nationality='$nat',iqama='$iqama',stu_id='$iqama',
 qualified='$qualified',mobile='$mobile'";
 
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?
}

$sql="insert into stu_sec set stu_id='$iqama',section_Id='$section_Id',cors_code='$cors_code',cors_type='$cors_type',
Branches='$Branches_ID',reg_date='$synch_timestamp',Course_amount='$Course_amount' ";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?

}


 }}
 
 echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';


}
 
}
?><?
    if (isset($_POST['B2'])) {
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
$sql="delete from   stu_sec where ID_reg='$ID_reg'  ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

$sql="delete from    paid where ID_reg='$ID_reg'  ";
if(mysqli_query($conn,$sql))
{
}


}

 if (isset($_POST['send'])) {
  $msg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['msg1'], ENT_QUOTES, "utf-8"));

 
 $curl = curl_init();
$apikey = 'somerandomkey';//if you use apikey then userid and password is not required
$userId = 'zarqaa1111';
$password = '05518647691111';
$sendMethod = 'simpleMsg'; //(simpleMsg|groupMsg|excelMsg)
$messageType = 'text'; //(text|unicode|flash)
$senderId = 'ALZARQAA-AD';


$mobile = $allmobi;//comma separated
//$msg = "كل عام وانتم بخير";
$scheduleTime = '';//mention time if you want to schedule else leave blank

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.vip1sms.com/smartsms/api/sendsms.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=$userId&password=$password&sender=$senderId&sendMethod=$sendMethod&msgType=$messageType&numbers=$mobile&message=$msg&duplicateCheck=true&format=json",
  CURLOPT_HTTPHEADER => array(
    "apikey: $apikey",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

 
 
 


?>