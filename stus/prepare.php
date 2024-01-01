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
	 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
  $branches_logo=$row8['branches_logo'];
 }
 ?>


<title><? echo $Branches_title_sms; ?>  </title>

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
 
<? include("header.php"); ?>
 

 

<section class="content-header" dir=rtl>
<h1><small>
<?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
  echo $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
 }
 ?> 
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					
<?php   

 
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

$ar_date=ArabicTools::arabicDate('hj:Y-m-d',time()); 
?>


 
					<p style="text-align: center"><img src="<? echo $branches_logo; ?>" width=50%>
                  </p>
                  <form role="form" action="prepare_day.php" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  رقم الهوية المتدرب / المتدربة</label>
                      
 
 
 
 
 <div class="input-group input-group-sm">
                    <input name="iqama_ID"  autofocus  required="required"   class="form-control">
                    <span class="input-group-btn">
<input type="submit" value="موافق" name="B11"  class="btn btn-info btn-flat"  style="float: left">                    
                    </span>
                  </div>
                  
                  
                    </div>

                    <!-- textarea -->
                     
                     

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
 
&nbsp;</div>
 
                  </form>

                  	<p style="text-align: center"><b>يوم 
                  	<? if(date('l')=="Saturday") echo "السبت";
                      if(date('l')=="Sunday") echo "الاحد";
                      if(date('l')=="Monday") echo "الاثنين";
                      if(date('l')=="Tuesday") echo "الثلاثاء";
                      if(date('l')=="Wednesday") echo "الاربعاء";
                      if(date('l')=="Thursday") echo "الخميس";
                      if(date('l')=="Friday") echo "الجمعة";  
?>

 تاريخ <font color="#FF0000"> <? echo date('Y-m-d'); ?></font> م الموافق 
					<font color="#FF0000"> <? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?></font> هــ الساعة 
					<font color="#FF0000"> <? echo date('H:i:s'); ?></font>
					</b>
                </div><!-- /.box-body -->
              </div>
              
              
              <br><br>
 

              
 

                  </div>
</div>  <? include('footer.php'); ?>

</section>


</div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
</body>
</html>

 