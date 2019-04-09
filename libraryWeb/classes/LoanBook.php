<?php

class LoanBookClass extends DBCon {

    public function loanBook() {


        if (isset($_POST['clickToLoan'])) {

            try {
                $stmt = $this->connect()->prepare("CALL LoanBook2(:inputMemberId, :singleBookId)");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            try {
                $stmt->execute([":inputMemberId" => $_SESSION["loginSuccess"]["memberId"], ":singleBookId" => $_SESSION["userSearchOutput"][0]["singleBookId"]]);
            } catch (PDOException $e) {
                echo"uhoh";
                echo $e->getMessage();
//                $error = $e->errorInfo;
                die();
            }

            try {
                $loan = $stmt->fetchall();

                return $loan;

//                echo 'The Book title: ' . $book['masterBookTitle'] . "<br>";
//                echo 'The book is: ' . $book['loanStatus'] . "<br>";
//                echo 'The language: ' . $book['singleBookLanguage'] . "<br>";
//                echo 'When is the book due back: ' . $book['singleBookOutDate'];
            } catch (PDOException $e) {
                echo "This is actually updating the tables, so I need to work out how to stop this error!!";
               echo $e->getmessage;
                        
            }
        }
    }

}
