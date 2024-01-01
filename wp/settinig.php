<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> اعدادات المتجر</title>
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
<h1><small>اعدادات المتجر      </small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
          
          

          
<table id='example200'  class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right"><p align="center">#</th>
                        <th align="right"><p align="center">اسم المتجر </th>
                        <th align="right"><p align="center">Store name </th>
 
                        <th align="right" width=1></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php

$query = "select * from web_settings";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><?php echo $row['ID']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['site_name']; ?></td>
                        <td align="right"><p align="center"><?php echo $row['site_name_en']; ?></td>
 
                        <td align="center">
                                                <a href="" data-id="<?php echo $row['ID']; ?>" data-target="#myModaEdit<?php echo $row['ID']; ?>" data-toggle="modal" class="btn btn-info btn-sm   "><i class="fa fa-pencil"></i> </a>
</td>
                      	</form>
                      </tr>
<?php 
}
} 
?>
                    </tbody>
                     
                  </table>
<?php

$query = "select * from web_settings";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{ 
?>                  
<div class="example-modal">
            <div class="modal" id="myModaEdit<?php echo $row['ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تعديل بيانات : <?php echo $row['site_name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 
                  

<div class="row">

 

<div class="form-group col-lg-6">
<label>اسم المتجر</label>
<input  name="T1"   size="20"   value="<?php echo $row['site_name']; ?>" required="required"   class="form-control"  >
					<input  type=hidden name="id"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

</div>


<div class="form-group col-lg-6">
<label>Store name</label>
<input  name="T2"   size="20"   value="<?php echo $row['site_name_en']; ?>" required="required"   class="form-control"  >
</div>


<div class="form-group col-lg-6">
<label>وسيلة الاتصال</label>
<input  name="T3"   size="20"   value="<?php echo $row['site_mobile']; ?>" required="required"   class="form-control"  >
</div>


<div class="form-group col-lg-6">
<label>البريد الالكتروني  </label>
<input  name="T4"   size="20"   value="<?php echo $row['site_email']; ?>" required="required"   class="form-control"  >
</div>

<div class="form-group col-lg-6">
<label>العنوان    </label>
<input  name="T5"   size="20"   value="<?php echo $row['site_address']; ?>" required="required"   class="form-control"  >
</div>

<div class="form-group col-lg-6">
<label>Address</label>
<input  name="T6"   size="20"   value="<?php echo $row['site_address_en']; ?>" required="required"   class="form-control"  >
</div>


<div class="form-group col-lg-6">
<label>URL</label>
<input  name="T7"   size="20"   value="<?php echo $row['site_url']; ?>" required="required"   class="form-control"  >
</div>


<div class="form-group col-lg-6">
<label>secretKey</label>
<input  name="T8"   size="20"   value="<?php echo $row['secretKey']; ?>" required="required"   class="form-control"  >
</div>


<div class="form-group col-lg-12">
<label>sitKey</label>
<input  name="T9"   size="20"   value="<?php echo $row['sitKey']; ?>" required="required"   class="form-control"  >
</div>

<div class="form-group col-lg-12">
<label>publishable_api_key	</label>
<input  name="T11"   size="20"   value="<?php echo $row['publishable_api_key']; ?>" required="required"   class="form-control"  >
</div>



<div class="form-group col-lg-12">
<label>الموقع Map</label>
<textarea        rows="2" name="T10" cols="20" style="width: 100%; height: 64" dir="ltr"   ><?php echo $row['site_map']; ?></textarea></div>


</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="edit">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div> <?php   } }  ?>                 
                  
 
 

                 
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
 

<?php
if(isset($_POST['edit'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $id = mysqli_real_escape_string($conn,$_POST['id']); 
 $type = mysqli_real_escape_string($conn,$_POST['type']); 
  $T9 = mysqli_real_escape_string($conn,$_POST['T9']); 
 $T10 = mysqli_real_escape_string($conn,$_POST['T10']); 
 $T11 = mysqli_real_escape_string($conn,$_POST['T11']); 

$sql="update web_settings set site_name='$T1',
site_name_en='$T2',
site_mobile='$T3',
site_email='$T4',
site_address='$T5',
site_address_en='$T6',
site_url='$T7',
secretKey='$T8',
sitKey='$T9',
site_map='$T10',publishable_api_key='$T11'

    where ID='$id'";
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
}


?>