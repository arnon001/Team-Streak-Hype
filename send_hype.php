<!-- save the form results in a file -->
<?php
$file = fopen("hype.txt", "a");
fwrite($file, $_POST["name"] . "   ");
fclose($file);
$file = fopen("names.txt", "a");
fwrite($file, "Name: " . $_POST["name"] . "\n");
fwrite($file, "Email: " . $_POST["email"] . "\n");
fclose($file);
$file = fopen("emails.txt", "a");
fwrite($file, $_POST["email"] . "\n");
?>