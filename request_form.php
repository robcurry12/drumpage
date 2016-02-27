<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Request A Cover</title>
	<link rel="stylesheet" href="main.css">
	<link rel='shortcut icon' type='favicon.png' href='images/favicon.png'/ >
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
 
</head>

<body>
<section>
	<div id = "social_media">
		<a href="https://twitter.com/CurryClub_12"><img src="images/twitter.png" width="36" height="36" alt="Twitter" /></a>
		<a href="http://www.facebook.com/rcroxursox"><img src="images/facebook.png" width="36" height="36" alt="Facebook" /></a>
		<a href="http://www.instagram.com/rcurry_12"><img src="images/instagram.png" width="36" height="36" alt="Instagram" /></a>
		<a href="http://www.youtube.com/rcroxursoxrob12"><img src="images/youtube.png" width="36" height="36" alt="Youtube" /></a>
		<a href="http://www.dailymotion.com/rcroxursox"><img src="images/dailymotion.png" width="36" height="36" alt="Dailymotion" /></a>
	</div>
	<div id="cssmenu">
	<ul>
   		<li id = "home"><a href='drumpage.html'><span>Home</span></a></li>
   		<li id = "songscovered"><a href='https://www.youtube.com/playlist?list=PLfbc8oyoaZopYYn4_Li-Ht0eZt4So-E1V' target="_blank"><span>Covers</span></a></li>
   		<li id = "request" class = "active"><a href='request_form.php'><span>Request Covers</span></a></li>
	</ul>
	</div>
	<div id = "requests">
		<form action="sendsuggest.php" method="POST">
			<h2>Request Form</h2>
			<table id = "request_table">
			<tr><td><h1>Song: </h1></td> <td><input type="text" name="song" id="song" placeholder = "Feel This Moment" required></td></tr>
			<tr><td><h1>Artist: </h1></td><td><input type="text" name="artist" id="artist" placeholder = "Pitbull" required></td></tr>
			<tr><td><h1>Your Name: </h1></td><td><input type="text" name="name" id="name" placeholder = "Matty Ice"></td></tr>
			<tr><td><h1>Your Email: </h1></td><td><input type="email" name="email" id="email" placeholder = "matthewchhill@gmail.com" required></td></tr>
			<tr><td><h1>Comments: </h1></td><td><textarea name = "comments" id="comments" rows = "7" cols = "20" placeholder = "If you have any special requests to be included
				in the cover, include the details here. Feel free to leave your social media links here too!"></textarea></td></tr>
			<tr><td></td><td><input type = "submit" value = "Submit Request" id = "submit_button"></td></tr></table>
		</form>
	</div>
	<div id ="request_photo">
		<img src = "images/fbpic2014.jpg" alt = "LOL you can't see me!">
	</div>
	<!--<div id = "request_para">
		<p>I like to recieve requests because it allows me to provide you with content that you will interest you and keep you coming back for more! If
			you want to hear me cover a certain song, just fill out the form below and I will do my best to cover it for you! Thanks for the support! :)
	</div> -->
</section>
<div id="footer">
        <p>Rob Curry &copy; 2014</p>
    </div>
</body>
</html>