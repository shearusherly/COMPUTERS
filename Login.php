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
