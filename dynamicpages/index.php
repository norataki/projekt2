<!DOCTYPE html>
<html>
<head>
<!-- ************************************** Links *************************************** -->
	<title>Nora Arhzane- Projekt 2</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="css/Website.css">-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	  <link rel="stylesheet" type="text/css" href="css/website.css">
<!-- ************************************** END links *************************************** -->

</head>
<body>
<!-- ************************************** NAV *************************************** -->

	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" style="color:#232323;">NoraT</a>
		</div>
	<ul class="nav navbar-nav">
		<li><a href="index.php">Hem</a></li> 
		<li><a href="index.php?p=about">Om mig</a></li>
		<li><a href="index.php?p=contact">Kontakt</a></li>
		<li><a href="index.php?p=portfolio">Portfolio</a></li>
	</ul>	

<ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?p=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
	</nav>
<!-- ************************************** END NAV *************************************** -->
<!-- ************************************** GET PAGES WITH PHP *************************************** -->

		<?php

			$pages_dir = 'pages';

			if (!empty($_GET['p'])) //om katalogen pages inte är tom så går php igenom filerna
			{

				$pages = scandir($pages_dir, 0); 
				unset($pages[0], $pages[1]);

				$p = $_GET['p'];


				if (in_array($p.'.inc.php', $pages))
				{
					include($pages_dir.'/'.$p.'.inc.php');
				}
				else
				{
					echo 'Sorry, page not found!';
				}

			}
			else
			{
				include($pages_dir.'/home.inc.php');

			}

		?>
		
<!-- ************************************** END PHP NAV *************************************** -->

<!-- ***************************** FOOTER ****************************** -->
	<footer class="footer">
      <div class="container">
        <span class="text-muted">&copy;2017 Nora Arhzane.</span>
      </div>
    </footer>
  


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>