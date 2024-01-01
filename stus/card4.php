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
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "اعداد الحضور للمدرب خلال الفترة من <? echo $date_from; ?> الي الفترة <? echo $date_to; ?>"
	},	
	axisY: {
		title: "عدد المتدربين",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Millions of Barrels/day",
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
	data: [
	
	

<?
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

$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
     $dd=date("Y-m-d", $i); 
  $date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {



                      if(date('l', strtotime($date))=="Saturday") $day="السبت";
                      elseif(date('l', strtotime($date))=="Sunday") $day="الاحد";
                      elseif(date('l', strtotime($date))=="Monday") $day="الاثنين";
                      elseif(date('l', strtotime($date))=="Tuesday") $day="الثلاثاء";
                      elseif(date('l', strtotime($date))=="Wednesday") $day="الاربعاء";
                      elseif(date('l', strtotime($date))=="Thursday") $day="الخميس";
                      elseif(date('l', strtotime($date))=="Friday") $day="الجمعة";   
      ?>
      
      
      
      
      
      
	
	{
		type: "stackedColumn",
		name: '<? echo $day.'-'.$dd; ?>',
		legendText: '<? echo $dd.' '.$day; ?>',
		showInLegend: true, 
		dataPoints:[
<? 
include ("conn.php");
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id  from absence,teacher,branches   where branches.Branches_ID=teacher.Branches and  teacher.teacher_id=absence.teacher   order by Branches_name DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
$teacher_id11=$row['teacher_id'];

$query11 = "select count(absence.ID_reg) as co  from absence,stu_sec    where    stu_sec.ID_reg=absence.ID_reg and date_en='$dd' and absence.teacher='46' and absence.type='1'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
  $co=$row11['co'];
}

?>
		
			{ label: "<? echo $row['teacher_name']; ?>", y: <? echo $co; ?> },
 

<?php } ?>





		]
	},
	
	
 
	<? } } ?>
 

	
	]
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
</head>
<body>
<div id="chartContainer" style="height: 800px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>