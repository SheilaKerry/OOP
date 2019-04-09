<?php
session_save_path(__DIR__ . "/sessionInfo");
session_start();
require 'Classes/DBCon.php';
require 'Classes/searchItem.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Library log in page</h1> <br>
        <!--search bar-->
    <center>
        <form action="" method="post" >
            <input type="text" placeholder="Search library" name="userSearch">
            <input type="submit" value="Go!"> <br>
            <a href='advanceSearch.php'>Advanced search </a>
            <br><br>
        </form>
        <a href="landingLogin.php">Login</a>
    </center>

    <?php
            $DBN = new searchItem;
        echo $DBN->searchBook();

  
    if (!empty(FILTER_input(INPUT_POST, 'userSearch'))) {
        $_SESSION["userSearch"] = FILTER_input(INPUT_POST, 'userSearch');
    }
    if (!empty($book)) {
        $_SESSION["userSearch"] = $Book;
    }
    ?>


</body>
</html>