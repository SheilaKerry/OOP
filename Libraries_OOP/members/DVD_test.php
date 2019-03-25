<?php

require '../Classes/member_1.php';

require '../Classes/Item.php';
require '../Classes/ItemBook.php';
require '../Classes/DVD.php';

$DVD1 = new ItemDVD('IT', '18','2018');
var_dump($DVD1);

$DVD1 ->borrowItem();
var_dump($DVD1);