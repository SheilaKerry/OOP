<?php
//use Books;

require '../Classes/Book.php';

$HarryPot = new Book('Harry Potter', 'J K Rowling');

$HarryPot ->printAuthor();

$HarryPot ->printTitle();

$HarryPot ->borrowBook();
$HarryPot->renewBook();