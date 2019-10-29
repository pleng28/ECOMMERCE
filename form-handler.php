<?php
// Emails form data to you and the person submitting the form and adds it to a database

// Test for db

$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password, "ecommss");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";




//$result = $db->query($sql);
//if (empty($result)) {
//	$sql = "CREATE TABLE `form_submissions` (
//		`id` int(11) NOT NULL AUTO_INCREMENT,
//		`name` text COLLATE utf8_unicode_ci,
// 		`phone` text COLLATE utf8_unicode_ci,
// 		 `email` int(11) DEFAULT NULL,
// 		 `message` text COLLATE utf8_unicode_ci,
// 		 `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
// 		 PRIMARY KEY (`id`)
// 		 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
// 		$result = $db->query($sql);
// }
// // Set your email below
// $myemail = "ENTER_YOUR_EMAIL_HERE"; // Replace with your email

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

// write to db
//$sql = "INSERT INTO form_submissions (name,phone,email,message) VALUES ('$name','$phone','$email','$message')";
$sql = "INSERT INTO `name` (name, email, phone, address, city, state, zipcode) VALUES ('$name','$email','$phone','$address','$city','$state','$zipcode')";
$result = $db->query($sql);
if (!$result) {
	echo "error";
}
// set up email
//$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
//$msg = wordwrap($msg,70);
//mail($myemail,"New Form Submission",$msg);
//mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>
