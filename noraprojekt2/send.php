 	<?php

		$servername = "localhost";
		$username   = "root";
		$password   = "root";
		$dbname     = "norasdb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}


	//*********************************** Security ******************* //
		//adds a backslash before certain potentially dangerous characters in a string passed in to the function. Prevents SQL-injections.

	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$message = mysql_real_escape_string($_POST['message']);	

	
	//skickar informationen till databasen 

	$sql = "INSERT INTO formular (name, email, phone, message)
	        VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')";


	if (mysqli_query($conn, $sql)) {
		echo "Meddelande Skickat ! ";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


  // om meddelandet skickats 
  echo '<a href="index.php?p=contact">Skicka ett till meddelande</a>.';

	 
	mysqli_close($conn)

?>