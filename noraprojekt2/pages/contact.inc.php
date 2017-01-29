<!-- ********************** KONTAKT FORMULÄR ***************************-->

<div class="wrapper">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">

				<form role="form" action="send.php" method="post" >
    <div class="col-lg-6">
    	<h2 id="special">Kontakta mig</h2>

      <div class="form-group">
        <label for="name">Namn*</label>
        <div class="input-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Fyll i Namn" required>
          <span class="input-group-addon"></span></div>
      </div>
      <div class="form-group">
        <label for="email">E-post*</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Fyll i E-post" required  >
          <span class="input-group-addon"></span></div>
      </div>
      <div class="form-group">
        <label for="phone">Telefonnummer*</label>
        <div class="input-group">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Fyll i Telefonnummer" required>
          <span class="input-group-addon"></span></div>
      </div>
      <div class="form-group">
        <label for="message">Meddelande*</label>
        <div class="input-group">
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Skicka" class="btn btn-info pull-right">
    </div>
					
				</form>
			</div>
		</div>
	</div>
