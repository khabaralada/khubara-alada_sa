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
<title>الدورات</title>
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
<h1><small>  الدورات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 
	 
		
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<thead>
<tr>
										<th align="right"><p align=center>
										المسجلين 
										<th align="right"><p align=center>

										<th align="right"> <p align=center>
   Course name 
										<th align="right"><p align=center>

						المدة </td>
										<th align="right"><p align=center>
 بداية الدورة&nbsp;&nbsp;
										<th align="right"><p align=center>

						الدورة</font></b></td>
										<th align="right">#
									</tr></thead>
<tbody>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID     order by ID DESC");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="right"   dir="rtl">
																	
								<font face="Droid Arabic Kufi" size="2"><b>
								<?php
 

if($_SESSION['acount_type']==1)
$query1 = "select count(*) as co from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=6 and address='$row[ID]'";
elseif($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$_SESSION[user_ID]' and Supervisor=6 and address='$row[ID]'";
elseif($_SESSION['acount_type']==3)
$query1 = "select count(*) as co from reg_cors,user_cors,user where user_crm.ID=user_cors.user_ID and 
user_cors.cors_ID=reg_cors.no and user_crmBranches='$_SESSION[Branches]' and Supervisor=6 and address='$row[ID]'";


$result1 = mysqli_query($conn,$query1);

while($row1=mysqli_fetch_array($result1))
{
if($row1['co']>0) {
?>

<a href="show_contact2.php?ID=<?php echo $row['ID']; ?>">استعراض</a>
(
<?php
echo $row1['co'];
?>
 )


<?php } } ?></b></font></td>
										<td align="right"   dir="rtl">
										
										
										<?php if($row['show_reg']==1) { ?> <img border="0" src="2.png" width="18" height="23"><?php } else { ?>
										X<?php } ?>
										</td>
										<td align="right">
										 
										<?php echo $row['cors_name_en']; ?></font></td>
										<td align="right">
										<?php echo $row['contact_hours']; ?></font></td>
										<td align="right">
										<?php echo $row['start_date_en']; ?></font></td>
										<td align="right">
										<?php echo $row['cors_name']; ?></font></td>
										<td align="right">
									<?php echo $c; ?> 
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>"></font></td>
									</tr>
<?php
}
?>
						</tbody>
			
								</form>
								</table>
</div>

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>


 