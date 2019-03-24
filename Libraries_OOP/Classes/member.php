<?php
//namespace member;

Class Member {

   // private $memberdetails;
   
    private $firstName;
    private $lastName;
    private $memType;
    private $addFirstLine; 
    private $addSecLine;
    private $addThirdLine;
    private $postCode;
    private $number;
    private $memberbooks=array();

  
    
    
    public function __construct(string $firstName, string $lastName, string $memType, string $addFirstLine, string $addSecLine, string $postCode, string $number){
        $this -> firstName = $firstName;
        $this -> lastName = $lastName; 
        $this -> memType = $memType;
        $this -> addFirstLine = $addFirstLine;
        $this -> addSecLine = $addSecLine; 
        $this -> postCode = $postCode;
        $this -> number = $number;
       
}
 


public function updateNumber ($newNumber){
        $this -> number = $newNumber;
        echo $this -> number;
        return $this;

}


//the Book part before $new Book specifies that the argument passed into the function addBook will use Class Book



public function addBook (Book $newBook){
    $newBook -> borrowBook();
    $newBookList = array_push($this-> memberbooks, $newBook);
    $this -> memberbook = $newBookList;
      return $this;
}



//public function addBook2 (Book $newBook){
  //Call function borrowBook from the Book class
  //  $newBook -> borrowBook();
    // addign new book the member books
   
    //$this -> memberbooks = $newBook;
      //return $this;
//}

// the Book is private to the Book class. In order for the member class to see it we have to get it
public function getBook() {
    return $this->memberbooks;
}

public function renewAllBooks(){
    foreach($this -> memberbooks as $loanedBook) {
         $loanedBook -> renewBook();
    }
}


    public function renewBook() {
        
        //Can enter in a different time zone to return date
        $oldDate = $this -> dueBackDate;
      $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
        $this ->dueBackDate = $newDate;
        //echo $this ->dueBackDate."\n";
        return $this;
}
}