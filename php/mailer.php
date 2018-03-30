<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

// $mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  			  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'a.gjini@live.com';                 // SMTP username
$mail->Password = 'juventus1.';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$comment_field = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);  
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$language = filter_var($_POST['lang'], FILTER_SANITIZE_STRING);
$subject = "Email Sent From My Website";
$emailbody="This email was sent from ".$name_field." With email: ".$email_field."<br><br>".$comment_field;

if(trim($name_field) == '') {
	if ($language=="AL") {
		echo '<div class="error_message">Ju lutem futni emrin tuaj.</div>';
	}else if ($language=="IT") {
		echo '<div class="error_message">È necessario inserire il vostro nome.</div>';
	}else{
	echo '<div class="error_message">You must enter your name.</div>';
	}
	exit();
} else if(trim($email_field) == '') {
	if ($language=="AL") {
		echo '<div class="error_message">Ju lutem futni nje email te vlefshem.</div>';
	}else if ($language=="IT") {
		echo '<div class="error_message">Si prega di inserire un indirizzo email valido.</div>';
	}else{
		echo '<div class="error_message">Please enter a valid email address.</div>';
	}
	exit();
} else if(!isEmail($email_field)) {
	if ($language=="AL") {
		echo '<div class="error_message">Ju keni vedndosur nje email te pasakte. Ju lutem provojeni perseri.</div>';
	}else if ($language=="IT") {
		echo '<div class="error_message">È necessario inserire il vostro nome.</div>';
	}else{
	echo '<div class="error_message">Hai inserito un indirizzo e-mail non valido. Perfavore prova di nuovo.</div>';
	}
	exit();
}

if(trim($comment_field) == '') {
	if ($language=="AL") {
		echo '<div class="error_message">Ju lutem futni mesazhin tuaj.</div>';
	}else if ($language=="IT") {
		echo '<div class="error_message">È necessario inserire il vostro messaggio.</div>';
	}else{
	echo '<div class="error_message">Please enter your message.</div>';
	}
	exit();
}


$mail->setFrom($email_field, $name_field);         //$email_from and $name
$mail->addAddress('a.gjini@live.com', 'Alfred Gjini');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $emailbody;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo '<span class="nukpunon">Oops error. Please use this email to contact me: <a href="mailto:a.gjini@live.com">a.gjini@live.com</a><br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	// header('Location: index.php?msgrett=1&#kontakt');
	if ($language=="AL") {
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h3>Emaili u dergua me sukses.</h3>";
		echo "<p>Faleminderit <strong>".$name_field."</strong>, e mora mesazhin tuaj.</p>";
		echo "</div>";
		echo "</fieldset>";
	}else if ($language=="IT") {
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h3>Email inviato correttamente.</h3>";
		echo "<p>Grazie <strong>".$name_field."</strong>, ho ricevuto il tuo messaggio.</p>";
		echo "</div>";
		echo "</fieldset>";
	}else{
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h3>Email Sent Successfully.</h3>";
		echo "<p>Thank you <strong>".$name_field."</strong>, your message has been submitted to me.</p>";
		echo "</div>";
		echo "</fieldset>";
	}
}

?>