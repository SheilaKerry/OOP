<?php
require '../Classes/member.php';
require '../Classes/Book.php';


$sheila = new Member('Sheila', 'kerry', 'Adult', '11 Tree Lane', 'London', 'N1 7FJ', '07675425362');
var_dump($sheila);


$sheila -> updateNumber('07863625354');
var_dump($sheila);

//creates object instance of a book. This means that we can store mutiple bits of information about the book, but also that
// we can call funcitons on the book e.g. borrow, renew
$HarryPot = new Book('Harry Potter', 'J K Rowling');

$LionWitch = new Book ('Ths Lion the Witch and the Wardrobe', "Carol"); 

$sheila ->addBook($HarryPot);
$sheila ->addBook($LionWitch);
var_dump($sheila);


//need to get the book because it is private
$sheilasbook = $sheila->getBook();
var_dump($sheilasbook);
$sheila ->renewAllBooks();
var_dump($sheila);

//list of books, change member books to be a list of books, then you can call functions within all books. 
//renew all books


//inheritance possibly different type of things to rent from the library