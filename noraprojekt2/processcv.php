<?php  $db = mysqli_connect('localhost', 'root', 'root', 'cv');

	if( isset($_POST['message'])
		&& isset($_POST['sender']) ){
		
		$sender = $_POST['sender'];
		$message = $_POST['message'];

		$query = "
		INSERT INTO activities 
		(date, sender, message)
		VALUES 
		(NOW(), '$sender', '$message')
		";

		mysqli_query($db, $query);
	
		echo "Tillagd !";
	}

	if( isset($_POST['id']) ){
		$id = $_POST['id'];
		$query = " 
		DELETE FROM activities
		WHERE id = $id
		";
		mysqli_query($db, $query);
	}

	$query = "
		SELECT *
		FROM activities
		ORDER BY date DESC
	";
	$result = mysqli_query($db, $query);

	while( $row = mysqli_fetch_assoc($result) ){
		echo "<div class='entry'>
		<p>{$row['date']}</p>
		<p>{$row['message']}</p>
		<p>{$row['sender']}</p>
		<form method = 'post' action=''>
		<input type = 'hidden' name='id' value='{$row['id']}'>
		<input type='hidden' >
		</form>
		</div>";
	}
?>
