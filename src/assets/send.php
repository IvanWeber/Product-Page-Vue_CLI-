<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Ноутбук Lenovo V130 15</title>
</head>
<body>
    <div class="success-sending-message">
        <p><?=$_POST['name']?>, ваша заявка успешно отправлена!</p>
        <a href="/./index.html">Вернуться на страницу товара</a>
    </div>
</body>
<?php
mail('product-orders-mail@yandex.ru', 'Заявка на покупку товара', 'Имя клиента: ' . $_POST['name'] . '; Телефон клиента: ' . $_POST['phone']);
