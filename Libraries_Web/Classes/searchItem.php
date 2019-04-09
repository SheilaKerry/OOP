<?php

class searchItem extends DBCon {

    public function searchBook() {
        $stmt = $this->connect()->prepare("CALL searchBookDetailed (:bookTitle) ");

        try {

            $stmt->execute([':bookTitle' => FILTER_input(INPUT_POST, 'userSearch')]);
        } catch (PDOException $e) {

            echo"uhoh";

            echo $e->getMessage();

            $error = $e->errorInfo;

            die();
        }

        if (!empty(filter_input(INPUT_POST, 'userSearch'))) {

            try {
                // if we use fetch not fetch all, it will allow the lovely formatting below, but will not 
                //print off everything in the array
                $book = $stmt->fetch(PDO::FETCH_ASSOC);
                echo "<H3> Output from masterBookSearch</H3><br>";
                echo 'The Book title: ' . $book['masterBookTitle'] . "<br>";
                echo 'The book is: ' . $book['loanStatus'] . "<br>";
                echo 'The language: ' . $book['singleBookLanguage'] . "<br>";
                echo 'When is the book due back: ' . $book['singleBookOutDate'];
//                return $book;
              $output = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $output;
            } catch (PDOException $e) {
                echo "uhoh";
                $e->getMessage();
            }
        }
    }

}
