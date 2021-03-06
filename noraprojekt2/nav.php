
<!-- ************************************** NAV *************************************** -->

	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	<ul class="nav navbar-nav">
		<li><a href="index.php">Hem</a></li> 
		<li><a href="index.php?p=about">Om mig</a></li>
		<li><a href="index.php?p=contact">Kontakt</a></li>
		<li><a href="index.php?p=portfolio">Portfolio</a></li>
		<li><a href="index.php?p=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</ul>
      </div>
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
