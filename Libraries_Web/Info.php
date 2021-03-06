<!DOCTYPE html>


<html>
    <title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link href="style_library.css" rel="stylesheet" type="text/css"/>
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
    </div>

    <!-- Image Header -->
    <div class="w3-display-container">
        <img src="Images/outside_lib.jpg" alt="Library exterior" style="width:100%;min-height:150px;max-height:300px;">
    </div>
    <!-- Team Container -->
    <div class="w3-container w3-padding-64 w3-center" id="team">
        <h2>OUR TEAM</h2>
        <p>Meet the team - our librarians:</p>

        <div class="w3-row"><br>

            <div class="w3-quarter">    <img src="Images/Kylie.jpeg" alt="Kylie" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Kylie</h3>
                <p></p>
            </div>

            <div class="w3-quarter">
                <img src="Images/Kim.jpeg" alt="Kim" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Kim</h3>
                <p></p>
            </div>

            <div class="w3-quarter">
                <img src="Images/Gaby.jpeg" alt="Gaby" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Gaby</h3>
                <p></p>
            </div>

            <div class="w3-quarter">
                <img src="Images/Sheila.jpg" alt="Sheila" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Sheila</h3>
                <p></p>
            </div>

        </div>
    </div>



    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
        <div class="w3-row">
            <div class="w3-col m5">
                <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
                <h3>Address</h3>
                <p>Visit the library <br> Or fill out the form to make an enquiry</p>
                <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> The library, Sky campus, Osterley, UK</p>
                <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +44 207 463 9887</p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> library@sky.com</p>
            </div>
            <div class="w3-col m7">
                <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                    <div class="w3-section">      
                        <label>Name</label>
                        <input class="w3-input" type="text" name="Name" required>
                    </div>
                    <div class="w3-section">      
                        <label>Email</label>
                        <input class="w3-input" type="text" name="Email" required>
                    </div>
                    <div class="w3-section">      
                        <label>Message</label>
                        <input class="w3-input" type="text" name="Message" required>
                    </div>  
                    <input class="w3-check" type="checkbox" checked name="Like">
                    <label>I Like it!</label>
                    <button type="submit" class="w3-button w3-right w3-theme">Send</button>
                </form>
            </div>
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
