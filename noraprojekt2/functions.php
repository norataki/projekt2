<?php  

	session_start();
	
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	// connect to the server and select database
	mysql_connect("localhost", "root", "root");
	mysql_select_db("login");

	//query the database for user
	$result = mysql_query("select * from users where username = '$username' and password = '$password' ") 
		or die("Failed to query database ".mysql_error());

	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password ){
		echo " 
		<nav class='navbar navbar-default'>
			<ul class='nav navbar-nav'>
					<li><a href='index.php?p=textadmin'>Textadmin</a></li> 
					<li><a href='index.php?p=imageadmin'>Bildadmin</a></li>
					<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logga ut</a></li>
			</ul>
		</nav>
			<h2>Adminpanel</h2>

		 ".$row['username']
		;
	} else {
		echo "Inloggning misslyckad";
	}
		
?>
<?php include 'links.php' ?>
