
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  >
					المقدمة </a></li>
                  <li><a href="lessons.php?ID_reg=<? echo $row[ID_reg]; ?>"  >
					المحاضرات </a></li>
                  <li><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >
					المصار ومحتوى البرنامج </a></li>
                  <li><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >
					دليل الفيديو </a></li>
                  <li><a href="content1.php?section_Id=<? echo $row[section_Id]; ?>"  >
					الواجبات </a></li>
                  <li><a href="show_mail.php?section_Id=<? echo $row[section_Id]; ?>"  >
					المناقشات </a></li>
                  <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?> <li><a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  >الاختبار النهائي </a></li>
<?php } ?>
 
                  <li>
<? if($row[cors_type]=="لغة الإنجليزية" and $row['scor']>=60 ) { ?> 
						<a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
						
       <? if($row[cors_type]=="لغة صينية" and $row['scor']>=60 ) { ?> 
       <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
       
       
   						<? if($row[cors_type]=="تطويري"   ) { ?> 
						<a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دورة تأهلية" and $row['scor']>=60 ) { ?> 
						<a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دبلوم" and $row['scor']>=60 ) { ?> 
						<a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>                  
                  
                  </li>
                  
                   <li><a href="info.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>"  >
					افادة </a></li>
                 
                  
                  
                  
                </ul>