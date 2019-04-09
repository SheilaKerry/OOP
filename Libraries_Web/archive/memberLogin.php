<?php
session_save_path(__DIR__ . "/sessionInfo");
session_start();

require 'Classes/DBCon.php';
require 'Classes/searchItem.php';
require 'Classes/memberLogin.php';
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
                
                <a href="landingPage2.php">Search as guest</a>
            </center>

            <?php
            $DBN = new memberLogin;
            $loginSuccess = $DBN->memberLogin();

            
            
if (!empty(filter_input(INPUT_POST, 'username'))) {
    try{
                    if ((filter_input(INPUT_POST, 'username')) == $loginSuccess['memberEmail'] &&
                            (filter_input(INPUT_POST, 'password')) == $loginSuccess['memberPassword']) {
                        $ifLoginSuccess = 1;
                        echo"login Successful";
                    } else {
                        $ifLoginSuccess = 0;
                        echo"login unuccessful, please try again";
                    }
                } catch (Error $e) {
                    echo $e->getMessage();
                    echo "That email address and password do not match, please try again";
                }
            }
            
            if ((!empty(FILTER_input(INPUT_POST, 'username'))) && $ifLoginSuccess == 1) {
                $_SESSION['username'] = FILTER_input(INPUT_POST, 'username');
            }
            if (!empty($loginSuccess) && $ifLoginSuccess == 1) {
                $_SESSION["loginSuccess"] = $loginSuccess;
            }

            if (!empty($loginSuccess) && $ifLoginSuccess == 1) {
                echo $loginSuccess['memberFirstName'];
                ?><br>
                <a href="loanBook.php">Loan a book</a>
                
                <br> 
                <a href="logout.php">log out</a>
                   
                //<?php
            }
   
            ?>    

        </body>
</html>

