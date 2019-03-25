<?php


require '../Classes/nameItem.php';
require '../Classes/nameItemBook.php';
require '../Classes/nameDVD.php';
require '../Classes/nameNonFiction.php';


use nameItem\nameBook;

$newBook = new nameBook\Book ('Alice in Wonderland', 'Heywood'); 
var_dump($newBook);

$newNF = new nameBook\nameNF\NonFiction('Everything you need to know about Space', 'manly');
var_dump($newNF);

$newDVD = new nameItem\nameDVD\DVD('Tomb Rider', 12, 1998);
var_dump($newDVD);

