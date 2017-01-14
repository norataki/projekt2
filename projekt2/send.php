	<?php
		$servername = "localhost";
		$username   = "root";
		$password   = "root";
		$dbname     = "contact";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}


	//***********************************

	
	$sql = "INSERT INTO formular (name, email, phone, message)
	        VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')";


	if (mysqli_query($conn, $sql)) {
		echo "Meddelande Skickat !";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	 
	mysqli_close($conn)

?>