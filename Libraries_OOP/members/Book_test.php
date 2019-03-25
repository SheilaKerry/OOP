<?php
require '../Classes/member_1.php';

require '../Classes/Item.php';
require '../Classes/ItemBook.php';
require '../Classes/DVD.php';

$Item1 = new ItemBook ('Sicence of the World'); 
var_dump($Item1);

$Item1 ->borrowItem();
var_dump($Item1);