<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nora new project</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="kontakt.css">
</head>

<body>
<!--Nav -->
  <?php include ("nav.php"); ?>


	<div class="wrapper">
		<div class="row">
			<div class="col-md-8">

				<form role="form" action="send.php" method="POST" >
    <div class="col-lg-6">
    	<h1>Kontakta mig</h1>

      <div class="form-group">
        <label for="name">Namn</label>
        <div class="input-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Fyll i Namn" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="email">E-post</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Fyll i E-post" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="phone">Telefonnummer</label>
        <div class="input-group">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Fyll i Telefonnummer" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="message">Meddelande</label>
        <div class="input-group">
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Skicka" class="btn btn-info pull-right">
    </div>
					
				</form>
			</div>
		</div>
	</div>

<!-- ************************* Form end ***************************************-->
<!-- ***************************** FOOTER ****************************** -->
	<footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

</body>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>