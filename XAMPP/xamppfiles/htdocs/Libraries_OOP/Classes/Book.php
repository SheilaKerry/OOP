<?php
//namespace Books;

Class Book {

    private $bookTitle;
    private $bookAuthor;
    private $outDate;
    private $dueBackDate;
    
//could define a constant of 1 week



        public function __construct($bookTitle, $bookAuthor) {
        $this->bookTitle = $bookTitle;
        $this->bookAuthor = $bookAuthor;
    }
    
    public function printTitle() {
        echo $this->bookTitle. "\n";
    }
    public function printAuthor() {
        echo $this->bookAuthor."\n";
        
    }
 
   public function borrowBook() {
   $today=date("d.m.Y");
   $this -> outDate = $today;
   $returnDate = date("d.m.Y", strtotime("$today +1 week"));
   $this -> dueBackDate = $returnDate;
   echo $this->outDate . "\n";
   echo $this ->dueBackDate. "\n";
   // can't return two varibles e.g. $this -> outDate and $this -> dueBackDate so use $this
    return $this;
    }
    //Then would you store this somewhere!?
    
    public function renewBook() {
        
        //Can enter in a different time zone to return date
        $oldDate = $this -> dueBackDate;
      $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
        $this ->dueBackDate = $newDate;
       // echo $this ->dueBackDate."\n";
        return $this;
        
    }
    

}
