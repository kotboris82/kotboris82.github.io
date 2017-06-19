<?php

$recepient = "test@binka.me";
$sitename = "Bags Time";

$name = trim($_POST["name"]);
$phone = trim($_POST["tel"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text-message"]);
$message = "Имя: $name \nТелефон: $phone \nПочта: $email \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");