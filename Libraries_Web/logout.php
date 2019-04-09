        <?php
 session_save_path(__DIR__ . "/sample_files");
session_start();

function logout(){
//  set if time
//        unset($_SESSION['email']);
//        unset($_SESSION["car"]);
//     unset($_SESSION["password"]);
//     unset($_SESSION["region"]);
     session_destroy();
    
        if (empty($_SESSION)){
           header("Location: landingPage2.php");
        exit();
        }
       
}

logout();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <H1> Bye for Now</H1>
     
    </body>
</html>
