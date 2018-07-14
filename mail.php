<?php
	$name = htmlspecialchars($_POST["contact-name"]);
	$email = htmlspecialchars($_POST["contact-email"]);
	$message = htmlspecialchars($_POST["contact-message"]);
	$to = "wados.wlad@gmail.com";
	$subject = "Заявка с контактной формы";
	$headers .= "From: support@vladislav.com";
	$headers .= "Reply-To: support@vladislav.com";
	$headers .= "CC: suppor	t@vladislav.com";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$letter = '<html><body>';
	$letter .= '<h1>Новая заявка!</h1>';
	$letter .= '</body></html>';

	$letter .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$letter .= "<tr style='background: #eee;'><td><strong>Имя:</strong> </td><td>" .$name. "</td></tr>";
	$letter .= "<tr><td><strong>Email:</strong> </td><td>" .$email. "</td></tr>";
	$letter .= "<tr><td><strong>Сообщение:</strong> </td><td>" .$message. "</td></tr>";
	$letter .= "</table>";
	$letter .= "</body></html>";

	$send = mail($to, $subject, $letter, $headers);

	if ($send) {
		echo "Сообщение отправлено!";
	}
	else {
		echo "Error";
	}

?>