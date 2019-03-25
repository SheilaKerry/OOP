<?php



class NonFiction extends ItemBook {
    
   
    protected $bookAuthor=array();
    private $edition;


    
    public function addAuthors(){
        $args = func_get_args();
       $this -> bookAuthor = $args;
    }
}

