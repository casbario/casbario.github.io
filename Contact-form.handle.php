<?php
$name=$_POST["name"];
$visitor_win$_POST["wins"];
$visitor_skill=$_POST["skill"];

$email_form = "casbario@gmail.com";
$email_subject="Clan Application Form";
$email_body="Username:name./n".
            "User Win Count:wins";
            "Best skill:Best skill";

$to="casbario@gmail.com";
$headers="From: $email_from r/n/";
$headers="reply-to: $visitor_email r/n/";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>
