<?php
	session_start();

?>

<head>

		<title>Open Source Bloggers world</title>
		<link href="usersite.css" rel="stylesheet" type="text/css" />
</head>
<body align="center" background='black.jpg'>
	<div id="header">
		<h1>Open Source Bloggers World !</h1>
	</div>
	
	<div id="menu">
		<ul>
			<li><a href="#">Home</a></li>
	        	<li><a href="#">FOSS</a></li>
			<li><a href="userblog.php">Blog</a></li>
			<li><a href="#">Scrapbook</a></li>
			<li><a href="#">About my site</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<h1 align="left">&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Welcome <?php echo "$_SESSION[user]";?></h1>
	<div id="content">
		<div id="left">
			<h2>Hello Bloggers!</h2>
			<h1>Talk here about Open Source And Foss</h1>
	</div>
	
	<div id="footer">
		<p>Copyright &copy; 2012 Open Source Bloggers world</p>
		<p>Created  by <a href="ashwinikit7@blogspot.com">Ashwini Kumar</a></p>
	</div>
</body>
</html>
