<?php 
error_reporting(0);
include('session.php'); 
include ("../config.php");

?><html>  <head>  <title>التقارير</title>
<meta http-equiv="Content-Language" content="ar-sa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			
<table border="0" width="100%" style="border-collapse: collapse">
	<tr>
		<td   valign="top">	<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "عددالمبيعات والمرتجع من الأصناف"
	},	
	axisY: {
		title: "المبيعات",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "المرتجع",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "المبيعات",
		legendText: "المبيعات",
		showInLegend: true, 
		dataPoints:[
		<?php 
$result = mysqli_query($conn,"select count(*) as co,name from user_crm,user_login 
where user_crmusername=user_login.username  and date=CURDATE()   
GROUP by user_crm.ID order by count(*) DESC"); 
while($row=mysqli_fetch_array($result))
{
?>

			{ label: "<?php echo $row['name']; ?> - <?php echo $row['co']; ?>", y: <?php echo $row['co']; ?> },
<?php
}

 ?>
		]
	},
	{
		type: "column",	
		name: "المرتجع",
		legendText: "المرتجع",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
<?php 
$result = mysqli_query($conn,"select count(*) as co,name from user_crm,user_login 
where user_crmusername=user_login.username  and date=CURDATE()   
GROUP by user_crm.ID order by count(*) DESC"); 
while($row=mysqli_fetch_array($result))
{
?>

			{ label: "<?php echo $row['name']; ?>- <?php echo $row['co']; ?>", y: <?php echo $row['co']; ?> },
<?php
}

 ?>
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>


<div id="chartContainer" style="height: 450px;  max-width: 100%; margin: 0px auto;"></div><script src="canvasjs-2.2/canvasjs.min.js"></script>
</td>
		 
	</tr>
	</table>

 

<br>


 