<?php 
	if($_POST) {

		$to = "testemail@gmail.com"; // Your email here
		$subject = 'Message from my website'; // Subject message here

	}

	//Send mail function
	function send_mail($to,$subject,$message,$headers){
		if(@mail($to,$subject,$message,$headers)){
			echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));
		} else {
			echo json_encode(array('info' => 'error', 'msg' => "Error, your message hasn't been sent"));
		}
	}

	//Check if $_POST vars are set
	if(!isset($_POST['name']) || !isset($_POST['mail']) || !isset($_POST['comment'])){
		echo json_encode(array('info' => 'error', 'msg' => 'Please fill out all fields'));
	}

	//Sanitize input data, remove all illegal characters	
	$name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$mail    = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

	//Validation
	if($name == '') {
		echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
		exit();
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
		exit();
	}
	if($comment == ''){
		echo json_encode(array('info' => 'error', 'msg' => "Please enter your message."));
		exit();
	}

	//Send Mail
	$headers = 'From: ' . $mail .''. "\r\n".
	'Reply-To: '.$mail.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	send_mail($to, $subject, $comment . "\r\n\n"  .'Name: '.$name. "\r\n" .'Email: '.$mail, $headers);
?>