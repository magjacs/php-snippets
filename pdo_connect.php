<?php
//Подключение К БД

$pdo = new PDO("mysql:host=localhost;dbname=crud;","root","");


Создание записи CRUD

$sql = "INSERT INTO products (title, description, price) VALUES (:title, :description, :price)";
$statement = $pdo -> prepare($sql);
$product = $statement -> execute(["title" => $title,"description" => $description,"price" => $price]);
