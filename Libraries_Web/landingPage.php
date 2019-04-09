<?php
session_save_path(__DIR__ . "/sessionInfo");
session_start();

require 'Classes/DBCon.php';
require 'Classes/searchItem.php';
require 'Classes/memberLogin.php';
?>
<html>
    <title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link href="style_library.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../_js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="people.js" type="text/javascript"></script>
    <body id="myPage">

        <!-- Sidebar on click -->
        <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
                <i class="fa fa-remove"></i>
            </a>
            <a href="Search.php" class="w3-bar-item w3-button">Search for a book</a>
            <a href="myDetails.php" class="w3-bar-item w3-button">My Details</a>
            <a href="Info.php" class="w3-bar-item w3-button">Info</a>
            <!--<a href="#" class="w3-bar-item w3-button">Link 4</a>-->
            <!--<a href="#" class="w3-bar-item w3-button">Link 5</a>-->
        </nav>

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-theme-d2 w3-left-align">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Sky Library</a>
                <a href="Search.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search the library</a>
                <a href="myDetails.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">My details</a>
                <a href="Info.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Info</a>
                <!--<a href="#Team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>-->
                <!--    <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>     
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                      <a href="#" class="w3-bar-item w3-button">Link</a>
                      <a href="#" class="w3-bar-item w3-button">Link</a>
                      <a href="#" class="w3-bar-item w3-button">Link</a>
                    </div>-->
            </div>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="Search.php" class="w3-bar-item w3-button">Search the library</a>
            <a href="myDetails.php" class="w3-bar-item w3-button">My details</a>
            <a href="Info.php" class="w3-bar-item w3-button">Info</a>
            <!--<a href="#contact" class="w3-bar-item w3-button">Team</a>-->
            <!--<a href="#" class="w3-bar-item w3-button">Search</a>-->
        </div>

        <div class="w3-container w3-padding-16 w3-center" id="team">
            <h2>Library login page</h2>
        </div>
        <div class="w3-row"><br>
            <div class="w3-half">
                <div class="w3-white">
                    <img src="Images/books.jpg" alt="books" style="width:100%">
                </div>
            </div>
            <div class="main">
                Member ID
                <center>
                    <form action="" method="post" >
                        <input type="text" placeholder="Enter Member ID" name="username"><br>
                        Password
                        <input type="password" placeholder="Enter Password" name="password"><br>
                        <button type="submit">Login</button>
                    </form>

                    <a href="Search.php">Search as guest</a>
                </center>

            </div>
        </div>



        <?php
        if(!empty(filter_input(INPUT_POST, 'username'))){
        $DBN = new memberLogin;
        $loginSuccess = $DBN->memberLogin();}



        if (!empty(filter_input(INPUT_POST, 'username'))) {
            try {
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
            <a href="loanABook.php">Loan a book</a>

            <br> 
            <a href="logout.php">log out</a>

            //<?php
        }
        ?>    



        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
            <h4>Follow Us</h4>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
            <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>


            <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
                <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
                <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
                        <i class="fa fa-chevron-circle-up"></i></span></a>
            </div>
        </footer>


        <script>
            // Script for side navigation
            function w3_open() {
                var x = document.getElementById("mySidebar");
                x.style.width = "300px";
                x.style.paddingTop = "10%";
                x.style.display = "block";
            }

            // Close side navigation
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }

            // Used to toggle the menu on smaller screens when clicking on the menu button
            function openNav() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>