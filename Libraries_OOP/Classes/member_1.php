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
    private $age;
    private $memberItems = array();

    public function __construct(string $firstName, string $lastName, string $memType, string $addFirstLine, string $addSecLine, string $postCode, string $number) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->memType = $memType;
        $this->addFirstLine = $addFirstLine;
        $this->addSecLine = $addSecLine;
        $this->postCode = $postCode;
        $this->number = $number;
    }

    public function updateNumber($newNumber) {
        $this->number = $newNumber;
        echo $this->number;
        return $this;
    }


    public function addBook(ItemBook $newBook) {
        $newBook->borrowItem();
        array_push($this->memberItems, $newBook);
        return $this;
    }
    
        public function addDVD(ItemDVD $newDVD) {
        if ($this -> age > $newDVD -> DVDcertificate){
        $newDVD->borrowItem();
        array_push($this->memberItems, $newDVD);
        return $this;}
        else {echo 'You are not elidgable for this rental';}
    }


    public function __set($key, $value) {
        $this->$key = $value;
    }

    public function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }

    
public function renewAllBooks(){
    foreach($this -> memberItems as $loanedItem) {
         $loanedItem -> renewItem();
    }
}

 
}
