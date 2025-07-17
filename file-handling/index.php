<?php


/*$file = fopen('contact.txt', "r");

$content = fread($file, filesize('contact.txt'));

echo $content;*/

/*$file_path = "example.txt";

$file = fopen($file_path, "w+");

$content_write = fwrite($file, "This is an example to write content in file.");

//echo $content_write;

fclose($file);*/

$file_path = "example.txt";

$contentread = file_get_contents($file_path);

$contentread = str_replace("[yourname]", "Dinesh Kumar", $contentread);

echo $contentread;

