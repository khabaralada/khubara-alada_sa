<?php
error_reporting(0);
include('session.php');
include('font.php');
include("../config.php");


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>إدارة المحتوى</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript">
		function framePrint(whichFrame) {
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
				<h1><small> المستخدمين
					</small></h1>
			</section>






			<section class="content" dir=rtl>
				<div class="box box-info">
					<div class="box-body">

						<div align="center">
							<table border="1" width="100%" bordercolorlight="#E4E4E4" cellspacing="0" bordercolordark="#FFFFFF" cellpadding="0">

								<form method="POST" action="edit_user_crmphp">

									<tr>

										<td width="99%" height="27" colspan="2" bgcolor="#DDDDDD">

											<p align="center"><b>

													<font face="Droid Arabic Kufi" color="#FF0000" size="2">

														الرجاء اختيار اسم المستخدم</font>
												</b>
										</td>

									</tr>

									<tr>

										<td width="74%" height="27" align="center">

											<p align="right">

												<font face="Droid Arabic Kufi" size="2">
													<select required="required" style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" size="1" name="D1" dir="rtl" style="border: 1px solid #000000; width:260; height:20">


														<?php
														include("../config.php");


														$result = mysqli_query($conn, "select* from user_crm   order by name");
														while ($row = mysqli_fetch_array($result)) {
															echo '<option value=' . $row["username"] . '>' . $row["name"];
														}

														echo '</select>';
														?>


												</font>
												<font face="Droid Arabic Kufi"></font>
										</td>

										<td width="25%" dir="rtl" height="27" align="center">

											<p align="center"><b>

													<font face="Droid Arabic Kufi" size="2">اسم المستخدم&nbsp;

														: </font>
												</b>
										</td>

									</tr>

									<tr>

										<td width="99%" colspan="2" bgcolor="#DDDDDD">

											<p align="center">

												<font face="Tahoma">

													<input required="required" type="submit" value="بحث" name="B1">
												</font>
										</td>

									</tr>

								</form>

							</table>
						</div>
						<font face="Droid Arabic Kufi" size="2">


						</font>


					</div>
				</div>
			</section>


		</div><!-- /.content-wrapper -->
		<?php include('footer.php'); ?>
	</div><!-- ./wrapper -->
</body>

</html>