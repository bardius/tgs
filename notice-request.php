<?php
// Building a whitelist array with keys which will send through the form, no others would be accepted later on
$whitelist = array('email');

// Building an array with the $_POST-superglobal 
foreach ($_POST as $key => $item) {
	// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
	if (!in_array($key, $whitelist)) {
		// die("Hack-Attempt detected. Please use only the fields in the form");
		echo 'error';
		return;
	}
}

// PREPARE THE BODY OF THE MESSAGE
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";

if (preg_match($pattern, trim(strip_tags($_POST['email'])))) {
	$cleanedFrom = trim(strip_tags($_POST['email']));
} else {
	echo "email error";
	return;
}

//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
$to = 'george@bardis.info';

$subject = 'TGS - Website launch date notice request';

$headers = "From: " . $cleanedFrom . "\r\n";
$headers .= "Reply-To: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (mail($to, $subject, $message, $headers)) {
	echo 'success';
	return;
} else {
	echo 'error';
	return;
}
?>