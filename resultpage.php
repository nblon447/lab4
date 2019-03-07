<?php
require_once("Template.php");

$page = new Template("Result Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();

$inputs = array('email', 'url', 'phone');

$error = false;
foreach($inputs as $field) {
  if (!isset($_POST[$field])) {
    $error = true;
  }
  if (empty($_POST[$field])) {
    $error = true;
  }
}


if ($error) {
	print"<p>All form fields required. Please try again.</p>";
}
else {
	$url = filter_var($_POST["url"], FILTER_SANITIZE_STRING);

	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); 
	}
	else {
		$email = "not a valid email address";
	}
	if (filter_var($_POST["phone"], FILTER_VALIDATE_INT)) {
		$phone = $_POST["phone"];	
	} 
	else {
		$phone = "Phone number invalid";
	}

	print "<p>Thank you.</p><br>
			<p>Your data:</p>
			<p>Email: " . $email . "</p>
			<p>Url: " . $url . "</p>
			<p>Phone: " . $phone . "</p>";

}

print $page->getBottomSection();

?>

