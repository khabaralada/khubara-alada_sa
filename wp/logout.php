<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
   }
?>
<?php
session_unset(); 
session_destroy(); 
?>




