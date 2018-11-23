<?php
	if(isset(POST['btnlogin'])
	{
		if(POST["txtunme"]=="Sherlin")
		{
			if(POST["txtpwd"]=="12345hii")
			{
				Login();
			}
		}
		else
		{
			echo "Invalid Login"."<br>";
			echo "Please Provide Proper User Name and password";
		}
	}
	else
	{
		echo "Sorry Connection Failed:";
	}
?>
<HTML>
	<head><title><h1>This  Login Page </h1></title>
	</head>
	<body>
		<div>
		<h3>
			This is a Login Page For the User </h3>
		</div>
	</body>
</HTML>
<html>
	<head><Title>LOGIN PAGE</title>
	</hed>
	<body>
	<h1>
		<a>
		<marque>LOGIN HERE</marque>
		</a>
	</h1>
	</body>
</html>
