<?php 

if (isset($_Post['submit'])) {
	$firstname = $_Post['firstname'];
	$lastname = $_Post['lastname'];
	$affiliation = $_Post['affiliation'];
	$youremail = $_Post['youremail'];
	$subject = $_Post['subject'];
	$message = $_Post['message'];

	$mailto = "xiaofan.ding@usask.ca";
	$header = "From: ".$youremail;
	$text = .$firstname." ".$lastname." from ".$affiliation." messaged you:\n\n".$message;

	mail($mailto, $subject, $text, $header);
	header("Location: index.php?mailsend");
}