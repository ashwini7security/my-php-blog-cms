<?php
session_start();
?>
<html>
<head>
</head>
	<body style="background-color:#6B6D82;" align="center">
	<form align="center">
	<a href="usersite.php"><font color="#d2a1a1">LOGOUT</font></a>
	<table border='1' align="center" style="background-color:#00000f;">
	

<?php 
	if(isset($_SESSION['username']))

	$_SESSION['username']=$_SESSION['username'];
	$uname1=$_SESSION['username'];
//	include "config.inc";
	mysql_connect("localhost","root","abc123") or die(mysql_error());
	mysql_select_db("db_db6") or die(my_sql_error());
	$data=mysql_query("Select title,body,comment,time from blog") or die(mysql_error());
	while($info=mysql_fetch_array($data))
	{     	

		echo "<p>";
		echo "<font color='white' size='6'>Title:  </font>";
		$sl=$info['title'];
		echo "<font color='#d2a1a1 size='6'><u><a href=\"blogs.php\">".$info['title']."</a></u></font><br><br>";
		echo "<font color='white'>".$info['body']."</font>";
		echo "<font color='red'>".$_SESSION['comments']."</font>";
		echo "<font color='white'><h3></h3></font>";
		echo "<font color='grey'>".$_SESSION['title']."</font>";
		echo "<br/>";
		echo "<font color='brown'>".$_SESSION['date']."</font>";
		echo "<br/>";
		echo "<font color='pink'>Posted on:-</font>";
		date_default_timezone_set('Asia/Calcutta');
		echo "<font color='white'>".date('Y-m-d h-m-s')."</font>";
		echo "<hr>";
		echo "</p>";

}

?>
	<tr>
		<td>
			<a href="userblog.php"><font color='#d2a1a1'>Add a new post</font></a>

			
		</td>
	</tr>
</table>
</form>

</body>
</html>

