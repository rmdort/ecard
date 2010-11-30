<form action="send-email.php" method="post">

<fieldset>
	<p>Facebook User ID<input type="text" name="FacebookUID"> </p>
	
	<p>Facebook Username<input type="text" name="FacebookUsername"> </p>
	
	<p>Senders Facebook Email <input type="text" name="FacebookEmail" /></p>
	
	<p>Card ID <input type="text" name="CardID" id="CardID" /></p>
	
	<p>Uploaded Image <input type="text" name="ImageURL" id="ImageURL" /></p>
	
	<p>Message <textarea name="Message" id="Message" rows="10" cols="50"></textarea></p>
	
	<p>Recipients Email <input type="text" name="RecipientEmails[]" id="RecipientEmails[]" size="40" /></p>
	
	<p>If facebook UID is empty.. Seperate Email and Name Field
		<br>
		Name <input type="text" id="NoFacebookName" name="NoFacebookName"> <br>
		Email <input type="text" id="NoFacebookEmail" name="NoFacebookEmail">
		
	</p>
	
</fieldset>

<fieldset>
	
	<p><input type="submit" value="Send Email" /></p>
	
</fieldset>

	
</form>
