<?php
session_save_path(__DIR__ . "/sessionInfo");
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>

            <h1>Library log in page</h1> <br>
            <!--search bar-->
        <center>

            <!--log in-->
            Member ID
            <center>
                <form action="" method="post" >
                    <input type="text" placeholder="Enter Member ID" name="username"><br>
                    Password
                    <input type="password" placeholder="Enter Password" name="password"><br>
                    <button type="submit">Login</button>
                </form>
            </center>

            <?php
            const DB_DSN = 'mysql:host=localhost;dbname=librariesv7';
//define the user, this could also be librarian or member

            $DB_USER = filter_input(INPUT_POST, 'username');
//define password
            $DB_PASS = filter_input(INPUT_POST, 'password');

            //try to connection to the database using the above credentials
            try {
                $pdo = new PDO(DB_DSN, $DB_USER, $DB_PASS);
                echo "Hello $DB_USER";
                //if it does't work, print the error message
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            if (!empty(FILTER_input(INPUT_POST, 'username'))) {
                $_SESSION["username"] = FILTER_input(INPUT_POST, 'username');
            }
            
            ?>    

        </body>
</html>

</body>
</html>
