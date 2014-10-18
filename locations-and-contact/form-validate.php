<?php // this script creates the  email form

$contact_email="camcclure@gmail.com";
$feedback= "<p>Thank you for contacting us. We will get back to you shortly.</p>";
$cssclass = "showForm";


// Check for form submission:
if (isset($_POST['submitted'])) {

	function spam_scrubber($value) {
	
		// List of very bad values:
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		
		// If any of the very bad strings are in the submitted value, return an empty string:
		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== false) return '';
		}
		
		// Replace any newline characters with spaces:
		$value = str_replace(array( "\r", "\n", "%0a", "%0d"), ' ', $value);
		
		// Return the value:
		return trim($value);
	
	} // End of spam_scrubber() function.
	
	// Clean the form data:
	$scrubbed = array_map('spam_scrubber', $_POST);

		if($nameBotTest) { // get rid of bots
			echo '<p>Failed bot test. Message not sent.';
		}
		
		else {
			// Minimal form validation:
			if  (!empty($scrubbed['name'])) && (!empty($scrubbed['contactNum'])) ) {
			
				// Create the body:
				$body = "Name: {$scrubbed['name']} \n E-mail: {$scrubbed['contactNum']}
				\n Preferred Location: {$scrubbed['location']} \n {$scrubbed['message']}\n";
				$body = wordwrap($body, 70);
			
				// Send the email:
				mail($contact_email, "Mail from OuskaGriffinPodiatrist.com", $body, "From: {$scrubbed['email']}");
		
			$cssclass = "hide";
			$feedback= "<p class=\"clear\">Thank you for your message; I'll be in touch soon.</p> <p>Enjoy your day.</p>";
				
				
				// Clear $_POST (so that the form's not sticky):
				$_POST = array();
			
			} else {
				echo '<p>Please include your name and contact information.</p>';
			}
			
		}
		
			
} // End of main isset() IF.
?>