<?php

if(isset($_COOKIE['hostname']))
{
	echo "Hostname is: ". $_COOKIE['hostname'];
}
else
{
	echo "Cookies value does not set.";
}