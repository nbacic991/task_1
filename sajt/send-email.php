<?php
$from = "nbacic@ymail.com";
$to = $_POST['email'];
$subject = "My subject";
$txt = "You can visit my website on: http://www.nbnswebdesign.com/task_1";
$headers = "From: nbacic@ymail";

mail($to,$subject,$txt,$headers) or die("Error!");
header("Location: index.html#stayHere");
?> 