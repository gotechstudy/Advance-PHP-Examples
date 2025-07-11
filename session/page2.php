<?php
session_start();

echo "<li>++".$_SESSION['webpage'];
echo "<li>++".$_SESSION['message'];

print_r($_SESSION['userinfo']);