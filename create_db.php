
<?php
//enter your my sql Admin username and password
	$con = mysql_connect("localhost","root","abc123");
	if (!$con)
  {
  	die('Could not connect: ' . mysql_error());
  }
  	else {
  		echo "connected";
  	}

//Please Enter your database name
// it will Create  your database

	if (mysql_query("CREATE DATABASE  db_db6",$con))
  {
  	echo "Database created";
 
  }
	else
  {
  	echo "Error creating database: " . mysql_error();
  }
// this will create your table in your database

	mysql_select_db("db_db6", $con);

	$sql = "CREATE TABLE user
	(
		userID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(userID),
		username varchar (25),
		password varchar (15),
		flag int (11),
		fname varchar (15),
		lname varchar (15),
		gender varchar (15),
		bdate DATE,
		address varchar (50),
		email varchar(100),
		interest varchar(50),
		image_path varchar(100)
	)";
	
// Execute query
		
		mysql_query($sql,$con);
//this will create your table in your database

	$sqll = "CREATE TABLE blog
	(
		title varchar (25),
		body varchar (15),
		comment int (11),
		time DATE,
		blog_id int(11)
		
	)";
	
// Execute query
		
		mysql_query($sqll,$con);
		mysql_close($con);
	
		
?>



<html>
	<body> 
		<a href="index.php">Go Blogger Home Page</a>
	</body>
</html>
