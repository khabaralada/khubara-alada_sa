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

<style>
/* Style all input fields */
 

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
.auto-style3 {
	text-align: right;
}
</style>



</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small> تغيير كلمة المرور والبيانات الشخصية      
</small></h1>
<p><b><font color="#FF0000" size="4"><span lang="ar-sa">يجب تغيير كلمة المرور 
واختيار كلمة مرور قوية </span></font></b></p>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

        
        <?
include ("conn.php");
 

$result=mysqli_query($conn,"select* from teacher,user where teacher.teacher_id=user.ID and user.ID='$_SESSION[user_ID]' order by teacher.Branches");

 
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

 <form action="" method="post"  enctype="multipart/form-data">
<div class="row">
 
 
 					<input  type=hidden name="iddd"   size="20"   value="<? echo $row['ID']; ?>" required="required"   class="form-control"  >

                      
  
   

                    
                    <div class="form-group col-lg-6">

                      <label> المجال / التخصص</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="cors" class="form-control" >
                               <option ><? echo $row['cors']; ?></option> 
                               <option>الإدارة</option>
<?
include ("conn.php");
$query9 = "select * from catogry";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['catogry']; ?></option>
<? } ?>

						</select>
                    </div>
                    
                    <div class="form-group col-lg-6">

                      <label>الفرع</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required    class="form-control"  >
						<?   $Branches=$row['Branches']; 
						
						
 
 
$query1 = "select * from branches where Branches_ID='$Branches' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
 
while($row1=mysqli_fetch_array($result1))
{
?>

<option value="<? echo $row1['Branches_ID']; ?>"><? echo $row1['Branches_name']; ?></option>
<?php 
}
?>

	<?    
						
						
 
 
$query1 = "select * from branches  ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
 
while($row1=mysqli_fetch_array($result1))
{
?>

<option value="<? echo $row1['Branches_ID']; ?>"><? echo $row1['Branches_name']; ?></option>
<?php 
}
?>
 
					</select>
                    </div>
                    
                    
                    <div class="form-group col-lg-6">

                      <label>  اسم المحاضر / المدرب</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control" value="<? echo $row['teacher_name']; ?>"  >
 
                    </div>

                    <!-- textarea -->
                    <div class="form-group col-lg-6">

                      <label> رقم بطاقة الأحوال /الرقم الوظيفي</label>
                      <input  name="T7" id="T2" size="20"    required="required"  class="form-control" value="<? echo $row['id_card']; ?>" >
                    </div>
                    <div class="form-group col-lg-6">

                      <label class="control-label" >الدرجة العليمة</label>
                      <input  name="T2" id="T3" size="20"     required="required"  class="form-control" value="<? echo $row['degree']; ?>" >
                    </div>

                    <!-- input states -->
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       العنوان</label>
 
                      
                      <input  name="T3" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['address']; ?>" >
                      
                      
                    </div>
                     
                    
                     <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       الجوال (<font color="#FF0000">اجباري</font>)</label>
 
                      
                      <input  name="T4" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['phone']; ?>" >
                      
                      
                    </div>
                    
                    
                    
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       البريد الالكتروني  </label>
 
                      
                      <input type=email  name="T8"  size="20"      required="required"    class="form-control" value="<? echo $row['email']; ?>" >
                      
                      
                    </div>
                    
                    
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"    readonly required="required"    class="form-control" value="<? echo $row['username']; ?>" >
                      
                      
                    </div><div class="form-group col-lg-6">

                      <font color="#FF0000">

                      <label class="control-label" for="inputSuccess">       كلمة المرور الجديدة</label></font>
 
                      
                      <input  name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  id="T5" size="20"    required="required"    class="form-control"   >
                      
                     <input   type=hidden name="teacher_id"   size="20"    required="required"    class="form-control" value="<? echo $row['teacher_id']; ?>" > 
                    </div>

 
   <div class="modal-footer">
                     
                    <input type="submit" class="btn btn-success " value="حفظ التغييرات" name="edits1">
                  </div>                
                     
                </div>  </form>        

          
 
                  
          <? } } ?>      
                  
 <div id="message">
  <h3 dir="ltr" align="center"><font face="Droid Arabic Kufi">شروط كلمة المرور</font></h3>
	<p id="letter" class="invalid" dir="ltr">A <b>lowercase</b> letter</p>
	<p id="capital" class="invalid" dir="ltr">A <b>capital (uppercase)</b> letter</p>
	<p id="number" class="invalid" dir="ltr">A <b>number</b></p>
	<p id="length" class="invalid" dir="ltr">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</div>


 

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

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



<?

if(isset($_POST['edits1'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $psw= mysqli_real_escape_string($conn,htmlspecialchars($_POST['psw'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 
 $psw= mysqli_real_escape_string($conn,$_POST['psw']); 
$password33= md5($psw);

if($file!="")
$sql="update user set name='$T1',username='$T5',password='$password33',mobile='$T4',email='$T8',Branches='$Branches',image='$nams',updates=1,go=1   where ID='$iddd'";
else
$sql="update user set name='$T1',username='$T5',password='$password33',mobile='$T4',email='$T8',Branches='$Branches',updates=1,go=1  where ID='$iddd'";




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


$sql="update teacher set teacher_name='$T1',degree='$T2',address='$T3',phone='$T4',username='$T5',password='$password33',id_card='$T7',count_h='2000',Branches='$Branches',cors='$cors',
email='$T8',updates=1  where teacher_id='$iddd'";
if(mysqli_query($conn,$sql))
{ }


}
 
?>