<?php

namespace nameItem {

// I can put namespaces around the whole class item, but not sub parts.     

    Class Item {
        
        protected $title;
        private $outDate;
        private $dueBackDate;

        public function borrowItem() {
            $today = date("d.m.Y");
            $this->outDate = $today;
            $returnDate = date("d.m.Y", strtotime("$today +1 week"));
            $this->dueBackDate = $returnDate;
        }

        public function renewItem() {
            $oldDate = $this->dueBackDate;
            $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
            $this->dueBackDate = $newDate;
            return $this;
        }

    }

}