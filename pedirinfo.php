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
	  $infoquery = mysqli_query($conn,"select email from dbusers where usu='$usu' and pass='$pass'");
	  
	  // If result matched $myusername and $mypassword, table row must be 1 row o no
		
      if($rows > 0) {
        if(mysqli_num_rows($infoquery)>0){
			while ($row = mysqli_fetch_assoc($infoquery)){
				echo $row["email"];
			}
		} else{
			echo "algo faia amigo";
		}
			}else {
         $error = "algo faia amigo";
		 echo $error;
		 
      }

   
   @mysqli_close($conn);

/* Output header */

?>