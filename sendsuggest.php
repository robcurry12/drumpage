<?php
	$host = "localhost";
	$username="root"; // Mysql username 
	$password=""; // Mysql password
	$db= "drumpage"; // Database name
	$song = $_POST['song'];	
	$artist = $_POST['artist'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	

	mysql_connect("$host", "$username", "$password")or die("Cannot connect"); 
	mysql_select_db("$db")or die("Cannot select DB");

	$remove[] = "'";
	$remove[] = '"';
	$remove[] = "-";

	$song = str_replace($remove, " ", $song );
	$artist = str_replace($remove, " ", $artist );
	$name = str_replace($remove, " ", $name );
	$email = str_replace($remove, " ", $email );
	$comments = str_replace($remove, " ", $comments );
	
	$query = "INSERT INTO requests (song, artist, name, email, comments)
          	VALUES ('$song', '$artist', '$name', '$email', '$comments')";
			
	mysql_query($query);
        
	include("drumpage.html");
	
	echo '<script type="text/javascript">';
	echo 'alert("Thank you for your suggestion! I will do my best to get to it ASAP!")';
	echo '</script>';
?>