
<?php 
   include_once('./includes/header.php')
?>
<?php
   if(isset($_SESSION['sessionId'])){
      echo "You are LoggedIn";
   }else{
     echo "Home";
   }
?>
<?php 
   include_once('./includes/footer.php')
?>
