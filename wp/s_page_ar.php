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
<title>صفحات الموقع
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
<h1><small>  صفحات الموقع

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

<div align="center">
 
	 
		
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="9%" bgcolor="#EBEBEB" dir="rtl">
										<span lang="ar-sa"><b>
										<font face="Droid Arabic Kufi" size="2">
										تعديل</font></b></span></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">تاريخ الانشاء</font></b></span></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">عنوان الصفحة</font></b></span></td>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										<span lang="ar-sa"><b>
										<font face="Droid Arabic Kufi" size="2">
										م</font></b></span></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  page_ar");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="center"   dir="rtl">
																	
								<font face="Droid Arabic Kufi" size="2"><b>
								<a href="edit_page_ar.php?ID=<?php echo $row['ID']; ?>">
								تعديل</a></b></font></td>
										<td align="center" width="40%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">
										<?php echo $row['date']; ?></font></td>
										<td align="center" width="29%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">
										<?php echo $row['address']; ?> - <?php echo $row['address_en']; ?></font></td>
										<td align="center" width="4%" dir="rtl" bgcolor="#EEEEEE">
										<font face="Droid Arabic Kufi" size="2">
									<?php echo $c; ?></font><font face="Tahoma" color="#FF0000"><font size="2">
										</font>
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>"></font></td>
									</tr>
<?php
}
?>
									<tr>
										<td align="center" colspan="4" bgcolor="#EEEEEE">
										&nbsp;&nbsp;&nbsp;
										</td>
									</tr>
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
