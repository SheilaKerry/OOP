<?php

require '../Classes/member_1.php';

require '../Classes/Item.php';
require '../Classes/ItemBook.php';
require '../Classes/DVD.php';
require '../Classes/NonFiction.php';

$NF1 = new NonFiction('Everything you need to know about PHP');
var_dump($NF1);
$NF1 ->borrowItem();
var_dump($NF1);

$NF1 ->addAuthors('Brown', 'Orange', 'Smith', 'Klein');
var_dump($NF1);