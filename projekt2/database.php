<?php 
	$connect=mysql_connect('localhost', 'root', 'root', 'contact');
	if (mysql_connect_errno($connect)) {
		echo 'failed to connect';
	}
 ?>