<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="css/Website.css">
</head>
<body>

	<div id="header"><h1>Website</h1></div>
	<div id="menu">
		<a href="index.php">Home</a>
		<a href="index.php?p=aboutus">About us</a>
		<a href="index.php?p=contactus">Contact us</a>
		<a href="index.php?p=news">News</a>
	</div>
	<div id="content">
		<?php
			if (!empty($_GET('p')))
			{
				$pages_dir = 'pages';
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

		?>
		
	</div>

</body>
</html>