<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="LibraryStyle.css" rel="stylesheet" type="text/css"/>
        <script src="../_js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="people.js" type="text/javascript"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="landingPage.php">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Search.php">Search library<span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="UpdateDetails.php">Update Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Info.php">Information</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
<!--            <div class="banner">
                <div class='container'>
                    <div class ='row'>
                        <div class="container-fluid">
                            <img src="Images/CarnegieLibraryTwitter.jpg" class="img-fluid" class="img-responsive" alt="outisde view library"/>
                        </div>  
                    </div>
                </div>
            </div>
            -->
            <form>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <input type="string" name='firstName' class ='form-control' id='inputFirstName' placeholder='First Name';>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="string" name='lastName' class ='form-control' id='inputLastName' placeholder='Surname';>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" name='DOB' class ='form-control' id='DOB' placeholder='Date of Birth';>
                    </div> 
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <input type="string" name="addressLine1" class="form-control" id="inputAddLine1" placeholder="Address">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="string" name="addressLine2" class="form-control" id="inputAddLine2" placeholder="Address">
                    </div>
                </div>


                <div class="form-row">

                    <div class="form-group col-md-4">
                        <input type="string" name="postCode" class="form-control" id="postCode" placeholder="Post Code">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="email" name="email" class="form-control" id="postCode" placeholder="email">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="tele" name="tele" class="form-control" id="postCode" placeholder="tele">
                    </div>
                </div>
                </div>

            </form>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

