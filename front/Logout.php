<?php
  session_start ();

  // On détruit les variables de notre session
  session_unset ();
  
  // On détruit notre session
  session_destroy ();
   
   echo 'You have cleaned session';
   header("Location:  Login.php");
?>
