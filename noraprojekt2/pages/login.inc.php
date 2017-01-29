	
	<style>
		form {
			max-width: 50%;
			margin: 0 auto;
			padding: 5%;
		}
	</style>
	
<!-- ************************* Login form ***********************************-->
	<center><form action="functions.php" method="post">
		<p>
			<label>Användarnamn:</label>
			<input type="text" name="user" id="user" class="form-control" required />
		</p><br>
		<p>
			<label>Lösenord:</label>
			<input type="password" name="pass" id="pass" class="form-control" required />
		</p><br>
		<p>
			<input type="submit" id="btn" value="Logga in" class="btn btn-info" required />
		</p>
	</form></center>
