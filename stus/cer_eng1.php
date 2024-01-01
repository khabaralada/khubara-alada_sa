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
شهادات المتدربين
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					   
                  <form role="form" action="cer_eng2.php" method="GET">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  رقم الهوية / اسم  المتدرب/ة</label>
                                            <input  name="find"   size="20"  autofocus  required="required"   placeholder="رقم الهوية / الاسم / الجوال" class="form-control"  >
 
                    </div>

                    
                     <input type="submit" value="بحث" name="B11"  class="btn btn-primary" style="float: left">                    

                    
                    
                    
 
                  </form>

                </div> <br><br><br> 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 