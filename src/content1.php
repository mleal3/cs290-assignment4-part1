
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(isset($_REQUEST['username']))
	{
		if(isset($_SESSION['username']) && $_SESSION['username'])
			!= $_REQUEST['username'])
		{
			echo "You can't log in because ".$_SESSION['username'].
			"is logged in right now.<br>";
			echo "To log out click ";
			echo "<a href='logout.html'>here</a>";
		}
		elseif (isset($_SESSION['username'])) 
		{
			echo "Thanks for coming back ".$_SESSION['username'].".<br/>";
			echo "To log out click ";
			echo '<a href="logout.php">here</a>.';
		}
		else
		{
			$_SESSION['username'] = $_REQUEST['username'];
			echo "User ".$_SESSION['username']."
			is logged in right now.<br/>";
			echo "To log out click ";
			echo '<a href="logout.php">here</a>.';
		}
		else
		{
			if(isset($_SESSION['username']))
			{
			echo "Thanks for coming back ".$_SESSION['username'].".<br/>";
			echo "To log out click ";
			echo '<a href="logout.php">here</a>.';
			}
			else
			{
			echo "Please return to login and page and Login ";
			echo '<a href="login.html">login page</a>.';
			}
		}
	?>
}

</body>


</html>