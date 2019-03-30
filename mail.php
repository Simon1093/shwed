<?php
$to  = "ea_varlamova@list.ru" ;

$subject = "ЭКОСАЙТ";

$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

$headers = "From: От кого письмо <from@example.com>\r\n";

mail($to, $subject, $message, $headers);
?>