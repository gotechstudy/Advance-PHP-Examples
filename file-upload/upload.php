<?php

//print_r($_FILES);

if(!empty($_FILES['profileimg']['name']))
{
	$name = $_FILES['profileimg']['name'];
	$tmpname = $_FILES['profileimg']['tmp_name'];

	$imageextarr = explode(".", $name);

	$imagesize = getimagesize($tmpname);

	$imagewidth = $imagesize[0];
	$imageheight = $imagesize[1];

	$imgext = end($imageextarr); //jpg, png, jpeg

	$extarr = ["jpg", "jpeg", "png"];

	if(in_array($imgext, $extarr))
	{
		
		$filename = uniqid().'.'.$imgext; //agb123.jpg
		$targetpath = 'image/';

		$result = move_uploaded_file($tmpname, $targetpath.$filename);

		if($result)
		{
			echo "You files uploaded successfully";
		}
		else
		{
			echo "You files does not uploaded";
		}
	}
	else
	{
		echo "Please upload image in jpg, jpeg, png format.";
	}
}