<?php error_reporting(0);

 	include('session.php');  
	   include("font.php");  
 

?>
   
  
	<html><head>
	<? //include("header.php"); ?>
	<? //include("footer.php"); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

 
 
        <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href=" plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

 <style>
 thead{
    display: table-header-group;
}
</style>


<style>
  
</style>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: green;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar2 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #93cedc;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar2.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar3 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar3.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

  <style type=text/css>
 
 

.pagebreak {  page-break-before: always;
 }
</style>


 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>	 	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: right; background-attachment:fixed" background="bg.webp">
	<div align=center > 
  
	<html><head>
	
	 

	<LINK href="image/style.css" type=text/css rel=stylesheet>

<meta http-equiv="Content-Language" content="ar-sa">
<script type="text/javascript" src="stmenu.js"></script>
<script type="text/javascript" src="selectuser1.js"></script>
<LINK href="image/style.css" type=text/css rel=stylesheet>
	 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
  $branches_logo=$row8['branches_logo'];
 }
 ?>


<title><? echo $Branches_title_sms; ?>  </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>	 	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: right; background-attachment:fixed" background="bg.webp">
	<div align=center > 
	
	<?
function d_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$day"; 
return $new_date; 
}
function m_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$month"; 
return $new_date; 
}

function y_date($date) 
{ 
$date1=explode("-",$date); 
$year=$date1[0]; 
$month=$date1[1]; 
$day=$date1[2]; 
$new_date="$year"; 
return $new_date; 
}

 

?><br>
<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from subjects,cors   where  cors.cors_ID=subjects.cors_ID and cors.ID='$section_Id'");
while($row=mysqli_fetch_array($result))
{
  $cors=$row['cors'];
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];
$com=$row['com']; 
$d = d_date($start_date); // الدالة 
$m = m_date($start_date); // الدالة 
$y = y_date($start_date); // الدالة 

 $traning_name=$row['traning_name'];


 
function HijriToJD($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}
$date = HijriToJD($d, $m, $y);
jdtogregorian($date);
$newDate = date("Y-m-d", strtotime(jdtogregorian($date))); 
 
 
$d = d_date($end_date); // الدالة 
$m = m_date($end_date); // الدالة 
$y = y_date($end_date); // الدالة 

function HijriToJD1($d, $m, $y){
   return (int)((11 * $y + 3) / 30) + 354 * $y + 
     30 * $m - (int)(($m - 1) / 2) + $d + 1948440 - 385;
}


$date = HijriToJD1($d, $m, $y);

  jdtogregorian($date);
  $newDate1 = date("Y-m-d", strtotime(jdtogregorian($date))); 




}
?> 
	<table border="0" width="100%" cellpadding="2">
		<tr>
			<td width="78"><? if($_SESSION['image']!="") { ?><img border="0" src="dist/img/<? echo $_SESSION['image']; ?>"  height="85"  ><? } ?></td>
			<td>
			<div align="center">
				<table border="1" width="80%" cellpadding="2" style="border-collapse: collapse">
					<tr>
						<td colspan="4" align="center" bgcolor="#BCE8F1"><? echo $Branches_title_sms; ?> </td>
					</tr>
					<tr>
						<td align="center"><? //echo date("F", $i); ?></td>
						<td align="center">الحضور والغياب لشهر</td>
						<td align="center"><? echo $com; ?></td>
						<td align="center">اسم الشركة</td>
					</tr>
					<tr>
						<td align="center">من <? echo $start_date ; ?> الي <? echo $end_date; ?> </td>
						<td align="center">الفترة الزمنية</td>
						<td align="center">&nbsp;</td>
						<td align="center">الكود</td>
					</tr>
				</table>
			</div>
			</td>
			<td width="68"><img border="0" src="<? echo $branches_logo; ?>"  height="85"  ></td>
		</tr>
	</table>


<?
include ("conn.php");
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result5=mysqli_query($conn,"select distinct manth,year from absence  where  section_Id='$section_Id' order by manth,year");
$rows=mysqli_num_rows($result5) ; 
if($rows > 0 )
{

while($row5=mysqli_fetch_array($result5))
{
 
    $date3=$row5['year'];
     $date2=$row5['manth'];

 
	if($date2>12)
	{
$date2=1;
$date3++;
}
?>  
                  <table id="example1" class="table table-bordered table-striped" dir=rtl  >
				<thead>
				<tr>
					<td align="center" width="23" height="23" dir="rtl">
					&nbsp;</td>
					<td align="center"  dir="rtl">
					&nbsp;</td>
					
<?
 
$date_to = '2021-2-28';  
$date_from ='2021-02-01'; 
 
 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
  $date=date("Y-m-d", $i); 
 
      ?>					
					<td align="center"   dir="ltr">
					<span lang="en-gb"><? echo $dd=date("d", $i); ?></span></td><? } ?> 
					
					
					<td align="center" height="17">
					</td>
					<td align="center" height="17">
					</td>
				</tr>
				<tr>
					<td align="center"     dir="rtl">
					&nbsp;</td>
					<td align="center"   dir="rtl">
					&nbsp;</td>
					<?
 
$date_to = '2021-2-28';  
$date_from ='2021-02-01'; 
 
 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
  $date=date("Y-m-d", $i); 
 
      ?><td align="center"  dir="ltr">
					<? echo date('D', strtotime($date)); ?></td><? } ?>
					<td align="center"  >
					 </td>
					<td align="center" >
					&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  dir="rtl" bgcolor="#BCE8F1">
					<font color="#000080">#</font></td>
					<td align="center"   dir="rtl" bgcolor="#BCE8F1">
					<font size="2" color="#000000">اسم المتدرب </font> </td>
<?
 
$date_to = '2021-2-28';  
$date_from ='2021-02-01'; 
 
 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
  $date=date("Y-m-d", $i); 
 
      ?><td align="center" dir="ltr" bgcolor="#BCE8F1">
					<span lang="en-us"><font color="#000080"><? echo date("M-d", $i); ?></font></span></td> <? } ?>
					<td align="center" height="17" bgcolor="#BCE8F1">
					<font size="2" color="#000000">عدد ايام الحضور   </font></td>
					<td align="center" height="17" bgcolor="#BCE8F1">
					<font color="#000000" size="2">عدد ايام الغياب</font></td>
				</tr></thead>
										<?

include ("conn.php");
$c1=0;
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
 

$result=mysqli_query($conn,"select* from stu_sec,student  where student.stu_id=stu_sec.stu_id and section_Id='$section_Id'");
while($row=mysqli_fetch_array($result))
{
$c1++;
    $ID_reg=$row['ID_reg'];
$CC=0;

?>
<tr>
					<td align="center" width="24" height="26"><? echo $c1; ?></td>
					<td align="center"  ><? echo $row['stu_name_ar']; ?></td>
<?
 
$date_to = '2021-2-28';  
$date_from ='2021-02-01'; 
 
 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
  $date=date("Y-m-d", $i); 
 
      ?><td align="center" width="28" <? if((date('l', strtotime($date))=="Friday") or    (date('l', strtotime($date))=="Saturday")) echo "bgcolor=#BCE8F1"; ?> ><? 
       if((date('l', strtotime($date))=="Friday") or    (date('l', strtotime($date))=="Saturday")) { echo 'H'; }
      else {
 
 
$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=0 and ID_reg='$ID_reg' and date_en='$date'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <font color=red><b>X</b></font> ';
$CC++;
}

 

$result1=mysqli_query($conn,"select distinct date_en  from absence   where type=1 and ID_reg='$ID_reg' and date_en='$date'");
while($row1=mysqli_fetch_array($result1))
{
echo ' <img src="3.png" width="22" height="25"> ';
}

}
?>
</td><? } ?>
					<td align="center"   height="26">	<? echo $dd-$CC; ?></td>
					<td align="center"   height="26"><? echo $CC; ?></td>
				</tr>
				<? } ?>
				 
				</table><br>&nbsp;<table border="1" width="100%" style="border-collapse: collapse">
		<tr>
			<td align="center" width="16%">&nbsp;</td>
			<td align="center" width="16%"><b>المدير الأكاديمي</b></td>
			<td align="center" width="16%">&nbsp;</td>
			<td align="center" width="16%"><b>مشرف المجموعه</b></td>
			<td align="center" width="16%">							<?
include ("conn.php");
$result=mysqli_query($conn,"select* from teacher where teacher_id='$traning_name'");
while($row=mysqli_fetch_array($result))
{
  echo $row['teacher_name']; 
  }
?></td>
			<td align="center" width="16%"><b>المدرب</b></td>
		</tr>
	</table>
	<p>&nbsp;<? 
 

}}  ?>
 
</div> 
</body>
</html>
 <br>

 
</div> 
</body>
</html>
 
    <script src=" plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=" bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=" plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src=" plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src=" plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src=' plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src=" dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
     <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    
    	<script type="text/javascript" language="javascript" src="dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="buttons.html5.min.js"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        /* jQueryKnob */

        $(".knob").knob({
          /*change : function (value) {
           //console.log("change : " + value);
           },
           release : function (value) {
           console.log("release : " + value);
           },
           cancel : function () {
           console.log("cancel : " + this.value);
           },*/
          draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              var a = this.angle(this.cv)  // Angle
                      , sa = this.startAngle          // Previous start angle
                      , sat = this.startAngle         // Start angle
                      , ea                            // Previous end angle
                      , eat = sat + a                 // End angle
                      , r = true;

              this.g.lineWidth = this.lineWidth;

              this.o.cursor
                      && (sat = eat - 0.3)
                      && (eat = eat + 0.3);

              if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value);
                this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                this.g.beginPath();
                this.g.strokeStyle = this.previousColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });
        /* END JQUERY KNOB */

        //INITIALIZE SPARKLINE CHARTS
        $(".sparkline").each(function () {
          var $this = $(this);
          $this.sparkline('html', $this.data());
        });

        /* SPARKLINE DOCUMENTAION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
        drawDocSparklines();
        drawMouseSpeedDemo();

      });
      function drawDocSparklines() {

        // Bar + line composite charts
        $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
        $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                {composite: true, fillColor: false, lineColor: 'red'});


        // Line charts taking their values from the tag
        $('.sparkline-1').sparkline();

        // Larger line charts for the docs
        $('.largeline').sparkline('html',
                {type: 'line', height: '2.5em', width: '4em'});

        // Customized line chart
        $('#linecustom').sparkline('html',
                {height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
                  minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3});

        // Bar charts using inline values
        $('.sparkbar').sparkline('html', {type: 'bar'});

        $('.barformat').sparkline([1, 3, 5, 3, 8], {
          type: 'bar',
          tooltipFormat: '{{value:levels}} - {{value}}',
          tooltipValueLookups: {
            levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
          }
        });

        // Tri-state charts using inline values
        $('.sparktristate').sparkline('html', {type: 'tristate'});
        $('.sparktristatecols').sparkline('html',
                {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

        // Composite line charts, the second using values supplied via javascript
        $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
        $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

        // Line charts with normal range marker
        $('#normalline').sparkline('html',
                {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
        $('#normalExample').sparkline('html',
                {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

        // Discrete charts
        $('.discrete1').sparkline('html',
                {type: 'discrete', lineColor: 'blue', xwidth: 18});
        $('#discrete2').sparkline('html',
                {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

        // Bullet charts
        $('.sparkbullet').sparkline('html', {type: 'bullet'});

        // Pie charts
        $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

        // Box plots
        $('.sparkboxplot').sparkline('html', {type: 'box'});
        $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
                {type: 'box', raw: true, showOutliers: true, target: 6});

        // Box plot with specific field order
        $('.boxfieldorder').sparkline('html', {
          type: 'box',
          tooltipFormatFieldlist: ['med', 'lq', 'uq'],
          tooltipFormatFieldlistKey: 'field'
        });

        // click event demo sparkline
        $('.clickdemo').sparkline();
        $('.clickdemo').bind('sparklineClick', function (ev) {
          var sparkline = ev.sparklines[0],
                  region = sparkline.getCurrentRegionFields();
          value = region.y;
          alert("Clicked on x=" + region.x + " y=" + region.y);
        });

        // mouseover event demo sparkline
        $('.mouseoverdemo').sparkline();
        $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
          var sparkline = ev.sparklines[0],
                  region = sparkline.getCurrentRegionFields();
          value = region.y;
          $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
        }).bind('mouseleave', function () {
          $('.mouseoverregion').text('');
        });
      }

      /**
       ** Draw the little mouse speed animated graph
       ** This just attaches a handler to the mousemove event to see
       ** (roughly) how far the mouse has moved
       ** and then updates the display a couple of times a second via
       ** setTimeout()
       **/
      function drawMouseSpeedDemo() {
        var mrefreshinterval = 500; // update display every 500ms
        var lastmousex = -1;
        var lastmousey = -1;
        var lastmousetime;
        var mousetravel = 0;
        var mpoints = [];
        var mpoints_max = 30;
        $('html').mousemove(function (e) {
          var mousex = e.pageX;
          var mousey = e.pageY;
          if (lastmousex > -1) {
            mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
          }
          lastmousex = mousex;
          lastmousey = mousey;
        });
        var mdraw = function () {
          var md = new Date();
          var timenow = md.getTime();
          if (lastmousetime && lastmousetime != timenow) {
            var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
            mpoints.push(pps);
            if (mpoints.length > mpoints_max)
              mpoints.splice(0, 1);
            mousetravel = 0;
            $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
          }
          lastmousetime = timenow;
          setTimeout(mdraw, mrefreshinterval);
        };
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval);
      }


    </script>

 

    <!-- page script -->
    <!-- page script -->
        <script type="text/javascript">
      $(function () {
        $("#example2").dataTable();
        $('#example1').dataTable({
          "bPaginate": false,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": false,
          "bInfo": true,
          "bAutoWidth": false,
            dom: 'Bfrtip',
		   buttons: [
            {
            extend: 'excelHtml5',
 
             text: '<i class="fa fa-file-excel-o fa-2x    "></i>',

			autoFilter: true,
			sheetName: 'Exported data'

            } 
        ]

        });
      });
    </script>
 
    <script src="./js/bootstrap-hijri-datetimepickermin.js"></script>

    <script type="text/javascript">


        $(function () {

            initDefault();

        });

        function initDefault() {
            $("#hijri-picker").hijriDatePicker({
                hijri:true,
                showSwitcher:false
            });
            
             $("#hijri-picker1").hijriDatePicker({
                hijri:true,
                showSwitcher:false
            });

             $("#hijri-picker2").hijriDatePicker({
                hijri:true,
                showSwitcher:false
            });


        }

    </script>
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
          } else {
            //Check all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");          

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>
<script src=" plugins/jquery/jquery.min.js"></script>
<script src=" plugins/select2/js/select2.full.min.js"></script>
 
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>