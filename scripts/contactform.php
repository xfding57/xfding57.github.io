<?php 

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$affiliation = $_POST['affiliation'];
	$youremail = $_POST['youremail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mymail = "xiaofan.ding@usask.ca";
	$header = "From: ".$youremail;
	$text = .$firstname." ".$lastname." from ".$affiliation." messaged you:\n\n".$message;

	mail($mymail, $subject, $text, $header);
	header("Location: 2_5.html?mailsend");
}