<?php

// DB Connect
include("db.php");

if(isset($_GET['method'])){
	
	if($_GET['method']=="Post"){
		
	$UID = $_GET['UID'];
	$CardID = $_GET['CardID'];
	
	if($UID){
		$query = "INSERT INTO likes (UID,CardID,Likes) VALUES ($UID, $CardID, 1)";
		mysql_query($query) or die('Error, insert query failed');
				
		}
	
	}
	else{
		$CardID = $_GET['CardID'];
		$query = "SELECT SUM(Likes) as total_likes FROM likes WHERE CardID =". $CardID;
		$result = mysql_query($query) or die(mysql_error());

		// Print out result
		while($row = mysql_fetch_array($result)){
			echo $row['total_likes'];
		}
	}	
	mysql_close($conn);	
}

?>
<form action="like.php" method="get">
	
	<fieldset>
		
		<p>User ID <input type="text" name="UID" id="UID" /></p>
		<p>Card ID <input type="text" name="CardID" id="CardID" /></p>
		
		
		
		<p>Method <select name="method">
			<option>Post</option>
			<option>Get</option>
		</select></p>
		<p>If you use get, u need the card ID.. I will output the number of likes</p>
		
	</fieldset>
	
	<fieldset>

		<p><input type="submit" value="Like this card" /></p>

	</fieldset>
	
</form>