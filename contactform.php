<?php 

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$affiliation = $_POST['affiliation'];
	$youremail = $_POST['youremail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailto = "xiaofan.ding@usask.ca";
	$header = "From: ".$youremail;
	$text = .$firstname." ".$lastname." from ".$affiliation." messaged you:\n\n".$message;

	mail($mailto, $subject, $text, $header);
	header("Location: index.php?mailsend");
}