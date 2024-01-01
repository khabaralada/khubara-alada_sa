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
تقرير بحضور المتدربين في فترة معينة
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">					 

                   <form method="POST" action="print_report_com1.php">
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> التاريخ الي</label>
                                            <div class="input-group input-group-sm has-error">

                      <input  name="end_date" type=date  size="20"    required="required"  class="form-control" value="<? echo $date_to; ?>" >
                      <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">بحث</button>
                    </span>
                    </div>
                    
                    
                    </div><div class="form-group col-xs-6">
                      <label class="control-label" ><i class="fa fa-star"></i> التاريخ من </label>
                      <input  name="start_date"  type=date size="20"     required="required"  class="form-control" value="<? echo $date_from; ?>" >
                    </div>
                    </div>
                  	</form>
                   
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

     