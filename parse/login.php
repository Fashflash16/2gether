<?php
	require('../includes/db_connect.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = md5($_REQUEST['password']);
		
		
	//Checking is user existing in the database or not
        $query = "SELECT id, first_name, last_name, email, password FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){

        	while($rows = mysqli_fetch_assoc($result)) {

        	//$username = $rows['first_name'];
			$_SESSION['email'] = $email;
			$_SESSION['status'] = "Active";

			$conn->query("INSERT INTO sessions (id, user_id, login_time, online) VALUES (DEFAULT, ".$rows['id'].", now(), 1)");

			header("location: ../user_profile.php?url=".$rows['id']."".SID);
            exit;
     

        	 } 
     
            
			//header("Location: dashboard.php"); // Redirect user to index.php
            }else{
				session_destroy();
				header("location: ../index.php?mssg=".urlencode("Το email ή το paswword που έδωσες είναι λανθασμένα. Προσπάθησε ξανά ή κάνε εγγραφή."));
             //   header("Location: login_fail.php"); 
				}
    }else{
       
       header("location: ../index.php?mssg=".urlencode("Το email ή το paswword που έδωσες είναι λανθασμένα. Προσπάθησε ξανά ή κάνε εγγραφή."));
    //    header("Location: login_fail.php");
        
    }


?>
