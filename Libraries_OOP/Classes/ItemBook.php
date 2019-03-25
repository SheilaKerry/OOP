<?php


class ItemBook extends Item {
    
    private $bookTitle;
    //must be protected or weaker so that NonFiction can pass through it at the NonFiction level. 
    //If this is private, then you get an itemBook bookAuthor and a NonFiction BookAuthor.
    protected $bookAuthor;
 

      public function __construct($bookTitle) {
        $this->bookTitle = $bookTitle;
    }
   
    
}

