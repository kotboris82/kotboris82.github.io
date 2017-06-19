<?php

$recepient = "test@binka.me";
$sitename = "Bags Time";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$bagmod = trim($_POST["bagmod"]);
$quantity = trim($_POST["quantity"]);
$message = "Имя: $name \nТелефон: $phone \nНазвание модели: $bagmod \nКоличество: $quantity";

$pagetitle = "Новый заказ с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");