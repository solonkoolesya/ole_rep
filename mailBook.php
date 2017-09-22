<?php

    $nameBook = $_POST['nameBook'];
    $emailBook = $_POST['emailBook'];
    $today = date("F j, Y, g:i a");

    $file = 'book-downloads.csv';
    $tofile = "'$today';'$nameBook';'$emailBook'\n";
    $bom = "\xEF\xBB\xBF";
    file_put_contents($file, $bom . $tofile . file_get_contents($file));


	$to = 'test@example.com'; // кому отправлять письмо
	$from = 'noreply@example.com';
    $subject = "С лендинга Myles Downey"; // тема письма
    $headers  = "From: noreply@example.com \r\n"; // от кого письмо
    $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
    $headers .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";

    $message = "Кнопка «Скачать книгу»
    
Имя: $nameBook
Email: $emailBook
";

    mail($to, $subject, $message, $headers);

?>