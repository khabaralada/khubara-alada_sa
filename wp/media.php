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


						<table id='example1' class="table table-bordered table-striped" dir=ltr width="702">

							<form method="POST" name="form2" action="<?php echo ($self); ?>">
								<tr>
									<th width="21">
										&nbsp;</th>
									<th width="84">
										tiktok</span></th>
									<th width="84">
										Youtube</span></th>
									<th width="116">
										Whatsapp
									<th width="106">
										Snapchat</span></th>
									<th width="118">
										Instagram</span></th>
									<th width="84">
										Twitter</span></th>
									<th width="114">
										Facebook</span></th>
									<th>No.</span></th>
								</tr>
								<?php
								include("../config.php");
								$result = mysqli_query($conn, "select* from   media");
								$i = 0;
								$c = 0;
								while ($row = mysqli_fetch_array($result)) {
									$c++;
								?>
									<tr>
										<td align="center" dir="ltr" width="21">

											<span lang="ar-sa">

												<font face="Tahoma" color="#FF0000">

													<input required="required" name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++; ?>" style="width: 100%" checked>
												</font>
											</span>
										</td>
										<td width="84">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="tiktok[]" cols="20" style="width: 100%; height: 64"><?php echo $row['tiktok']; ?></textarea>
											</font>
										</td>
										<td width="84">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T6[]" cols="20" style="width: 100%; height: 64"><?php echo $row['youtube']; ?></textarea>
											</font>
										</td>
										<td width="116">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T5[]" cols="20" style="width: 100%; height: 64"><?php echo $row['whatsapp']; ?></textarea>
											</font>
										</td>
										<td width="106">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T4[]" cols="20" style="width: 100%; height: 64"><?php echo $row['linked']; ?></textarea>
											</font>
										</td>
										<td width="118">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T3[]" cols="20" style="width: 100%; height: 64"><?php echo $row['instagram']; ?></textarea>
											</font>
										</td>
										<td width="84">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T2[]" cols="20" style="width: 100%; height: 64"><?php echo $row['twitter']; ?></textarea>
											</font>
										</td>
										<td width="114">
											<font face="Tahoma" size="2">
												<textarea required="required" rows="2" name="T1[]" cols="20" style="width: 100%; height: 64"><?php echo $row['facebook']; ?></textarea>
											</font>
										</td>
										<td align="center" width="25" dir="ltr" bgcolor="#EEEEEE">
											<font color="#FF0000">
												<font size="2" face="Tahoma">
													<?php echo $c; ?></font>
												<font face="Tahoma">
													<font size="2">
													</font>

													<input required="required" type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>">
												</font>
											</font>
										</td>
									</tr>
								<?php
								}
								?>
								<tr>
									<td align="center" colspan="8" bgcolor="#EEEEEE">
										<input required="required" type="submit" value="Saving changes" name="B4" class="btn btn-primary dropdown-toggle">
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


<?php
include("../config.php");
if ("Saving changes" == "$B4") {

	if ($checkbox) {
		foreach ($_POST['checkbox'] as $i) {
			$ID = mysqli_real_escape_string($conn, htmlspecialchars($_POST['ID'][$i], ENT_QUOTES, "utf-8"));
			$T1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));
			$T2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T2'][$i], ENT_QUOTES, "utf-8"));
			$T3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T3'][$i], ENT_QUOTES, "utf-8"));
			$T4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T4'][$i], ENT_QUOTES, "utf-8"));
			$T5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T5'][$i], ENT_QUOTES, "utf-8"));
			$T6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T6'][$i], ENT_QUOTES, "utf-8"));
			$T7 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T7'][$i], ENT_QUOTES, "utf-8"));
			$tiktok = mysqli_real_escape_string($conn, htmlspecialchars($_POST['tiktok'][$i], ENT_QUOTES, "utf-8"));
			$T8 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T8'][$i], ENT_QUOTES, "utf-8"));
			$T9 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T9'][$i], ENT_QUOTES, "utf-8"));
			$T10 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['T10'][$i], ENT_QUOTES, "utf-8"));
			$S1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S1'][$i], ENT_QUOTES, "utf-8"));
			$S2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S2'][$i], ENT_QUOTES, "utf-8"));
			$S3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S3'][$i], ENT_QUOTES, "utf-8"));
			$S4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S4'][$i], ENT_QUOTES, "utf-8"));
			$S5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S5'][$i], ENT_QUOTES, "utf-8"));
			$S6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S6'][$i], ENT_QUOTES, "utf-8"));
			$C1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['C1'][$i], ENT_QUOTES, "utf-8"));
			$C2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['C2'][$i], ENT_QUOTES, "utf-8"));

			$S222 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S222'][$i], ENT_QUOTES, "utf-8"));
			$S22 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['S22'][$i], ENT_QUOTES, "utf-8"));
			$R1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['R1'][$i], ENT_QUOTES, "utf-8"));
			$url = mysqli_real_escape_string($conn, htmlspecialchars($_POST['url'][$i], ENT_QUOTES, "utf-8"));

			$D1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D1'][$i], ENT_QUOTES, "utf-8"));
			$D2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D2'][$i], ENT_QUOTES, "utf-8"));
			$D3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D3'][$i], ENT_QUOTES, "utf-8"));
			$D4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D4'][$i], ENT_QUOTES, "utf-8"));
			$D5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D5'][$i], ENT_QUOTES, "utf-8"));
			$D6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D6'][$i], ENT_QUOTES, "utf-8"));
			$D7 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D7'][$i], ENT_QUOTES, "utf-8"));
			$D8 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D8'][$i], ENT_QUOTES, "utf-8"));
			$D9 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D9'][$i], ENT_QUOTES, "utf-8"));
			$D10 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['D10'][$i], ENT_QUOTES, "utf-8"));

			$sql = "UPDATE  media  set facebook='$T1',twitter='$T2',instagram='$T3',linked='$T4',whatsapp='$T5',youtube='$T6' ,tiktok='$tiktok' where ID='$ID'";
			if (@mysqli_query($conn, $sql)) {
				echo '<meta http-equiv="refresh" content="1;url=media.php">';
			}
		}

		echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?>
		<meta http-equiv="refresh" content="1;url=<?php echo ($self); ?>"><?php


																		}
																	}




																			?>