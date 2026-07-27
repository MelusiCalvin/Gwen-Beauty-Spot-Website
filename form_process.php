	<?php

    ///defining variables and set to empty values
    $name_error = $email_error = $phone_error = $message_error = "";
    $name = $email = $phone = $message = $success = "";


	// connect to the database

	$db = mysqli_connect('localhost', 'root', '', 'gwen');

    //form is submitted with POST method
    //start of validation
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])) {
            $name_error = "Name is required";
        }else{
            $name = test_input($_POST["name"]);
            //check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/" , $name)) {
                $name_error = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["email"])) {
            $email_error = "Email is required";
        }else{
            $email = test_input($_POST["email"]);
            //check if email address is well inserted
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid email address";
            }
        }

   	    if(empty($_POST["phone"])) {
            $phone_error = "Phone number is required";
        }else{
	        $phone = test_input($_POST["phone"]);
	        //check if name only contains letters and whitespace
	        if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i" , $phone)) {
	               $phone_error = "Invalid phone number";
	            }
        }

        if(empty($_POST["message"])) {
            $message_error = "Please state your enquiry.";
        } else {
            $message = test_input($_POST["message"]);
        }
        //end of validation
        //below. if validation was successful post/send to the database /if there were no errors send to db
        if($name_error =="" and  $email_error =="" and $phone_error =="" and $message_error ==""){

/*
        	$message_body = "";
        	unset($_POST['submit']);
        	foreach ($_POST as $key => $value) {
        		# code...
        		$message_body .= "$key: $value\n";
        	}
*/
		 $query = "INSERT INTO contact (name, email, phone, message) 
		              VALUES('$name', '$email', '$phone', '$message')";

		//success message              
		if($query == TRUE){
			$success = "Thank you $name for contacting us, we will get back to you as soon as your booking is approved. ";

			//making the form empty after data has been sent.
			$name = $email = $phone = $message = '' ;
		
			mysqli_query($db, $query);
		
		header("refresh:3; url=contact.php");
    	}
	}
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>