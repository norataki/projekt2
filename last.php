<!DOCTYPE html>
<html>
<head>
	<style>
		.entry {border:2px solid;
			margin: 10px;
			padding: 10px;
		}
	</style>
	<title>cv</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	  <link rel="stylesheet" type="text/css" href="projekt2.css">
	  <link rel="stylesheet" type="text/css" href="cv.css">

</head>
<body>
	<?php include ("nav.php");?>
	<h1></h1>

	<center><form method='post' action=''>
		<input type='text' name='sender' placeholder="rubrik"><br><br>
		<textarea name='message' required=""></textarea><br>
		<input type='submit' value='Add'><br>
	</form></center>
	<script type="text/javascript">
	 $(document).ready(function(){
	    $("div").click(function(){
	        $("p").toggle();
	    });
	 });w
	 </script>
<?php

	$db = mysqli_connect('localhost', 'root', 'root', 'cv');

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
	
		echo "Skickat!";
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

</body>
</html>