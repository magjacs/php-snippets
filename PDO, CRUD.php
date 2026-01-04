<?php
//Подключение К БД

$pdo = new PDO("mysql:host=localhost;dbname=crud;","root","");

//Создание записи CRUD
$sql = "INSERT INTO products (title, description, price) VALUES (:title, :description, :price)";
$statement = $pdo -> prepare($sql);
$product = $statement -> execute(["title" => $title,"description" => $description,"price" => $price]);

//Подключение функций
require 'functions.php';
$product = products_one()

//Отображение всех записей в БД

$sql = "SELECT * FROM products";
$statement = $pdo -> prepare($sql);
$statement -> execute();

//Показать одну запись
$sql = "SELECT * FROM products WHERE id=:id";
$statement = $pdo -> prepare($sql);
$statement -> execute($_GET);

//Редактирование CRUD
$sql ='UPDATE products SET title=:title, description=:description, price=:price WHERE id=:id';
$statement = $pdo -> prepare($sql);
$statement -> execute($_POST);

//Удаление CRUD
$sql = "DELETE FROM products WHERE id=:id";
$statement = $pdo -> prepare($sql);
$statement -> execute($_GET);

//Переадресация
header("Location: /products.php");


