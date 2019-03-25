<?php

require '../Classes/member_1.php';
require '../Classes/Item.php';
require '../Classes/ItemBook.php';
require '../Classes/DVD.php';
require '../Classes/NonFiction.php';

$Kim = new Member('Kim', 'Johns', 'Adult', '12b Camden High Street', 'London', 'N1 7FJ', '084736223373');


var_dump($Kim);
$Kim ->age = 22;
var_dump($Kim);
$growFood = new ItemBook ('How to grow your own food');
var_dump($growFood);
$scream = new ItemDVD('Scream','18', '2019');
var_dump($scream);

$Kim ->addBook($growFood);
var_dump($Kim);


$Kim ->addDVD($scream);
var_dump($Kim);

$Kim ->renewAllBooks();
var_dump($Kim);

$codeBook = new NonFiction('Everything you need to know about PHP');
$codeBook ->addAuthors('Smith', 'Steele', 'Pappa');
var_dump($codeBook);
$Kim ->addBook($codeBook);
var_dump($Kim);     