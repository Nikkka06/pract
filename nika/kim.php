<?php
$link = new mysqli( hostname: "localhost", userame: "root", password:"", database:"photos");
$link->set_charset( charset: "utf8");
$data = $link->query( query: "SELECT * FRON 'photos'")->fetch_all( mode: MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0, naximun-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Практ 22</title>
<Link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
<a href="#">Главная</a>
<a id="show_add_photo" href="#">Фoтo</a>
<a href="#">Посты</a>
<a href="#">Личный кабинет</a>
</header>

