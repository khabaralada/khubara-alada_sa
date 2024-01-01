<?php  
session_start(); // Starting Session
if (isset($_POST['B11'])) {
$iqama_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama_no'], ENT_QUOTES, "utf-8"));
$_SESSION['iqama_no']=$_POST['iqama_no']; // Initializing Session
header("location: reg_stu1.php"); // Redirecting To Other Page
}
 
 
  
?>
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
تسجيل متدرب / متدربة جديد<br>Registration of a new trainee / trainee </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">	
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  رقم الهوية المتدرب / المتدربة<br>Trainee / trainee ID number</label>
                      
                      <input  name="iqama_no"   size="20"  autofocus  required="required"   class="form-control"  >
 
                    </div>

                    <!-- textarea -->
                     
                     

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="موافق Accept" name="B11"  class="btn btn-primary" style="float: left">                    
&nbsp;</p>
&nbsp;</p>
&nbsp;</div>
 
                  </form>

                </div> 
 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 