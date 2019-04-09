<?php
session_save_path(__DIR__ . "/sessionInfo");
session_start();
require 'Classes/DBCon.php';
require 'Classes/searchItem.php';
require 'Classes/loanBook.php';

function loanbook() {
    $test = new LoanBookClass;
    $test->loanBook();
    return $test;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Library loans page</h1> <br>
        <!--search bar-->
    <center>
        <form action="" method="post" >
            <input type="text" placeholder="Search library" name="userSearch">
            <input type="submit" value="Go!"> <br>
            <a href='advanceSearch.php'>Advanced search </a>
            <br><br>
        </form>
        <a href="logout.php">Logout</a>
    </center>

    <?php
    //This is the search function. This should now give an associative array
   if(!empty(FILTER_input(INPUT_POST, 'userSearch'))){
        $DBN = new searchItem;
//        $DBN->searchBook();
        $result = $DBN->searchBook();
    }

    //This should only print if someone searches something. Its going to go through the array and print 
    //out. This is because the function above will only print the first thing in the array
    if (!empty($result)) {
        $x = 0;
        foreach ($result as $item) {
            print_r($item);
//            +$x;
            ?>
            <form action="loanBook.php" method="post">
                <input type="submit" name="clickToLoan" value="GO" />
            </form>


            <?php
        }
    }
//This needs to have some filtering added
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['clickToLoan'])) {
        loanbook();
    }

    if (!empty(FILTER_input(INPUT_POST, 'userSearch'))) {
        $_SESSION["userSearch"] = FILTER_input(INPUT_POST, 'userSearch');
    }
    if (!empty($result)) {
        $_SESSION["userSearchOutput"] = $result;
    }
    ?>


</body>
</html>

