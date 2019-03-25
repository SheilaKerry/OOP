<?php

require '../Classes/member_1.php';
require '../Classes/Item.php';
require '../Classes/ItemBook.php';
require '../Classes/DVD.php';

$Kylie = new Member('Kylie', 'Brown', 'Adult', '45 Shoe Lane', 'London', 'SW45QP', '08874625273');

var_dump($Kylie);
$Kylie ->age = 12;
var_dump($Kylie);
$science = new ItemBook ('The science of the World');
var_dump($science);
$GreenBook = new ItemDVD('Green Book','15', '2019');
var_dump($GreenBook);

$Kylie ->addBook($science);
var_dump($Kylie);


$Kylie ->addDVD($GreenBook);
var_dump($Kylie);

$Kylie ->renewAllBooks();
var_dump($Kylie);

