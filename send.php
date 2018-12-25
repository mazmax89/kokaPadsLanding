<?php
	$name = $_GET["user"];
	$tel = $_GET["tel"];
	$email = $_GET["email"];
	$message = "Пользователь $name ,$tel ,$email оставил заявку!";
	$to = "mazmax89@gmail.com";
	$from = "contact@kokapads.com";
	$subject = "KokaPads order or consultation";
	$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n";
	if (mail($to, $subject, $message, $headers)) {
		echo "<p>Message delivered!</p>";
	}
	else {
		echo "<p>Something wrong! Check your internet connection</p>";
	}
?>