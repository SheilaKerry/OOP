<?php
namespace nameItem\nameBook{

class Book extends \nameItem\Item {
    
//    protected $bookTitle;
    //must be protected or weaker so that NonFiction can pass through it at the NonFiction level. 
    //If this is private, then you get an itemBook bookAuthor and a NonFiction BookAuthor.
    protected $author;
 

      public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
        
    }
   
        public function printTitle() {
        echo $this-> title. "\n";
    }
}

}