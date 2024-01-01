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

 
 <script type="text/javascript" src="jquery.js"></script>

   <script type="text/javascript">

function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data_live1.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

</script>
   <script type="text/javascript">

function fetch_select2(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data2.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select2").innerHTML=response; 
     }
   });
}

</script>


   <script type="text/javascript">

function fetch_select3(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data3.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select3").innerHTML=response; 
     }
   });
}

</script>   <script type="text/javascript">

function fetch_select4(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data_live4.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select4").innerHTML=response; 
     }
   });
}

</script>



</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small> المحاضرات الافتراضية والبث المباشر
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<p style="text-align: left"> <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  اضافة جديد</a></p>

<div class="example-modal">
            <div class="modal" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">اضافة محاضرة جديدة</font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
                  
 <div class="row">
<div class="form-group col-lg-6">
                      <label>الفرع</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required     onclick="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);" onchange="fetch_select1(this.value); fetch_select2(this.value); fetch_select3(this.value); fetch_select4(this.value);"       class="form-control"  >
 <option></option> 
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$Branches'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                    
                    
                  
 
                    
                    
<div class="form-group col-lg-6">
                      <label>  الدورة / المستوى  </label>
                      
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="cors_ID"   required  id="new_select1"   class="form-control"  ><option></option>
 
 
					</select> 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess"> وقت البث</label>
 
                      
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="time1"   required       class="form-control"  ><option></option>
<?
$i=0;
include ("conn.php");
$query = "select * from time  order by time";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['time']; ?>"><? echo $row['time1']; ?></option>
<?php } } ?>

					</select>                      
                      
                    </div>
                    
                    
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">  المحاضر</label>
 
                      
                      <input    name="teacher"  size="20"     required="required"      class="form-control" >
                      
                      
                    </div>
                    
                    

                    <div class="form-group col-lg-12">
                      <label class="control-label" for="inputSuccess"> رابط البث</label>
 
                      
                      <input  name="URL"  size="20"    required="required"    class="form-control" >
                      
                      
                    </div> 
                      
                     
                     
                </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="add">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          

          
<table id='example1'  class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center><p align="center">#</th>
                         <th><p align=center><p align="center">الفرع</th>
                         <th><p align=center><p align="center">الدورة</th>
                         <th><p align=center><p align="center">وقت البث</th>
                         <th><p align=center><p align="center">المحاضر</th>
                         <th><p align=center><p align="center">رابط البث</th>
 
 
 
 
                        <th align="right"  width=1> </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from classroom,branches,subjects where subjects.cors_ID=classroom.cors_ID and branches.Branches_ID=classroom.Branches_ID    ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
 <tr>
                        <form method="POST" action="">
                        <td align="right"><p align="center"><? $c++; echo $c; ?></td>
                        <td align="right"><p align="center"><? echo $row['Branches_name']; ?></td>
                        <td align="right"><p align="center"><? echo $row['cors_name']; ?></td>
                        <td align="right"><p align="center"><? echo $row['time1']; ?></td>
						<td align="right"><p align="center"><? echo $row['teacher']; ?></td>						
						<td align="right"><p align="center"><? echo $row['URL']; ?></td>						
 
                      

                        <td align="center" width=4>
                                                <a href="" data-id="<? echo $row['Classroom_ID']; ?>" data-target="#myModaDelete<? echo $row['Classroom_ID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm  "><i class="fa fa-trash-o "></i></a>
 </td>
                      	</form>
                      </tr>
                     



                      <div class="example-modal">
            <div class="modal" id="myModaDelete<? echo $row['Classroom_ID']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
               <form action="" method="post">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">حذف بيانات : <? echo $row['time1']; ?></font><font size="5"></font></b>
					<input  type=hidden name="idd"   size="20"   value="<? echo $row['Classroom_ID']; ?>" required="required"   class="form-control"  >

                  </div>
                  <div class="modal-body">
                  
<div class="row">
<div class="form-group col-lg-12">
<b><label>هل تريد حقًا حذف هذه البيانات ؟</label></b>
<input  type=hidden type="text" name="id" id="bookId" value=""/>
</div>
</div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <? if($_SESSION['acount_type']==1) { ?><input type="submit" class="btn btn-danger" value="حذف" name="delete"><? } else { ?>لا يوجد لديك صلاحيات الحذف<? } ?>
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          
          
          
<? 
}
} 
?>
                    </tbody>
                     
                  </table>
                  
                
                  
 

 

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?
if (isset($_POST['add'])) {
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $time1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time1'], ENT_QUOTES, "utf-8")); 
 $teacher= mysqli_real_escape_string($conn,htmlspecialchars($_POST['teacher'], ENT_QUOTES, "utf-8")); 
 $URL= mysqli_real_escape_string($conn,htmlspecialchars($_POST['URL'], ENT_QUOTES, "utf-8")); 
 
 
 
 $sql="insert into classroom set Branches_ID='$Branches',cors_ID='$cors_ID',time1='$time1',teacher='$teacher',URL='$URL'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}


 




 
 
}
elseif(isset($_POST['edit'])) {
 $Branches= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8"));
 $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors_ID'], ENT_QUOTES, "utf-8")); 
 $time1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['time1'], ENT_QUOTES, "utf-8")); 
 $teacher= mysqli_real_escape_string($conn,htmlspecialchars($_POST['teacher'], ENT_QUOTES, "utf-8")); 
 $URL= mysqli_real_escape_string($conn,htmlspecialchars($_POST['URL'], ENT_QUOTES, "utf-8")); 
 
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 

 $sql="update  classroom set Branches_ID='$Branches',cors_ID='$cors_ID',time1='$time1',teacher='$teacher',URL='$URL'  where Classroom_ID='$iddd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}


 

}

elseif(isset($_POST['delete'])) {
 $idd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['idd'], ENT_QUOTES, "utf-8")); 

$sql="delete from 	classroom where Classroom_ID='$idd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?
}

 
}
 

?>