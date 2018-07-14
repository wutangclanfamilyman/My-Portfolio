<?php
	$name = htmlspecialchars($_POST['name']);
	$phone = htmlspecialchars($_POST['phone']);
	$to = "wados.wlad@gmail.com";
	$subject = "Заявка с формы обратного звонка";
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
	$letter .= "<tr><td><strong>Телефон:</strong> </td><td>" .$phone. "</td></tr>";
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