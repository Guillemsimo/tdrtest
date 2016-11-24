<?php
   include("confi.php");
   session_start();
   
      // username and password sent from form 
      
      $usu = mysqli_real_escape_string($conn,$_POST['usu']);
      $pass = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $query = mysqli_query($conn,"select * from dbusers where usu='$usu' and pass='$pass'");
	  $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	  $active = $row['active'];
	  $rows  = mysqli_num_rows($query);
	  
	  // If result matched $myusername and $mypassword, table row must be 1 row o no
		
      if($rows > 0) {
        echo "Login Complet. Hola ".$usu;
			}else {
		 echo "Nom o Contrasenya incorrectes";
		 
      }

   
   @mysqli_close($conn);

/* Output header */

?>