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

 





<script type="text/javascript" src="jquery.js"></script>

   <script type="text/javascript">

function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data101.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

</script>
   <script type="text/javascript">

function fetch_select2(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data2.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select2").innerHTML=response; 
     }
   });
}

</script>


   <script type="text/javascript">

function fetch_select3(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data3.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select3").innerHTML=response; 
     }
   });
}

</script>   <script type="text/javascript">

function fetch_select4(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data4.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select4").innerHTML=response; 
     }
   });
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
تحويل الدورات الي مدرس
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <form role="form" action="" method="post">
                    <!-- text input -->
    <div class="row">
       
                    <div class="form-group col-xs-12">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required     onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 <option></option> 
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                          
                     </div>
                    
					
					
					
					
                    <div class="form-group">
                      <label>اسم الدورة / المستوى</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_ID"   required  id="new_select1"   class="form-control"  ><option></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from subjects  order by cors ";
else
$query = "select * from subjects where Branches='$Branches'  order by cors";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['cors_ID']; ?>"><? echo $row['cors_name']; ?></option>
<?php } } ?>
 
					</select>                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                      <label>  اسم المحاضر / المدرب ( الجديد )</label>
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="traning_name"   required     id="new_select2" class="form-control"  >
							<option></option>
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from teacher";
else
$query = "select * from teacher where Branches='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['teacher_id']; ?>"><? echo $row['teacher_name']; ?></option>
<?php } } ?>
					</select>
 
                    </div>
                   
  

                    <!-- input states -->
   
                    

                  
            

                    
                     
               
                      
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="تحويل جميع الدورات الي المدرس" name="B1"  class="btn btn-primary" style="float: left">                    
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

<?

include ("conn.php");
if (isset($_POST['B1'])) {

 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $traning_name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['traning_name'], ENT_QUOTES, "utf-8")); 
 

 
 
$sql="update cors set traning_name='$traning_name' where Branches='$Branches' and cors_ID='$cors_ID'  ";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?


 
}


 

}
?>