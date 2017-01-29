<?php
	
		$db = mysqli_connect('localhost', 'root', 'root', 'norasdb'); 
	// this are often coming from a form

	$id = 1;
	//$name = ;
	$content = "";

	// Perform database query

	$query  = "UPDATE pages SET ";
	//$query .= "name    = '{$name}', ";
	$query .= "content = '{$content}' ";
	$query .= "WHERE id = {$id}";

	$result = mysqli_query($connection, $query);
	if ($result)
	{
		echo "SUCCESS!";
	}
	else 
	{
		die("Database query failed. " . mysqli_error($connnection));
	}

?>