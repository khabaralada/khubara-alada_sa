<?
	//include('session.php'); 
include('font.php'); 
  
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];
?>
<div class="form-group  ">
                      <label>الدورات القائمة</label><br>
      <span id="new_select1" ></span>              
                    </div>

 <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>الوقت</th>
                         <th><p align=center>تاريخ بداية الدورة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>
                         <th><p align=center>نوع الحضور</th>
                         <th><p align=center>مبلغ الدورة</th>
                         <th><p align=center>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors_type='$state'    and end_date>='$ar_date'  order by cors_no DESC limit 150";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and cors_type='$state' and end_date>='$ar_date' order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];

?>
 <tr>
                        <td >
						<? echo $row['cors_no']; ?>
						
						<input type="hidden" name="section_Id[]" size="20" value="<? echo $row['0']; ?>">
						<input type="hidden" name="cors_code[]" size="20" value="<? echo $row['cors_no']; ?>">
						<input type="hidden" name="cors_type[]" size="20" value="<? echo $row['cors_type']; ?>">
						<input type="hidden" name="Branches[]" size="20" value="<? echo $row['Branches']; ?>">
						
						
						</td>
                        <td >
						<? echo $row['cors_name']; ?></td>
                        <td >
 <? echo $row['Branches_name'];
?></td>
                        <td >
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td > 
						<? echo $row['time1']; ?> - <? echo $row['time2']; ?></td>
                        <td > 
						<? echo $row['start_date']; ?></td>
                        <td >
						<? echo $row['end_date']; ?></td>
                        <td >
                        
                        <select   name="online[]"               class="form-control" style="text-align: center" >
                        <option>حضوري</option>
                        <option>اونلاين</option>
                        
                        </select ></td>
                        <td >
						<input  name="Course_amount1[]"    size="3"          class="form-control" style="text-align: center"   ></td>
                        <td >
						<input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"   ></td>
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table></div>



<?
 exit;
}

?>