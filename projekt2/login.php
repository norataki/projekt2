<!DOCTYPE html>
<html>
<head>
	<title>Logga in</title>
	<link rel="stylesheet" type="text/css" href="projekt2.css">
</head>
<body>

<div class="lgg">
	<form action="functions.php" method="POST">
		<p>
			<label>Användarnamn :</label>
			<input type="text" name="user" id="user" />
		</p>
		<p>
			<label>Lösenord :</label>
			<input type="password" name="pass" id="pass" />
		</p>
		<p>
			<input type="submit" id="btn" value="login" />
		</p>
	</form>

</div>
</body>
</html>