<?php

namespace nameItem\nameBook\nameNF {


    class NonFiction extends \nameItem\nameBook\Book {

        protected $author = array();
        private $edition;

       
        public function addAuthors() {
            $args = func_get_args();
            $this->author = $args;
        }

    }

}