<!DOCTYPE html>
<html>
    <title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            </div>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="Search.php" class="w3-bar-item w3-button">Search the library</a>
            <a href="myDetails.php" class="w3-bar-item w3-button">My details</a>
            <a href="Info.php" class="w3-bar-item w3-button">Info</a>
        </div>
    </div>

    <!-- Image Header -->
    <div class="w3-display-container w3-animate-opacity">
        <img src="Images/inside_lib.jpg" alt="Library interior" style="width:100%;min-height:150px;max-height:300px;">
        <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
            <button onclick="document.getElementById('id01').style.display = 'block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go to Library Info">Learn More</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-teal w3-display-container"> 
                <span onclick="document.getElementById('idinsideLib').style.display = 'none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
                <h4>Welcome to our library</h4>
                <h5>We have a catalog of Books and DVDs.</h5>
            </header>
            <div class="w3-container">
                <p>We can be found at Sky business park</p>
                <p>Explore the collection<a class="w3-text-teal" href="Search.php"></a> </p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Enjoy!</p>
            </footer>
        </div>
    </div>

    <!-- Log In -->
    <div class="w3-container w3-padding-64 w3-center" id="login">
        <h2>Login</h2>
        <div class="w3-row"><br>
            <form action="" method="post" >
                <div class="form-row">
                    <div class="form-group col-md-2">
                    </div>
                    <div class="form-group col-md-4">

                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">

                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-2">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
        <h4>Follow Us</h4>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
        <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

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

</body>
</html>
