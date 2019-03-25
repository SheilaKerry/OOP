<?php
namespace nameItem\nameDVD{

class DVD extends \nameItem\Item {


public $DVDcertificate;
public $DVDreleaseYear;



public function __construct(string $title, int $DVDcertificate, string $DVDreleaseYear) {
$this->title= $title;
$this->DVDcertificate = $DVDcertificate;
$this->DVDreleaseYear = $DVDreleaseYear;
}

        public function printTitle() {
        echo $this-> title. "\n";}

}
}

