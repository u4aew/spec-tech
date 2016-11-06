<?php
$recepient = "agragregra@ya.ru";
$sitename = "Название сайта";

$name = trim($_POST["modal-dialog__name"]);
$phone = trim($_POST["modal-dialog__contact"]);
$page = trim($_POST["pageLink"]);
$message = "Имя: $name \nТелефон: $phone \n Ссылка на страницу $page";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");