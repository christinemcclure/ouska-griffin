<?php // this script creates the  email form

$contact_email="docs1st@gmail.com";
$feedback= "";
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
  
		if($_POST['nameBotTest']) { // get rid of bots
			$feedback='<p>Failed bot test. Mail not sent.</p>';
		}
		 
		else {

			// Minimal form validation:
			if   (!empty($scrubbed['name'])) {
			
				// Create the body:
				$body = "Name: {$scrubbed['name']} \n"
        . "Contact Number: {$scrubbed['contactNum']}\n"
        . "Location: {$scrubbed['location']} \n"
        . "Message: \n"
        . "{$scrubbed['message']}";
				$body = wordwrap($body, 70);
			

        // Send the email:
				mail($contact_email, "Website contact email", $body);

        $cssclass = "hide";
        $feedback="<p class=\"clear\">Thank you. We will be in contact soon.</p>";
				
				// Clear $_POST (so that the form's not sticky):
				$_POST = array();
			
			} 
      else {
				$feedback='<p>Please include your name and contact information.</p>';
			}
			
		}
		
			
} // End of main isset() IF.
?>