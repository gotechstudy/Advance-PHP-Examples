<?php

setcookie("hostname", "Hostinger", time() + 3600, "/");

if(count($_COOKIE) > 0)
{
	echo "Cookies is enabled. <br/>";

	if(isset($_COOKIE['hostname']))
	{
		echo "Hostname is: ". $_COOKIE['hostname'];
	}
	else
	{
		echo "Cookies value does not set.";
	}
}
else
{
	echo "Cookies is disabled. <br/>";
}
