
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
        <div>





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
        ?>
        </div>
    </body>
</html>

</body>
</html>
