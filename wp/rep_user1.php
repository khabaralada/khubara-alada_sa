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
<title>  
                                 تقرير استخدام النظام  خلال الفترة

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
<h1><small>
                                 تقرير استخدام النظام  خلال الفترة

							</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 
<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> البحث والاستعلام</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">البحث والاستعلام</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
 
                    
                    
                    
     <div class="form-group col-lg-12">
 <label>المسوق</label>
<select style="font-family: Arial"  size="1" name="Employee_ID"         class="form-control"  >
                      <option></option>
 
<?php
 
 if($_SESSION['acount_type']==1)
$query = "select * from user_crm    ";
else
 
$query = "select * from user_crm    where user_crmBranches='$_SESSION[Branches]' ";


$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<?php echo $row['ID']; ?>">


<?php
$query1 = "select * from branches_crm where ID='$row[Branches]'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
  echo $row1['Branches_name'];  } } ?>
  
  - <?php echo $row['name']; ?></option>
<?php } } ?>
					</select>

 </div>             
 
                    
                    
<div class="form-group col-lg-6">
 <label>التاريخ من</label>
 <input  name="date_from"   size="20"  type=date  required="required"    value="<?php echo $_POST[date_from]; ?>" class="form-control"  >
 </div>

<div class="form-group col-lg-6">
 <label> التاريخ الي</label>
 <input  name="date_to"  size="20" type=date  required="required"     value="<?php echo $_POST[date_to]; ?>"  class="form-control"  >
 </div>
 

                   
                     
                </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="تنفيذ الاستعلام" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
 


 
 
<?php 
include ("../config.php");

if($_POST['add']) {  

if($_POST['Employee_ID']=="") {  
$query = "select count(*) as co,name from user_crm,user_login 
where user_crm.username=user_login.username  and date>='$_POST[date_from]' and date<='$_POST[date_to]'   
GROUP by user_crm.ID


order by count(*) DESC"; }
 else {
$query = "select count(*) as co,name,Branches from user_crm,user_login 
where user_crm.username=user_login.username  and date>='$_POST[date_from]' and date<='$_POST[date_to]' and user_crm.ID='$_POST[Employee_ID]'  
GROUP by user_crm.ID


order by count(*)   DESC   ";

}

}
else
$query = "select count(*) as co,name from user_crm,user_login 
where user_crm.username=user_login.username  and date=CURDATE()   
GROUP by user_crm.ID


order by count(*) DESC"; 

$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
?>
                
                
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>

                      
 <th align="right"><p align="center">#</th>
 <th align="right"><p align="center">الاسم</th>
 <th align="right"><p align="center">الفرع</th>
 
 <th align="right"><p align="center">#</th>

                        
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php

while($row=mysqli_fetch_array($result))
{
?>
 <tr>
 
                         <td align="right"><p align="center"><?php $C++; echo $C; ?></td> 
                         <td align="right"><p align="center"><?php echo $row['name']; ?></td> 
                         <td align="right"><p align="center"> <?php
$query1 = "select * from branches_crm where ID='$row[Branches]'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
  echo $row1['Branches_name'];  } } ?></td> 
 
                         <td align="right"><p align="center">
                         
                         <?php
 
  echo $row['co'];    ?>
  
  
  </td> 

                      
                          
                        
                      </tr>
                    <?php  } ?>
                    </tbody>
                     
                  </table><?php }  ?>

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