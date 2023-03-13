<?php

$userName = "Abid";
$email = "abid@gmail.com";
$password = "123";

$filename = 'UserList.txt';
$file = fopen($filename, 'a') or die('Unable to open file!');

$text = "{$userName}|{$email}|{$password}\r\n";
fwrite($file, $text) or die('Unable to write to file!');

fclose($file);

?>
