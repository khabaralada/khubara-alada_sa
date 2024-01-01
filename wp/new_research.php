<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("../config.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>                             <?php 
                                $ss=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
                                if($ss==0) echo 'الحالات الجديدة'; ?>
                            <?php if($ss==1) echo 'مهتم ويرغب بالتسجيل'; ?>
							<?php if($ss==2) echo 'مهتم ولا يرغب بالتسجيل'; ?>
							<?php if($ss==3) echo 'غير مهتم'; ?>
							<?php if($ss==4) echo 'لم يتم الرد علي الاتصال'; ?>  
							<?php if($ss==5) echo 'الجوال مغلق'; ?>
														<?php if($ss==6) echo 'المسددين رسوم التدريب'; ?>
														<?php if($ss==7) echo 'متردد بالتسجيل    '; ?>
														<?php if($ss==8) echo 'ارسلت للصندوق    '; ?></title>
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
<h1><small>                            <?php 
                                $ss=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
                                if($ss==0) echo 'الحالات الجديدة'; ?>
                            <?php if($ss==1) echo 'مهتم ويرغب بالتسجيل'; ?>
							<?php if($ss==2) echo 'مهتم ولا يرغب بالتسجيل'; ?>
							<?php if($ss==3) echo 'غير مهتم'; ?>
							<?php if($ss==4) echo 'لم يتم الرد علي الاتصال'; ?>  
							<?php if($ss==5) echo 'الجوال مغلق'; ?>
														<?php if($ss==6) echo 'المسددين رسوم التدريب'; ?>
														<?php if($ss==7) echo 'متردد بالتسجيل    '; ?>
														<?php if($ss==8) echo 'ارسلت للصندوق    '; ?>
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 

 
 
 
                
                
                  <table id="example1" class="table table-bordered table-striped"  >
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

 <th align="right"><p align="center">&nbsp;</th>
 
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php
include ("../config.php");

if($_SESSION['acount_type']==1)
$query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no   and cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' order by dates DESC limit 500";
elseif($_SESSION['acount_type']==2)
$query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no and user_ID='$_SESSION[user_ID]' and cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' order by dates DESC limit 500";
elseif($_SESSION['acount_type']==3)
$query = "select * from user_crm,reg_cors,user_cors,subjects,cors
where user_cors.cors_ID=reg_cors.no and user_crmBranches='$_SESSION[Branches]'  and cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' and user_crm.ID=user_cors.user_ID order by dates DESC limit 500";


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
							<?php if($row['Supervisor']==8) echo '<font color=red><i class="fa fa-inbox fa-2x" aria-hidden="true" ></i></font>'; ?>						   
						   </td> 
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
echo $row1['name'];
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



 <td>
<a href="notes.php?no=<?php echo $row['no']; ?>"  target=_blank>
 <i class="fa fa-pencil btn btn-info btn-sm"> <?php 
$query1 = "select count(*) as co from notes where Research_ID='$row[no]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
 ?></i></a>
 
 </td>
 
                        
                      </tr>
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