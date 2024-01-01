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
اعداد الحضور
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					   
					<form method="POST" action="">
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label> التاريخ الي</label>
                                            <div class="input-group input-group-sm has-error">

                      <input  name="date_to1" type=date  size="20"    required="required"  class="form-control" value="<? echo $date_to1; ?>" >
                      <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">
						بحث</button>
                    </span>
                    </div>
                    
                    
                    </div><div class="form-group col-xs-6">
                      <label class="control-label" > 
						التاريخ من </label>
                      <input  name="date_from1"  type=date size="20"     required="required"  class="form-control" value="<? echo $date_from1; ?>" >
                    </div>
                    </div>
                  	</form>

                   
                </div>
                <?
                include ("conn.php");

if(isset($_POST['go']))
{
$date_to=$_POST['date_to1'];  
$date_from=$_POST['date_from1']; 
}
else
{
$date_to = date('Y-m-d');  
$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
}
?>
<?php
 
$dataPoints1 = array(
?>

<?
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id  from absence,teacher,branches   where branches.Branches_ID=teacher.Branches and  teacher.teacher_id=absence.teacher   order by Branches_name DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
$teacher_id11=$row['teacher_id'];

$query11 = "select count(absence.ID_reg) as co  from absence,stu_sec,cors    where end_date>='$ar_date' and cors.ID=stu_sec.section_Id  and   stu_sec.ID_reg=absence.ID_reg and date_en='$dd' and absence.teacher='$teacher_id11' and absence.type='1'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
  $co=$row11['co'];
}
?>
<?
	array("label"=> "2010", "y"=> 36.12),
?>
<?


}


);
$dataPoints2 = array(
	array("label"=> "2010", "y"=> 64.61),
	array("label"=> "2011", "y"=> 70.55),
	array("label"=> "2012", "y"=> 72.50),
	array("label"=> "2013", "y"=> 81.30),
	array("label"=> "2014", "y"=> 63.60),
	array("label"=> "2015", "y"=> 69.38),
 
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Real Trees",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Artificial Trees",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height:470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>         



