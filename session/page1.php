<?php

$a = 10;

//echo $a;

session_start();

echo "<li>++Session ID is: ". session_id();

$_SESSION['webpage'] = "Welcome To Session World";
$_SESSION['message'] = "Session is use to share variable on muti pages.";

echo "<li>++".$_SESSION['webpage'];
echo "<li>++".$_SESSION['message'];

$userdata = array("name" => "Ramesh Kumar", "email" => "ramesh.kumar@gmail.com");

$_SESSION['userinfo'] = $userdata;

//print_r($_SESSION['userinfo']);

session_destroy();

echo "<li>++Session ID is: ". session_id();
echo "<li>++".$_SESSION['webpage'];

//unset($_SESSION['webpage']);

//echo "<li>++".$_SESSION['webpage'];



